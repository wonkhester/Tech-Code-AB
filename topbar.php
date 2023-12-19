<?php
session_start();
$cartsize = "";
?>
<div id="nav-name">
    <button id="nav-name-btn">
        <h2>Tech Code AB</h2>    
    </button>
</div>
<div id="nav-tools">
    <div id="account-access">
        <button id="account-access-btn" onclick="">
            <?php
                if (isset($_SESSION["userid"]) && isset($_SESSION["username"])) {
                    echo '<h3>Hello! $_SESSION["username"]</h3>';
                    echo "<h3></h3>";
                }
                else {
                    echo "<h2>Login/Sign up</h2>";
                }
            ?>
        </button>
    </div>
    <div id="cart-access">
        <button id="cart-access-btn" onclick="">
            <h2><?php echo "$cartsize"?></h2>
            <img id="cart-access-img" src="img/shopping_cart.png">
        </button>
    </div>
</div>