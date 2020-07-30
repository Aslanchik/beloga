<?php

session_start();

// DELETE SESSION TO LOGOUT USER
session_destroy();

// REDIRECT USER TO LOGIN PAGE
header('location: login.php');