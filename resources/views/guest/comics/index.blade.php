@extends('layouts.app')

@section('main-content')
    <h1>
        DC-COMICS
    </h1>

    <ul>
        @forelse($comics as $comic)
            <li>
                <a href="comics/{{ $comic -> id }}">
                    {{ $comic -> title }}
                </a>
            </li>
        @empty
            <li>
                No comics found...
            </li>
        @endforelse
    </ul>
@endsection