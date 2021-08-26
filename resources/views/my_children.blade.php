@extends('layouts.admin')

@section('content')

 <div style="min-height: auto;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My children</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">My Children</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
     <section class="content">

         <!-- Default box -->
         <div class="card card-solid">
             <div class="card-body pb-0">
                 <div class="row">
                     @foreach($childData as $child)
                     <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                         <div class="card bg-light d-flex flex-fill">
                             <div class="card-header text-muted border-bottom-0">
                                 Digital Strategist
                             </div>

                             <div class="card-body pt-0">
                                 <div class="row">
                                     <div class="col-7">
                                         <strong><i class="fas fa-id-card"></i> National ID </strong>

                                         <p class="text-muted">
                                             {{$child->n_id}}
                                         </p>
                                         <strong><i class="fas fa-signature"></i> Name</strong>

                                         <p class="text-muted">
                                             {{$child->name}}
                                         </p>
                                         <strong><i class="fas fa-baby"></i> Gender</strong>

                                         <p class="text-muted">
                                             {{$child->gender}}
                                         </p>

                                         <strong><i class="fas fa-calendar-check "></i> Date Of Birth</strong>

                                         <p class="text-muted">
                                             {{$child->date_of_birth}}
                                         </p>
                                         <strong><i class="fas fa-calendar-check "></i> Visit Number</strong>

                                         <p class="text-muted">
                                             @if($child->visit_name == "")
                                                 pending nurse review
                                             @else
                                                 {{$child->visit_name}}
                                             @endif
                                         </p>
                                         <strong><i class="fas fa-hourglass-start"></i> Visit Date</strong>

                                         <p class="text-muted">
                                             @if($child->visit_date == "")
                                                 pending nurse review
                                             @else
                                                 {{$child->visit_date}}
                                             @endif
                                         </p>
                                         <strong> <i class="fas fa-vial"></i>
                                             Regular testing
                                         </strong>

                                          <div class="btn-group btn-group-sm">
                                             <a href="/all_check_up/?child_id={{$child->child_id}}" class="btn btn-info"><i class="fas fa-eye"></i>Show</a>
                                         </div>
                                          <!-- /.card-body -->
                                     </div>
                                     <div class="col-5 text-center">
                                         @if($child->gender == "male")
                                         <img src="dist/img/child_icon_6.png" alt="user-avatar" class="img-circle img-fluid">
                                         @elseif($child->gender == "female")
                                             <img src="dist/img/child_icon_7.png" alt="user-avatar" class="img-circle img-fluid">
                                         @endif
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>

     </section>

 </div>
    </div>
@endsection
