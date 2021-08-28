<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Custom extends Model
{

    
    public static function alert()
    {
        $message = Session::get('alert-msg');
        if (Session::has('alert-link')) {
            $link = Session::get('alert-link');
        }else {
            $link = false;
        }
        $msg = '<div class="img img-responsive custom-alert" id="custom-alert">
        <span class="custom-alert-close" id="custom-alert-close"><i class="fa fa-times"></i></span>
        <p class="custom-alert-message">'.$message.'</p>';
        if ($link != false) {
            $msg.='<a href="'.$link.'" class="custom-alert-link">Click here</a>';
        }
        $msg.='</div>';
        
        return $msg; 
    }

    public static function clear_alert_session()
    {
        Session::forget('alert-msg');
        Session::forget('alert-link');
    }

    public static function date($date) {
        include_once "time.php";
        return custom_date($date);
    }

    public static function task_amount($num) 
    {
        return $num*2;
    }

    public static function make_payment($title, $amount, $redirect)
    {
        $data = [
            "tx_ref"=>time(),
            "amount"=>$amount,
            "currency"=>"NGN",
            "redirect_url"=> $redirect,
            "payment_options"=>"",
            "meta" => [
               "consumer_id"=>23,
               "consumer_mac"=>"92a3-912ba-1192a"
            ],
            "customer" => [
               "email"=>auth()->user()->email,
               "name"=>auth()->user()->name,
            ],
            "customizations"=>[
               "title"=>$title,
               "description"=>"",
               "logo"=>"https://assets.piedpiper.com/logo.png"
            ]
        ];



        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/payments",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK_TEST-c172ba19babeca1f6de9dfae4cac1e13-X"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $res = json_decode($response);
        return $res->data->link;


    }



    public static function verify_payment($transaction_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$transaction_id}/verify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK_TEST-c172ba19babeca1f6de9dfae4cac1e13-X"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $res = json_decode($response);
        if ($res->status == 'success' && $res->data->charged_amount >= $res->data->amount) {
            return $res->data->amount;
        }else {
            return false;
        }

    }






    
}
