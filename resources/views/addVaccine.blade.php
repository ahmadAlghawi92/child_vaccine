@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add a new vaccine</div>

                    <div class ="card-body">
<!--                        <div class="form-group row">
                            <div class="col-md-6">
                            </div>
                        </div>-->

                        <form method="GET" action="{{ route('add_vaccine') }}">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="vaccine name" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" name="doses" placeholder="Doses" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group row">
                         <textarea   name="description"   class="form-control" cols="30" rows="5" required>
                            </textarea>

                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                             </div>
                        @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
<br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Vaccines List</div>
                        <div class="card-body">
                          <table  class="table table-striped"  >
                              <tr>
                              <th>
                                  Name
                              </th>
                                  <th>
                                      Doses
                                  </th>
                              <th>
                                Descriptions
                              </th>
                              <th>
                                  Action
                              </th>

                              </tr>
                              @foreach($allVaccine as $all)
                                  <tr>
                                      <td>{{ $all->name }}</td>
                                      <td>{{ $all->doses }}</td>
                                      <td><p>{{ $all->description }}</td>

                                      <td><div class="btn-group btn-group-sm"><a href="/edit_vaccine_info/?vaccine_id={{$all->id}}" class="btn btn-info">Edit</a><a href="/delete_vaccine/?vaccine_id={{$all->id}}" class="btn btn-danger">DELETE</a></div></td>
                                  </tr>
                                  @endforeach
                          </table>
                        </div>
                    </div>
                </div>
            </div>
     </div>


@endsection
