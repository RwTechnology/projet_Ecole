<?php
if (isset($_SESSION['message'])){
   echo "<h3 style='color:red;font-size:14px; opacity:0.8;' >".$_SESSION['message']."</h3>";
   unset($_SESSION['message']);
}
