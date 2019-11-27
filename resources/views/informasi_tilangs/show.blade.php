@extends('layouts.app_codebase')

@section('content')
   {{-- <section class="content-heading">--}}
       {{-- <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title  font-size-lg text-black mb-5">View Informasi Tilang</h3>
                </div>
            </div>
        </div>--}}
       {{-- <div class="row row-deck gutters-tiny">
        <h1>
            Informasi Tilang
        </h1>
        </div>--}}
  {{--  </section>--}}
   {{-- <div class="content">
        <div class="box box-primary">
            <div class="box-body">--}}
              {{--  <div class="row" style="padding-left: 20px">--}}
    <div class="block-content">
                    @include('informasi_tilangs.show_fields')
        <h1 class="fa-pull-left">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('informasiTilangs.index') !!}">BACK</a>
        </h1>
                   {{-- <a href="{!! route('informasiTilangs.index') !!}" class="btn btn-default">Back</a>--}}
    </div>
    {{--    </div>--}}

    {{--        </div>
        </div>
    </div>--}}
@endsection
