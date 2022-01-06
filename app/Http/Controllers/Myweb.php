<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PortfolioMessage;
use App\Hire;
use App\Webservice;
use App\Message;
use Illuminate\Support\Facades\Storage;

class Myweb extends Controller
{
    
    function loadpage(Request $req){
    	return view('wedfri');
    }
    
    function downloadCv(){
        //$file= public_path()."\storage\Olaniyi_Olamide_CV.pdf";
        $headers = array(
            'Content-Type : application/pdf',
        );
        $newFileName= 'Olaniyi Olamide CV.pdf';
        //return response()->download($file, $newFileName, $headers);
        return Storage::download('Olaniyi_Olamide_CV.pdf', $newFileName, $headers);
    }


    function hire(Request $req){
        $hire=new Hire;
        $hire->companyname= $req->name;
        $hire->email=$req->email;
        $hire->phonenumber=$req->number;
        $hire->address=$req->address;
        $hire->Details=$req->detail;
        $hire->save();
        Mail::to('olaniyilamie@gmail.com')->send(new PortfolioMessage($hire));
        return back()->with('flash','Message received. Thanks, we will getback to you shortly.');
        

    }
    function needweb(Request $req){
        $web=new Webservice;
        $web->name=$req->name;
        $web->email=$req->email;
        $web->number=$req->number;
        $web->typeservice=$req->website;
        $web->budget=$req->budget;
        $web->save();
        Mail::to('olaniyilamie@gmail.com')->send(new PortfolioMessage($web));
        return back()->with('flash','Message received. Thanks, we will getback to you shortly.');

    }
    function message(Request $req){
    
        $msg=new Message;
        $msg->name=$req->name;
        $msg->email=$req->email;
        $msg->number=$req->number;
        $msg->subject=$req->subject;
        $msg->detail=$req->detail;
        $msg->save();
        Mail::to('olaniyilamie@gmail.com')->send(new PortfolioMessage($msg));
        return back()->with('flash','Message received. Thanks, we will getback to you shortly.');
        // \Illuminate\Support\Facades\Mail::to('olaniyilamie@gmail.com')->send(new \App\Mail\PortfolioMessage($data));
        // return view('wedfri')->with('flash','Thank you for contacting me, I will reach back to you shortly');
       
    }

    function personal(){
        $getback= Message::all();
        $getback1= Hire::all();
        $getback2= Webservice::all();
        return view('reachout1',['getback'=>$getback,'getback1'=>$getback1,'getback2'=>$getback2])
        ;
    }

    
    

    
}
