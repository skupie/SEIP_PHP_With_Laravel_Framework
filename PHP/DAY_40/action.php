<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;
use App\classes\User;

$home = new Home();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'category')
    {
        $home->categoryProduct($_GET['id']);
    }
    elseif ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'detail')
    {
        $home->productDetail($_GET['id']);
    }
    elseif ($_GET['page'] == 'full_name')
    {
        $home->fullName();
    }
    elseif ($_GET['page'] == 'calculator')
    {
        $home->calculator();
    }
    elseif ($_GET['page'] == 'series_one')
    {
        $home->seriesOne();
    }
    elseif ($_GET['page'] == 'series_two')
    {
        $home->seriesTwo();
    }
    elseif ($_GET['page'] == 'series_three')
    {
        $home->seriesThree();
    }
    elseif ($_GET['page']='login')
    {
        $home->login();
    }
    elseif ($_GET['page']='logout')
    {
        $home->logout();
    }
}

elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName();        //create object
    $fullName->makeFullName($_POST);
}
elseif (isset($_POST['result_btn']))
{
    $result = new Calculator($_POST);        //create object
    $result->myCalculator();
}
elseif (isset($_POST['series_one_btn']))    //create object
{
    $series = new Series($_POST);
    $series->seriesOne();
}

elseif (isset($_POST['login_btn']))     //create object
{
    $user = new User($_POST);
    $message = $user->login();
}

