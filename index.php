<?php
	Session_start();
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	if(!isset($_REQUEST['cart'])){
		$_REQUEST['cart'] = array();
	}
//把购物车商品加入session
	if(isset($_REQUEST['cart'])){
		//$_SESSION['cart'] = array_merge($_SESSION['cart'], $_REQUEST['cart']);
		
/* 		foreach($_REQUEST['cart'] as $c){
			$_SESSION['cart'][] = $c; 
		} */
/* 		echo "request:";
		var_dump($_REQUEST['cart']);
		echo "session::";
		var_dump($_SESSION['cart']); */
		
		//print_r($_SESSION)；
		//商品计数
		for($i = 0; $i < count($_REQUEST['cart']); $i++){
			$c = $_REQUEST['cart'][$i];
			if(array_key_exists($c, $_SESSION['cart'])){
				$_SESSION['cart'][$c] = $_SESSION['cart'][$c] + 1;
				
			}else{
				$_SESSION['cart'][$c] = 1;
			}
			
		}
	}
	
	//撤销购物
	if(isset($_REQUEST['d'])){
		foreach($_REQUEST['d'] as $c){
			unset($_SESSION['cart'][$c]);
		}
	}
	//print_r($_SESSION['cart']);
	?>
<a href="a.php">商品购买</a>
<a href="cart.php">查看购物车</a><br>