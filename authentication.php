<?php
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    return header('Location:/login');
}