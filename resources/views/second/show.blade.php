@extends('layouts.app')

@section('content')

<h1 style="padding: 15px 0px ; font-weight: bold">{{$second->subject_name}}</h1>
{{-- <img src="/covers/{{$post->cover_image}}" alt="{{$post->cover_image}}" style="width: 50%"> --}}

<p>{!!$second->body!!}</p>
<br><br>


{{-- <small>Created at : {{$student->created_at}} </small> --}}

{{-- @if (Auth::user()) --}}
    {{-- @if (Auth::user()->id == $student->user->id) --}}

        {{-- {!! Form::open(['action' => ['App\Http\Controllers\SecondController@store' , $second->id ], 'method' => 'post' , 'class' => 'd-inline float-right' , 'style' =>'display:flex']) !!}

            <form method="post" style="display: flex" class="d-inline float-right" action="{{url('App\Http\Controllers\SecondController@store'.$second->id)}}">
            @csrf

                <button type="submit" class="btn btn-outline-secondary" >ADD</button>
            </form>

       {!! Form::close() !!} --}}

        {{-- {!! Form::open(['action' => ['App\Http\Controllers\SecondController@destroy' , $second->id ], 'class' => 'float-right' , 'method' => 'delete' ,'style' =>'display:flex' , 'class' => 'd-inline float-right']) !!}

            <form method="delete" class="d-inline float-right" style="display: flex" class="float-right" action="{{url('App\Http\Controllers\SecondController@destroy'.$second->id)}}">
            @csrf
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>

        {!! Form::close() !!} --}}
    {{-- @endif --}}
{{-- @endif --}}

<a href="/second" class="btn btn-outline-secondary">Go Back</a>

@endsection

{{-- by {{$students->user->name}} --}}
