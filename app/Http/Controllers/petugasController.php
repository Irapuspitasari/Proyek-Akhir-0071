<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepetugasRequest;
use App\Http\Requests\UpdatepetugasRequest;
use App\Repositories\petugasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class petugasController extends AppBaseController
{
    /** @var petugasRepository $petugasRepository*/
    private $petugasRepository;

    public function __construct(petugasRepository $petugasRepo)
    {
        $this->petugasRepository = $petugasRepo;
    }

    /**
     * Display a listing of the petugas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $petugas = $this->petugasRepository->all();

        return view('petugas.index')
            ->with('petugas', $petugas);
    }

    /**
     * Show the form for creating a new petugas.
     *
     * @return Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created petugas in storage.
     *
     * @param CreatepetugasRequest $request
     *
     * @return Response
     */
    public function store(CreatepetugasRequest $request)
    {
        $input = $request->all();

        $petugas = $this->petugasRepository->create($input);

        Flash::success('Petugas saved successfully.');

        return redirect(route('petugas.index'));
    }

    /**
     * Display the specified petugas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        return view('petugas.show')->with('petugas', $petugas);
    }

    /**
     * Show the form for editing the specified petugas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        return view('petugas.edit')->with('petugas', $petugas);
    }

    /**
     * Update the specified petugas in storage.
     *
     * @param int $id
     * @param UpdatepetugasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepetugasRequest $request)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        $petugas = $this->petugasRepository->update($request->all(), $id);

        Flash::success('Petugas updated successfully.');

        return redirect(route('petugas.index'));
    }

    /**
     * Remove the specified petugas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        $this->petugasRepository->delete($id);

        Flash::success('Petugas deleted successfully.');

        return redirect(route('petugas.index'));
    }
}
