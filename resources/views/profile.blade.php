@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('title', 'Profile')

@section('main')
    <div class="is-flex is-justify-content-center my-6 content-wrapper" style="width: 100%">
        <div class="is-flex is-align-items-start mr-6 img-wrapper">
            <figure class="image is-128x128">
                <img id="picture" class="is-rounded" style="border-radius: 2rem" src="{{ asset($data->gambar) }}" alt="">
            </figure>
        </div>
        <div>
            <div class="mb-2">
                <b><label for="">Nama</label></b>
                <input id="name" class="input" type="text" value="{{ $data->nama }}" disabled>
            </div>
            <div class="mb-2">
                <b><label for="">Summary</label></b>
                <textarea class="textarea" cols="70" disabled>{{ $data->summary }}</textarea>
            </div>
            <div class="mb-2">
                <b><label for="">Umur</label></b>
                <input id="umur" class="input" type="text" value="{{ $data->umur }}" disabled>
            </div>
            <div class="mb-2">
                <b><label for="">Hobby</label></b>
                @if($data->hobby != null && count($data->hobby) > 0)
                    <ul>
                        @foreach($data->hobby as $value)
                            <li>
                                {{ $value }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    {{ 'Tidak ada hobby' }}
                @endif
            </div>
            <div>
                <b><label for="">Mata Kuliah Favorit</label></b>
                @if($data->matkul != null && count($data->matkul) > 0)
                    <ul>
                        @foreach($data->matkul as $value)
                            <li>
                                {{ $value }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    {{ 'Tidak ada mata kuliah favorit' }}
                @endif
            </div>
        </div>
    </div>
@endsection