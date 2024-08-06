<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PagesRequest;
use App\Services\Admin\PagesService;
use Illuminate\Pagination\Paginator;

class PagesController extends Controller
{
    public function __construct(
        private readonly PagesService $pagesService,
    )
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $pages = $this->pagesService->repo->getQuery()->orderBy('created_at','desc')->paginate(10);
        return view('admin.pages.sheets.sheets_show', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sheets.sheets_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PagesRequest $request)
    {

        $params = $request->validated();
        $page = $this->pagesService->repo->store($params);

        if (isset($request['image'])) {

            $page->addMediaFromRequest('image')->toMediaCollection('images');
        } elseif (isset($request['file'])) {
            $page->addMediaFromRequest('file')->toMediaCollection('file');
        }

        return redirect()->route('sheets.index')->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = $this->pagesService->repo->getById($id);
        return view('admin.pages.sheets.sheets_edit')->with([
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PagesRequest $request, string $id)
    {

        $page = $this->pagesService->repo->getById($id);
        $params = $request->validated();
        $page->update($params);
        if ($request->hasFile('image')) {
            $page->clearMediaCollection('images');
            $page->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('sheets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = $this->pagesService->repo->getById($id);
        $page->clearMediaCollection('images');
        $page->delete();
        return redirect()->route('sheets.index');
    }
}
