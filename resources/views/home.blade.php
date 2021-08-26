@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@if(isset(auth()->user()->name))
<h3>الاسم:{{auth()->user()->name}}</h3>
    @else
                            <h3>هاتف رقم:{{auth()->user()->mobile}}</h3>

                        @endif
                        <h3>ا:تم الدخول بحساب{{auth()->user()->provider}}</h3>
<img src="{{auth()->user()->avatar}}" width="200px"height="200px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
