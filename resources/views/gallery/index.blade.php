@extends('layouts.app')


@section('content')
    @forelse( $galleries as $gallery )
        <section style="margin-top: 30px;">
            <a href="{{ route('gallery.show', [$gallery['id']]) }}">
                <b>{{ $gallery['name'] }}</b>
            </a>

            <ul>
                <li>
                    Made By: {{ $gallery['brand'] }}
                </li>
            </ul>
            <div>
                Users Input: {{ $userInput }}
            </div>
        </section>
    
    @empty
        <div style="
            font-weight: bolder;
            font-size: 30px;
            text-align: center;
            height: 200px;
        ">
            No Gallery found to display
        </div>
    @endforelse
@endsection