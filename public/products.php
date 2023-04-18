<?php
require_once 'vendor/autoload.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

$products = array(
    array('name' => 'Product 1', 'price' => '10.00'),
    array('name' => 'Product 2', 'price' => '20.00'),
    array('name' => 'Product 3', 'price' => '30.00'),
    array('name' => 'Product 4', 'price' => '40.00'),
    array('name' => 'Product 5', 'price' => '50.00'),
    array('name' => 'Product 6', 'price' => '60.00')
);

$loader = new Twig_Loader_Filesystem('src/View');
$twig = new Twig_Environment($loader);

echo $twig->render('products.html.twig', array('products' => $products));
echo '<br><br>Debug:<br>';
var_dump($products);