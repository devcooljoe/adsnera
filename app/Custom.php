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

    public static function date($date1) {
        include_once "time.php";
        return custom_date($date1);
    }

}
