<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function execute()
    {
    	return view('usertable.header').view('usertable.index').view('usertable.footer');	
    }

       function home()
    {
    	return view('usertable.header').view('usertable.home').view('usertable.footer');	
    }

       function services()
    {
    	return view('usertable.header').view('usertable.services').view('usertable.footer');	
    }

       function contact_us()
    {
    	return view('usertable.header').view('usertable.contact_us').view('usertable.footer');	
    }

   //  function sidebar(){
   //     return view('page').view('page2');
   //  }
}
