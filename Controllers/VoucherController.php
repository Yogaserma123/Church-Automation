<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\voucher;
class VoucherController extends Controller
{
     public function voucherindex2(){
     return view('error_505');
    }
    public function voucherinsert(Request $request){
    $request->validate([
    'voucher_date' => 'required',
    'paid_to' => 'required',
    'description' => 'required', 
    'amount_type' => 'required',
    'amount' => 'required',
    'vno'=> 'required'
    ]);
    $obj  = new voucher;
    $obj->voucher_date = $request->voucher_date;
    $obj->paid_to = $request->paid_to; 
    $obj->description = $request->description;
    $obj->amount_type = $request->amount_type; 
    $obj->amount = $request->amount;
    $obj->vno = $request->vno; 
    $obj->save();
    return redirect('voucherindex2');
    }
    public function voucherindex3(){
    $san = voucher::all();
    return view('login', compact('san'));
}
public function voucherindex5 ($id){
$sri =voucher::find($id)->delete();
 return redirect('voucherindex2');
}
  public function vouchershow($id)
{
    $voucher = voucher::findOrFail($id);
    return view('voucher_print', compact('voucher'));
}
}
