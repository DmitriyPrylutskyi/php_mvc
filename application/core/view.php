<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.05.2017
 * Time: 12:26
 */
class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view, $data = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        include 'application/views/'.$template_view;
    }
}