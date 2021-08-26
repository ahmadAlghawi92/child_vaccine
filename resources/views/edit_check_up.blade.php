@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Edit Regular testing</h3>
                    </div>

                    <div class ="card-body">
                        <form action="/edit_check_up" method="get" >
                            @csrf


                            <div class="form-group row">
                                <input type="hidden" name="id" value="{{$all_check_up->id}}" >

                                <label for="height" class="col-md-4 col-form-label text-md-right"  >Height</label>

                                <div class="col-md-6">
                                    <input type="text" name="height" value="{{$all_check_up->height}}" class="form-control" required>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="weight" class="col-md-4 col-form-label text-md-right"  >Weight</label>

                                <div class="col-md-6">
                                    <input type="text" name="weight" value="{{$all_check_up->weight}}" class="form-control"   required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="IHC" class="col-md-4 col-form-label text-md-right" >IHC</label>

                                <div class="col-md-6">
                                    <input type="text" name="IHC" value="{{$all_check_up->IHC}}" class="form-control"   required>

                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="IHC" class="col-md-4 col-form-label text-md-right" >Blood test(HP)</label>

                                <div class="col-md-6">
                                    <input type="text" name="blood_test" value="{{$all_check_up->blood_test}} "class="form-control"   required>

                                </div>

                            </div>
                            <div class="form-group row">

                            <label for="blood_test_date"class="col-md-4 col-form-label text-md-right"  >Blood Test Date</label>

                                <div class="col-md-6">
                                    <input type="date"   name="blood_test_date" class="form-control" value="{{$all_check_up->blood_test_date}}" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="check_up_date" class="col-md-4 col-form-label text-md-right"  >Regular testing Date</label>

                                <div class="col-md-6">
                                    <input type="date"   name="check_up_date"  value="{{$all_check_up->check_up_date}}" class="form-control" required>

                                </div>
                            </div>

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

    </div>
@endsection
