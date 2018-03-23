@extends('layouts/master') @section('content') @include('layouts/_nav')

<!--
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting
      in this post's contents.</p>
    <p class="lead mb-0">
      <a href="#" class="text-white font-weight-bold">Continue reading...</a>
    </p>
  </div>
</div>
-->


<hr>
<div class="row mb-2" data-ng-controller="HomePageCtrl">
  <div class="col-md-12">

    <div class="ui stackable two column grid">


      @for ($i = 0; $i
      < 6; $i++) <div class="column">
        <div class="ui link fluid card" data-ng-click="showCardModal()">
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

    <!--Card Modal-->

    <div class="ui modal" id="cardModal">
      <i class="close icon"></i>
      <div class="header">
        Profile Picture
      </div>
      <div class="image content">
        <div class="ui medium image">
          <img src="/images/avatar/large/chris.jpg">
        </div>
        <div class="description">
          <div class="ui header">We've auto-chosen a profile image for you.</div>
          <p>We've grabbed the following image from the
            <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
          <p>Is it okay to use this photo?</p>
        </div>
      </div>
      <div class="actions">
        <div class="ui black deny button">
          Nope
        </div>
        <div class="ui positive right labeled icon button">
          Yep, that's me
          <i class="checkmark icon"></i>
        </div>
      </div>
    </div>


  </div>

</div>


@stop @section('appCtrls')
<script src="{{asset('js/angular/Controllers/homePageCtrl.js')}}"></script>
@endSection