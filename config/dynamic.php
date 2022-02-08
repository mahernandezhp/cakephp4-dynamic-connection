<?php
if(!isset($_SESSION)) {
    session_start();
 }
use Cake\Http\Session;

function getDBName()
{   
    if(!isset($__sess))
    $__sess = new Session();
    return $__sess->read('Config.database_name');
}
