<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class RandomNumber extends Tags
{
    /**
     * The {{ random_number }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $limit_lower = $this->params->get('lower', 10);
        $limit_upper = $this->params->get('upper', 100);

        return rand($limit_lower, $limit_upper);
    }

    /**
     * The {{ random_number:example }} tag.
     *
     * @return string|array
     */
    public function example()
    {
        //
    }
}
