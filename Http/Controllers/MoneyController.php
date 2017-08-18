<?php

namespace Modules\CoreHelper\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MoneyController extends Controller
{
    /**
     *
     * Method to convert brazilian money american money
     *
     * @param currency
     *
     */
    public static function money_to_us($value, $return_type = 'double'){
        if (!strpos($value, ',') === true) {

            if ($return_type == 'double') {
                // nao tem virgula:
                return number_format($value, 2, '.', '');
            }

            return "" . str_replace('.', '', number_format($value, 2, '.', ''));

        }

        // tem virgula:
        $remove_point = str_replace('.', '', $value);
        $replace_comma = str_replace(',', '.', $remove_point);

        $new_value = trim($replace_comma);

        $valor = floatval($new_value);

        if ($return_type == 'double') {
            return number_format($valor, 2, '.', '');
        }

        return "" . str_replace('.', '', number_format($valor, 2, '.', ''));
    }


    /**
     *
     * Method to convert american money brazilian money
     *
     * @param currency
     *
     */
    public static function money_to_br($value, $return_type = 'double'){
        if (!strpos($value, ',') === true) {

            if ($return_type == 'double') {
                // nao tem virgula:
                return number_format($value, 2, ',', '.');
            }

            return "" . str_replace('.', '', number_format($value, 2, ',', '.'));

        }

        // tem virgula:
        $remove_point = str_replace('.', '', $value);
        $replace_comma = str_replace(',', '.', $remove_point);

        $new_value = trim($replace_comma);

        $valor = floatval($new_value);

        if ($return_type == 'double') {
            return number_format($valor, 2, ',', '.');
        }

        return "" . str_replace('.', '', number_format($valor, 2, ',', '.'));
    }
}
