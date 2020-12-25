<?php

// learn from "https://www.facebook.com/fairway.technology/videos/1598184780191951"

spl_autoload_register(function($name){
    include("$name.php");
});