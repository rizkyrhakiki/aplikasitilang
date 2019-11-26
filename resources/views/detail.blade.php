@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="p-5 w-1/2 rounded overflow-hidden shadow-lg  mx-auto">
            <h1 class="mb-2 text-lg font-bold">{{$informasiTilang['nama']}}</h1>
            <img class="w-full block pt-5" src="https://tailwindcss.com/img/card-top.jpg"
                 alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <p class="text-accent text-sm mb-3">{{$informasiTilang['tanggal_mulai']}}
                    - {{$informasiTilang['tanggal_selesai']}}</p>
                <p class="text-gray-700 text-base">
                    {{$informasiTilang['keterangan']}}
                </p>
            </div>
        </div>
    </div>


@endsection
