<?php

if (isset($_POST['date']) && isset($_POST['sum']) && isset($_POST['term']) && isset($_POST['deposit_fill']) && isset($_POST['summadd'])){
    $date = date($_POST['date']);
    $sum = (int) $_POST['sum'];
    $term = $_POST['term'];
    $deposit_fill = $_POST['deposit_fill'];
    $summadd  = $_POST['summadd'];
    $end_date =date('d-m-Y',strtotime($date."+".$term." year"));

    if($deposit_fill == "no")
        $summadd = 0;

    $res = Calculate($date,$sum,$term,$deposit_fill,$summadd,$end_date);

    echo $res;
}

function Calculate($date,$sum,$term,$deposit_fill,$summadd,$end_date){
    $date = date('d-m-Y',strtotime($date."+1 month")); //следующий месяц
    $daysn = date('t',strtotime($date));//кол-во дней в месяце
    $daysy = date('L',strtotime($date))?366:365;//кол-во дней в году
    $percent = 0.1;

    $result = round( $sum + (($sum+$summadd)*$daysn*($percent/$daysy)));

    if(strtotime($date) == strtotime($end_date)){
        return $result;
    }else{
        $result += $summadd;
        return Calculate($date, $result,$term,$deposit_fill,$summadd,$end_date);
    }

}