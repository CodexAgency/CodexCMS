<?php

namespace Codex\Controllers;

use CodeIgniter\Controller;

class Home extends \Codex\Controllers\BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    //--------------------------------------------------------------------

}