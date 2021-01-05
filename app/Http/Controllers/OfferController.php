<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Lang;
use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allOffer=Offer::where('deleted',0)->get();
        return view('frontend.offers.index',compact('allOffer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frontend.offers.create')->with('langs',Lang::where('status',1)->where('deleted',0)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $req)
    {
        //
        try
        {
           $req_all = $req->except('image'); 
          $path=  $req->image->store('offers');
          $req_all['image'] = $path;
          Offer::create($req_all);
          return redirect()->route('offers.index')->with(['success' => 'تم اضافة العرض بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return $ex;
            return redirect()->route('offers.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer=Offer::find($id);
        if (!$offer)
            return redirect()->route('offers.index')->with(['error' => 'هذا العرض غير موجود ']);

        return view('frontend.offers.edit',compact('offer'))->with('langs',Lang::where('status',1)->where('deleted',0)->get());;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(OfferRequest $req, $id)
    {
        //
        try
        {
            $offer=Offer::find($id);

            if (!$offer)
                return redirect()->route('offers.index')->with(['error' => 'هذا العرض غير موجود ']);

            $req_all = $req->except(['image','offerId']);
            if($req->image != null)
            {
                $path=  $req->image->store('offers');
                $req_all['image'] = $path;
            }
         
            $offer->update($req_all);
            return redirect()->route('offers.index')->with(['success' => ' تم تعديل  العرض بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('offers.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try
        {
            $offer=Offer::find($id);
            if (!$offer)
                return redirect()->route('offers.index')->with(['error' => 'هذا العرض غير موجود ']);

            $offer->update(['deleted'=>'1']);
            return redirect()->route('offers.index')->with(['success' => 'تم حذف العرض بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('offers.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changStatus($id)
    {
        try
        {
            $offer = Offer::find($id);
            if (!$offer)
                return redirect()->route('offers.index')->with(['error' => 'هذا العرض غير موجود ']);

            $status =  $offer->status  == 0 ? 1 : 0;

            $offer->update(['status' =>$status ]);

            return redirect()->route('offers.index')->with(['success' => ' تم تغيير الحالة بنجاح ']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route('offers.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
