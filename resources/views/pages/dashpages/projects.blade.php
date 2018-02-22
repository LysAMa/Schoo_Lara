@extends('layouts.dashboard',['title' => 'Project'])

@section('content')
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
                            <th>Country</th>
                            <th>City</th>
                            <th>Salary</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dakota Rice</td>
                                <td>Niger</td>
                                <td>Oud-Turnhout</td>
                                <td class="text-primary">$36,738</td>
                            </tr>
                            <tr>
                                <td>Minerva Hooper</td>
                                <td>Curaçao</td>
                                <td>Sinaai-Waas</td>
                                <td class="text-primary">$23,789</td>
                            </tr>
                            <tr>
                                <td>Sage Rodriguez</td>
                                <td>Netherlands</td>
                                <td>Baileux</td>
                                <td class="text-primary">$56,142</td>
                            </tr>
                            <tr>
                                <td>Philip Chaney</td>
                                <td>Korea, South</td>
                                <td>Overland Park</td>
                                <td class="text-primary">$38,735</td>
                            </tr>
                            <tr>
                                <td>Doris Greene</td>
                                <td>Malawi</td>
                                <td>Feldkirchen in Kärnten</td>
                                <td class="text-primary">$63,542</td>
                            </tr>
                            <tr>
                                <td>Mason Porter</td>
                                <td>Chile</td>
                                <td>Gloucester</td>
                                <td class="text-primary">$78,615</td>
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