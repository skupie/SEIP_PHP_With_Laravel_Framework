<?php


namespace App\classes;
use App\classes\Menu;
use App\classes\Content;

class Home
{
    public $content, $contents = [], $menu, $menus = [], $singleContent;


    public function __construct()
    {
        $this->menu = new Menu();
        $this->menus = $this->menu->getAllCategory();

    }

    public function index()
    {
        $this->content = new Content();
        $this->contents = $this->content->getAllContents();

        return view('home',['content' => $this->contents, 'menus' => $this->menus]);
    }

    public function menuContent($id)
    {
        $this->content = new Content();
        $this->contents = $this->content->getMenuContent($id);

        return view('menu',['menus' => $this->menus, 'contents' => $this->contents]);
    }

    public function contentDetail($id)
    {
        $this->content = new Content();
        $this->singleContent = $this->content->getContentById($id);

        return view('detail', ['menus' => $this->menus, 'content' => $this->singleContent]);
    }
}