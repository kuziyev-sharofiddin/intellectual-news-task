<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Leader;
use App\Models\Menu;
use App\Models\Pages;
use App\Services\Admin\DocumentService;
use App\Services\Admin\LeaderService;
use App\Services\Admin\MenuService;
use App\Services\Admin\PagesService;


class MainController extends Controller
{
    public function __construct(
        private readonly MenuService $menuService,
        private readonly PagesService $pagesService,
        private readonly LeaderService $leaderService,
        private readonly DocumentService $documentService,
    )
    {
    }
    public function index()
    {
        $news =$this->pagesService->repo->getQuery()->where(['name'=> 'news'])->paginate(10);
        $links = $this->pagesService->repo->getQuery()->where(['name'=> 'usefull_links'])->paginate(10);
        $events = $this->pagesService->repo->getQuery()->where(['name'=> 'events'])->paginate(10);
        $services = $this->pagesService->repo->getQuery()->where(['name'=> 'center_services'])->paginate(10);
        foreach ($news as $new) {
            $new->increment('views_count');
        }
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.home', compact('menus', 'subMenus','news', 'services','events', 'links'));
    }

    public function events()
    {
        $events = $this->pagesService->repo->getQuery()->where(['name'=> 'events'])->paginate(10);

        foreach ($events as $event) {
            $event->increment('views_count');
        }
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.events.events', compact('menus', 'subMenus','events'));
    }

    public function interactive($tag) {
        $interacts = $this->pagesService->repo->getQuery()->where(['name'=> $tag])->paginate(10);
        $doc = $this->menuService->repo->getQuery()->where(['url_value' => $tag])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.pages.interactive', compact('menus', 'subMenus', 'interacts','doc'));
    }

    public function openData($id)
    {

        $page = $this->pagesService->repo->getById($id);
        $doc = $this->menuService->repo->getQuery()->where(['title' => $page->name])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.open_data.corruption_fight', compact('menus','page', 'subMenus', 'doc'));
    }

    public function centerNews($tag)
    {
        $news = $this->pagesService->repo->getQuery()->where(['name'=> $tag])->paginate(10);
        foreach ($news as $new) {
            $new->increment('views_count');
        }
        $doc = $this->menuService->repo->getQuery()->where(['url_value' => $tag])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.mediateka.center_news', compact('menus', 'subMenus', 'news','doc'));
    }
    public function show($id)
    {
        $news = $this->pagesService->repo->getQuery()->where(['name'=> 'news'])->paginate(10);
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        $new = $this->pagesService->repo->getQuery()->where(['name'=> 'news'])->findOrFail($id);
        $new->increment('views_count');
        return view('intelectual.mediateka.show_new', compact('new','menus','news'));
    }
    public function press($tag)
    {
        $news = $this->pagesService->repo->getQuery()->where(['name'=> $tag])->paginate(10);
        foreach ($news as $new) {
            $new->increment('views_count');
        }
        $doc = $this->menuService->repo->getQuery()->where(['url_value' => $tag])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.mediateka.press_releases', compact('menus', 'subMenus', 'news','doc'));
    }
    public function connections($id)
    {
        $page = $this->pagesService->repo->getById($id);
        $doc = $this->menuService->repo->getQuery()->where(['title' => $page->name])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.connection.contacts', compact('menus', 'subMenus', 'page', 'doc'));
    }
    public function manyQuestions()
    {
        $pages = $this->pagesService->repo->getQuery()->where(['name' => 'many_questions'])->get();
        $doc = $this->menuService->repo->getQuery()->where(['url_type' => 'many_questions'])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.connection.many_questions', compact('menus','pages', 'subMenus', 'doc'));
    }

    public function cooperation($id)
    {
        $page = $this->pagesService->repo->getById($id);
        $doc = $this->menuService->repo->getQuery()->where(['title' => $page->name])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();

        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.cooperation.cooperation', compact('menus', 'subMenus', 'page', 'doc'));
    }

    public function documents($tag)
    {
        $documents = $this->documentService->repo->getQuery()->where(['tag' => $tag])->paginate(10);
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        $doc = $this->menuService->repo->getQuery()->where(['url_value' => $tag])->first();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.document.international_documents', compact('menus', 'subMenus', 'documents', 'doc'));
    }
    public function mainActivity($id)
    {
        $page = $this->pagesService->repo->getById($id);
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();

        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.main_activity.inventory_models', compact('menus', 'subMenus', 'page'));
    }

    public function historyCenter($id)
    {
        $page = $this->pagesService->repo->getById($id);
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();

        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.about_center.history_center', compact('menus', 'subMenus', 'page'));
    }

    public function news($id)
    {
        $page = $this->pagesService->repo->getById($id);
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.about_center.task_function', compact('menus', 'subMenus', 'page'));
    }
    public function structureCenter($id)
    {
        $page = $this->pagesService->repo->getById($id);
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.about_center.structure_center', compact('menus', 'subMenus', 'page'));
    }

    public function leaderShip($tag)
    {
        $leaders = $this->leaderService->repo->getQuery()->where(['title'=> $tag])->paginate(10);
        $doc = $this->menuService->repo->getQuery()->where(['url_value'=>$tag])->first();
        $menus = $this->menuService->repo->getQuery()->whereNull('parent_id')->orderBy('created_at','asc')->get();
        foreach ($menus as $menu) {
            $subMenus = $menu->subMenus($menu->id);
        }
        return view('intelectual.about_center.leadership', compact('menus', 'subMenus', 'doc','leaders'));
    }

}
