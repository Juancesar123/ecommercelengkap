<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatetransaksiPembelianAPIRequest;
use App\Http\Requests\API\UpdatetransaksiPembelianAPIRequest;
use App\Models\transaksiPembelian;
use App\Repositories\transaksiPembelianRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class transaksiPembelianController
 * @package App\Http\Controllers\API
 */

class transaksiPembelianAPIController extends AppBaseController
{
    /** @var  transaksiPembelianRepository */
    private $transaksiPembelianRepository;

    public function __construct(transaksiPembelianRepository $transaksiPembelianRepo)
    {
        $this->transaksiPembelianRepository = $transaksiPembelianRepo;
    }

    /**
     * Display a listing of the transaksiPembelian.
     * GET|HEAD /transaksiPembelians
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $transaksiPembelians = $this->transaksiPembelianRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($transaksiPembelians->toArray(), 'Transaksi Pembelians retrieved successfully');
    }

    /**
     * Store a newly created transaksiPembelian in storage.
     * POST /transaksiPembelians
     *
     * @param CreatetransaksiPembelianAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatetransaksiPembelianAPIRequest $request)
    {
        $input = $request->all();

        $transaksiPembelian = $this->transaksiPembelianRepository->create($input);

        return $this->sendResponse($transaksiPembelian->toArray(), 'Transaksi Pembelian saved successfully');
    }

    /**
     * Display the specified transaksiPembelian.
     * GET|HEAD /transaksiPembelians/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var transaksiPembelian $transaksiPembelian */
        $transaksiPembelian = $this->transaksiPembelianRepository->find($id);

        if (empty($transaksiPembelian)) {
            return $this->sendError('Transaksi Pembelian not found');
        }

        return $this->sendResponse($transaksiPembelian->toArray(), 'Transaksi Pembelian retrieved successfully');
    }

    /**
     * Update the specified transaksiPembelian in storage.
     * PUT/PATCH /transaksiPembelians/{id}
     *
     * @param int $id
     * @param UpdatetransaksiPembelianAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransaksiPembelianAPIRequest $request)
    {
        $input = $request->all();

        /** @var transaksiPembelian $transaksiPembelian */
        $transaksiPembelian = $this->transaksiPembelianRepository->find($id);

        if (empty($transaksiPembelian)) {
            return $this->sendError('Transaksi Pembelian not found');
        }

        $transaksiPembelian = $this->transaksiPembelianRepository->update($input, $id);

        return $this->sendResponse($transaksiPembelian->toArray(), 'transaksiPembelian updated successfully');
    }

    /**
     * Remove the specified transaksiPembelian from storage.
     * DELETE /transaksiPembelians/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var transaksiPembelian $transaksiPembelian */
        $transaksiPembelian = $this->transaksiPembelianRepository->find($id);

        if (empty($transaksiPembelian)) {
            return $this->sendError('Transaksi Pembelian not found');
        }

        $transaksiPembelian->delete();

        return $this->sendSuccess('Transaksi Pembelian deleted successfully');
    }
}
