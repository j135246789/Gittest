<?php 

require __DIR__.'../../autoload.php';

$id='嘿嘿CART';
//我要測試GIT
$store = new \Cart\Storage\SessionStore();
$cart = new \Cart\Cart($id,$store);

$cart->add(new Cart\CartItem(['name'=>'破產女孩第一季','quantity'=>1,'price'=>100]));
$cart->add(new Cart\CartItem(['name'=>'破產女孩第二季','quantity'=>2,'price'=>200]));
$cart->add(new Cart\CartItem(['name'=>'破產女孩第三季','quantity'=>3,'price'=>300]));

print_r($cart->toArray()['items']);
echo "---------------------". PHP_EOL;
print_r('一共'.$cart->total().'元');

?>