@extends('template')

@section('content')

<div class="container">
  
<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Edit Data <b>Categories</b></h2>
     </div>
     </div>
     </div>

    <form action=" /categories/{{$categories->id}}/update " method="post">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{$category -> name}}">
        </div>
        

        <input type="submit"  value="Save Update" class="btn btn-warning">
        <a class="btn btn-secondary" href="{{ route('categories.index') }}">Cancel</a>

    </form>



  </div>


@endsection