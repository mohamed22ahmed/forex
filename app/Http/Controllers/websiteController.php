<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\RegisterRequest;
use App\Message;
use App\User;

class websiteController extends Controller
{
    public function index(){
        return view('website_pages.index');
    }

    public function contact(){
        return view('website_pages.contact');
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

    public function get_start(){
        return view('website_pages.get_started');
    }

    public function signup(RegisterRequest $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
        ]);
        return redirect('/');
    }

    public function login(LoginRequest $request){
        if(User::where(['email'=>$request->email,'password'=>$request->password])->count()>0)
            return redirect('/dashboard');
        return redirect()->back();
    }

    public function logout(){
        session()->forget('id');
        session()->forget('log');
        return redirect('/');
    }

}
