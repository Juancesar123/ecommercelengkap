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

class transaksiPembelianController extends AppBaseController
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
        $transaksiPembelians = DB::table('transaksi_pembelian')
        ->join('products', 'products.id', '=', 'transaksi_pembelian.product_id')
        ->select('transaksi_pembelian.*', 'products.product_name')
        ->whereNull('products.deleted_at')
        ->paginate(5);
        return view('transaksi_pembelians.index')
            ->with('transaksiPembelians', $transaksiPembelians);
    }

    /**
     * Show the form for creating a new transaksiPembelian.
     *
     * @return Response
     */
    public function create()
    {
        return view('transaksi_pembelians.create');
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
        $input = $request->all();

        $transaksiPembelian = $this->transaksiPembelianRepository->create($input);

        Flash::success('Transaksi Pembelian saved successfully.');

        return redirect(route('transaksiPembelians.index'));
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
        $transaksiPembelian = DB::table('transaksi_pembelian')
        ->join('products', 'products.id', '=', 'transaksi_pembelian.product_id')
        ->select('transaksi_pembelian.*', 'products.product_name')
        ->where('transaksi_pembelian.id' ,'=',$id)
        ->first();
        if (empty($transaksiPembelian)) {
            Flash::error('Transaksi Pembelian not found');

            return redirect(route('transaksiPembelians.index'));
        }

        return view('transaksi_pembelians.show')->with('transaksiPembelian', $transaksiPembelian);
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
        //$transaksiPembelian = $this->transaksiPembelianRepository->find($id);
        $transaksiPembelian = DB::table('transaksi_pembelian')
        ->join('products', 'products.id', '=', 'transaksi_pembelian.product_id')
        ->select('transaksi_pembelian.*', 'products.product_name')
        ->where('transaksi_pembelian.id' ,'=',$id)
        ->first();
        if (empty($transaksiPembelian)) {
            Flash::error('Transaksi Pembelian not found');

            return redirect(route('transaksiPembelians.index'));
        }

        return view('transaksi_pembelians.edit')->with('transaksiPembelian', $transaksiPembelian);
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
        $transaksiPembelian = $this->transaksiPembelianRepository->find($id);

        if (empty($transaksiPembelian)) {
            Flash::error('Transaksi Pembelian not found');

            return redirect(route('transaksiPembelians.index'));
        }

        $transaksiPembelian = $this->transaksiPembelianRepository->update($request->all(), $id);

        Flash::success('Transaksi Pembelian updated successfully.');

        return redirect(route('transaksiPembelians.index'));
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
        $transaksiPembelian = $this->transaksiPembelianRepository->find($id);

        if (empty($transaksiPembelian)) {
            Flash::error('Transaksi Pembelian not found');

            return redirect(route('transaksiPembelians.index'));
        }

        $this->transaksiPembelianRepository->delete($id);

        Flash::success('Transaksi Pembelian deleted successfully.');

        return redirect(route('transaksiPembelians.index'));
    }
}
