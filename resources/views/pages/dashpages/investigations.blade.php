@extends('layouts.dashboard',['title' => 'Investigation']) @section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <button type="button" class="btn btn-simple btn-md edit-profile-icon" data-toggle="modal" data-target="#addInvestigationModal">
                        <i class="material-icons">add</i>
                    </button>
                    <h4 class="title">Investigations List</h4>
                    <p class="category">Here is a subtitle for this table</p>
                </div>
                <div class="card-content table-responsive">
                    @if(count($investigations) > 0)
                    <table class="table table-hover">
                        @else
                        <table class="table">
                            @endif
                            <thead class="text-primary">
                                <th>Name</th>
                                <th>Description</th>
                                <th>Zone</th>
                                <th>Link</th>
                                <th>Image</th>
                            </thead>
                            <tbody>
                                @if(count($investigations) > 0) @foreach($investigations as $investigation)
                                <tr>
                                    <td>Dakota</td>
                                    <td>Niger</td>
                                    <td>Delmas</td>
                                    <td>https:\\www.link.com</td>
                                    <td class="text-primary">view</td>
                                </tr>
                                @endforeach @else
                                <tr>
                                    <td colspan="5" class="text-secondary">
                                        <p class="text-center text-uppercase">No Investigations</p>
                                    </td>
                                </tr>

                                @endif

                            </tbody>
                        </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Project Modal -->
    <div class="modal fade" id="addInvestigationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Investigation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => ['InvestigationsControllers@store'], 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                {{Form::label('Name', '', ['class' => 'control-label'])}} {{Form::text('name', '', ['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                {{Form::label('Code', '', ['class' => 'control-label'])}} {{Form::text('code', '', ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                {{Form::label('Number of benefits', '', ['class' => 'control-label'])}} {{Form::text('benefits', '', ['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                {{Form::label('Zone', '', ['class' => 'control-label'])}} {{Form::text('zone', '', ['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <label>Description</label>
                                <div class="form-group label-floating">
                                    {{Form::label('', '', ['class' => 'control-label'])}} {{Form::textarea('description', '', ['class' => 'form-control', 'rows'
                                    => '5'])}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{Form::submit('Save', ['class' => 'btn btn-primary pull-right'])}}
                    <div class="clearfix "></div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

</div>



@endSection