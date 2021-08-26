<?php
namespace App\Http\Controllers;
use App\check_up;
use Illuminate\Http\Request;
use http\Env\Response;
use App\child;
use App\visit;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

  class childController extends Controller
 {
     function addChild(request $request)
     {
        child::create([
             'name' => $request->name
             , 'gender' => $request->gender
             , 'date_of_birth' => $request->date_of_birth
            , 'n_id' => $request->n_id
             , 'visit_id' => '1'
             , 'user_id' =>  $request->user_id

         ]);
         if(\Auth::user()->type == "2")
             return \response()->redirectTo('/add_child_view');
         else
             return \response()->redirectTo('/search');

     }

     public function addChildView(request $request)
     {

         if(\Auth::user()->type == "1")
         $allChild= User::find($request->user_id);
else
    $allChild= User::find(Auth::id());

         return view('child', compact('allChild' ));
     }

      function search_child (request $request) {
         $visits =visit::all();

          $q = Input::get ( 'q' );
          $child = \DB::table('children')->join('users', 'children.user_id','=', 'users.id')->leftJoin('visits', 'visits.id','=', 'children.visit_id')->where( 'users.name', 'LIKE', '%' . $q . '%' )->orWhere ( 'children.name', 'LIKE',  $q . '%' )->orWhere ( 'children.n_id', 'LIKE',  $q . '%' )->orWhere ( 'children.gender', 'LIKE',  $q . '%' )->select('children.name' , 'children.id', 'children.n_id' , 'children.gender' , 'children.date_of_birth', 'children.visit_date' ,'visits.visit_name', 'users.name as parent_name')->get();

           if (count ( $child ) > 0)
              return view ( 'search_by_child_name_v2'  )->withDetails ( $child  )->withQuery ( $q );
          else
              return view ( 'search_by_child_name_v2' )->withMessage ( 'No Details found. Try to search again !' );

      }
      function search_parents (request $request) {

          $q = Input::get ( 'q' );
          $parentData = User::where('name', 'LIKE', '%' . $q . '%' )->orWhere ( 'n_id', 'LIKE',  $q . '%' )->orWhere ( 'phone_num', 'LIKE',  $q . '%' )->get();
          $parentData1 = $parentData->where('type','=', 2);
          if (count ( $parentData1 ) > 0)
              return view ( 'parents'  )->withDetails ( $parentData1  )->withQuery ( $q );
          else
              return view ( 'parents' )->withMessage ( 'No Details found. Try to search again !' );

      }
      public function viewChild (request $request) {
          $visits = visit::all();
         $childData = child::find($request->child_id);

          return view('child_info' , compact('childData' , 'visits'));
      }
      public function editChildForm (request $request) {
         $visits = visit::all();
          $childData = child::find($request->child_id);
          $user_name=User::find($childData->user_id);

          return view('edit_child_info' , compact('childData' , 'visits','user_name'));
      }
      public function saveChildInfo (request $request) {
         $child = child::find($request->childId);
          $child->n_id =   $request->n_id;
          $child->name   =   $request->name;
         $child->gender =   $request->gender;
         $child->date_of_birth =   $request->date_of_birth;
         $child->visit_id =   $request->visit_id;
         $child->visit_date =   $request->visit_date;

          $child->save();
          if(\Auth::user()->type == "2")
              return \response()->redirectTo('/my_child');
          else
              return \response()->redirectTo('/search');

      }
      public function deleteChildInfo (request $request)
      {
           $res=child::where('id',$request->child_id)->delete();
          return \response()->redirectTo('/search');
      }
          public function my_children (request $request) {
          $visits = visit::find($request->visit_id);
          $childData = \DB::table('children')->where('user_id', \Auth::id())->leftJoin('visits', 'visits.id','=', 'children.visit_id')->select('children.name' , 'children.id as child_id', 'children.n_id' , 'children.gender' , 'children.date_of_birth', 'children.visit_date' ,'visits.visit_name')->get() ;
          return  view('my_children' , compact(   'childData' , 'visits'));
      }
      public function add_check_up(request $request){
          check_up::create([
              'height' => $request->height
              , 'weight' => $request->weight
              , 'blood_test' => $request->blood_test
              , 'IHC' => $request->IHC
              , 'blood_test_date' => $request->blood_test_date
              , 'check_up_date' => $request->check_up_date
              , 'child_id' => $request-> childId
          ]);
          return \response()->redirectTo('/search');

      }
      public function add_check_up_view(request $request)
      {
          $all_check_up = child::find($request->child_id);
           return view('check_up', compact('all_check_up'));
      }
      public function all_check_up(request $request)
      {

          $all_check_up = child::find($request->child_id);

          return view('all_check_up', compact('all_check_up' ));
      }
      public function edit_check_up(request $request)
      {

          $all_check_up = check_up::find($request->id);
          $all_check_up->height = $request->height;
          $all_check_up->weight = $request->weight;
          $all_check_up->blood_test =   $request->blood_test;
          $all_check_up->IHC =   $request->IHC;
          $all_check_up->blood_test_date =   $request->blood_test_date;
          $all_check_up->check_up_date = $request->check_up_date;
          $all_check_up->save();
          return \response()->redirectTo('/search');
      }
      public function edit_check_up_form(request $request){
          $all_check_up = check_up::find($request->id);

          return view('edit_check_up', compact('all_check_up' ));

      }
      public function delete_check_up_form (request $request)
      {
          $res = check_up::find($request->id)->delete();
          return \response()->redirectTo('/search');
      }

 }
