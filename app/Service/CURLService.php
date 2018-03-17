<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 17.03.2018
 * Time: 16:58
 */

namespace Kino\Service;


class CURLService extends Service
{
    protected $cURL = FALSE;

    public function curl($url, $prev_site = 'http://www.google.com')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0");
        curl_setopt($ch, CURLOPT_REFERER, $prev_site);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

}