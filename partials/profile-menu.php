
<?php 


switch($_SERVER['SCRIPT_NAME']){
    case "/phpproject/e-commerce/setting.php";
    $active ="setting";
    break;

    case "/phpproject/e-commerce/order.php";
    $active ="order";
    break;

    case "/phpproject/e-commerce/cart.php";
    $active ="cart";
    break;

    default:
    $active ="profile";
    break;
   

}



?>
<nav class="profile-menu">
                <ul>
                    <li><a href="profile.php" class="<?php echo $active == 'profile' ? 'active' : ''; ?>">Profile</a></li>
                    <li><a href="setting.php" class="<?php echo $active == 'setting' ? 'active' : ''; ?>">Setting</a></li>
                    <li><a href="order.php" class="<?php echo $active == 'order' ? 'active' : ''; ?>"> Order List</a></li>
                    <li><a href="cart.php"class="<?php echo $active == 'cart' ? 'active' : ''; ?>">Cart</a></li>
                </ul>

            </nav>