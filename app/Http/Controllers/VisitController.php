<?php

namespace App\Http\Controllers;

use App\visit;
use Illuminate\Http\Request;
use http\Env\Response;
use App\vaccine;
use App\vaccines_visit;

class VisitController extends Controller
{
    public function addVisit(Request $request) {
        $newVisit = visit::create([
            'id' => $request->id,
            'visit_name' => $request->visit_name,
            'age_of_child'=> $request->age_of_child
        ]);
        $newVisit->vaccines()->attach($request->vaccine) ;

        return \response()->redirectTo('/add_visit_view') ;

    }
    public function addVisitView() {
        $allVaccine = vaccine::all();
        $allVisit = visit::all();
        return view('Visit' , compact('allVisit' , 'allVaccine'));

    }
    public function editVisitForm (request $request) {
        $visit = visit::find($request->visit_id);
        vaccines_visit::where('visit_id',$request->visit_id)->delete();
        $allVaccine = vaccine::all();
        return view('edit_visit_info' , compact(  'visit' ,'allVaccine'));
    }
    public function saveVisitInfo (request $request) {
        $visits = visit::find($request->visit_id);
         $visits->visit_name =   $request->visit_name;
        $visits->age_of_child =   $request->age_of_child;
        $visits->vaccines()->attach($request->vaccine) ;
        $visits->save();
        return \response()->redirectTo('/add_visit_view');
    }
    public function deleteVisit(request $request) {
        visit::where('id',$request->visit_id)->delete();
        return \response()->redirectTo('/add_visit_view');
    }
    public function visitInfo(){
        return view('beforeTheVisit');

    }
}
