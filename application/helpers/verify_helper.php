<?php
defined('BASEPATH') or exit('No direct script access allowed');

function verify_captcha($token)
{
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => '6Lf-Sq0cAAAAAK7RVol1l3gSyZq5CvM_SBDC8hM_',
        'response' => $token,
    ];

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    $res = json_decode($response, true);

    return $res['success'];
}
