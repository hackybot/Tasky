@extends("app")

@section("content")
{{-- content goes here --}}

<div class="container">


  <form method="post" class="col-md-5">

    <h1>Create a new To Do</h1>

    <div class="form-group">
      <label for="title">Name</label>
      <input type="text" name="title" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="due_by">Due By</label>
      <input type="date" name="due_by" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" name="description" value="" class="form-control">
    </div>

    <button class="btn btn-success" type="submit">Submit To Do</button>
    <button id= "clearFields" type="button" class="btn btn-primary pull-right">Clear</button>


    {!! csrf_field() !!}

  </form>





</div>












@endsection
