<?php

/**
 *
 * @author Ansel Melly <ansel@anselmelly.com>
 * @date Apr 22, 2018
 * @link http://anselmelly.com
 * 
 * 
 * Description of daraja
 * 
 * this Config files are used to set the default settings required by the application.
 * This file is required and pulls information from the env file _.env_
 * 
 * most of the information here are described from https://developer.safaricom.co.ke
 * 
 */
return [
    "consumer_key" => env("DARAJA_CONSUMER_KEY", "HAS TO BE SET ON ENV FILE"),
    "consumer_secret" => env("DARAJA_CONSUMER_SECRET", "HAS TO BE SET ON ENV FILE"),
    "env" => env("DARAJA_ENV", "sandbox"),
    "sandbox" => "https://sandbox.safaricom.co.ke/",
    "live" => "https://api.safaricom.co.ke/"
];
