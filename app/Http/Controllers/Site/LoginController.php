<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use Auth;
use Input;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        if(Auth::check()){
			return redirect('/member');
		}
		else
		{
			return view('site.login');
		}
    }
	
	public function postProcess(Request $request)
	{

		$email = $request->input('email');
		$password = $request->input('password');
		
		if(Auth::attempt(['email' => $email,'password'=>$password],$request->has('remember'))){
		   return redirect()->intended('/member');
		}
		else
		{
			$alert = ['class'=>'danger','title'=>'ผิดพลาด','msg'=>'Error!! Email or Password Incorrect. \nPlease try again.'];
			return redirect()->back()->with('message',$alert);
		}
	}
	
	public function getLogout()
	{
		Auth::logout();
		return redirect('/');
	}
	
	
	

	
}
