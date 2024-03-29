<?php

namespace Illuminate\Contracts\View;

interface Engine
{
    /**
     * Get the evaluated contents of the views.
     *
     * @param  string  $path
     * @param  array  $data
     * @return string
     */
    public function get($path, array $data = []);
}
