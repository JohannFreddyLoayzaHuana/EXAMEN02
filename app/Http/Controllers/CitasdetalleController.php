<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCitasdetalleRequest;
use App\Http\Requests\UpdateCitasdetalleRequest;
use App\Repositories\CitasdetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CitasdetalleController extends AppBaseController
{
    /** @var  CitasdetalleRepository */
    private $citasdetalleRepository;

    public function __construct(CitasdetalleRepository $citasdetalleRepo)
    {
        $this->citasdetalleRepository = $citasdetalleRepo;
    }

    /**
     * Display a listing of the Citasdetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citasdetalles = $this->citasdetalleRepository->all();

        return view('citasdetalles.index')
            ->with('citasdetalles', $citasdetalles);
    }

    /**
     * Show the form for creating a new Citasdetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('citasdetalles.create');
    }

    /**
     * Store a newly created Citasdetalle in storage.
     *
     * @param CreateCitasdetalleRequest $request
     *
     * @return Response
     */
    public function store(CreateCitasdetalleRequest $request)
    {
        $input = $request->all();

        $citasdetalle = $this->citasdetalleRepository->create($input);

        Flash::success('Citasdetalle saved successfully.');

        return redirect(route('citasdetalles.index'));
    }

    /**
     * Display the specified Citasdetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citasdetalle = $this->citasdetalleRepository->find($id);

        if (empty($citasdetalle)) {
            Flash::error('Citasdetalle not found');

            return redirect(route('citasdetalles.index'));
        }

        return view('citasdetalles.show')->with('citasdetalle', $citasdetalle);
    }

    /**
     * Show the form for editing the specified Citasdetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citasdetalle = $this->citasdetalleRepository->find($id);

        if (empty($citasdetalle)) {
            Flash::error('Citasdetalle not found');

            return redirect(route('citasdetalles.index'));
        }

        return view('citasdetalles.edit')->with('citasdetalle', $citasdetalle);
    }

    /**
     * Update the specified Citasdetalle in storage.
     *
     * @param int $id
     * @param UpdateCitasdetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCitasdetalleRequest $request)
    {
        $citasdetalle = $this->citasdetalleRepository->find($id);

        if (empty($citasdetalle)) {
            Flash::error('Citasdetalle not found');

            return redirect(route('citasdetalles.index'));
        }

        $citasdetalle = $this->citasdetalleRepository->update($request->all(), $id);

        Flash::success('Citasdetalle updated successfully.');

        return redirect(route('citasdetalles.index'));
    }

    /**
     * Remove the specified Citasdetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citasdetalle = $this->citasdetalleRepository->find($id);

        if (empty($citasdetalle)) {
            Flash::error('Citasdetalle not found');

            return redirect(route('citasdetalles.index'));
        }

        $this->citasdetalleRepository->delete($id);

        Flash::success('Citasdetalle deleted successfully.');

        return redirect(route('citasdetalles.index'));
    }
}
