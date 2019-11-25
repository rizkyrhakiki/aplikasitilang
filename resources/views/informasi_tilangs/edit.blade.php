@extends('layouts.app_codebase')

@section('content')
    <section class="content-header">
        <h1>
            Informasi Tilang
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($informasiTilang, ['route' => ['informasiTilangs.update', $informasiTilang->id], 'method' => 'patch']) !!}

                        @include('informasi_tilangs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection