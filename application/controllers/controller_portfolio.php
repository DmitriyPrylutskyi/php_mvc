<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.05.2017
 * Time: 12:40
 */

class Controller_Portfolio extends Controller
{
    function __construct()
    {
        session_start();
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }
}