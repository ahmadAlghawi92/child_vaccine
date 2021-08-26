@extends('layouts.admin')

@section('content')
    <div class="container-fluid" >
        <div class="row ">
            <div class="col-12">
                <div class="card">

                    <div class="card-body" >
                        <form action="/search" method="GET" role="search">
                            {{ csrf_field() }}
                            <div class="input-group input-group-lg" >
                                <input type="search" class="form-control form-control-lg" name="q"
                                       placeholder="Children Search " >
                                <span class="input-group-btn">
            <button type="submit" class="btn btn-lg btn-default">
 <i class="fa fa-search"></i>
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                            </div>
                        </form>

                        <div class="card-body table-responsive p-0">



                        <form method="GET" action="{{ route('search_child') }}">
                            @if(isset($details))
                                <p   style="text-align: center ; font-family: 'Lora', serif;"> The Search results for your query <b> {{ $query }} </b> are :</p>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>
                                            NID
                                        </th>
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
                                            Visit Number
                                        </th>
                                        <th>
                                            Visit Date
                                        </th>
                                        <th>
                                            Parent name
                                        </th>
                                        <th>
                                            Action
                                        </th>

                                        <th>
                                            Regular testing
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($details as $all)
                                        <tr>
                                            <td>{{$all->n_id}}</td>
                                            <td>{{$all->name}}</td>
                                            <td>{{$all->gender}}</td>
                                            <td>{{$all->date_of_birth}}</td>
                                            <td>{{$all->visit_name}}</td>
                                            <td>{{$all->visit_date}}</td>
                                            <td>{{$all->parent_name}}</td>
                                            <td><div class="btn-group btn-group-sm"><a href="/edit_child_info/?child_id={{$all->id}}" class="btn btn-info">Edit info</a><a href="/delete_child/?child_id={{$all->id}}" class="btn btn-danger">Delete</a></div></td>

                                            <td> <div class="btn-group btn-group-sm"><a href="/add_check_up_view/?child_id={{$all->id}}" class="btn btn-primary">Add</a><a href="/all_check_up/?child_id={{$all->id}}" class="btn btn-info"><i class="fas fa-eye"></i>Show All </a></div></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


