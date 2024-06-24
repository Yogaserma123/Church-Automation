<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attend;
use App\family;
class AttendController extends Controller
{
    public function attenddisplaypage(){
   $san = family::all();
    return view('attend', compact('san'));
}
public function markAttendance(Request $request)
    {
        $attendance = new attend();
        $attendance->flno = $request->input('flno');
        $attendance->attend_entry = $request->input('attend_entry');
        $attendance->fname = $request->input('fname');
        $attendance->fphone = $request->input('fphone');
        $attendance->save();

        // You can return a response if needed
        return response()->json(['message' => 'Attendance marked successfully']);
    }

    public function markAttendance2(Request $request)
    {
        $attendance = new attend();
        $attendance->flno = $request->input('flno');
        $attendance->attend_entry = $request->input('attend_entry');
        $attendance->fname = $request->input('fname');
        $attendance->fphone = $request->input('fphone');
        $attendance->remark = $request->input('remark');
        $attendance->save();

        // You can return a response if needed
        return response()->json(['message' => 'Attendance marked successfully']);
    }

    public function goto_attend_edit_page(){
        $san = attend::all();
    return view('attend_edit', compact('san'));
    }
    public function attendeditpage($id){
  $san =attend::find($id); 
  return view('attend_update', compact('san')); 
}
public function attendupdatepage(Request $request, $id){
    $gan=attend::find($id);
    $gan->flno=$request->input("flno");
    $gan->fname=$request->input("fname");
    $gan->fphone=$request->input("fphone");
    $gan->attend_entry=$request->input("attend_entry");
    $gan->remark=$request->input("remark");
    $gan->update();
return redirect('goto_attendedit');
}
}
