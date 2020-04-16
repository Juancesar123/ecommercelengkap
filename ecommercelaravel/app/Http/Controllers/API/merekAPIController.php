<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatemerekAPIRequest;
use App\Http\Requests\API\UpdatemerekAPIRequest;
use App\Models\merek;
use App\Repositories\merekRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class merekController
 * @package App\Http\Controllers\API
 */

class merekAPIController extends AppBaseController
{
    /** @var  merekRepository */
    private $merekRepository;

    public function __construct(merekRepository $merekRepo)
    {
        $this->merekRepository = $merekRepo;
    }

    /**
     * Display a listing of the merek.
     * GET|HEAD /mereks
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $mereks = $this->merekRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($mereks->toArray(), 'Mereks retrieved successfully');
    }

    /**
     * Store a newly created merek in storage.
     * POST /mereks
     *
     * @param CreatemerekAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatemerekAPIRequest $request)
    {
        $input = $request->all();

        $merek = $this->merekRepository->create($input);

        return $this->sendResponse($merek->toArray(), 'Merek saved successfully');
    }

    /**
     * Display the specified merek.
     * GET|HEAD /mereks/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var merek $merek */
        $merek = $this->merekRepository->find($id);

        if (empty($merek)) {
            return $this->sendError('Merek not found');
        }

        return $this->sendResponse($merek->toArray(), 'Merek retrieved successfully');
    }

    /**
     * Update the specified merek in storage.
     * PUT/PATCH /mereks/{id}
     *
     * @param int $id
     * @param UpdatemerekAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemerekAPIRequest $request)
    {
        $input = $request->all();

        /** @var merek $merek */
        $merek = $this->merekRepository->find($id);

        if (empty($merek)) {
            return $this->sendError('Merek not found');
        }

        $merek = $this->merekRepository->update($input, $id);

        return $this->sendResponse($merek->toArray(), 'merek updated successfully');
    }

    /**
     * Remove the specified merek from storage.
     * DELETE /mereks/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var merek $merek */
        $merek = $this->merekRepository->find($id);

        if (empty($merek)) {
            return $this->sendError('Merek not found');
        }

        $merek->delete();

        return $this->sendSuccess('Merek deleted successfully');
    }
}
