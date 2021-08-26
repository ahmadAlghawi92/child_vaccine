@extends('layouts.admin')

@section('content')
    <section>
    <div style="min-height: auto;">

         <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
            <h3 class="card-title">My Child info</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form>
            <strong><i class="fas fa-signature"></i>  Name</strong>

             <p class="text-muted">
            {{$childData->name}}
            </p>
            <strong><i class="fas fa-baby"></i> Gender</strong>

            <p class="text-muted">
                {{$childData->gender}}
            </p>
            <strong><i class="fas fa-calendar-check "></i> Date Of Birth</strong>

            <p class="text-muted">
                {{$childData->date_of_birth}}
            </p>
            <strong><i class="fas fa-book mr-1"></i> Height of children</strong>

            <p class="text-muted">
                {{$childData->high}}
            </p>
            <strong><i class="fas fa-book mr-1"></i> Width of children</strong>

            <p class="text-muted">
                {{$childData->width}}
            </p>
            <strong><i class="fas fa-book mr-1"></i> Weight baby
            </strong>

            <p class="text-muted">
                {{$childData->weight}}
            </p>
            <strong><i class="fas fa-book mr-1"></i> Visit Name</strong>

            <p class="text-muted">
                @foreach($visits as $visit)
                    @if($visit->id == $childData->visit_id)
                        {{$visit->visit_name}}
                    @endif
                @endforeach
            </p>

            <strong><i class="fas fa-book mr-1"></i> Visit Date</strong>

            <p class="text-muted">
                @if($childData->visit_date == "")
                    pending nurse review
                @else
                    {{$childData->visit_date}}
                @endif



            </p>
            </form>
        <!-- /.card-body -->
    </div>
    </div>
            </div>
        </div>
    </section>
@endsection
