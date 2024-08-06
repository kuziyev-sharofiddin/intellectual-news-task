<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DocumentRequest;
use App\Models\Document;
use App\Services\Admin\DocumentService;
use App\Services\Admin\ImageService;
use App\Services\Admin\PagesService;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Spatie\Image\Drivers\Concerns\ValidatesArguments;

class DocumentController extends Controller
{
    public function __construct(
        private readonly DocumentService $documentService,
    )
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $documents = $this->documentService->repo->getPaginate(10);
        return view('admin.pages.document.document_show', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.document.document_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentRequest $request)
    {
        $params = $request->validated();
        $this->documentService->repo->store($params);
        return redirect()->route('document.index')->with('success', 'Leader created successfully.');
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
        $document = $this->documentService->repo->getById($id);
        return view('admin.pages.document.document_edit')->with([
            'document' => $document,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentRequest $request, string $id)
    {
        $document = $this->documentService->repo->getById($id);
        $params = $request->validated();
        $document->update($params);
        return redirect()->route('document.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = $this->documentService->repo->getById($id);
        $document->delete();
        return redirect()->route('document.index');
    }
}
