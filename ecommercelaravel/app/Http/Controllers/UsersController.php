<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetransaksiPembelianRequest;
use App\Http\Requests\UpdatetransaksiPembelianRequest;
use App\Repositories\transaksiPembelianRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Response;

class UsersController extends AppBaseController
{
    /** @var  transaksiPembelianRepository */
    private $transaksiPembelianRepository;

    public function __construct(transaksiPembelianRepository $transaksiPembelianRepo)
    {
        $this->transaksiPembelianRepository = $transaksiPembelianRepo;
    }

    /**
     * Display a listing of the transaksiPembelian.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $datausers = DB::table('users')
        ->join('level','level.id','=','users.level_id')
        ->select('users.*','level.level')
        ->paginate(5);
        return view('users.index')
            ->with('datausers', $datausers);
    }

    /**
     * Show the form for creating a new transaksiPembelian.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created transaksiPembelian in storage.
     *
     * @param CreatetransaksiPembelianRequest $request
     *
     * @return Response
     */
    public function store(CreatetransaksiPembelianRequest $request)
    {
        // $input = $request->all();

        // $transaksiPembelian = $this->transaksiPembelianRepository->create($input);

        // Flash::success('Transaksi Pembelian saved successfully.');

        // return redirect(route('transaksiPembelians.index'));
    }

    /**
     * Display the specified transaksiPembelian.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $datausers = DB::table('users')
        ->join('level','level.id','=','users.level_id')
        ->select('users.*','level.level')
        ->where('users.id' ,'=',$id)
        ->first();
        if (empty($datausers)) {
            Flash::error('Data user not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('datausers', $datausers);
    }

    /**
     * Show the form for editing the specified transaksiPembelian.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified transaksiPembelian in storage.
     *
     * @param int $id
     * @param UpdatetransaksiPembelianRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransaksiPembelianRequest $request)
    {
       
    }

    /**
     * Remove the specified transaksiPembelian from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        // $transaksiPembelian = $this->transaksiPembelianRepository->find($id);

        // if (empty($transaksiPembelian)) {
        //     Flash::error('Transaksi Pembelian not found');

        //     return redirect(route('transaksiPembelians.index'));
        // }

        // $this->transaksiPembelianRepository->delete($id);

        // Flash::success('Transaksi Pembelian deleted successfully.');

        // return redirect(route('transaksiPembelians.index'));
    }
    public function block($id){
        DB::table('users')
        ->where('id', $id)
        ->update(['status' => 2]);
        Flash::success('a user blocked successfully.');
        return redirect(route('users.index'));
    }
}
