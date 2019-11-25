<!-- Upload Field -->
<div class="form-group row col-sm-48">
    {{--{!! Form::label('file', 'Gambar:',  ['class' => 'form-label col-lg-48']) !!}--}}
    {!! Form::file('file', null, ['class' => 'form-control col-lg-48']) !!}
</div>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }} <br/>
        @endforeach
    </div>
@endif

<!-- Nama Field -->
<div class="form-group row col-sm-48">
    {!! Form::label('nama', 'Nama:',  ['class' => 'form-label col-lg-48']) !!}
    {!! Form::text('nama', null, ['class' => 'form-control col-lg-48']) !!}
</div>


<!-- Tanggal Mulai Field -->
{{--<div class="form-group row col-sm-12">
    {!! Form::label('tanggal_mulai', 'Tanggal Mulai:') !!}
    {!! Form::date('tanggal_mulai', null, ['class' => 'form-control']) !!}
</div>--}}
<!-- Tanggal Selesai Field -->
<div class="form-group row col-sm-48">
    {!! Form::label('tanggal_mulai', 'Tanggal Mulai:', ['class' => 'form-label col-lg-48']) !!}
    {!! Form::date('tanggal_mulai', null, ['class' => 'form-control col-lg-48','id'=>'tanggal_mulai']) !!}
    {!! Form::label('tanggal_selesai', 'Tanggal Selesai:', ['class' => 'form-label col-lg-48']) !!}
    {!! Form::date('tanggal_selesai', null, ['class' => 'form-control col-lg-48','id'=>'tanggal_selesai']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tanggal_mulai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#tanggal_selesai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

{{--<!-- Tanggal Selesai Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('tanggal_selesai', 'Tanggal Selesai:') !!}--}}
    {{--{!! Form::date('tanggal_selesai', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Lokasi Field -->
<div class="form-group row col-sm-48">
    {!! Form::label('lokasi', 'Lokasi:',  ['class' => 'form-label col-lg-48']) !!}
    {!! Form::text('lokasi', null, ['class' => 'form-control col-lg-48']) !!}
</div>
<div class="form-group row col-sm-48">
    {!! Form::label('lat', 'Lat:',  ['class' => 'form-label col-lg-48']) !!}
    {!! Form::text('lat', null, ['class' => 'form-control col-lg-48']) !!}
</div>
<div class="form-group row col-sm-48">
    {!! Form::label('lng', 'Lng:',  ['class' => 'form-label col-lg-48']) !!}
    {!! Form::text('lng', null, ['class' => 'form-control col-lg-48']) !!}
</div>

<div class="form-group">
    <label for="formGroupExampleInput">Lokasi Map</label>
    <div class="input-group-prepend">
        <span class="input-group-text no-border-right"><i class="fas fa-map-marked-alt"></i></span>
        <input name="lokasi" type="text" class="form-control no-border-left" id="searchmap"
               placeholder="Lokasi pada map" value="{{old('lokasi')}}" required>
    </div>
    <div id="input-map" class="mt-3"></div>
</div>

<!-- Keterangan Field -->
<div class="form-group row col-sm-48">
    {!! Form::label('keterangan', 'Keterangan:', ['class' => 'form-label col-lg-48']) !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control col-lg-48']) !!}
</div>

<!-- Submit Field -->
<div class="form-group row col-sm-48">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('informasiTilangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
