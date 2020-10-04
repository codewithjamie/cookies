<?php

namespace CookieLaw\Containers;

use Plenty\Plugin\Templates\Twig;
    
class CookiesContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CookieLaw::content.Banner');
    }
}