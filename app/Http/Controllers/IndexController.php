<?php

namespace Kino\Http\Controllers;

use Illuminate\Http\Request;
use Kino\Service\CURLService;

include_once __DIR__.'\..\..\..\public\blacked\htmldom\simple_html_dom.php';

class IndexController extends SiteController
{
    protected $cURL = FALSE;

    public function __construct(CURLService $cURL)
    {
        parent::__construct();

        $this->cURL = $cURL->curl('http://od.kinoodessa.com/');
        $this->template = env('THEME') . '.index';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Список

        $dom = str_get_html($this->cURL);
        $kino = $dom->find('.poster');
        /*dd($kino);*/
        $this->vars = array_add($this->vars, 'curl', $kino);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Добовление форма
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ПОСТ сограние записей
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // отбражение некоторого данного
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Форма редактирование
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Обновление информации
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Удаление элеиента
    }
}
