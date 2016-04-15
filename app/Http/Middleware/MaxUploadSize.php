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
                throw new \Exception('The files uploaded exceed your post_max_size ini directive (limit is ' . ini_get('post_max_size') . ')');
            }

            $uploads = $request->allFiles();

            if (!empty($uploads)) {
                foreach ($uploads as $upload) {
                    if ($upload->getError()) {
                        throw new \Exception($upload->getErrorMessage());
                    }
                }
            }

        }

        return $next($request);
    }

}
