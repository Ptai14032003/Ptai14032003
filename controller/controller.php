<?php
function render($path, $data = [])
{
    extract($data);
    $view = "views/" . $path . ".php";
    include_once $view;
}

