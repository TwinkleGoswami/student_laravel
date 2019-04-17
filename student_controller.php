<?php
namespace App\Http\Controllers;
use App\student;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class student_controller extends Controller
{
    public function displaydata()
    {
        $data=student::all();
        return response()->json($data);
    }
    public function fetchrecord($id)
    {
        $data=student::find($id);
        return response()->json($data);
    }
    public  function register_frm()
    {
        return view("register");
    }
    public function login_frm()
    {
        return view("login");
    }
    public function store(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'created_at' => date('Y-m-d H:i:s')
        ];
        DB::table('register')->insert($data);
        return redirect("login");
    }
    public function chk_login(Request $request)
    {
        $this->validate($request,
            [
            'email'=>'required',
            'password'=>'required'
        ]);
        $email=$request->email;
        $password=$request->password;
        $chklogin=DB::table('register')->where(['email'=>$email,'password'=>$password])->get();
        if(count($chklogin))
        {
            $request->session()->put('email', $email);
            $request->session()->save();
            return redirect('crud');
        }
        else
        {
            return redirect("login");
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->to('login/');
    }
}
