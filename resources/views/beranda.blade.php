@extends('layouts.app')

@section('content')

    <div class="container-fluid ">
        <div class="mt-10 mr-auto ml-auto max-w-5xl object-cover h-75 rounded-lg items-center overflow-hidden ">
            <div class="shadow-lg">
                <img class="w-full h-64items-center"
                     src="https://designertask.com/wp-content/uploads/2018/05/soundcloud-banner-size.png"
                     alt="Sunset in the mountains">
            </div>
        </div>
        <div class="mt-10 mx-auto max-w-5xl h-75 rounded items-center overflow-hidden border">

            <div class="w-full container justify-between flex">
                <div class="w-2/4 flex items-center flex-shrink-0 text-black mr-24 p-5 ml-2">
                    <h5 class="py-2"><strong>Informasi Jadwal Tilang</strong></h5>
                </div>
                <div class="w-2/4 py-5 px-5 flex justify-between">
                    <h5 class="w-1/4 mx-2 py-2 h-full"><strong>Filter :</strong></h5>
                    <div class="w-3/4 flex">
                        <select class="w-1/2 shadow-lg h-full mx-2 py-2" name="province" id="province">
                            <option value="">Jawa Barat</option>
                            <option value="">1</option>
                        </select>
                        <select class="w-1/2 shadow-lg h-full ml-2 py-2" name="province" id="province">
                            <option value="">bandung</option>
                            <option value="">1</option>
                        </select>
                    </div>


                    {{--                    <a href="/" class="w-full lg:w-auto text-center lg:inline-block block mr-6 text-sm px-4 py-2 leading-none border rounded--}}
                    {{--               text-accent border-white hover:border-transparent hover:text-accent hover:bg-white mt-4 lg:mt-0--}}
                    {{--               focus:bg-white focus:text-yellow-400">Home</a>--}}
                    {{--                    <a href="" class="w-full lg:w-auto text-center lg:inline-block block mr-6 text-sm px-4 py-2 leading-none border rounded--}}
                    {{--               text-accent border-white hover:border-transparent hover:text-accent hover:bg-white mt-4 lg:mt-0--}}
                    {{--               focus:bg-white focus:text-yellow-400">Tentang</a>--}}
                </div>
            </div>
            <div class="px-5 pb-5 flex-wrap flex">
                @if($infoTilang!= null)
                    @foreach($infoTilang as $informasiTilang)

                        <div class="p-5 md:w-1/2 lg:w-1/3 rounded overflow-hidden shadow-lg">
                            <a href="informasiTilang/{{$informasiTilang['id']}}">
                                <img class="w-full h-56 block pt-5" src="{{asset('storage/'.$informasiTilang['foto'])}}"
                                     alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{$informasiTilang['nama']}}</div>
                                    <p class="text-accent text-sm mb-3">{{$informasiTilang['tanggal_mulai']}}
                                        - {{$informasiTilang['tanggal_selesai']}}</p>
                                    <p class="text-gray-700 text-base">
                                        {{$informasiTilang['keterangan']}}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>




@endsection
