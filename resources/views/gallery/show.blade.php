@extends('layouts.app')


@section('content')
    <section style="margin-top: 30px;">
        <a href="{{ route('gallery.show', [$gallery['id']]) }}">
            <b>{{ $gallery['name'] }}</b>
        </a>

        <ul>
            <li>
                Made By: {{ $gallery['brand'] }}
            </li>
        </ul>
    </section>
@endsection