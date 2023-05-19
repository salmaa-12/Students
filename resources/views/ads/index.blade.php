
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (count($ads) > 0)
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="font-size: 40px">Student Table</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ads as $adss)
                                    <tr>
                                        <td style="font-size: 30px">{{$adss->subject_name}}</td>
                                        <td>
                                            {!! Form::open(['action' => ['App\Http\Controllers\AsecondController@destroy' , $adss->id ], 'method' => 'delete']) !!}

                                                <form method="delete" action="{{url('App\Http\Controllers\AsecondController@destroy'.$adss->id)}}">
                                                @csrf
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </div>
                                                </form>

                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            <a href="/ads/{{$adss->id}}" class="btn btn-outline-info">Show</a>
                                        </td>
                                        <td>
                                            <a href="/second" class="btn btn-outline-secondary">Go Back</a>
                                        </td>
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

