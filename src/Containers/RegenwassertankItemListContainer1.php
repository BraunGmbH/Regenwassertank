<?php

namespace Regenwassertank\Containers;

use Plenty\Plugin\Templates\Twig;

class RegenwassertankItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Regenwassertank::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}