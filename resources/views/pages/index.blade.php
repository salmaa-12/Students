@extends('layouts.app')

@section('content')
<div style="background-color: rgb(235, 234, 232) ; border-radius: 20px ; padding: 10px 5px 40px">
    <div class="jumbotron text-center">
        <h1 style="font-size: 3.5rem ; padding: 25px 0px">{{ $title }}</h1>
        <p class="lead">Choose .</p>
        <a href="/students" class="btn btn-primary" style="width: 20%">First</a><br><br>
        <a href="/second" class="btn btn-secondary" style="width: 20%">Second</a><br><br>
        <a href="/login" class="btn btn-success" style="width: 20%">Third</a>
    </div>
</div>
@endsection




