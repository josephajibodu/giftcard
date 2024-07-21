@extends('layouts.guest')

@section('title', 'Frequently Asked Questions')

@section('content')

    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-screen-lg px-6 lg:px-8">
            <div class="mx-auto gap-x-8">
                @include('partials.faq')
            </div>
        </div>
    </div>

@endsection