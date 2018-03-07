@extends('layouts.dashboard',['title' => 'Investigation']) @section('content')

<div class="container-fluid" data-ng-controller="InvestigationsCtrl">
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
                                <th></th>
                            </thead>
                            <tbody>
                                @if(count($investigations) > 0) @foreach($investigations as $investigation)
                                <tr>
                                    <td>{{$investigation->name}}</td>
                                    <td>{{$investigation->description}}</td>
                                    <td>{{$investigation->zone}}</td>
                                    <td>
                                        <a href="{{$investigation->lien}}">{{$investigation->lien}}</a>
                                    </td>
                                    <td class="text-primary">{{$investigation->image}}</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" data-ng-click="setDataEdit({{$investigation}})" class="btn btn-primary btn-simple btn-xs edit-btn"
                                            data-toggle="modal" data-target="#editInvestigationModal">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" data-ng-click="removeInvestigation({{$investigation->id}})" class="btn btn-danger btn-simple btn-xs remove-btn"
                                            data-toggle="modal" data-target="#deleteInvestigationModal">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
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

    <!-- Add Investigation Modal -->
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
                                {{Form::label('Link', '', ['class' => 'control-label'])}} {{Form::text('link', '', ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <div class="ui action input">
                                    <input type="text" placeholder="Image">
                                    <a class="ui button">Upload</a>
                                </div>
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

    <!-- Edit Investigation Modal -->
    <div class="modal fade" id="editInvestigationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Investigation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {!! Form::open(['id' => 'editForm', 'method' => 'PUT']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                {{Form::label('Name', '', ['class' => 'control-label'])}}
                                <input type="text" name="name" class="form-control" value="@{{editData.name}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                {{Form::label('Link', '', ['class' => 'control-label'])}}
                                <input type="text" name="link" class="form-control" value="@{{editData.lien}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <div class="ui action input">
                                    <input type="text" placeholder="Image">
                                    <a class="ui button">Upload</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                {{Form::label('Zone', '', ['class' => 'control-label'])}}
                                <input type="text" name="zone" class="form-control" value="@{{editData.zone}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <label>Description</label>
                                <div class="form-group label-floating">
                                    {{Form::label('', '', ['class' => 'control-label'])}}
                                    <textarea type="text" rows="5" name="description" class="form-control">@{{editData.description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{Form::submit('Edit', ['class' => 'btn btn-primary pull-right'])}}
                    <div class="clearfix "></div>
                    {!! Form::hidden('_method', 'PUT') !!} {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

    <!--Delete Modal -->
    <div class="modal fade" id="deleteInvestigationModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Investigation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you really want to remove this investigation?
                </div>
                <div class="modal-footer">

                    {!! Form::open(['method' => 'POST', 'id' => 'deleteForm']) !!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Remove</button> {!! Form::hidden('_method', 'DELETE') !!} {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

</div>



@endSection @section('appCtrls')
<script src="{{asset('js/angular/Controllers/investigationsCtrl.js')}}"></script>
@endSection