@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search</div>

                <div class="card-body">
                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                   placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
        {{ __('Search') }}

                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('search_child') }}">
                        @if(isset($details))
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                            <h2>Sample User details</h2>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>gender</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $children)
                                    <tr>
                                        <td>{{$children->name}}</td>
                                        <td>{{$children->gender}}</td>
                                        <td>{{$children->highet}}</td>
                                        <td>{{$children->gender}}</td>
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
@endsection
