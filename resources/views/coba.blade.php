@extends('template')
@section('main')
    <h1>Ini projek laravel saya</h1>

    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2)
            {{-- <h1>Pereulangan dengan blade</h1> --}}
            <img src="{{ asset('img/photo-1678055702765-a9fbd945478e.jpeg') }}" alt="" width="250px">
        @endif
    @endfor
@endsection
