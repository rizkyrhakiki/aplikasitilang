<div class="table-responsive">
    <table class="table" id="informasiTilangs-table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
               {{-- <th>Kota</th>--}}
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($informasiTilangs as $informasiTilang)
            <tr>
                {{--<td>{!! $informasiTilang->file !!}</td>--}}
                <td><img src="{{ asset('storage/' . $informasiTilang->foto) }}" class="img-fluid" style="max-width: 60px" alt="{{ $informasiTilang->nama }}"></td>
                <td>{!! $informasiTilang->nama !!}</td>
                <td>{!! $informasiTilang->tanggal_mulai !!}</td>
                <td>{!! $informasiTilang->tanggal_selesai !!}</td>
               {{-- <td>{!! $informasiTilang->kota !!}</td>--}}
                <td>{!! $informasiTilang->lokasi !!}</td>
                <td>{!! $informasiTilang->keterangan !!}</td>
                <td>
                    {!! Form::open(['route' => ['informasiTilangs.destroy', $informasiTilang->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('informasiTilangs.show', [$informasiTilang->id]) !!}" class='btn btn-sm btn-secondary'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('informasiTilangs.edit', [$informasiTilang->id]) !!}" class=' btn btn-sm btn-secondary fa fa-pencil'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-secondary fa fa-times', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
