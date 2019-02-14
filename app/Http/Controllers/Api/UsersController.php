<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\Api\PassRequest;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Api\UserRequest;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    //注册接口
    public function store(UserRequest $request)
    {
        $user = User::create([
            'phonenum' => $request->phonenum,
            'password' => bcrypt($request->password),
        ]);
        return "{result:注册成功}";


    }

    //密码重置接口
    public function passresets(PassRequest $request)
    {

        $user = DB::table('users')->where('phonenum',$request->phonenum);
        $user->update([
            'password' => bcrypt($request->password)
        ]);
        return "{result:修改成功}";


    }
//验证手机号是否注册
    public function phones(Request $request){

   $user = DB::table('users')->where('phonenum',$request->phonenum)->count();

        return "{result:$user}";
    }
//登录接口
    public  function  logins(Request $request){

        if (Auth::attempt(['phonenum' =>$request->phonenum, 'password' => $request->password])) {

            return "{result:1}";
        }
          return "{result:0}";


    }

    //用户余额获取
    public function userinfos(Request $request){
        $user = DB::table('users')->where('phonenum',$request->phonenum)->first();

        return "{result:$user->assets}";

    }

}