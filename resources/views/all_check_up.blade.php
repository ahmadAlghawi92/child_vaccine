@extends('layouts.admin')

@section('content')
    <div class="container-fluid" >
        <div class="row ">
            <div class="col-12">
                <div class="card">

             <div class="card-header" STYLE="">
                <h3 class="card-title"> Regular testing</h3></div>
            <div class="card-body table-responsive p-0">
                <form action="/all_check_up" method="get" >
                <table class="table table-hover text-nowrap">
                    <tr>
                        <th>
                            Regular testing Date
                        </th>

                        <th>
                            Height
                        </th>
                        <th>
                            Weight
                        </th>
                        <th>
                            IHC
                        </th>
                        <th>
                            Blood_test
                        </th>

                        <th>
                            Blood_test_date
                        </th>
                        @if(\Auth::user()->type == "1")

<th>Action</th>
                        @endif

                    </tr>
                    @foreach($all_check_up->check_up as $all)
                        <tr>
                            <td>{{$all->check_up_date}}</td>
                            <td>{{$all->height}}</td>
                            <td>{{$all->weight}}</td>
                            <td>{{$all->IHC}}</td>
                            <td>{{$all->blood_test}}</td>
                            <td>{{$all->blood_test_date}}</td>
                            @if(\Auth::user()->type == "1")
                            <td>
                                <div class="btn-group btn-group-sm">

                                <a href="/edit_check_up_form/?id={{$all->id}}" class="btn btn-info">Edit</a><a href="/delete_check_up/?id={{$all->id}}" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                            @endif

                        </tr>
                    @endforeach
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
    </div>
@endsection
