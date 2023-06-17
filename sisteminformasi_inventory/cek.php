<?php
//jika belum log in

if (isset($_SESSION['log'])) {
} else {
    header('location:login.php');
}
