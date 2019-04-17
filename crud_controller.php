<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Auth;
class crud_controller extends Controller
{
    public function index(Request $request)
    {
            if(Session::has('email'))
            {

                $student = DB::table('students')->get();
                return view("index", compact("student"));
            }
           else
            {
                return redirect('login');
            }
    }
    public function create()
    {
        return view("add");
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'password'=>'required',
            'address'=>'required'
            ]);
       $data=[
           'name'=>$request->name,
           'password'=>$request->password,
           'address'=>$request->address,
           'created_at' => date('Y-m-d H:i:s')
       ];
       DB::table('students')->insert($data);
       return redirect("crud");
    }
    public function show($id)
    {
        $student=DB::table('students')->where('id','=',$id)->first();
        return view("show",compact("student"));
    }
    public function edit($id)
    {
        $student=DB::table("students")->where("id","=",$id)->first();
        return view("edit",compact("student"));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'password'=>'required',
            'address'=>'required'
        ]);
        $data=[
            'name'=> $request->name,
            'password'=> $request->password,
            'address'=> $request->address,
            'created_at' => date('Y-m-d H:i:s')
            ];
        DB::table('students')->where('id','=',$id)->update($data);
        return redirect("crud");
    }
    public function destroy($id)
    {
        DB::table('students')->where('id','=',$id)->delete();
        return redirect("crud");
    }
}
