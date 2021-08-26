@extends('layouts.app')


@section('content')
    <form  method="get"  action=

        @if(empty($__get ="save changes"))
            <input name = "weight" value="{{$ex}}">
        @endif

            <input type="submit" value="save changes">>

    </form>


        @endsection
