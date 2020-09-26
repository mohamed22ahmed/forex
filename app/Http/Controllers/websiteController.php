<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\RegisterRequest;
use App\Message;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function send_message(MessageRequest $request){
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'question'=>$request->question,
        ]);
        return redirect('/');
    }

    public function mood($mood){
        if(session('mood'))
            session()->forget('mood');
        session()->put('mood',$mood);
        return redirect()->back();
    }

    public function lang($lang){
        app()->setLocale($lang);
        session()->put('lang',$lang);
        $ref = $_SERVER["HTTP_REFERER"];
        return redirect($ref);
    }

    public function signup(RegisterRequest $request){
        if($request->regAs=="1")
            $x=new Company;
        else if($request->regAs=='2')
            $x=new Provider;
        $x->name=$request->name;
        $x->email=$request->email;
        $x->password=$request->password;
        $x->phone=$request->phone;
        $x->name=$request->name;
        $x->save();
        return redirect('/');
    }

    public function login(LoginRequest $request){

        $email=$request->email;
        $password=$request->password;

        if($request->logAs=="1"){
            $company=Company::where(['email'=>$email,'password'=>$password,'verified'=>1])->first();
            if($company){
                $request->session()->put('id', $company->id);
                $request->session()->put('log', 'company');
                $request->session()->put('name', $company->name);

                return redirect('/company');
            }
        }else{
            $service=Provider::where(['email'=>$email,'password'=>$password,'verified'=>1])->first();
            if($service){
                $request->session()->put('id', $service->id);
                $request->session()->put('log', 'service');
                $request->session()->put('name', $service->name);

                return redirect('/service');
            }
        }
        return redirect()->back();
    }

}
