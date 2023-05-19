@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (count($second) > 0)
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="font-size: 40px">Subjects Name</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($second as $post)
                                    <tr>
                                        <td style="font-size: 30px">{{$post->subject_name}}</td>
                                        <td>
                                            {!! Form::open(['action' => ['App\Http\Controllers\AsecondController@store' , $post->id ], 'method' => 'post' , 'class' => 'd-inline float-right' , 'style' =>'display:flex']) !!}

                                                    <form method="post" style="display: flex" class="d-inline float-right" action="{{url('App\Http\Controllers\AsecondController@store'.$post->id)}}">
                                                    @csrf

                                                        {{-- <button type="submit" class="btn btn-outline-secondary" >ADD</button> --}}
                                                        <a href="/ads" style="text-decoration: none" type="submit" class="btn btn-outline-secondary">Add</a>
                                                    </form>

                                            {!! Form::close() !!}
                                        </td>
                                        {{-- <td>
                                            {!! Form::open(['action' => ['App\Http\Controllers\SecondController@destroy' , $post->id ], 'method' => 'delete']) !!}

                                                <form method="delete" action="{{url('App\Http\Controllers\SecondController@destroy'.$post->id)}}">
                                                @csrf
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </div>
                                                </form>

                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            <a href="/second/{{$post->id}}" class="btn btn-outline-info">Show</a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No Subjects Available .</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
