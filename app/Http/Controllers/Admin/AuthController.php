<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\Resetpassword;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    private function apiResponse($status,$message,$data=null){

        return $response=[
            'status'=> $status,
            'message'=> $message,
            'data'=> $data,
        ];

    }
    public function register(Request $request){
        $validator =validator()->make($request->all(),[
            'name'=> 'required',
            'email'=> 'required|unique:users',
            'password'=> 'required|confirmed',

        ]);
        if($validator->fails()){
            return $this->apiResponse(0, $validator->errors()->first(), $validator->errors());
        }

        $request->merge(['password'=>bcrypt($request->password)]);
        $user = User::create($request->all());
        $user->api_token = Str::random(40);
        $user->save();
    
        return $this->apiResponse(1, 'تم الاضافه بنجاح', [
            'api_token'=> $user->api_token,
            'user'=> $user

        ]);
    }
    public function login(Request $request){
        $validator =validator()->make($request->all(),[
            'email'=> 'required',
            'password'=> 'required',
        ]);
        if($validator->fails()){
            return $this->apiResponse(0, $validator->errors()->first(), $validator->errors());
        }
        $user=User::where('email',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                return $this->apiResponse(1, 'تم تسجيل الدخول', [
                    'api_token'=> $user->api_token,
                    'user'=> $user

                ]);

            }else{
                return $this->apiResponse(0,'بيانات الدخول غير صحيحه');
            }


        }else{
            return $this->apiResponse(0,'بيانات الدخول غير صحيحه');
        }
     
    }


     public function Resetpassword(Request $request){
        $validation =validator()->make($request->all(),[
           'email'=>'required'
        ]);
        if($validation->fails()){
            $data =$validation->errors();
            return $this->apiResponse(0, $validation->errors()->first() ,$data);
        }
        $user= User::where('email', $request->email)->first();
        if($user){
            $code=rand(1111,9999);
            $update=$user->update(['pin_code'=>$code]);
            if($update){

                Mail::to($user->email)
                ->bcc("hasonamohamed033@gmail.com")
                ->send(new ResetPassword($user));

                return $this->apiResponse(1, 'برجاء فحص هاتفك' ,['user'=>$user]);
            }else{
                return $this->apiResponse(0, 'حدث خطا حاول مره اخري');
            }
        }else{
            return $this->apiResponse(0, 'لا يوجد اي حساب مرتبط بهذا الايميل');
        }
     }
      public function forgetpassword(Request $request){
        $validation =validator()->make($request->all(),[
            'pin_code'=>'required',
            'password'=>'confirmed|required'
         ]);
         if($validation->fails()){
            $data =$validation->errors();
            return $this->apiResponse(0, $validation->errors()->first() ,$data);
        }
        $user =User::where('pin_code', $request->pin_code)->where('pin_code','!=',0)->first();
        if($user){
            $user->password =bcrypt($request->password);
            $user->pin_code=null;

            if($user->save()){
                return $this->apiResponse(1 , 'نم تغيير كلمه المرور بنجاح');

            }else{
                return $this->apiResponse(0 , 'حدث خطا حاول مره اخري');

            }
        }else{
                return $this->apiResponse(0 , 'هذا الكؤد غير صالح');
            }

        }

     

        public function logout(Request $request){
            auth()->guard('api')->user()->tokens()->delete();
            return $this->apiResponse(1, 'logged out successfully');
        }
    }