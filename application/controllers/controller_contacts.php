<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.05.2017
 * Time: 12:46
 */
class Controller_Contacts extends Controller
{
    function action_index()
    {
        session_start();
        $this->view->generate('contacts_view.php', 'template_view.php');
    }
}