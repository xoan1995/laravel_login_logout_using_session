<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class LogoutController extends Controller
{
   public function logOut(Request $request)
   {
       //Xoa sission login, dua nguoi dung ve trang thai chua dang nhap
       $request->session()->flush();
       return View('welcome');
   }
}
