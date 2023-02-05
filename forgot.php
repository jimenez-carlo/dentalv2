<?php
include("includes/functions.php");
$id = $_GET['email'];
echo get_one("select id from tbl_userinfo where email = '$id' ")->id ?? 0;
