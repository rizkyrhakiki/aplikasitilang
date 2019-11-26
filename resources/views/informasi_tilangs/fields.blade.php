<!-- Upload Field -->
<div class="form-group row col-sm-48" method="post" action="{{url('/informasiTilangs')}}">
    {{csrf_field()}}
    {{--{!! Form::label('file', 'Gambar:',  ['class' => 'form-label col-lg-48']) !!}--}}
    {!! Form::file('file', null, ['class' => 'form-control col-lg-48']) !!}
</div>
{{--<img src="/data_file{{Session::get('path')}}"/>--}}
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
        $('#tanggal_mulai').datepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#tanggal_selesai').datepicker({
            format: 'YYYY-MM-DD',
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
    {!! Form::text('lokasi', old('lokasi'), ['class' => 'form-control col-lg-48', 'id' => 'searchmap']) !!}
</div>
<div class="form-group">
    <div id="input-map" class="mt-3"></div>
</div>
<div class="form-group row col-sm-48 hidden">
    {!! Form::label('lat', 'Lat:',  ['class' => 'form-label col-lg-48']) !!}
    {!! Form::text('lat', null, ['class' => 'form-control col-lg-48']) !!}
</div>
<div class="form-group row col-sm-48 hidden">
    {!! Form::label('lng', 'Lng:',  ['class' => 'form-label col-lg-48']) !!}
    {!! Form::text('lng', null, ['class' => 'form-control col-lg-48']) !!}
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
