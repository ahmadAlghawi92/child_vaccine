@extends('layouts.admin')

@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body" >
                        <form action="/searchParent" method="GET" role="search">
                            {{ csrf_field() }}
                            <div class="input-group input-group-lg" >
                                <input type="search" class="form-control form-control-lg" name="q"
                                       placeholder="Parents Search" >
                                <span class="input-group-btn">
            <button type="submit" class="btn btn-lg btn-default">
 <i class="fa fa-search"></i>
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                            </div>
                        </form>
                        <div class="card-body table-responsive p-0">

                            <form method="GET" action="{{ route('search_parent') }}">
                                @if(isset($details))
                                    <p style="text-align: center;font-family: 'Lora', serif;"> The Search results for your query <b> {{ $query }} </b> are :</p>

                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                NID
                                            </th>

                                            <th>
                                                Phone Number
                                            </th>

                                            <th style="text-align: left">
                                               Children
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($details as $all)
                                            <tr>
                                                <td>{{$all->name}}</td>
                                                <td>{{$all->n_id}}</td>
                                                <td>{{$all->phone_num}}</td>
                                                <td><div class="btn-group btn-group-sm"><a href="/add_child_view/?user_id={{$all->id}}" class="btn btn-primary">Add & Show all</a></div></td>

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


