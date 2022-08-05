@extends('layouts.admin')
@section('title', 'Users')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Show User</h1>

            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Details</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{asset('img/avatars/avatar-4.jpg')}}" alt="Stacie Hall" class="img-fluid rounded-circle mb-2"
                                width="128" height="128" />
                            <h5 class="card-title mb-0">{{$user->firstname ." ". $user->lastname}}</h5>
                            {{-- <div class="text-muted mb-2">{{}}</div> --}}

                            {{-- <div>
                                <a class="btn btn-primary btn-sm" href="#">Follow</a>
                                <a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span>
                                    Message</a>
                            </div> --}}
                        </div>
                        <hr class="my-0" />
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">About</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="user" class="feather-sm me-1"></span> Name <a
                                        href="#">{{$user->firstname ." ". $user->lastname}}</a></li>

                                <li class="mb-1"><span data-feather="mail" class="feather-sm me-1"></span> Email
                                    <a href="#">{{$user->email}}</a></li>
                                <li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> Phone Number <a
                                        href="#">{{$user->phone}}</a></li>
                                        <li class="mb-1"><span data-feather="award" class="feather-sm me-1"></span> Occupation <a
                                            href="#">{{$user->occupation}}</a></li>
                            </ul>
                        </div>
                        <hr class="my-0" />
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
