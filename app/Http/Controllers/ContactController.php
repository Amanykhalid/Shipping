<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
    $this->middleware('permission: التواصل', ['only' => ['index']]);
    $this->middleware('permission:اضافة اتصال', ['only' => ['create','store']]);
    $this->middleware('permission:تعديل اتصال', ['only' => ['edit','update']]);
    $this->middleware('permission:حذف اتصال', ['only' => ['destroy']]);
    $this->middleware('permission:تغير حالة اتصال', ['only' => ['status']]);

    }

    public function index()
    {
        //
        $contacts=Contact::where('deleted',0)->get();
        return view('frontend.contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frontend.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $req)
    {
        //
        try
        {
          Contact::create($req->all());
          return redirect()->route('contact.index')->with(['success' => 'تم اضافة التواصل بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return $ex;
            return redirect()->route('contact.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contact::find($id);
        if (!$contact)
            return redirect()->route('contact.index')->with(['error' => 'هذه القائمة غير موجود ']);

        return view('frontend.contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $req, $id)
    {
        //
        try
        {
            $contact=Contact::find($id);

            if (!$contact)
                return redirect()->route('contact.index')->with(['error' => 'هذا الاتصال غير موجود ']);

            $contact->update($req->all());
            return redirect()->route('contact.index')->with(['success' => ' تم تعديل  الاتصال بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('contact.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $contact=Contact::find($id);
            $contact->update(['deleted'=>'1']);
            return redirect()->route('contact.index')->with(['success' => 'تم حذف الاتصال بنجاح ']);
        }
        catch(\Exception $ex)
        {
           return redirect()->route('contact.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        } 
    }

    // change menu Status
    public function changStatus($id)
    {
        try
        {
            $contact = Contact::find($id);
            if (!$contact)
                return redirect()->route('contact.index')->with(['error' => 'هذا الاتصال غير موجود ']);

            $status =  $contact->status  == 0 ? 1 : 0;

            $contact->update(['status' =>$status ]);

            return redirect()->route('contact.index')->with(['success' => ' تم تغيير الحالة بنجاح ']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route('contact.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
