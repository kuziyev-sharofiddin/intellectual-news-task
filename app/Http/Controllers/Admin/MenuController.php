<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuRequest;
use App\Services\Admin\MenuService;
use App\Services\Admin\PagesService;
use Illuminate\Pagination\Paginator;

class MenuController extends Controller
{
    public function __construct(
        private readonly MenuService $menuService,
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
        $pages = $this->pagesService->repo->getQuery()->get();
        $menus = $this->menuService->repo->getPaginate(10);
        return view('admin.pages.menus.menu_show', compact('menus', 'pages'));
    }

    public  function show()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages = $this->pagesService->repo->getQuery()->get();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->get();
        return view('admin.pages.menus.menu_create', compact('menus','pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        $params = $request->validated();
        $this->menuService->repo->store($params);
        return redirect()->route('menus.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pages = $this->pagesService->repo->getQuery()->get();
        $menu = $this->menuService->repo->getById($id);
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->get();
        return view('admin.pages.menus.menu_edit')->with([
            'menu'=> $menu,
            'menus' => $menus,
            'pages' => $pages
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, string $id)
    {
        $menu = $this->menuService->repo->getById($id);
        $params = $request->validated();
        $menu->update($params);
        return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = $this->menuService->repo->getById($id);
        $menu->delete();
        return redirect()->route('menus.index');
    }
}
