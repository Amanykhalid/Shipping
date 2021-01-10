<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    function __construct()
    {
        $this->middleware('permission:قائمة المستخدمين', ['only' => ['index','store']]);
        $this->middleware('permission:اضافة مستخدم', ['only' => ['create','store']]);
        $this->middleware('permission:تعديل مستخدم', ['only' => ['edit','update']]);
        $this->middleware('permission:حذف مستخدم', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
    $data = User::orderBy('id','DESC')->paginate(5);
    return view('frontend.users.index',compact('data'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('frontend.users.create',compact('roles'));
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|same:confirm-password',
        'roles_name' => 'required'
        ]);

        $req_all = $request->except('password');
        $password=Hash::make($request->password);
        $req_all['password']=$password;
    
        $user = User::create($req_all);
        $user->assignRole($request->input('roles_name'));
        return redirect()->route('users.index')->with('success','تم اضافة المستخدم بنجاح');
    }
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('frontend.users.edit',compact('user','roles','userRole'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$id,
        'password' => 'same:confirm-password',
        'roles' => 'required'
        ]);
        $input = $request->all();
        if(!empty($input['password'])){
        $input['password'] = Hash::make($input['password']);
        }else{
            $input = $request->except('password');
        }
        $user = User::find($id);
        $user->update($input);
        FacadesDB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
        ->with('success','تم تعديل المستخدم بنجاح  ');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
        ->with('success','تم حذف المستخدم بنجاح  ');
    }

     // change User Status
    public function changStatus($id)
    {
        try
        {
            $user = User::find($id);
            if (!$user)
                return redirect()->route('sliders.index')->with(['error' => 'هذا المستخدم غير موجود ']);

        if($user->status  == 'مفعل') {
            $status='غير مفعل';
        }else{
            $status='مفعل';
        }

            $user->update(['status' =>$status ]);

            return redirect()->route('users.index')->with(['success' => ' تم تغيير الحالة بنجاح ']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route('users.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}