<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Models\Settings;
use Request;
use Auth;
use Redirect;

class AdminController extends Controller
{
	public function dashboard(){
		return view('dashboard');
   }
   public function payslip(){
		return view('payslip');
   }

}
