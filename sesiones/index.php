<?php

session_start();

$_SESSION['dato'] = "Mensaje Secreto";

echo $dato;
