<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateblogsRequest;
use App\Http\Requests\UpdateblogsRequest;
use App\Repositories\blogsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class blogsController extends AppBaseController
{
    /** @var  blogsRepository */
    private $blogsRepository;

    public function __construct(blogsRepository $blogsRepo)
    {
        $this->blogsRepository = $blogsRepo;
    }

    /**
     * Display a listing of the blogs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogs = $this->blogsRepository->all();

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new blogs.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created blogs in storage.
     *
     * @param CreateblogsRequest $request
     *
     * @return Response
     */
    public function store(CreateblogsRequest $request)
    {
        $input = $request->all();

        $blogs = $this->blogsRepository->create($input);

        Flash::success('Blogs saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified blogs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blogs', $blogs);
    }

    /**
     * Show the form for editing the specified blogs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blogs', $blogs);
    }

    /**
     * Update the specified blogs in storage.
     *
     * @param int $id
     * @param UpdateblogsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateblogsRequest $request)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $blogs = $this->blogsRepository->update($request->all(), $id);

        Flash::success('Blogs updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified blogs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $this->blogsRepository->delete($id);

        Flash::success('Blogs deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
