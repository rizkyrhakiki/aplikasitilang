<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInformasiTilangRequest;
use App\Http\Requests\UpdateInformasiTilangRequest;
use App\Models\InformasiTilang;
use App\Models\Kota;
use App\Repositories\InformasiTilangRepository;
use App\Http\Controllers\AppBaseController;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Flash;
use Response;

class InformasiTilangController extends AppBaseController
{
    /** @var  InformasiTilangRepository */
    private $informasiTilangRepository;

    public function __construct(InformasiTilangRepository $informasiTilangRepo)
    {
        $this->informasiTilangRepository = $informasiTilangRepo;
    }

    /**
     * Display a listing of the InformasiTilang.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $informasiTilangs = $this->informasiTilangRepository->all();
        $kotas = Kota::all();

        return view('informasi_tilangs.index', compact('kotas'))
            ->with('informasiTilangs', $informasiTilangs);
    }

    public function dataInfoTilang()
    {
        $informasiTilangs = $this->informasiTilangRepository->all();
        $dataTilang['title'] = 'Infromasi Jadwal Tilang';
        $dataTilang['result'] = $informasiTilangs;
        return response()->json($dataTilang);
    }
    public function dataLokasi() {
        $dataLokasi = InformasiTilang::select('lokasi')->get();
        $dataTilang['title'] = 'Infromasi Lokasi Tilang';
        $dataTilang['result'] = $dataLokasi;
        return response()->json($dataLokasi);
    }

    /**
     * Show the form for creating a new InformasiTilang.
     *
     * @return Response
     */
    public function create()
    {
       $kotas = Kota::all()->pluck('name','id');
        return view('informasi_tilangs.create', compact('kotas'));
    }

    public function kotas(){
        $kotas = Kota::all();
        return view('informasi_tilangs@create');
    }

    public function upload(){
        $file = InformasiTilang::get();

        return view('upload',['file' => $file]);
    }
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        /*    'keterangan' => 'required',*/

        ]);

        // menyimpan data file yang diupload ke variabel $fil
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'app/public/data_file';
        $file->move($tujuan_upload,$nama_file);

        InformasiTilang::create([
            'file' => $nama_file,
           /* 'keterangan' => $request->keterangan,*/
        ]);
        // upload file
//        $file->move($tujuan_upload,$file->getClientOriginalName());
        return redirect()->back();
    }

    /**
     * Store a newly created InformasiTilang in storage.
     *
     * @param CreateInformasiTilangRequest $request
     *
     * @return Response
     */
    public function store(CreateInformasiTilangRequest $request)
    {
        $input = $request->all();

        $informasiTilang = $this->informasiTilangRepository->create($input);
        Flash::success('Informasi Tilang saved successfully.');

        return redirect(route('informasiTilangs.index'));
    }

    /**
     * Display the specified InformasiTilang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $informasiTilang = $this->informasiTilangRepository->find($id);

        if (empty($informasiTilang)) {
            Flash::error('Informasi Tilang not found');

            return redirect(route('informasiTilangs.index'));
        }


        return view('informasi_tilangs.show')->with('informasiTilang', $informasiTilang);
    }

    public function detail($id)
    {
        $informasiTilang = $this->informasiTilangRepository->find($id);

        if (empty($informasiTilang)) {
            Flash::error('Informasi Tilang not found');

            return redirect(route('informasiTilangs.index'));
        }
        return view('detail')->with('informasiTilang', $informasiTilang);

    }

    /**
     * Show the form for editing the specified InformasiTilang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $informasiTilang = $this->informasiTilangRepository->find($id);
        $kotas = Kota::all()->pluck('name','id');

        if (empty($informasiTilang)) {
            Flash::error('Informasi Tilang not found');

            return redirect(route('informasiTilangs.index'));
        }

        return view('informasi_tilangs.edit')->with('informasiTilang', $informasiTilang, compact('kotas'));
    }

    /**
     * Update the specified InformasiTilang in storage.
     *
     * @param int $id
     * @param UpdateInformasiTilangRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInformasiTilangRequest $request)
    {
        $informasiTilang = $this->informasiTilangRepository->find($id);

        if (empty($informasiTilang)) {
            Flash::error('Informasi Tilang not found');

            return redirect(route('informasiTilangs.index'));
        }

        $informasiTilang = $this->informasiTilangRepository->update($request->all(), $id);

        Flash::success('Informasi Tilang updated successfully.');

        return redirect(route('informasiTilangs.index'));
    }

    /**
     * Remove the specified InformasiTilang from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $informasiTilang = $this->informasiTilangRepository->find($id);

        if (empty($informasiTilang)) {
            Flash::error('Informasi Tilang not found');

            return redirect(route('informasiTilangs.index'));
        }

        $this->informasiTilangRepository->delete($id);

        Flash::success('Informasi Tilang deleted successfully.');

        return redirect(route('informasiTilangs.index'));
    }
}
