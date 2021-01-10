<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Http\Requests\sliderRequest;
use App\Lang;
class SliderController extends Controller
{
    function __construct()
    {
    $this->middleware('permission: سلايدرات', ['only' => ['index']]);
    $this->middleware('permission:اضافة سلايدر', ['only' => ['create','store']]);
    $this->middleware('permission:تعديل سلايدر', ['only' => ['edit','update']]);
    $this->middleware('permission:حذف سلايدر', ['only' => ['destroy']]);
    $this->middleware('permission:تغير حالة سلايدر', ['only' => ['status']]);

    }
    // ٍShow All Sliders Page 
    public function index()
    {
        $allslider=Slider::where('deleted',0)->get();
        return view('frontend.slider.index',compact('allslider'));
    }

    // ٍShow Add Slider Page 
    public function create()
    {
        return view('frontend.slider.create')->with('langs',Lang::where('status',1)->where('deleted',0)->get());
    }

    // Create new slider 
    public function store(sliderRequest $req)
    {
        try
        {
           $req_all = $req->except('image'); 
          $path=  $req->image->store('slider');
          $req_all['image'] = $path;
          Slider::create($req_all);
          return redirect()->route('sliders.index')->with(['success' => 'تم اضافة slider بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return $ex;
            return redirect()->route('sliders.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    // Delete Slider 
    public function destroy($id)
    {
        try
        {
            $slider=Slider::find($id);
            if (!$slider)
                return redirect()->route('sliders.index')->with(['error' => 'هذا السلايدر غير موجود ']);

            $slider->update(['deleted'=>'1']);
            return redirect()->route('sliders.index')->with(['success' => 'تم حذف السلايدر بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('sliders.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    // ٍShow Edit Slider Page 
    public function edit($id)
    {
        $slider=Slider::find($id);
        if (!$slider)
            return redirect()->route('sliders.index')->with(['error' => 'هذا السلايدر غير موجود ']);

        return view('frontend.slider.edit',compact('slider'))->with('langs',Lang::where('status',1)->where('deleted',0)->get());;
    }
  
    // Update Slider  
    public function update(sliderRequest $req,$id)
    {
        try
        {
            $slider=Slider::find($id);

            if (!$slider)
                return redirect()->route('sliders.index')->with(['error' => 'هذا السلايدر غير موجود ']);

            $req_all = $req->except(['image','sliderId']);
            if($req->image != null)
            {
                $path=  $req->image->store('slider');
                $req_all['image'] = $path;
            }
            $slider->update($req_all);
            return redirect()->route('sliders.index')->with(['success' => ' تم تعديل  السلايدر بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('sliders.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    // change Slider Status
    public function changStatus($id)
    {
        try
        {
            $slider = Slider::find($id);
            if (!$slider)
                return redirect()->route('sliders.index')->with(['error' => 'هذه السلايد غير موجود ']);

            $status =  $slider->status  == 0 ? 1 : 0;

            $slider->update(['status' =>$status ]);

            return redirect()->route('sliders.index')->with(['success' => ' تم تغيير الحالة بنجاح ']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route('sliders.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
