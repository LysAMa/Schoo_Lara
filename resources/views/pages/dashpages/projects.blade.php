@extends('layouts.dashboard',['title' => 'Project']) @section('content')
<?php $id = null ?>
<div class="container-fluid" data-ng-controller="ProjectsCtrl">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <button type="button" class="btn btn-simple btn-md edit-profile-icon" data-toggle="modal" data-target="#addProjectModal">
                        <i class="material-icons">add</i>
                    </button>
                    <h4 class="title">
                        Projects List

                    </h4>
                    <p class="category">Here is a subtitle for this table</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Name</th>
                            <th>Description</th>
                            <th>Code</th>
                            <th>N. of Benefits</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @if(count($projects) > 0) @foreach($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td>{{$project->description}}</td>
                                <td>{{$project->code}}</td>
                                <td>{{$project->nbrBeneficiaire}}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs" data-project_id="{{ $project->id }}"
                                        data-toggle="modal" data-target="#editProjectModal">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs" data-project_id="{{ $project->id }}"
                                        data-toggle="modal" data-target="#deleteProjectModal">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach @else
                            <tr>
                                <td colspan="4" class="text-secondary">
                                    <p class="text-center text-uppercase">No Projects</p>
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
    <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => ['ProjectsController@store'], 'method' => 'POST']) !!}
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

    <!-- Edit Project Modal -->
    <div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method' => 'POST', 'id' => 'editForm']) !!} @if(count($projects->find($id))) {{$pEdit = $projects->find(3)}}
                    {{$pEdit->id}}@endif
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
                    {{Form::submit('Edit', ['class' => 'btn btn-primary pull-right'])}}
                    <div class="clearfix "></div>
                    {!! Form::hidden('_method', 'PUT') !!} {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

    <!--Delete Modal -->
    <div class="modal fade" id="deleteProjectModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you really want to remove this project?
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

<script>
    $(function () {
        var APP_URL = "{!! url('/') !!}";

        $('#editProjectModal').on('show.bs.modal', function (e) {
            var projectId = $(e.relatedTarget).data('project_id');
            var id = "<?php $id = " + projectId + " ?>";
            $("#editForm").attr('action', APP_URL + '/projects/' + projectId);
        });

        $('#deleteProjectModal').on('show.bs.modal', function (e) {
            var projectId = $(e.relatedTarget).data('project_id');
            var id = "<?php $id = " + projectId + " ?>";
            $("#deleteForm").attr('action', APP_URL + '/projects/' + projectId);
        });
    });
</script>

@endSection