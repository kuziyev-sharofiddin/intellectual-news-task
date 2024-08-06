<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LeaderRequest;
use App\Services\Admin\LeaderService;
use App\Services\Admin\MenuService;
use App\Services\Admin\PagesService;
use Illuminate\Http\Request;
use App\Models\Leader;
use Illuminate\Pagination\Paginator;


class LeaderController extends Controller
{

    public function __construct(
        private readonly LeaderService $leaderService,
    )
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        $leaders = $this->leaderService->repo->getPaginate(10);;
        return view('admin.pages.leader.leader_show', compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.leader.leader_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LeaderRequest $request)
    {
        $params = $request->validated();
        $leader = $this->leaderService->repo->store($params);

        if (isset($params['image'])) {
            $leader->addMediaFromRequest('image')->toMediaCollection('images');
        } elseif (isset($params['file'])) {
            $leader->addMediaFromRequest('file')->toMediaCollection('file');
        }
        return redirect()->route('leaders.index')->with('success', 'Leader created successfully.');
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
        $leader = $this->leaderService->repo->getById($id);
        return view('admin.pages.leader.leader_edit')->with([
            'leader' => $leader,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LeaderRequest $request, string $id)
    {
        $leader = $this->leaderService->repo->getById($id);
        $params = $request->validated();
        $leader->update($params);
        if ($request->hasFile('image')) {
            $leader->clearMediaCollection('images');
            $leader->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('leaders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leader = $this->leaderService->repo->getById($id);
        $leader->clearMediaCollection('images');
        $leader->delete();
        return redirect()->route('leaders.index');
    }
}
