
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
    <div class="container">
        <x-input type="text" name="name" label="Please enter your name"/>
        <x-input type="email" name="emil" label="Please enter your email"/>
        <x-input type="password" name="password" label="Please enter your password"/>

    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  <div class="col-lg-4  col-md-4 "></div>

</div>
</div>
@endsection