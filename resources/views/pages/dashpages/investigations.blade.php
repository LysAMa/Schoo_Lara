@extends('layouts.dashboard',['title' => 'Investigation']) @section('content')

<div class="container-fluid" data-ng-controller="InvestigationsCtrl">

    <div class="row">
        <div class="col-md-12 kobo-module" style="margin:12px;">
            <div class="ui card" style="margin:auto; min-width:50%;">
                <div class="image" style="margin:12px;">
                    <img src="{{asset('images/logo.png')}}">
                </div>
                <div class="content">
                    <a class="header" ng-click="onKoboHumani()">KOBOTOOLBOX - HUMANITARIAN</a>
                    <div class="description">
                        UNLIMITED USE FOR HUMANITARIAN ORGANIZATIONS
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12 kobo-module" style="margin:12px;">
            <div class="ui card" style="margin:auto; min-width:50%;">
                <div class="image" style="margin:12px;">
                    <img src="{{asset('images/logo.png')}}">
                </div>
                <div class="content">
                    <a class="header" ng-click="onKoboHumani()">KOBOTOOLBOX - KF</a>
                    <div class="description">
                        RESEARCHERS, AID WORKERS & EVERYONE ELSE
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="ui card kobo-login" style="margin:auto;display:none;min-width:50%;">
                <div class="content">
                    <div class="header" style="padding:5px;">Sign In your Kobotoolbox account</div>
                    <div class="ui divider"></div>
                    <form class="ui form">
                        <div class="field">
                            <label>Username</label>
                            <input type="text" name="first-name" placeholder="First Name">
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input type="text" name="last-name" placeholder="Last Name">
                        </div>

                        <button class="ui button" type="submit" ng-click="showKoboData()">Sign In</button>
                        <button class="ui button" ng-click="goBackToModule()">Back</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row kobo-data" style="display:none">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Link</th>
                                <th>Publish</th>
                            </thead>

                            <tbody>
                                @if(count($investigations) > 0)@foreach($investigations as $investigation)
                                <tr>
                                    <td>{{$investigation['title']}}</td>
                                    <td>{{$investigation['description']}}</td>
                                    <td>{{$investigation['id']}}</td>
                                    <td>{{$investigation['url']}}</td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes">
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach @else
                                <tr>
                                    <td colspan="4" class="text-secondary">
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

</div>

@endSection @section('appCtrls')
<script src="{{asset('js/angular/Controllers/investigationsCtrl.js')}}"></script>
@endSection