<?php namespace Jamil\User\Http\Controllers;
use App\Http\Controllers\Controller;

use Jamil\User\Entities\Eloquent\User;
use Session;
/**
* 
*/
class LoginController extends Controller
{
	
	public function form(){

		return view("User::login.form-login");
	}

	public function proses(){
		if ($user=User::where("username",$_POST['username'])->where("password",$_POST['password'])->get())
		{
			if ($user->count()==0) {
				\Session::flash('pesan',"username dan password salah");
				return redirect(url('form-login'));
			}
			else{
				\Auth::login($user->first());
				return redirect(url('/kelolah'));
			}
		}
	}

	public function keluar(){
		\Auth::logout();
		return redirect(url('form-login'));
		

		
	}
}
	

?>