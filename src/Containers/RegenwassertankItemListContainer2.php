<?php

namespace Regenwassertank\Containers;

use Plenty\Plugin\Templates\Twig;

class RegenwassertankItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Regenwassertank::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}