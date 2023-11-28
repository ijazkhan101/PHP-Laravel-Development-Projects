
@extends('layouts.main')

@section('main-section')
<div  class="container">
    <div class="row">
        <div class="col-lg-4  col-md-4 "></div>
        <div class="col-lg-4  col-md-4  mb-6 mt-6">
<h1>
  Laravel form   
</h1>

<form action="{{url('/')}}/register" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name='name' id="text"  placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" class="form-control" name='email' id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name='password' id="password" placeholder="password">
      </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  <div class="col-lg-4  col-md-4 "></div>

</div>
</div>
@endsection