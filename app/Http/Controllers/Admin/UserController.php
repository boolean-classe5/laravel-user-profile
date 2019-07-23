<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewProfile() {
      $data = [
        'user' => Auth::user()
      ];
      return view('admin.user.profile', $data);
    }
}
