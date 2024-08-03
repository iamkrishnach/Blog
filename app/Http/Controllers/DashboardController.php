<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function admin_dashboard()
  {

    return view('Backend.Dashboard.Home');
  }
}
