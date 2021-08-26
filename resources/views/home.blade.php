 @extends('layouts.admin')

@section('content')
<style>
    .image1{
        display: none;
        margin-left: auto;
        margin-right: auto;
        width: 70%;

    }
    .image2{
        display: block;

    }
    @media  {
        .image1{   display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70%;}
        .image2{
            display: none;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }
    }
</style>
         <div >


                <img src="{{ asset('dist/img/child_icon_20.png')}}"  class="image1"  >
             <img src="{{ asset('dist/img/child_icon_23.png')}}"  class="image2"  >

             <!-- /.content -->
         </div>
@endsection
