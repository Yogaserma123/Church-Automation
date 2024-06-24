<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\family;
use App\attend;
class FamilyController extends Controller
{
    public function familyinsertpage(Request $request){
     $fh2=$request->fh2;
     $fh3=$request->fh3;
     $fno=$request->fno;
     $faa1=$request->faa1;
     $faa2=$request->faa2;
     $faa3=$request->faa3;
     $faa4=$request->faa4;
     $faa5=$request->faa5;
     $faa6=$request->faa6;
     $faa7=$request->faa7;
     $faa8=$request->faa8;
     $faa9=$request->faa9;
     $faa10=$request->faa10;
     $faa11=$request->faa11;
     $faa12=$request->faa12;
     $faa13=$request->faa13;
     $faa14=$request->faa14;
     $faa15=$request->faa15;

     for($i=0; $i<count((array)$faa1); $i++){
        $family_details=array(
            'fno'=> $fno,
            'family_head_name'=> $fh2,
            'family_photo'=> $fh3,
            'slno'=> $faa1[$i],
            'family_member_name'=> $faa2[$i],
            'gender'=> $faa3[$i],
            'relation'=> $faa4[$i],
            'occupation'=> $faa5[$i],
            'dob'=> $faa6[$i],
            'marriage_date'=> $faa7[$i],
            'baptism_date'=> $faa8[$i],
            'mobile'=> $faa9[$i],
            'ad_no'=> $faa10[$i],
            'joining_date'=> $faa11[$i],
            'member_status'=> $faa12[$i],
            'member_saved'=> $faa13[$i],
            'member_photo'=> $faa14[$i],
            'street'=> $faa15[$i]
        );
        $family_details_data[]=$family_details;
     }
     family::insert($family_details_data);
     return response()->json([
        'message'=>"welcome",
     ]);
}
public function familydisplaypage(){
   $san = family::all();
    return view('dropdowns', compact('san'));
}
public function familydeletepage($id){
$sri =family::find($id)->delete();
 return redirect('goto_dropdown');
}
public function familyeditpage($id){
  $gan =family::find($id); 
  return view('family_update', compact('gan')); 
}
public function familyupdatepage(Request $request, $id){
    $gan=family::find($id);
    $gan->fno=$request->input("fno");
    $gan->family_head_name=$request->input("family_head_name");
    $gan->family_photo=$request->input("family_photo");
    $gan->slno=$request->input("slno");
    $gan->family_member_name=$request->input("family_member_name");
    $gan->gender=$request->input("gender");
    $gan->relation=$request->input("relation");
    $gan->occupation=$request->input("occupation");
    $gan->dob=$request->input("dob");
    $gan->marriage_date=$request->input("marriage_date");
    $gan->baptism_date=$request->input("baptism_date");
    $gan->mobile=$request->input("mobile");
    $gan->ad_no=$request->input("ad_no");
    $gan->joining_date=$request->input("joining_date");
    $gan->member_status=$request->input("member_status");
    $gan->member_saved=$request->input("member_saved");
    $gan->member_photo=$request->input("member_photo");
    $gan->street=$request->input("street");
    $gan->update();
return redirect('goto_dropdown');
}
public function familygenerateReport(Request $request)
    {
        $fromDate = $request->input('d1');
        $toDate = $request->input('d2');
        $san = family::whereBetween('joining_date', [$fromDate, $toDate])->get();
        return view('dropdowns', compact('san'));
    }

}