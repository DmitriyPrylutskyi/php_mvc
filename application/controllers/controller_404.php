<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.05.2017
 * Time: 12:54
 */
class Controller_404 extends Controller
{
    function action_index()
    {
        session_start();
        $this->view->generate('404_view.php', 'template_view.php');
    }
}