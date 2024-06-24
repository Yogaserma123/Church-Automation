<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receipt;
use App\voucher;
use App\event;
use App\family;
use App\attend;
class ChurchController extends Controller
{
    public function familymembers(){
        return view('buttons');
    }
    public function editmembers(){
        $san = family::all();
    return view('dropdowns', compact('san'));
    }
    public function reportmembers(){
        return view('typography');
    }
    public function dashboardmembers(){
        return view('index');
    }
     
    public function blankpage(){
        return view('blank_page');
    }
    public function fourpage (){
        $san = receipt::all();
    return view('error_404', compact('san'));
    }
    public function fivepage(){
        return view('error_505');
    }
    public function loginpage(){
      $san = voucher::all();
    return view('login', compact('san'));
    }
    public function registerpage(){
        $san = receipt::all();
        $gan = voucher::all();
    return view('register', compact('san','gan'));
    }
     public function attendpage(){
        $san = family::all();
    return view('attend', compact('san'));
    }
     public function attenddatapage(){
        return view('attend_data');
    }
    public function event_entrypage(){
        return view('event_entry');
    }
    public function event_listpage(){
        $san = event::all();
    return view('event_list', compact('san'));
    }
    public function event_reportpage(){
        return view('event_report');
    }
}
