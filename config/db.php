<?php
try
{
    $db = new PDO("mysql:host=141.94.22.233;dbname=mlpdwwb_comparo_simple;charset=utf8", 'mlpdwwb', 'mlpdwwb');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}