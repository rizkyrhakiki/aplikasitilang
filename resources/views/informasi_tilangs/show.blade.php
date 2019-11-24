@extends('layouts.app_codebase')

@section('content')
    <section class="content-header">
        <h1>
            Informasi Tilang
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('informasi_tilangs.show_fields')
                    <a href="{!! route('informasiTilangs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
