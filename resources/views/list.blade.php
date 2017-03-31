@extends("app")

@section("content")
{{-- content goes here --}}

<div class="container">
  <h1>Overview</h1>

  <a href="/add" class="btn btn-success" style="">Add To Do</a>

  <button type="submit" name="button" class="pull-right btn btn-info">Submit Changes</button>

  <a type="submit" name="button" class="btn btn-danger">Clear All To Dos!</a>



  <div class="row">
    <div class="col-sm-6">
      <h3>To Do: </h3>

      <ul class="list-group">
        @foreach($ToDos as $ToDo)
          <li class="list-group-item ToDo-item">


            <h4 class="ToDo-Title">{{$ToDo->title}}</h4>

            <form class="completed-form" method="post">
              <label for="completed">Done: </label>
              <input type="checkbox" name="completed" value="">
            </form>


            <p><small>To Be Completed: {{$ToDo->due_by}}</small></p>
            <p>{{$ToDo->description}}</p>

            <a href="/{{$ToDo->id}}/edit" class="pull-right edit-link">Edit To Do</a>
          </li>
        @endforeach
      </ul>


    </div><!-- Closses ToDo Column -->


    <div class="col-sm-6">
      <h3>Done: </h3>

      <ul class="list-group">
        @foreach($Completed as $Complete)
          <li class="list-group-item completed-item">
            <h4>{{$Complete->title}}</h4>
            <p><small><del>To Be Completed: {{$ToDo->due_by}}</del></small></p>
            <p>{{$Complete->description}}</p>
          </li>
        @endforeach
      </ul>

    </div><!-- Closses Done Column -->
  </div> <!--Closses row-->
</div>




@endsection
