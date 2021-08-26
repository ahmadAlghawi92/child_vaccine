<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Env\Response ;
use App\vaccine;

class VaccineController extends Controller
{
    public function addVaccine(Request $request) {
        vaccine::create([
            'name' => $request->name,
            'description' => $request->description,
            'doses' => $request->doses
            ]);
        return \response()->redirectTo('/add_vaccine_view') ;

    }
    public function addVaccineView() {
        $allVaccine = vaccine::all();
        return view('addVaccine' , compact('allVaccine'));

    }
    public function editVaccineForm (request $request) {
         $allVaccine = vaccine::find($request->vaccine_id);

        return view('edit_vaccine_info' , compact(   'allVaccine'));
    }
    public function saveVaccineInfo (request $request) {
        $vaccine = vaccine::find($request->vaccine_id);
        $vaccine->name =   $request->name;
        $vaccine->description =   $request->description;
        $vaccine->doses =   $request->doses;
         $vaccine->save();
        return \response()->redirectTo('/add_vaccine_view');
    }
    public function deletevaccine(request $request) {
        vaccine::where('id',$request->vaccine_id)->delete();
        return \response()->redirectTo('/add_vaccine_view');
    }
    public function vaccineInfo()
    {
        return view('vaccine/vaccineInfo');
    }
}
