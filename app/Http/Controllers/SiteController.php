<?php

namespace Kino\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    protected $site_rep;

    protected $template;
    protected $vars = array();

    public function __construct()
    {
    }

    protected function renderOutput()
    {
        return view($this->template)->with($this->vars);
    }
}
