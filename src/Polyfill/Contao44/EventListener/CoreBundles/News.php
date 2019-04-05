<?php

namespace Sioweb\Glossar\Polyfill\Contao44\EventListener\CoreBundles;

use Contao\System;

class News extends \Sioweb\Glossar\EventListener\CoreBundles\News
{
    public function __construct()
    {
        parent::__construct(
            System::getContainer()->get('contao.framework'),
            System::getContainer()->get('database_connection'),
            System::getContainer()->get('request_stack')
        );
    }
}
