@extends('layouts.app-master-dashboard')

@section('content')
<div class="row">
  <div class="col-3 ">
    <div class="card p-2 rounded">
      <a href="{{ route('users.index') }}"> <h3>Dashboard sidebar</h3></a>
      <p class="lead">Only authenticated users can access this section.</p>
      <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
    </div>
  </div>
    <div class="col-3 ">
      <div class="card p-2 rounded">
        <h3>Dashboard sidebar</h3>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
      </div>
    </div>
    <div class="col-3 ">
      <div class="card p-2 rounded">
        <h3>Dashboard sidebar</h3>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
      </div>
    </div>
    <div class="col-3 ">
      <div class="card p-2 rounded">
        <h3>Dashboard sidebar</h3>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
      </div>
    </div>
</div>

@endsection
