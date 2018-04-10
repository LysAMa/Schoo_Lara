@extends('layouts.dashboard',['title' => 'Investigation']) @section('content')

<div class="container-fluid" data-ng-controller="InvestigationsCtrl">


    <div class="row">
        <div class="col-md-12" style="margin:12px;">
            <div class="ui card" style="margin:auto">
                <div class="image" style="margin:12px;">
                    <img src="{{asset('images/logo.png')}}">
                </div>
                <div class="content">
                    <a class="header">KOBOTOOLBOX - HUMANITARIAN</a>
                    <div class="description">
                        UNLIMITED USE FOR HUMANITARIAN ORGANIZATIONS
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12" style="margin:12px;">
            <div class="ui card" style="margin:auto">
                <div class="image" style="margin:12px;">
                    <img src="{{asset('images/logo.png')}}">
                </div>
                <div class="content">
                    <a class="header">KOBOTOOLBOX - KF</a>
                    <div class="description">
                        RESEARCHERS, AID WORKERS & EVERYONE ELSE
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>



@endSection @section('appCtrls')
<script src="{{asset('js/angular/Controllers/investigationsCtrl.js')}}"></script>
@endSection