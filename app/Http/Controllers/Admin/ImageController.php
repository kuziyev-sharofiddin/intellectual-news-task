<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ImageService;
use App\Services\Admin\PagesService;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ImageController extends Controller
{
    public function __construct(
        private readonly ImageService $imageService,
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
        $images = $this->imageService->repo->getPaginate(10);
        return view('admin.pages.images.image_show', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages = $this->pagesService->repo->getQuery()->get();
        return view('admin.pages.images.image_create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = [
            'page_id' => $request->page_id,
        ];

        $image = $this->imageService->repo->store($params);

        if (isset($request['image'])) {

            $image->addMediaFromRequest('image')->toMediaCollection('images');
        } elseif (isset($request['file'])) {
            $image->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('images.index')->with('success', 'Leader created successfully.');
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
        $pages = $this->pagesService->repo->getQuery()->get();
        $image = $this->imageService->repo->getById($id);
        return view('admin.pages.images.image_edit')->with([
            'image' => $image,
            'pages'=> $pages
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = $this->imageService->repo->getById($id);
        $image->page_id = $request->page_id;
        $image->save();
        if ($request->hasFile('image')) {
            $image->clearMediaCollection('images');
            $image->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('images.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = $this->imageService->repo->getById($id);
        $image->clearMediaCollection('images');
        $image->delete();
        return redirect()->route('images.index');
    }
}
