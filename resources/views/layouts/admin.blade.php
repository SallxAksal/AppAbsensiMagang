@extends('layouts.app')

@section('app-body')
    {{-- This layout simply forwards the child 'content' section into the app body --}}
    @yield('content')
@endsection
