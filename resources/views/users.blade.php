@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="container">
                    <div class="row py-5" id="play">
                        @foreach(App\User::all() as $user)
                            <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 m-1">
                                <img width="100" height="100" src="{{asset('img/c'.($user->id%6 + 1).'.png')}}">
                                <div class="avg-score text-center mt-2">
                                    avg score: 100
                                </div>
                                <div class="email text-center">
                                    {{$user->email}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-body">
                    This is users
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
