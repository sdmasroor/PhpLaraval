@extends('layouts.app')
@section('content')



      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      

      <!-- Jumbotron -->
      <div class="col-md-9 col-lg-9 col-sm-3 pull-left">
      

      <!-- Example row of columns -->
      <div class="row" style="background:white; margin:10px;">
        <form method="post" action="{{route('companies.update',[$company->id])}}">
          {{ csrf_field()}}
          <input type="hidden" name="_method" value="put">
          <div class="form-group">
          <label for="company-name">Name<span class="required">*</span></label>
          <input placeholder="Enter-Name"
          id="company-name"
          required
          name="name"
          spellcheck="false"
          class="form-control"
          value="{{$company->name}}"/>
          </div>
          <div class="form-group">
            <label for="company-content">Description</label>
            <textarea placeholder="Enter Description"
            style="resize:vertical"
            id="company-content"
            name="description"
            rows="5"
            spellcheck="false"
            class="form-control autosize-target text-left"
            >{{$company->description}}</textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="submit">
          </div>  
        </form>
        
     
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
              <li><a href="/companies/{{$company->id}}/">View Companies</a></li>
              <li><a href="/companies/">All Companies</a></li>
              
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