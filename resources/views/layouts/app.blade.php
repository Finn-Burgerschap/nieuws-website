@extends('layouts.base')

@section('body')
    <a href="{{ route('home') }}" class="fixed top-[1rem] left-[1rem] text-black">
        <svg class="w-[2rem] h-[2rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/></svg>
    </a>

    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
