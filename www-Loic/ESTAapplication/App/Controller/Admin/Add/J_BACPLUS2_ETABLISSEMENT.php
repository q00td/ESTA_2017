<?php
/**
 * Created by PhpStorm.
 * User: drakness_power
 * Date: 15/01/2017
 * Time: 23:01
 */

require "ControllerJ_BACPLUS2_ETABLISSEMENT.php";

$controller = new ControllerJ_BACPLUS2_ETABLISSEMENT();
$affiche = $controller->showBacplus2_Etablissement_Add();
