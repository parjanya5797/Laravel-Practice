@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Category
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('categorys.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Category Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Category Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="quantity">Status:</label>
             <input type="radio" name="status" value="1">1</br>
             <input type="radio" name="status" value="0">0</br>
          </div>
          <div class=" form-group avatar-edit">
            <input type='file' id="image" name="image[]" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
             
        </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection