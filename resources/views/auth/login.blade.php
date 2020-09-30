@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <p class="card-text">
                    <form class="form-horizontal" method="POST" action="{{ route('auth') }}">
                        @csrf
                        @samlidp
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="sso_email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="sso_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
@endsection