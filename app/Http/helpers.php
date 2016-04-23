<?php

use Illuminate\Support\Str;

class Helper {

    function set_active($uri)
    {
        return Request::is($uri) ? 'active' : '';
    }

}

?>