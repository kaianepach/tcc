<?php

function verification($path)
{
    if (!$_SESSION['cod_func']) {
        header('Location: ' .$path);
        exit;
    }
}

?>