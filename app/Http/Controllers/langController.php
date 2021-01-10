<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LangRequest;

use App\Lang;


class langController extends Controller
{
    function __construct()
    {
    $this->middleware('permission:قائمة اللغات', ['only' => ['index']]);
    $this->middleware('permission:اضافة لغة', ['only' => ['create','store']]);
    $this->middleware('permission:تعديل لغة', ['only' => ['edit','update']]);
    $this->middleware('permission:حذف لغة', ['only' => ['destroy']]);
    $this->middleware('permission:تغير حالة لغة', ['only' => ['status']]);

    }
    // ٍShow All Languages Page 
    public function index()
    {
        $allLang=Lang::where('deleted',0)->get();
        return view('frontend.langs.index',compact('allLang'));
    }

    // ٍShow Add Language Page
    public function create()
    {
        return view('frontend.langs.create');
    }

    // Create new Language 
    public function store(LangRequest $req)
    {
        try
        {
            $req_all = $req->except('flag'); 
            $path=  $req->flag->store('Lang');
            $req_all['flag'] = $path;
            Lang::create($req_all);
            return redirect()->route('langs.index')->with(['success' => 'تم اضافة اللغة بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return $ex;
            return redirect()->route('langs.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
 
    }

    // ٍShow ُEdit Language Page
    public function edit($id)
    {
        $lang=Lang::find($id);
        if (!$lang)
            return redirect()->route('langs.index')->with(['error' => 'هذه اللغة غير موجود ']);

        return view('frontend.langs.edit',compact('lang'));
    }

    // Update Language
    public function update(LangRequest $req,$id)
    {
        try
        {
            $lang=Lang::find($id);

            if (!$lang)
                return redirect()->route('langs.index')->with(['error' => 'هذه اللغة غير موجود ']);

            $req_all = $req->except(['flag','LangId']);

            if($req->image != null)
            {
                $path=  $req->image->store('lang');
                $req_all['flag'] = $path;
            }

            $lang->update($req_all);
            return redirect()->route('langs.index')->with(['success' => 'تم تعديل اللغة بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('langs.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    
        } 
    }

    // delete Language 
    public function destroy($id)
    {
        try
        {
            $Lang=Lang::find($id);

            if (!$Lang)
                return redirect()->route('langs.index')->with(['error' => 'هذه اللغة غير موجود ']);

            $Lang->update(['deleted'=>'1']);
            return redirect()->route('langs.index')->with(['success' => 'تم حذف اللغة بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('langs.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    
        } 
    }

    // change Language Status
    public function changStatus($id)
    {
        try {
            $lang = Lang::find($id);
            if (!$lang)
                return redirect()->route('langs.index')->with(['error' => 'هذه اللغة غير موجود ']);

            $status =  $lang->status  == 0 ? 1 : 0;

            $lang->update(['status' =>$status ]);

            return redirect()->route('langs.index')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('langs.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}
