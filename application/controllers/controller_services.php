<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.05.2017
 * Time: 12:49
 */
class Controller_Services extends Controller
{
    function action_index()
    {
        session_start();
        $this->view->generate('services_view.php', 'template_view.php');
    }
}