<?php

namespace Example;

class MainController extends BasePersonController
{
    public function index()
    {
        $this->handle('example');
    }
}
