<?php

    function autocargar($claseName){
        include 'controllers/' . $claseName . '.php';

    }

    spl_autoload_register('autocargar');

?>