<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class Bardypants extends Modifier
{
    /*
     This is super dumb. It relies on the authour ALWAYS closing " and only using single '
     */
    public function index($value, $params, $context)
    {
        $patterns = Array(
            '/&quot;(.+?)&quot;/' => '&#8220;$1&#8221;',
            '/&#039;/' => '&#8217;'
        );
        return preg_replace(array_keys($patterns), $patterns, $value);
    }
}
