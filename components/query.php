<?php
$sql_user = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
$rs_user = mysqli_query($conn,$sql_user);
$row_user = mysqli_fetch_array($rs_user);
