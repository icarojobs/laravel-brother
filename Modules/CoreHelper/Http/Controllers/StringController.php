<?php

namespace Modules\CoreHelper\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class StringController extends Controller
{
    /**
     *
     * Method to remove special chars of the string and white spaces
     *
     * @param string
     *
     */
    public static function clear_string($string){
        $string = str_replace('-', '', $string); // Replaces all hyphens to void.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

        $string = preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
        return trim($string);
    }
}
