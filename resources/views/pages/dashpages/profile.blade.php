@extends('layouts.dashboard',['title' => 'Profile'])

@section('content')
    <div class="container-fluid" data-ng-controller="UserProfileCtrl">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">
                                Edit Profile
                                <button type="button" class="btn btn-simple btn-xs edit-profile-icon" data-ng-show="editProfile == true" data-ng-click="editProfile = false">
                                    <i class="material-icons">close</i>
                                </button>
                                <button type="button" class="btn btn-simple btn-xs edit-profile-icon" data-ng-show="editProfile == false" data-ng-click="editProfile = true">
                                    <i class="material-icons">edit</i>
                                </button>
                            </h4>
                            <p class="category" >
                                Complete your profile 
                            </p>
                            
                        </div>
                        <div class="card-content">
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating" >
                                            <label class="control-label">Company</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.company">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Username</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.userName">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fist Name</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.firstName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.lastName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Adress</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.adress">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.city">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Country</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.country">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Postal Code</label>
                                            <input type="text" class="form-control" data-ng-disabled="editProfile == false" data-ng-model="profileData.postalCode">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <div class="form-group label-floating">
                                                <label class="control-label"></label>
                                                <textarea class="form-control" rows="5" data-ng-disabled="editProfile == false" data-ng-model="profileData.aboutMe"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-ng-show="editProfile == true" type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="{{asset('images/faces/marc.jpg')}}" />
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="category text-gray">CEO / Co-Founder</h6>
                            <h4 class="card-title">{{ \Auth::user()->name}}</h4>
                            <p class="card-content">
                                Don t be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
@endSection