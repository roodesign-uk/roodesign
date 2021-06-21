<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Og extends Tags
{
    /**
     * The {{ og }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

    /**
     * The {{ og:example }} tag.
     *
     * @return string|array
     */
    public function xy()
    {
        $limit_lower = $this->params->get('lower', 10);
        $limit_upper = $this->params->get('upper', 100);
        return rand($limit_lower, $limit_upper);
    }
    public function rotate() {
        $array = [0,90,180,270];
        return $array[array_rand($array)];
    }
    public function colour() {
        $array = ['7B05E2','A313D0','004ADB'];
        return $array[array_rand($array)];
    }
}
