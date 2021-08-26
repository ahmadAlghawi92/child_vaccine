@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title" >Edit Child info</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body"  >
                        <form action="/save_child_info" method="get" >
                            <div class="form-group row">
                                <input type="hidden" name="childId" value="{{$childData->id}}">

                                <label for="name" class="col-md-4 col-form-label text-md-right"  ><i class="fas fa-user"></i> Parent Name </label>
                                <div class="col-md-6">

                                <p style="text-align: center ;   font-weight: lighter;"> {{$user_name->name}}</p>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="n_id" class="col-md-4 col-form-label text-md-right"  ><i class="fas fa-id-card"></i> National  ID</label>

                                <div class="col-md-6">
                                    <input type="text" name ="n_id" value="{{$childData->n_id}}" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="name" class="col-md-4 col-form-label text-md-right"  > <i class="fas fa-baby"></i>Children Name</label>

                                <div class="col-md-6">
                                    <input type="text" name ="name" value="{{$childData->name}}" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="name" class="col-md-4 col-form-label text-md-right"  > <i class="fas fa-female"></i><i class="fas fa-male"></i>  Gender</label>

                                <div class="col-md-6">
                                    <select name="gender" class="form-control"  >
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="name" class="col-md-4 col-form-label text-md-right"  > <i class="fas fa-calendar-check "></i> Date Of Birth</label>

                                <div class="col-md-6">
                                    <input name = "date_of_birth" type = "date" value="{{$childData->date_of_birth}}" class="form-control" required>

                                </div>
                            </div>
                            @if(\Auth::user()->type == "1")

                            <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right"  > <i class="fas fa-calendar-check "></i>  Visit Number</label>

                            <div class="col-md-6">
                                <select name = "visit_id" class="form-control" >
                                    @foreach($visits as $visit)
                                        @if($visit->id == $childData->visit_id)
                                            <option value="{{$visit->id}}" selected = "true"> {{$visit->visit_name}}</option>
                                        @else
                                            <option value="{{$visit->id}}"> {{$visit->visit_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="form-group row">

                                <label for="name" class="col-md-4 col-form-label text-md-right"  > <i class="fas fa-calendar-check "></i>  Visit Date</label>

                                <div class="col-md-6">
                                    <input name = "visit_date" type = "date" value="{{$childData->visit_date}}" class="form-control" required>

                                </div>
                            </div>
                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" value="Edit" class="btn btn-primary">
                                </div>
                            </div>

                         </form>
                        <!-- /.card-body -->
                    </div>

                </div>

            </div>
        </div>
        </div>
@endsection
