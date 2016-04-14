<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MaxUploadSize {

    public function handle(Request $request, Closure $next)
    {
        if ($request->getMethod() == 'POST') {

            // Get the max upload size (in Mb, so convert it to bytes)
            $maxUploadSize = 1024 * 1024 * ini_get('post_max_size');
            $contentSize = 0;

            if (isset($_SERVER['HTTP_CONTENT_LENGTH'])) {
                $contentSize = $_SERVER['HTTP_CONTENT_LENGTH'];
            } elseif (isset($_SERVER['CONTENT_LENGTH'])) {
                $contentSize = $_SERVER['CONTENT_LENGTH'];
            }

            if ($contentSize > $maxUploadSize) {
                throw new \Exception('upload too large, increase post_max_size, currently: '.ini_get('post_max_size').'');
            }

        }

        return $next($request);
    }

}
