@extends('layouts.admin')
@section('title', 'Create User')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Create User</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.users.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputName">First Name</label>
                                        <input type="text" name="firstname" class="form-control" id="inputName" placeholder="First Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputName">Last Name</label>
                                        <input type="text" name="lastname" class="form-control" id="inputName" placeholder="First Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEmail4">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputName">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="inputName" placeholder="Phone">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPassword4">Password</label>
                                        <input type="password" name="password" class="form-control" id="inputPassword4"
                                            placeholder="Password">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Occupation</label>
                                        <select name="occupation" id="occupation" class="form-control">
                                            <option value="">Choose....</option>
                                            <option value="Student">Student</option>
                                            <option value="Entrepreneur">Entrepreneur</option>
                                            <option value="Employee">Employee</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputRole">Role</label>
                                        <select id="inputRole" name="roles[]" class="form-control">
                                            <option selected="">Choose...</option>
                                            @foreach ($roles as $key => $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
