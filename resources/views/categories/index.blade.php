@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          <td>Status</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categorys as $share)
        <tr>
            <td>{{$share->id}}</td>
            <td>{{$share->name}}</td>
            <td>{{$share->description}}</td>
            <td>{{$share->status}}</td>
            <td><a href="{{ route('categorys.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('categorys.destroy', $share->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection