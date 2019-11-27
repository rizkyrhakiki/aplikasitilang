<div class="block-content block-content-full">
    <div class="block block-bordered block-rounded mb-5">
        <div class="block-header" role="tab" id="faq1_h1">
            <h1 class="font-w600 text-body-color-dark" data-toggle="collapse" href="#faq1_q1" aria-expanded="true" aria-controls="faq1_q1">View Informasi Tilang</h1>
        </div>

        <div id="faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1" data-parent="#faq1">
            <div class="block-content border-t">
                <!-- Nama Field -->
                <div class="form-group font-size-lg text-black mb-5">
                    {!! Form::label('nama', 'Nama:') !!}
                    <p>{!! $informasiTilang->nama !!}</p> <br>
                </div>

                <!-- Tanggal Mulai Field -->
                <div class="form-group font-size-lg text-black mb-5">
                    {!! Form::label('tanggal_mulai', 'Tanggal Mulai:') !!}
                    <p>{!! $informasiTilang->tanggal_mulai !!}</p> <br>
                </div>

                <!-- Tanggal Selesai Field -->
                <div class="form-group font-size-lg text-black mb-5">
                    {!! Form::label('tanggal_selesai', 'Tanggal Selesai:') !!}
                    <p>{!! $informasiTilang->tanggal_selesai !!}</p> <br>
                </div>

                <!-- Lokasi Field -->
                <div class="form-group font-size-lg text-black mb-5">
                    {!! Form::label('lokasi', 'Lokasi:') !!}
                    <p>{!! $informasiTilang->lokasi !!}</p> <br>
                </div>

                <div class="form-group">
                    <div id="input-map" class="mt-3"></div>
                </div>

                <div class="form-group font-size-lg text-black mb-5">
                    {!! Form::label('lat', 'Latitude:') !!}
                    <p>{!! $informasiTilang->lat !!}</p> <br>
                </div>

                <div class="form-group font-size-lg text-black mb-5">
                    {!! Form::label('lng', 'Longitude:') !!}
                    <p>{!! $informasiTilang->lng !!}</p> <br>
                </div>

                <!-- Keterangan Field -->
                <div class="form-group font-size-lg text-black mb-5">
                    {!! Form::label('keterangan', 'Keterangan:') !!}
                    <p>{!! $informasiTilang->keterangan !!}</p> <br>
                </div>


            </div>
        </div>


    </div>
</div>
