<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hire;
use App\Webservice;
use App\Message;

class Myweb extends Controller
{
    //
    function loadpage(Request $req){
    	return view('wedfri');
    }
    function hire(Request $req){
        $hire=new Hire;
        $hire->companyname= $req->name;
        $hire->email=$req->email;
        $hire->phonenumber=$req->number;
        $hire->address=$req->address;
        $hire->Details=$req->detail;
        $hire->save();
        return view ('wedfri');
        

    }
    function needweb(Request $req){
        $web=new Webservice;
        $web->name=$req->name;
        $web->email=$req->email;
        $web->number=$req->number;
        $web->typeservice=$req->website;
        $web->budget=$req->budget;
        $web->save();
        return view('wedfri');

    }
    function message(Request $req){
    
        $msg=new Message;
        $msg->name=$req->name;
        $msg->email=$req->email;
        $msg->number=$req->number;
        $msg->subject=$req->subject;
        $msg->detail=$req->detail;
        $msg->save();
        return view('wedfri');
    }

    function personal(){
        $getback= Message::all();
        $getback1= Hire::all();
        $getback2= Webservice::all();
        return view('reachout1',['getback'=>$getback,'getback1'=>$getback1,'getback2'=>$getback2])
        ;
    }

    function contactToMail(){
        
    }
    

    
}
