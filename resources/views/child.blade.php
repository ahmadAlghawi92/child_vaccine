@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Add a new child</h3>
                    </div>

                    <div class ="card-body">
                        <form method="GET" action="{{ route('add_child') }}"  >
                            @csrf
                            <input type="hidden" name="user_id" value="{{$allChild->id}}" >
                            <div class="form-group row">
                                <label for="n_id" class="col-md-4 col-form-label text-md-right"  >National ID</label>

                                <div class="col-md-6">
                                    <input type="text" name="n_id" placeholder="National ID" class="form-control" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"  >Name</label>

                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="name" class="form-control" required>

                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right"  >Gender</label>

                                <div class="col-md-6">

                                    <select name="gender" class="form-control"  >
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birthday" class="col-md-4 col-form-label text-md-right"  >Date of birth</label>

                                <div class="col-md-6">
                                    <input type="date"   name="date_of_birth" class="form-control" required>

                                </div>
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
         <div class="row justify-content-center" >
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Children List</h3></div>
                    <div class="card-body table-responsive p-0">
                        <table class = "table table-head-fixed text-nowrap">
                            <tr>
                                <th>NID</th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Gender
                                </th>

                                <th>
                                    Date of birth
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>
                            @foreach($allChild->child as $all)
                                <tr>
                                    <td>{{$all->n_id}}</td>

                                    <td>{{$all->name}}</td>
                                    <td>{{$all->gender}}</td>
                                    <td>{{$all->date_of_birth}}</td>
                                    <td> <div class="btn-group btn-group-sm">
                                            @if(\Auth::user()->type == "1")
                                            <a href="/delete_child/?child_id={{$all->id}}" class="btn btn-danger">Delete</a>
                                            @endif
                                            <a href="/edit_child_info/?child_id={{$all->id}}" class="btn btn-info">Edit</a>
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
