<?php

//---------------------------------------------------------------------
////| Web Routes
////|--------------------------------------------------------------------------
////|
////| Here is where you can register web routes for your application. These
////| routes are loaded by the RouteServiceProvider within a group which
////| contains the "web" middleware group. Now create something great!|
//|-----


//---------------------------------------------------------------------
////| Welcome page
////|--------------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


//---------------------------------------------------------------------
////| Home page after login
////|--------------------------------------------------------------------------
Route::get('/home' ,'HomeController@index');
//---------------------------------------------------------------------
////| Vaccine add / edit / delete / save
////|--------------------------------------------------------------------------
Route::get('/add_vaccine', 'VaccineController@addVaccine')->name('add_vaccine')->middleware('nurse');
Route::get('/add_vaccine_view', 'VaccineController@addVaccineView')->middleware('nurse');
Route::get('/delete_vaccine', 'VaccineController@deletevaccine')->middleware('nurse');
Route::get('/edit_vaccine_info', 'VaccineController@editVaccineForm')->middleware('nurse');
Route::get('/save_vaccine_info', 'VaccineController@saveVaccineInfo')->middleware('nurse');

//---------------------------------------------------------------------
////| Visit add / edit / delete / save
////|--------------------------------------------------------------------------
Route::get('/add_visit' ,'VisitController@addVisit' )->name('add_visit')->middleware('nurse');
Route::get('/add_visit_view', 'VisitController@addVisitView')->middleware('nurse');
Route::get('/edit_visit_info', 'VisitController@editVisitForm')->middleware('nurse');
Route::get('/save_visit_info', 'VisitController@saveVisitInfo')->middleware('nurse');
Route::get('/delete_visit', 'VisitController@deleteVisit')->middleware('nurse');

//---------------------------------------------------------------------
////| child add / edit / delete / save / all child and search
////|--------------------------------------------------------------------------
Route::get ( '/search', 'childController@search_child' )->name('search_child')->middleware('nurse');
Route::get('/edit_child_info', 'childController@editChildForm')->middleware('auth');
Route::get('/save_child_info', 'childController@saveChildInfo')->middleware('auth');
Route::get('/add_child' ,'childController@addChild' )->name('add_child')->middleware('auth');
Route::get('/add_child_view', 'childController@addChildView')->middleware('auth');
Route::get('/view_child_info', 'childController@viewChild')->middleware('parent');
Route::get('/delete_child', 'childController@deleteChildInfo')->middleware('nurse');
//---------------------------------------------------------------------
////| Regular testing add / edit / delete / save / all child and search
////|--------------------------------------------------------------------------
Route::get('/add_check_up' ,'childController@add_check_up' )->name('add_check_up');
Route::get('/add_check_up_view', 'childController@add_check_up_view');
Route::get('/all_check_up','childController@all_check_up')->middleware('auth');
Route::get('/edit_check_up_form', 'childController@edit_check_up_form')->middleware('nurse');
Route::get('/edit_check_up', 'childController@edit_check_up')->middleware('nurse');
Route::get('/delete_check_up', 'childController@delete_check_up_form')->middleware('nurse');
//---------------------------------------------------------------------
////| Parents add  / edit /   save / all child and search
////|--------------------------------------------------------------------------
Route::get('/my_child','childController@my_children')->middleware('parent');
Route::get ( '/searchParent', 'childController@search_parents' )->name('search_parent')->middleware('nurse');


//---------------------------------------------------------------------
////| Information Pages
////|--------------------------------------------------------------------------
Route::get('/beforeTheVisit' , 'VisitController@visitInfo')->middleware('parent');
Route::get('/vaccineInfo' ,'VaccineController@vaccineInfo')->middleware('parent');
//---------------------------------------------------------------------
////| Change password front / back
////|--------------------------------------------------------------------------
Route::get('/change_password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
//---------------------------------------------------------------------
////| Ajax for my child visit sidebar
////|--------------------------------------------------------------------------
Route::get('/test', function() {
    $allChild = \DB::table('children')->where('user_id', \Auth::id())->get() ;
    return response()->json($allChild);






});
