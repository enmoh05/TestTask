<?php


include 'src/backend/autoload.php';
include 'config.php';

$router = new Router();

$router->get('', 'ProductList::index');
$router->get('/Products/get', 'ProductList::show');

$router->post('/Products/add', 'ProductList::add');
$router->post('/Products/delete', 'ProductList::delete');

$router->check();

echo $book->getAttributes(1, 'title') . "<br><br>";
echo $disk->getAttributes(1, 'size') . "<br><br>";
echo $furniture->getAttributes(1, 'type'). "<br><br";
echo $book->getAllAttributes(1) . "<br><br>";
echo $disk->getAllAttributes(1) . "<br><br>";
echo $furniture->getAllAttributes(1) . "<br><br>";
echo $book->getProductName(1);
echo $disk->getProductName(1);