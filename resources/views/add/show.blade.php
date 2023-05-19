@extends('layouts.app')

@section('content')

<h1 style="padding: 15px 0px ; font-weight: bold">{{$add->subject_name}}</h1>
<p>{!!$add->body!!}</p>
<br><br>


{{-- @if (Auth::user()) --}}
    {{-- @if (Auth::user()->id == $student->user->id) --}}
        {{-- <a href="/students/{{$student->id}}/edit" class="btn btn-outline-secondary">Edit</a><br> --}}


        {{-- {!! Form::open(['action' => ['App\Http\Controllers\StudentsController@store' , $student->id ], 'method' => 'post' , 'class' => 'd-inline float-right' , 'style' =>'display:flex']) !!}

            <form method="post" style="display: flex" class="d-inline float-right" action="{{url('App\Http\Controllers\StudentsController@store'.$student->id)}}">
            @csrf

                <button type="submit" class="btn btn-outline-secondary" >ADD</button>
            </form>

       {!! Form::close() !!}

        {!! Form::open(['action' => ['App\Http\Controllers\StudentsController@destroy' , $student->id ], 'class' => 'd-inline float-right' , 'method' => 'delete' , 'style' =>'display:flex']) !!}

            <form method="delete" style="display: flex" class="d-inline float-right" action="{{url('App\Http\Controllers\StudentsController@destroy'.$student->id)}}">
            @csrf
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>

        {!! Form::close() !!} --}}
    {{-- @endif --}}
{{-- @endif --}}

<a href="/add" class="btn btn-outline-secondary">Go Back</a>
@endsection

{{-- by {{$students->user->name}} --}}
