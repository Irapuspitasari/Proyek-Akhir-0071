<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateanggotaRequest;
use App\Http\Requests\UpdateanggotaRequest;
use App\Repositories\anggotaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class anggotaController extends AppBaseController
{
    /** @var anggotaRepository $anggotaRepository*/
    private $anggotaRepository;

    public function __construct(anggotaRepository $anggotaRepo)
    {
        $this->anggotaRepository = $anggotaRepo;
    }

    /**
     * Display a listing of the anggota.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $anggotas = $this->anggotaRepository->all();

        return view('anggotas.index')
            ->with('anggotas', $anggotas);
    }

    /**
     * Show the form for creating a new anggota.
     *
     * @return Response
     */
    public function create()
    {
        return view('anggotas.create');
    }

    /**
     * Store a newly created anggota in storage.
     *
     * @param CreateanggotaRequest $request
     *
     * @return Response
     */
    public function store(CreateanggotaRequest $request)
    {
        $input = $request->all();

        $anggota = $this->anggotaRepository->create($input);

        Flash::success('Anggota saved successfully.');

        return redirect(route('anggotas.index'));
    }

    /**
     * Display the specified anggota.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $anggota = $this->anggotaRepository->find($id);

        if (empty($anggota)) {
            Flash::error('Anggota not found');

            return redirect(route('anggotas.index'));
        }

        return view('anggotas.show')->with('anggota', $anggota);
    }

    /**
     * Show the form for editing the specified anggota.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $anggota = $this->anggotaRepository->find($id);

        if (empty($anggota)) {
            Flash::error('Anggota not found');

            return redirect(route('anggotas.index'));
        }

        return view('anggotas.edit')->with('anggota', $anggota);
    }

    /**
     * Update the specified anggota in storage.
     *
     * @param int $id
     * @param UpdateanggotaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateanggotaRequest $request)
    {
        $anggota = $this->anggotaRepository->find($id);

        if (empty($anggota)) {
            Flash::error('Anggota not found');

            return redirect(route('anggotas.index'));
        }

        $anggota = $this->anggotaRepository->update($request->all(), $id);

        Flash::success('Anggota updated successfully.');

        return redirect(route('anggotas.index'));
    }

    /**
     * Remove the specified anggota from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $anggota = $this->anggotaRepository->find($id);

        if (empty($anggota)) {
            Flash::error('Anggota not found');

            return redirect(route('anggotas.index'));
        }

        $this->anggotaRepository->delete($id);

        Flash::success('Anggota deleted successfully.');

        return redirect(route('anggotas.index'));
    }
}
