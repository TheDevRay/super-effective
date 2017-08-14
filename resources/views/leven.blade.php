@extends('layouts/app')

@section('content')
    <h2 class="title">Zoek een leven!</h2>
    <p>Hier een paar handige links:</p>
    <ul class="list-unstyled">

        @foreach ($links as $link)
            <li>
                <a href="{{$link['url']}}" target="_blank" title="{{{$link['name']}}}">
                    {{$link['name']}}
                </a>
            </li>
        @endforeach($links as $link)
    </ul>
@endsection
