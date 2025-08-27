<?php

function show_phpinfo()
{
    if (isset($_GET['info'])) {
        echo 'test';
        phpinfo();
    }
}