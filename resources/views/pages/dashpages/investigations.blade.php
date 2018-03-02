@extends('layouts.dashboard',['title' => 'Investigation']) @section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <button type="button" class="btn btn-simple btn-md edit-profile-icon" data-toggle="modal" data-target="#addInvestigation">
                        <i class="material-icons">add</i>
                    </button>
                    <h4 class="title">Investigations List</h4>
                    <p class="category">Here is a subtitle for this table</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Name</th>
                            <th>Description</th>
                            <th>Zone</th>
                            <th>Link</th>
                            <th>Image</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dakota</td>
                                <td>Niger</td>
                                <td>Delmas</td>
                                <td>https:\\www.link.com</td>
                                <td class="text-primary">view</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>



@endSection