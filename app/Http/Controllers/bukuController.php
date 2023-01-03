<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebukuRequest;
use App\Http\Requests\UpdatebukuRequest;
use App\Repositories\bukuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class bukuController extends AppBaseController
{
    /** @var bukuRepository $bukuRepository*/
    private $bukuRepository;

    public function __construct(bukuRepository $bukuRepo)
    {
        $this->bukuRepository = $bukuRepo;
    }

    /**
     * Display a listing of the buku.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bukus = $this->bukuRepository->all();

        return view('bukus.index')
            ->with('bukus', $bukus);
    }

    /**
     * Show the form for creating a new buku.
     *
     * @return Response
     */
    public function create()
    {
        return view('bukus.create');
    }

    /**
     * Store a newly created buku in storage.
     *
     * @param CreatebukuRequest $request
     *
     * @return Response
     */
    public function store(CreatebukuRequest $request)
    {
        $input = $request->all();

        $buku = $this->bukuRepository->create($input);

        Flash::success('Buku saved successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Display the specified buku.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $buku = $this->bukuRepository->find($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        return view('bukus.show')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified buku.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buku = $this->bukuRepository->find($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        return view('bukus.edit')->with('buku', $buku);
    }

    /**
     * Update the specified buku in storage.
     *
     * @param int $id
     * @param UpdatebukuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebukuRequest $request)
    {
        $buku = $this->bukuRepository->find($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        $buku = $this->bukuRepository->update($request->all(), $id);

        Flash::success('Buku updated successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Remove the specified buku from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $buku = $this->bukuRepository->find($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        $this->bukuRepository->delete($id);

        Flash::success('Buku deleted successfully.');

        return redirect(route('bukus.index'));
    }
}
