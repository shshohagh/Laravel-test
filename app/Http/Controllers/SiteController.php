<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Controller > View
    function Home(){ 
        $MainMenuData=array("Sohag", "Profile", "Settings");
        $loginStatus=true;
        return view('welcome',['page_name' => 'Home', 'main_menu'=> $MainMenuData, 'login_status'=> $loginStatus]);
    }
    function About(){
        return view('about',['page_name' => 'About']);
     }
    function Contact(){ 
        return view('contact',['page_name' => 'Contact']);
    }
    // Controller > Get Route Perameter
    function MyName($fname, $mname, $lname){ 
        return "First Name: ".$fname."<br>Middle Name: ".$mname."<br>Last Name: ".$lname;
    }
    // Controller > Get Route Perameter > View
    function Service($servicename){ 
        return view('service',['page_name' => $servicename]);
    }
    function Account(){ 
        return view('account',['page_name' => 'Account']);
    }
}
