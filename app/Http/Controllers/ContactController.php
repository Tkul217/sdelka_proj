<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function __invoke()
    {
        $token = "5755391063:AAEFKetJ2xWKjJsrsJkziXtIA6XTChHfWAw";

        $data = 'Имя :' . request()->name . PHP_EOL . ' Фамилия: ' . request()->last_name . PHP_EOL . ' E-mail адрес: ' . request()->email . PHP_EOL . ' Сообщение: ' . request()->message;

        $getQuery = array(
            "chat_id" 	=> -1001820939391,
            "text"  	=> $data,
            "parse_mode" => "html",
        );
        $ch = curl_init("https://api.telegram.org/bot". $token ."/sendMessage?" . http_build_query($getQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $resultQuery = curl_exec($ch);
        curl_close($ch);

        return redirect()->route('main');
    }
}
