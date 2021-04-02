<?php
/**
 * Created by PhpStorm.
 * User: gguerrero
 * Date: 27/02/2019
 * Time: 11:46 AM
 */
session_start();
//var_dump($_SESSION);
if (isset($_SESSION['dbUser'])) {
    require_once './forms/index.php';
} else {
    require_once './forms/login.html';
}