<?php

namespace Modules\CoreHelper\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DateController extends Controller
{

    /**
     *
     * Method to convert mysql format date to brazilian date
     *
     * @param date
     *
    */
    public static function mysql_to_date($date){
        $date = substr($date, 0, 10);

        $data_array = explode('-', $date);
        $ano = $data_array[0];
        $mes = $data_array[1];
        $dia = $data_array[2];

        $data_formatada = $dia . '/' . $mes . '/' . $ano;


        return $data_formatada;
    }

    /**
     *
     * Method to convert brazilian format date to mysql date
     *
     * @param date
     *
     */
    public static function date_to_mysql($date){
        $date = substr($date, 0, 10);

        $data_array = explode('/', $date);
        $ano = $data_array[2];
        $mes = $data_array[1];
        $dia = $data_array[0];
        return $ano . '-' . $mes . '-' . $dia;
    }


}
