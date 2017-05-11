<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.05.2017
 * Time: 12:30
 */
class Controller_Main extends Controller
{
    function action_index()
    {
        session_start();
        $this->view->generate('main_view.php', 'template_view.php');
    }
}