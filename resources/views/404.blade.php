@extends('client.layouts.master')

@section('content')
<section class="content-wrapper">
    <div class="container">
        <div class="std">
            <div class="page-not-found">
                <h4>@lang('shop.404')</h4>
                <h3><img class="img-responsive" src="{{ asset('storage/images/signal.png') }}"></h3>
                <div><a href="{{ route('home.index') }}" type="button" class="btn-home"><span>Back To Home</span></a></div>
            </div>
        </div>
    </div>
</section>
@endsection
