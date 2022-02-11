<?php
/**
 * Created by PhpStorm.
 * User: chaimeng
 * Date: 2022/2/11
 * Time: 15:16
 */

namespace Chaimeng\Http;
class Net {
    public function curl($url)
    {
        $content = file_get_contents($url);
        return $content;
    }
}