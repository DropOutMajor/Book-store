<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<Link rel="Stylesheet"href="Css/styler.css">
<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">DropOuts<span>P.M</span></a>

      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">products</a>
         <a href="admin_orders.php">orders</a>
         <a href="admin_users.php">users</a>
         <a href="admin_messages.php">messages</a>
      </nav>

      <div class="icons">
         
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
        
         <div>new <a href="admin_logIn.php">login</a> | <a href="admin_sign.php">register</a></div>
         <p>username : <span><?php echo $_SESSION['username']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
       
      </div>

   </div>

</header>