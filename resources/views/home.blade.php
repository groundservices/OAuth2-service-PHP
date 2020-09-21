@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="font-weight-bold">{{ __('Dashboard') }}</h2>

            <passport-clients class="my-4"></passport-clients>
            <passport-authorized-clients class="my-4"></passport-authorized-clients>
            <passport-personal-access-tokens class="my-4"></passport-personal-access-tokens>
        </div>
    </div>
</div>
@endsection
