@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add a new visit</div>

                    <div class ="card-body">
                        <form method="GET" action="{{ route('add_visit') }}">

                             <input type="text" name="visit_name" placeholder="Visit number" class="form-control" required> <BR>
                            <input type="text" name="age_of_child" placeholder="Age" class="form-control" required> <BR>
                            <strong><i class="fas fa-syringe"></i>Vaccines</strong>

                            <div >
                                <select class="form-control" name="vaccine[]" multiple="multiple"  id="bootstrap-duallistbox-nonselected-list_"  style="height: 102px;">
                             @foreach($allVaccine as $vaccine)
                                    <option value="{{$vaccine->id}}">{{$vaccine->name}}</option>
                            @endforeach
                            </select>
                            </div>
                            <br>
                            <input type="submit" value="Add" class="btn btn-primary"> <BR>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Visit List</div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <tr>

                                <th>
                                    Visit number
                                </th>
                                <th>
                                    Age of children
                                </th>
                                <th>
                                    Vaccines
                                </th>
                                <th>
                                    Action
                                </th>

                            </tr>
                            @foreach($allVisit as $all)
                                <tr>
                                     <td>{{$all->visit_name}}</td>
                                    <td>{{$all->age_of_child}}</td>

                                    <td>
                                        @foreach($all->vaccines as $vaccines)
                                            {{$vaccines->name}} <br>
                                        @endforeach
                                    </td>
                                    <td><div class="btn-group btn-group-sm"><a href="/edit_visit_info/?visit_id={{$all->id}}" class="btn btn-info">Edit</a> <a href="/delete_visit/?visit_id={{$all->id}}" class="btn btn-danger">Delete</a></div></td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>


@endsection
