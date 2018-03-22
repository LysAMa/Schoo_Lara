@extends('layouts.dashboard',['title' => 'Home']) @section('content')

<div class="container-fluid" data-ng-controller="DashboardCtrl">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="green">
                    <i class="material-icons">store</i>
                </div>
                <div class="card-content">
                    <p class="category">Posts</p>
                    <h3 class="title">245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="fa fa-twitter"></i>
                </div>
                <div class="card-content">
                    <p class="category">Followers</p>
                    <h3 class="title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <div class="ui stackable one column grid">

                @for ($i = 0; $i
                < 6; $i++) <div class="column">
                    <div class="ui link fluid card">
                        <div class="content">
                            <img class="right floated ui avatar image" src="{{asset('images/steve.jpg')}}">
                            <div class="header primaryColor">
                                Elliot Fu
                            </div>
                            <div class="meta">
                                Friends of Veronika
                            </div>
                            <div class="ui divider"></div>
                            <div class="description">

                                <img class="ui fluid image rounded" src="{{asset('images/image.png')}}">

                                <div class="ui divider"></div>
                                <div>Elliot requested permission to view your contact details</div>
                            </div>
                        </div>

                        <div class="extra content">

                            <span class="right floated">
                                <i class="heart outline like icon"></i>
                                17 likes
                            </span>
                            <i class="comment icon"></i>
                            2 comments

                        </div>

                        <div class="extra content">
                            <div>Comments</div>
                            <div class="ui comments">
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="{{asset('images/joe.jpg')}}">
                                    </a>
                                    <div class="content">
                                        <a class="author">Tom Lukic</a>
                                        <div class="metadata">
                                            <div class="date">2 days ago</div>
                                            <div class="rating">
                                                <i class="star icon"></i>
                                                5 Faves
                                            </div>
                                        </div>
                                        <div class="text">
                                            This will be great for business reports. I will definitely download this.
                                        </div>
                                        <div class="actions">
                                            <a class="reply">Reply</a>
                                            <a class="save">Save</a>
                                            <a class="hide">Hide</a>
                                            <a>
                                                <i class="expand icon"></i>
                                                Full-screen
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor

        </div>

    </div>
</div>
</div>
@endSection @section('appCtrls')
<script src="{{asset('js/angular/Controllers/dashboardCtrl.js')}}"></script>
@endSection