@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title" >Vaccine info</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body"  >
                        <form action="/save_vaccine_info" method="get" >

                            <strong>  <i class="fas fa-syringe"></i>Vaccine name</strong>

                            <p class="text-muted">
                                <input name="name" class="form-control" value="{{$allVaccine->name}}">
                            </p>
                            <strong>  <i class="fas fa-syringe"></i>Vaccine name</strong>

                            <p class="text-muted">
                                <input name="doses" class="form-control" value="{{$allVaccine->doses}}">
                            </p>
                            <strong><i class="fas fa-file-medical-alt"></i> Description</strong>
                            <input type="hidden" name="vaccine_id" value="{{$allVaccine->id}}">
                            <p class="text-muted">
                                 <textarea   name="description" placeholder="description" class="form-control" cols="30" rows="5"  >
                         {{$allVaccine->description}}
                           </textarea>
                            </p>

                            <input type="submit" value="save changes"  class="btn btn-primary">
                        </form>
                        <!-- /.card-body -->
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
