@extends('layouts.app')
@section('content')



      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
      <div class="col-md-9 col-lg-9 col-sm-3 pull-left">
      <div class="jumbotron">
        <h1>{{ $company->name }}</h1>
        <p class="lead">{{ $company->description }}</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row" style="background:white; margin:10px;">
        @foreach($company->projects as $project)
        <div class="col-lg-4">
          <h2>{{$project->name}}</h2>
          <p class="text-danger">{{$project->description}}</p>
          <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View details »</a></p>
        </div>
        @endforeach
        
     
</div>
    </div>
    <aside class="col-sm-3 ml-sm-auto blog-sidebar">
         <!--  <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
           <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
              <li><a href="#">Delete</a></li>
              <li><a href="#">Add New Member</a></li>
            </ol>
          </div>
         <!--  <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            
            </ol>
          </div> -->
         
        </aside>
    @endsection