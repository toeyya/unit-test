<?php defined('BASEPATH') OR exit('No direct script access allowed.');
/**
 * Description of MY_Composer
 *
 * @author Araya
 */
class MY_Composer
{
    function __construct()
    {
        include(APPPATH."vendor/autoload.php");
    }
}
?>