<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use Mail;
use Auth;
use Input;
use App\User;
use App\Helpers\Helpers;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MemberController extends Controller
{

    public function getIndex()
    {
		return view('site.member');		
		
    }
	
	public function postSendmail(Request $request)
	{
		
				
		Mail::send('site.mailtemplate', ['email' => $request], function ($m) use ($request) {
			
            		$m->to($request->get('email'), 'yokprogrammer')->subject('I Love Andaman Webmaster Naja');
			
			$m->bcc($request->get('email_bcc'));
			
			$m->cc('chocolate_music@hotmail.com');
			
        });
				
		$alert = ['class'=>'success','title'=>'สำเร็จ','msg'=>'ระบบได้ทำการส่งไปยังอีเมลของคุณ กรุณาตรวจสอบอีเมลด้วยค่ะ.'];
		
		return redirect()->back()->with('message',$alert);
	}
	
}
