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
               "logo"=>"https://adsnera.com/images/logo.png"
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
            "Authorization: Bearer FLWSECK-ea4221c8dd359be3ca409a39121f5ea2-X"
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
            "Authorization: Bearer FLWSECK-ea4221c8dd359be3ca409a39121f5ea2-X"
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


    public static function updatesitemap() 
    {
    	$posts = \App\Post::all();
    	
    	$xmlfile = '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\n";
		$xmlfile .= '<url>'."\n";
		$xmlfile .= '<loc>'.route('index').'</loc>'."\n";
		$xmlfile .= '<changefreq>daily</changefreq>'."\n";
		$xmlfile .= '<lastmod>'.date('Y-m-d\TH:i:sP').'</lastmod>'."\n";
		$xmlfile .= '<priority>1.00</priority>'."\n";
		$xmlfile .= '</url>'."\n";
		
		foreach($posts as $post) {
			$xmlfile .= '<url>'."\n";
			$xmlfile .= '<loc>'.route('index').'/posts/'.$post->custom_id.'</loc>'."\n";
			$xmlfile .= '<changefreq>daily</changefreq>'."\n";
			$xmlfile .= '<lastmod>'.date('Y-m-d\TH:i:sP').'</lastmod>'."\n";
			$xmlfile .= '<priority>1.00</priority>'."\n";
			$xmlfile .= '</url>'."\n";
		}
		
		$xmlfile .= '</urlset>';
		
		$file = fopen('sitemap.xml', 'w');
		fwrite($file, $xmlfile);
		fclose($file);
			
    }

    public static function pingsitemap() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.google.com/webmasters/sitemaps/ping?sitemap=".route('index')."/sitemap.xml",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);
    }


    public static function make_transfer($bank_code, $account_number, $amount, $redirect)
    {
        $data = [
            "account_bank"=> $bank_code,
            "account_number"=> $account_number,
            "amount"=> $amount,
            "narration"=> "Adsnera funds withdrawal",
            "currency"=> "NGN",
            "reference"=> 'transfer-'.uniqid(true).uniqid(),
            "callback_url"=> $redirect,
            "debit_currency"=> "NGN",
        ];



        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/transfers",
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
            "Authorization: Bearer FLWSECK-ea4221c8dd359be3ca409a39121f5ea2-X"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $res = json_decode($response);
        return $res->data->status;


    }


    public static function filterPost($arg) {
		$body = preg_replace("/##web|##b|##h|##u|##ch|##cc|##cj|##a|##img|##cen|##i|##c/", "", $arg);
		$body = preg_replace("/#web|#b|#h|#i|#u|#l|#c|#ch|#cc|#cj|#a|a#|#img|img#|#cen|#i|#c/", "", $body);

		return $body;
	}
	
	
	
	public static function customizePost($arg) {
	    $main = htmlspecialchars($arg);
	    
	    $main=str_replace("##web", '" style="width:100%;height:100%;position:fixed;top:0px;left:0px;z-index:99;"></iframe>', $main);
	    $main=str_replace("#web", '<iframe src="', $main);
	    
	    $main=str_replace("##img", '" /></center>', $main);
	    $main=str_replace("img#", '" src="', $main);
	    $main=str_replace("#img", '<center><img style="width:70%" class="img-responsive" alt="', $main);
	    
	    $main= str_replace("##aud", '"></audio>', $main);
	    $main=str_replace("#aud",'<audio controls><source src="', $main);
	    
	    
	    // $main = preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="'.route('url').'?link='.'$1" title="" target="_blank" >$1</a>', $main);
	    
	    $main=str_replace("##cen", "</center>", $main);
	    $main=str_replace("#cen", "<center>", $main);
	    $main=str_replace("##b", "</strong>", $main);
	    $main=str_replace("#b", "<strong>", $main);
	    $main=str_replace("##h", "</h3>", $main);
	    $main=str_replace("#h", "<h3>", $main);
	    $main=str_replace("##i", "</em>", $main);
	    $main=str_replace("#i", "<em>", $main);
	    $main=str_replace("##u", "</u>", $main);
	    $main=str_replace("#u", "<u>", $main);
	    $main=str_replace("#l", "<hr/>", $main); 
	    
	    $main=str_replace("##ch", '</code></pre>', $main);
	    $main=str_replace("#ch", '<pre><code class="language-html">', $main);
	    
	    $main=str_replace("##cc", '</code></pre>', $main);
	    $main=str_replace("#cc", '<pre><code class="language-css">', $main);
	    
	    $main=str_replace("##cj", '</code></pre>', $main);
	    $main=str_replace("#cj", '<pre><code class="language-js">', $main);
	    
	    $main=str_replace("##c", "</code>", $main);
	    $main=str_replace("#c", "<code style='color:black;background-color:white;'>", $main);
	    
	    $main=str_replace("##a", "</a>", $main);
	    $main=str_replace("a#", '">', $main);
	    $main=str_replace("#a", '<a target="_blank" href="'.route("index").'/url?link=', $main);
	 
	    return $main;
	}




    
}
