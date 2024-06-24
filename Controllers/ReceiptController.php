<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receipt;
class ReceiptController extends Controller
{
     public function index2(){
     return view('blank_page');
    }
    public function insert(Request $request){
    $request->validate([
    'receipt_date' => 'required',
    'offering' => 'required',
    'offering_with' => 'required',
    'description' => 'required', 
    'amount_type' => 'required',
    'amount' => 'required',
    'rno'=> 'required'
    ]);
    $obj  = new receipt;
    $obj->receipt_date = $request->receipt_date;
    $obj->offering = $request->offering; 
    $obj->offering_with = $request->offering_with;
    $obj->description = $request->description;
    $obj->amount_type = $request->amount_type; 
    $obj->amount = $request->amount;
    $obj->rno = $request->rno; 
    $obj->save();
    return redirect('index2');
    }
    public function index3(){
    $san = receipt::all();
    return view('error_404', compact('san'));
}
public function index5 ($id){
$sri =receipt::find($id)->delete();
 return redirect('index2');
}
        public function show($id)
    {
        $receipt = receipt::findOrFail($id);
        return view('receipt_print', compact('receipt'));
    }
   
}