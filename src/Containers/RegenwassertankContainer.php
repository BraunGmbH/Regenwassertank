<?php

namespace Regenwassertank\Containers;

use Plenty\Plugin\Templates\Twig;

class RegenwassertankContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Regenwassertank::Stylesheet');
    }
}