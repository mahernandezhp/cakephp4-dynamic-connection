<?php
if(!isset($_SESSION)) {
    session_start();
 }
use Cake\Http\Session;

function getDBName()
{
    echo session_status();

        $__sess= new Session();
        echo $__sess->check('Config.database_name');
        
        return $__sess->read('Config.database_name');
}
