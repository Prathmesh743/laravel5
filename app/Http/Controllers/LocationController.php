<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;
use App\Info;
class LocationController extends Controller
{
    // 
       public function __construct()
       {
          $this->middleware('cors');
       }
       public function location()
       {
         return Info::all();
       }
}
