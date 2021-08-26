@extends('layouts.admin')

@section('content')
    @if(\Auth::user()->type == "1")

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Regular testing</h3>
                    </div>

                    <div class ="card-body">
                        <form method="GET" action="{{ route('add_check_up') }}"  >
                            @csrf
                            <div class="form-group row">
                                <label for="check_up_date" class="col-md-4 col-form-label text-md-right"  >Regular testing Date</label>

                                <div class="col-md-6">
                                    <input type="date"   name="check_up_date" class="form-control" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="height" class="col-md-4 col-form-label text-md-right"  >Height</label>
                                <input type="hidden" name="childId" value="{{$all_check_up->id}}" >

                                <div class="col-md-6">
                                    <input type="text" name="height" placeholder="height" class="form-control" required>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="weight" class="col-md-4 col-form-label text-md-right"  >Weight</label>

                                <div class="col-md-6">
                                    <input type="text" name="weight" placeholder="Weight" class="form-control"   required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="IHC" class="col-md-4 col-form-label text-md-right" >IHC</label>

                                <div class="col-md-6">
                                    <input type="text" name="IHC" placeholder="Infant Head Circumference" class="form-control"   required>

                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="IHC" class="col-md-4 col-form-label text-md-right" >Blood test(HP)</label>

                                <div class="col-md-6">
                                    <input type="text" name="blood_test" placeholder="HP test" class="form-control"   required>

                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="blood_test_date"class="col-md-4 col-form-label text-md-right"  >Blood Test Date</label>

                                <div class="col-md-6">
                                    <input type="date"   name="blood_test_date" class="form-control" required>

                                </div>
                            </div>

                            <div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" value="Add" class="btn btn-primary">
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
            @endif


    <div class="container-fluid" >
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Regular testing List</h3></div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>
                                    height
                                </th>
                                <th>
                                    weight
                                </th>

                                <th>
                                    blood_test
                                </th>
                                <th>
                                    IHC
                                </th>
                                <th>
                                    blood_test_date
                                </th>
                                <th>
                                    check_up_date
                                </th>
                                <th>
                                    Action
                                </th>


                            </tr>
                            @foreach($all_check_up->check_up as $all)
                                <tr>
                                    <td>{{$all->height}}</td>
                                    <td>{{$all->weight}}</td>
                                    <td>{{$all->IHC}}</td>
                                    <td>{{$all->blood_test}}</td>
                                    <td>{{$all->blood_test_date}}</td>
                                    <td>{{$all->check_up_date}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                        <a href="/edit_check_up_form/?id={{$all->id}}" class="btn btn-info">Edit</a><a href="/delete_check_up/?id={{$all->id}}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
