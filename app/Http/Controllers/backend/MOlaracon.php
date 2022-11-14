<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MOlaracon extends Controller
{
    
        public function backend(){
             return "Hi Dear hier is backend";
        }
        public function frontend1(){
            return "Hi Dear hier is frontend";
       }

       public function mo(){
$name="Mohamad alsheahb";
$age="27 years old";
          return view("backend.mo",compact("name","age"));
     }

}