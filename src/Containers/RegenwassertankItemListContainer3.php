<?php

namespace Regenwassertank\Containers;

use Plenty\Plugin\Templates\Twig;

class RegenwassertankItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Regenwassertank::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
