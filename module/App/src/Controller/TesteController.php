<?php

namespace App\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class TesteController extends AbstractActionController
{
    public function testeAction()
    {
        var_dump('aki teste controller');exit();
    }
}
