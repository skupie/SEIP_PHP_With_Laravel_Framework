<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Menu;
use App\classes\Content;


$home = new Home();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'category')
    {
        $home->menuContent($_GET['id']);
    }
    elseif ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'detail')
    {
        $home->contentDetail($_GET['id']);
    }

}

