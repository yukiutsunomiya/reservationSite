<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function topPage(Request $request,$store_url)
    {
        if(DB::table('users')->where('store_url', $store_url)->exists()){
            $data= [
                'store_url' => $store_url,
            ];
            return view('top',$data);
        }else{
            return view('error');
        }    
    }

    public function bookingDetails(Request $request,$store_url)
    {
        if(DB::table('users')->where('store_url', $store_url)->exists()){
            if(isset($request->adult)){
                $store_url= [
                    'store_url' => $store_url,
                ];
                $store = DB::select('select businessDay,businessHours,store_url from stores where store_url = :store_url',$store_url);
                $bookingContents= [
                    'adult' => $request -> adult ,
                    'child' => $request -> child ,
                    'date' => $request -> date ,
                    'time' => $request -> time ,
                    'seat' => $request -> seat ,
                    'opinion' => $request -> opinion,
                    'surName' => $request -> surName,
                    'name' => $request -> name,
                    'hiraganaSurName' => $request -> hiraganaSurName,
                    'hiraganaName' => $request -> hiraganaName,
                    'mobilePhone' => $request -> mobilePhone,
                    'email' => $request -> email,
                    'businessDay'=> $store[0] -> businessDay,
                    'businessHours'=> $store[0] -> businessHours,
                    'store_url'=> $store[0] -> store_url,
                ];
                return view('bookingDetails',$bookingContents,);
            }else{
                $store_url= [
                    'store_url' => $store_url,
                ];
                $store = DB::select('select businessDay,businessHours,store_url from stores where store_url = :store_url',$store_url);
                $data= [
                    'businessDay'=> $store[0] -> businessDay,
                    'businessHours'=> $store[0] -> businessHours,
                    'store_url' => $store[0] -> store_url
                ];
                return view('bookingDetails',$data);
            }
        }else{
            return view('error');
        }
        
    }

    public function bookingContents(Request $request,$store_url)
    {
        if(DB::table('users')->where('store_url', $store_url)->exists()){
            if(isset($request->surName)){
                $bookingContents= [
                    'adult' => $request -> adult ,
                    'child' => $request -> child ,
                    'date' => $request -> date ,
                    'time' => $request -> time ,
                    'seat' => $request -> seat ,
                    'opinion' => $request -> opinion,
                    'surName' => $request -> surName,
                    'name' => $request -> name,
                    'hiraganaSurName' => $request -> hiraganaSurName,
                    'hiraganaName' => $request -> hiraganaName,
                    'mobilePhone' => $request -> mobilePhone,
                    'email' => $request -> email,
                    'store_url' => $store_url,
                ];
                return view('applicantInformation',$bookingContents);
            }else{
                $bookingContents= [
                    'adult' => $request -> adult ,
                    'child' => $request -> child ,
                    'date' => $request -> date ,
                    'time' => $request -> time ,
                    'seat' => $request -> seat ,
                    'opinion' => $request -> opinion,
                    'store_url' => $store_url,
                ];
                return view('applicantInformation',$bookingContents);
            }
        }else{
            return view('error');
        }    
        
    }

    public function contentConfirmation(Request $request,$store_url)
    {
        if(DB::table('users')->where('store_url', $store_url)->exists()){
            $contents= [
                'adult' => $request -> adult ,
                'child' => $request -> child ,
                'date' => $request -> date ,
                'time' => $request -> time ,
                'seat' => $request -> seat ,
                'opinion' => $request -> opinion,
                'surName' => $request -> surName,
                'name' => $request -> name,
                'hiraganaSurName' => $request -> hiraganaSurName,
                'hiraganaName' => $request -> hiraganaName,
                'mobilePhone' => $request -> mobilePhone,
                'email' => $request -> email,
                'store_url' => $store_url,
                ];
                //DB::insert('insert into reservations (adult,child,date,time,seat,opinion,surName,name,hiraganaSurName,hiraganaName,mobilePhone,email,store_url) values (:adult,:child,:date,:time,:seat,:opinion,:surName,:name,:hiraganaSurName,:hiraganaName,:mobilePhone,:email,:store_url)',$contents);
            return view('contentConfirmation',$contents);
        }else{
            return view('error');
        } 
    }

    public function reservationCompleted(Request $request,$store_url)
    {
        if(DB::table('users')->where('store_url', $store_url)->exists()){
            $contents= [
                'adult' => $request -> adult ,
                'child' => $request -> child ,
                'date' => $request -> date ,
                'time' => $request -> time ,
                'seat' => $request -> seat ,
                'opinion' => $request -> opinion,
                'surName' => $request -> surName,
                'name' => $request -> name,
                'hiraganaSurName' => $request -> hiraganaSurName,
                'hiraganaName' => $request -> hiraganaName,
                'mobilePhone' => $request -> mobilePhone,
                'email' => $request -> email,
                'store_url' => $store_url,
            ];
            DB::insert('insert into reservations (adult,child,date,time,seat,opinion,surName,name,hiraganaSurName,hiraganaName,mobilePhone,email,store_url) values (:adult,:child,:date,:time,:seat,:opinion,:surName,:name,:hiraganaSurName,:hiraganaName,:mobilePhone,:email,:store_url)',$contents);
            
            $surName = $request -> surName;
            $name = $request -> name;
            $hiraganaSurName = $request -> hiraganaSurName;
            $hiraganaName = $request -> hiraganaName;
            $date = $request -> date;
            $time = $request -> time;
            $adult = $request -> adult;
            $child = $request -> child;
            $seat = $request -> seat ;
            $mobilePhone = $request -> mobilePhone;
            $email = $request -> email;
            $mobilePhone = $request -> mobilePhone;


            //メッセージ内容
            $message = '只今'.$surName.$name.'('.$hiraganaSurName.$hiraganaName.')様が'.$date.'の'.$time.
            'に予約致しました。予約情報は大人は'.$adult.'人、子供は'.$adult.'人、テーブルは'.$seat.'お問い合わせは'
            .$seat.'連絡先はメールアドレス'.$email.'、電話番号'.$mobilePhone.'です';
            //LINEから取得したトークン
            $token = '3owsGUppO5khGGREycO2YnBcHW3l7m5nv9vwEI8XK4z';
            //APIのURL
            $url = 'https://notify-api.line.me/api/notify';
            $query = array(
                'message' => $message, 
            );
            
            //URLエンコードされたクエリ文字列を生成
            $content = http_build_query($query, '', '&');
            
            //ヘッダ設定
            $header = array(
                'Content-Type: application/x-www-form-urlencoded', //form送信の際、クライアントがWebサーバーに送信するコンテンツタイプ
                'Content-Length: '.strlen($content), //メッセージ本文の長さ
                'Authorization: Bearer ' . $token,
            );
            
            //ストリームコンテキスト設定
            $context = array(
                'http' => array(
                    'ignore_errors' => true, //ステータスコードが失敗を意味する場合でもコンテンツを取得
                    'method' => 'POST', //メソッド。デフォルトはGET
                    'header' => implode("\r\n", $header), //ヘッダ設定
                    'content' => $content //送信したいデータ
                )
            );
            /*
            $res = file_get_contents($url, false, stream_context_create($context));
            var_dump($res); //string(29) "{"status":200,"message":"ok"}"
            //ここまでLINE通知
            /*
            */
            return view('reservationCompleted',$contents);
        }else{
            return view('error');
        } 
    }

    
}
