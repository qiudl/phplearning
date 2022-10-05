您购物车里源如下商品：
<br>
<form action="index.php" method="post">
<?php
    session_start();
    $cart = $_SESSION['cart'];
    //var_dump($cart);
    foreach($cart as $i => $c){
        echo "<input type=checkbox value='$i' name='d[]'>".$i.'数量:'.$c."<br>";
    }  
    ?>
<input type="submit" value="撤销购物">
<input type="button" value="返回" onclick="location='index.php';">
</form>