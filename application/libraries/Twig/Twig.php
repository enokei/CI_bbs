<?php

require_once 'Twig/Autoloader.php';

Twig_Autoloader::register();



// Twigの基本設定

$loader = new Twig_Loader_Filesystem('./');

$twig = new Twig_Environment($loader, array(

    'cache' => './cache',

));



// テンプレートの呼び出し

$template = $twig->loadTemplate('edit.etml');

// 変数をセットして出力

echo $template->render(array(''));
?>