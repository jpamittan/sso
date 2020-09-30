@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        @if(isset(Auth::user()->email))
            {{ Auth::user() }}
            
            <div class="row mt-5">
                <div class="col">
                    <div class="float-left">
                        <a class="btn btn-primary" href="/logout" role="button">Logout</a>
                    </div>
                </div>
                <div class="col">
                    <div class="float-right">
                        <a class="btn btn-success" href="https://synchronosure.demos.enquiron.com/App/Handoff/AuthSdP" role="button">Enquiron</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection