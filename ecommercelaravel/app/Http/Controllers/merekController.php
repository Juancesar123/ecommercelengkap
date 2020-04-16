<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemerekRequest;
use App\Http\Requests\UpdatemerekRequest;
use App\Repositories\merekRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class merekController extends AppBaseController
{
    /** @var  merekRepository */
    private $merekRepository;

    public function __construct(merekRepository $merekRepo)
    {
        $this->merekRepository = $merekRepo;
    }

    /**
     * Display a listing of the merek.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mereks = $this->merekRepository->all();

        return view('mereks.index')
            ->with('mereks', $mereks);
    }

    /**
     * Show the form for creating a new merek.
     *
     * @return Response
     */
    public function create()
    {
        return view('mereks.create');
    }

    /**
     * Store a newly created merek in storage.
     *
     * @param CreatemerekRequest $request
     *
     * @return Response
     */
    public function store(CreatemerekRequest $request)
    {
        $input = $request->all();

        $merek = $this->merekRepository->create($input);

        Flash::success('Merek saved successfully.');

        return redirect(route('mereks.index'));
    }

    /**
     * Display the specified merek.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $merek = $this->merekRepository->find($id);

        if (empty($merek)) {
            Flash::error('Merek not found');

            return redirect(route('mereks.index'));
        }

        return view('mereks.show')->with('merek', $merek);
    }

    /**
     * Show the form for editing the specified merek.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $merek = $this->merekRepository->find($id);

        if (empty($merek)) {
            Flash::error('Merek not found');

            return redirect(route('mereks.index'));
        }

        return view('mereks.edit')->with('merek', $merek);
    }

    /**
     * Update the specified merek in storage.
     *
     * @param int $id
     * @param UpdatemerekRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemerekRequest $request)
    {
        $merek = $this->merekRepository->find($id);

        if (empty($merek)) {
            Flash::error('Merek not found');

            return redirect(route('mereks.index'));
        }

        $merek = $this->merekRepository->update($request->all(), $id);

        Flash::success('Merek updated successfully.');

        return redirect(route('mereks.index'));
    }

    /**
     * Remove the specified merek from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $merek = $this->merekRepository->find($id);

        if (empty($merek)) {
            Flash::error('Merek not found');

            return redirect(route('mereks.index'));
        }

        $this->merekRepository->delete($id);

        Flash::success('Merek deleted successfully.');

        return redirect(route('mereks.index'));
    }
}
