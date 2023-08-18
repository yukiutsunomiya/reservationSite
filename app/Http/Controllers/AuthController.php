<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        $store_url = [
            'store_url'=>  Auth::user()->store_url
        ];
        $store = DB::select('select * from stores where store_url = :store_url',$store_url);
        return view('auth.store',['store' => $store[0]]);
    }

    public function storeEdit(Request $request)
    {
        $data = [
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address'=> $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        return view('auth.storeEdit',$data);
    }

    public function storeUpdate(Request $request)
    {
        $data = [
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address'=> $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        DB::update('update stores set name = :name,furigana = :furigana,telephone = :telephone
        ,zipCode = :zipCode,prefectures = :prefectures,address = :address,businessDay = :businessDay,
        businessHours = :businessHours,store_url = :store_url where id = :id', $data);
        return redirect("/auth/store");
    }

    public function reservationStatus(Request $request)
    {
        $store_url = [
            'store_url'=>  Auth::user()->store_url
        ];
        $reservations = DB::select('select * from reservations where store_url = :store_url ORDER BY id DESC',$store_url);
        return view("/auth/reservationStatus",['reservations' => $reservations]);
    }

    public function reservationStatu(Request $request)
    {
        $data = [
            'reservationId' => $request -> reservationId,
            'reservationAdult'=> $request -> reservationAdult,
            'reservationChild'=> $request -> reservationChild,
            'reservationDate'=> $request -> reservationDate,
            'reservationTime'=> $request -> reservationTime,
            'reservationSeat'=> $request -> reservationSeat,
            'reservationOpinion'=> $request -> reservationOpinion,
            'reservationSurName'=> $request -> reservationSurName,
            'reservationName'=> $request -> reservationName,
            'reservationHiraganaSurName'=> $request -> reservationHiraganaSurName,
            'reservationHiraganaName'=> $request -> reservationHiraganaName,
            'reservationMobilePhone'=> $request -> reservationMobilePhone,
            'reservationEmail'=> $request -> reservationEmail,
            'reservationStore_url'=> $request -> reservationStore_url,
        ];
        return view('auth.reservationStatu',$data);
    }

    public function userEdit(Request $request)
    {
        $data = [
            'userId' => $request -> id,
            'userName'=> $request -> name,
            'userFurigana'=> $request -> furigana,
            'userTelephone'=> $request -> telephone,
            'userEmail'=> $request -> email,
            'store_url'=> $request -> store_url,
        ];
        return view('auth.userEdit',$data);
    }

    public function userUpdate(Request $request)
    {
        $userData = [
            'userId' => $request -> userId,
            'userName'=> $request -> userName,
            'userFurigana'=> $request -> userFurigana,
            'userTelephone'=> $request -> userTelephone,
            'userEmail'=> $request -> userEmail,
        ];
        DB::update('update users set name = :userName,furigana = :userFurigana,telephone = :userTelephone,email = :userEmail where id = :userId', $userData);
        return redirect("/auth/loginUser");
    }

    public function userDelete(Request $request)
    {
        $data = [
            'userId' => $request -> userId,
        ];
        DB::delete('delete from users where id = :userId', $data);
        
        return view('auth.login');
    }
    
    public function users(Request $request)
    {
        $store_url = [
            'store_url'=>  Auth::user()->store_url
        ];
        $users = DB::select('select * from users where store_url = :store_url', $store_url);
        return view('auth.users',['users' => $users]);
    }
    
    public function user(Request $request)
    {
        $userData = [
            'id' => $request -> iId,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'email'=> $request -> email,
            'store_url' => $request -> store_url,
        ];
        return view('auth.user',$userData);
    }
    
    public function register(Request $request)
    {
        $store_url = [
            'store_url'=>  Auth::user()->store_url
        ];
        return view('auth.register',$store_url);
    }
    public function lineNotificationRegistration(Request $request)
    {
        $store_url = [
            'user_id' => Auth::id(),
            'store_url'=>  Auth::user()->store_url
        ];
        return view('auth.lineNotificationRegistration',$store_url);
    }

    public function tokenRegistration(Request $request)
    {
        $data = [
            'user_id' => Auth::id(),
            'store_url'=>  Auth::user()->store_url
        ];
        return view('auth.lineNotificationRegistration',$store_url);
    }
}

