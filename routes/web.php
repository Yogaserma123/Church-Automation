<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('buttons');
});

Route::get('family', 'ChurchController@familymembers')->name('family');
Route::get('edit', 'ChurchController@editmembers')->name('edit');
Route::get('report', 'ChurchController@reportmembers')->name('report');
Route::get('dashboard', 'ChurchController@dashboardmembers')->name('dashboard');
Route::get('black', 'ChurchController@blankpage')->name('blank');
Route::get('404', 'ChurchController@fourpage')->name('404');
Route::get('500', 'ChurchController@fivepage')->name('500');
Route::get('login', 'ChurchController@loginpage')->name('login');
Route::get('register', 'ChurchController@registerpage')->name('register');
Route::get('attendanceentry', 'ChurchController@attendpage')->name('attendanceentry');
Route::get('attendancedelete', 'ChurchController@attenddatapage')->name('attendancedelete');
Route::get('event_entry', 'ChurchController@event_entrypage')->name('event_entry');
Route::get('event_list', 'ChurchController@event_listpage')->name('event_list');
Route::get('event_report', 'ChurchController@event_reportpage')->name('event_report');


route::get('index2','ReceiptController@index3')->name('index2');
route::get('insert_page','ReceiptController@insert')->name('insert_page');
route::get('index4/{id}','ReceiptController@index5')->name('index4');
Route::get('receiptprint/{id}', 'ReceiptController@show')->name('receiptprint');

route::get('voucherindex2','VoucherController@voucherindex3')->name('voucherindex2');
route::get('voucherinsertpage','VoucherController@voucherinsert')->name('voucherinsertpage');
route::get('voucherindex4/{id}','VoucherController@voucherindex5')->name('voucherindex4');
Route::get('voucherprint/{id}', 'VoucherController@vouchershow')->name('voucherprint');

route::get('eventindex2','EventController@eventindex3')->name('eventindex2');
route::get('eventinsertpage','EventController@eventinsert')->name('eventinsertpage');
route::get('eventindex4/{id}','EventController@eventindex5')->name('eventindex4');
route::get('eventupdate/{id}','EventController@eventupdatepage')->name('eventupdate');
route::get('eventedit/{id}','EventController@eventeditpage')->name('eventedit');
Route::get('goto_eventtable', 'EventController@generateReport')->name('goto_eventtable');

route::get('family_insert','FamilyController@familyinsertpage')->name('family_insert');
route::get('goto_dropdown','FamilyController@familydisplaypage')->name('goto_dropdown');
route::get('familydelete/{id}','FamilyController@familydeletepage')->name('familydelete');
route::get('familyedit/{id}','FamilyController@familyeditpage')->name('familyedit');
route::get('familyupdate/{id}','FamilyController@familyupdatepage')->name('familyupdate');
Route::get('goto_familytable', 'FamilyController@familygenerateReport')->name('goto_familytable');


route::get('goto_attend','AttendController@attenddisplaypage')->name('goto_attend');
route::get('attend2','AttendController@markAttendance2')->name('attend2');
route::get('attend','AttendController@markAttendance')->name('attend');
route::get('goto_attendedit','AttendController@goto_attend_edit_page')->name('goto_attendedit');
route::get('attendedit/{id}','AttendController@attendeditpage')->name('attendedit');
route::get('attendupdate/{id}','AttendController@attendupdatepage')->name('attendupdate');