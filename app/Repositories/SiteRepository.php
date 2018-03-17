<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 17.03.2018
 * Time: 16:53
 */

namespace Kino\Repositories;

use Kino\Site;

class SiteRepository extends Repository
{
    public function __construct(Site $site)
    {
        $this->model = $site;
    }
}