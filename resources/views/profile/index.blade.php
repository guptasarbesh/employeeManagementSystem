
@extends('layouts.admin')


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
          <td>Gender</td>
          <td>DOB</td>
          <td>Contact</td>
          <td>Email</td>
          <td>Skills</td>
          <td>Fathersname</td>
          <td>Mothersname</td>
          <td>District</td>
          <td>Area</td>
        </tr>
    </thead>
    <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>{{$profile->id}}</td>
            <td>{{$profile->name}}</td>
            <td>{{$profile->gender}}</td>
            <td>{{$profile->dob}}</td>
            <td>{{$profile->contact}}</td>
            <td>{{$profile->email}}</td>
            <td>{{$profile->skills}}</td>
            <td>{{$profile->fathersname}}</td>
            <td>{{$profile->mothersname}}</td>
            <td>{{$profile->district}}</td>
            <td>{{$profile->area}}</td>
            <!-- <td><a href="" class="btn btn-primary">Edit</a></td> -->
            <!-- <td>
                <form action="" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection