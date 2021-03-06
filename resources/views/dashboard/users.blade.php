@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    <ul class="nav nav-tabs"  id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard.ads')}}">Ads<span class="badge">23</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="users-tab" data-toggle="tab" href="{{route('dashboard.users')}}" role="tab" aria-controls="users" aria-selected="false">Users<span class="badge">3</span></a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li> --}}
                    </ul>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (isSet($users))
                        @include('partials.users-tab')
                    @endif
                </div>
                <div class="card-footer">{{ '22 Users' }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
