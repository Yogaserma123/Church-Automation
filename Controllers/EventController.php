<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
class EventController extends Controller
{
    public function eventindex2(){
     return view('event_list');
    }
    public function eventinsert(Request $request){
    $request->validate([
    'event_date' => 'required',
    'event_time' => 'required',
    'event_no' => 'required', 
    'event_name' => 'required',
    'guest_name' => 'required',
    'event_msg'=> 'required',
    'remark'=> 'required'
    ]);
    $obj  = new event;
    $obj->event_date = $request->event_date;
    $obj->event_time = $request->event_time; 
    $obj->event_no = $request->event_no;
    $obj->event_name = $request->event_name; 
    $obj->guest_name = $request->guest_name;
    $obj->event_msg = $request->event_msg;
    $obj->remark = $request->remark;  
    $obj->save();
    return redirect('eventindex2');
    }
    public function eventindex3(){
    $san = event::all();
    return view('event_list', compact('san'));
}
public function eventindex5 ($id){
$sri =event::find($id)->delete();
 return redirect('eventindex2');
}
public function eventupdatepage($id){
  $gan =event::find($id); 
  return view('event_update', compact('gan')); 
}
public function eventeditpage(Request $request, $id){
    $gan=event::find($id);
    $gan->event_date=$request->input("event_date");
    $gan->event_time=$request->input("event_time");
    $gan->event_no=$request->input("event_no");
    $gan->event_name=$request->input("event_name");
    $gan->guest_name=$request->input("guest_name");
    $gan->event_msg=$request->input("event_msg");
    $gan->remark=$request->input("remark");
    $gan->update();
return redirect('eventindex2');
}

public function generateReport(Request $request)
    {
        $fromDate = $request->input('d1');
        $toDate = $request->input('d2');
        $san = event::whereBetween('event_date', [$fromDate, $toDate])->get();
        return view('event_table', compact('san'));
    }
}
