<?php

function show_phpinfo()
{
    if (isset($_GET['info'])) {
        phpinfo();
    }
}