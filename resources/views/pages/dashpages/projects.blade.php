@extends('layouts.dashboard',['title' => 'Project']) @section('content')
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
                            <tr>
                                <td>First Project</td>
                                <td>This project was...</td>
                                <td>123-456</td>
                                <td>56</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Project Modal -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Name</label>
                                    <input type="text" name="orgName" class="form-control" data-ng-disabled="editProfile == false" value="">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Code</label>
                                    <input type="text" name="name" class="form-control" value="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Number of benefits</label>
                                    <input type="number" name="email" class="form-control" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Zone</label>
                                    <input type="text" name="email" class="form-control" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group ">
                                    <label>Description</label>
                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <textarea class="form-control " name="description" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endSection