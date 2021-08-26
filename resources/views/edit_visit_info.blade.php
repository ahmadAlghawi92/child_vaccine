@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title" >Edit Visit </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body"  >
                        <form action="/save_visit_info" method="get" >

                            <strong> <i class="fas fa-hourglass-start"></i> Visit Number</strong>

                            <p class="text-muted">
                                <input name="visit_name" class="form-control" value="{{$visit->visit_name}}">
                            </p>
                            <strong><i class="fas fa-baby"></i> Age Of Children</strong>
                            <input type="hidden" name="visit_id" value="{{$visit->id}}">
                            <p class="text-muted">
                                <input name = "age_of_child" class="form-control" value="{{$visit->age_of_child}}">
                            </p>
                            <strong><i class="fas fa-syringe"></i>Vaccines</strong>
<br>
                            <div >
                                <select class="form-control" name="vaccine[]" multiple="multiple"  id="bootstrap-duallistbox-nonselected-list_">

                                @foreach($allVaccine as $vaccine)
                                    <option value="{{$vaccine->id}}"  > {{$vaccine->name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <br>

                            <input type="submit" value="save changes" class="btn btn-primary">
                        </form>
                        <!-- /.card-body -->
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
