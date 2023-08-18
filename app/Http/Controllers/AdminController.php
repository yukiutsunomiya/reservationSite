<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function stores(Request $request)
    {
        $stores = DB::select('select * from stores ORDER BY id DESC');
        return view('admin.stores',['stores' => $stores]);
    }

    public function store(Request $request)
    {
        $store = [
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        return view('admin.store',$store);
    }

    public function storeRegister(Request $request)
    {
        $store = [
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        DB::insert('insert into stores (name,furigana,telephone,zipCode,prefectures,address,businessDay,businessHours,store_url,created_at) values (:name,:furigana,:telephone,:zipCode,:prefectures,:address,:businessDay,:businessHours,:store_url,CURRENT_TIMESTAMP)',$store);

        return view('admin.storeRegistrationSuccessful',$store);
    }

    public function StoreUsers(Request $request)
    {
        $id = $request -> id;
        $name = $request -> name;
        $furigana = $request -> furigana;
        $telephone = $request -> telephone;
        $zipCode = $request -> zipCode;
        $prefectures= $request -> prefectures;
        $address = $request -> address;
        $businessDay = $request -> businessDay;
        $businessHours = $request -> businessHours;
        $store_url= $request -> store_url;
        $param = [
            'store_url'=> $request -> store_url,
        ];
        $users = DB::select('select * from users where store_url = :store_url ORDER BY id DESC',$param);
        return view('admin.storeUsers',compact('users','id','name','furigana','telephone','zipCode','prefectures','address','businessDay','businessHours','store_url'));
    }

    public function storeReservationStatus(Request $request)
    {
        $id = $request -> id;
        $name = $request -> name;
        $furigana = $request -> furigana;
        $telephone = $request -> telephone;
        $zipCode = $request -> zipCode;
        $prefectures= $request -> prefectures;
        $address = $request -> address;
        $businessDay = $request -> businessDay;
        $businessHours = $request -> businessHours;
        $store_url= $request -> store_url;
        $param = [
            'store_url'=> $request -> store_url,
        ];
        $reservations = DB::select('select * from reservations where store_url = :store_url ORDER BY id DESC',$param);
        return view('admin.storeReservationStatus',compact('reservations','id','name','furigana','telephone','zipCode','prefectures','address','businessDay','businessHours','store_url'));
    }

    public function reservationStatu(Request $request)
    {
        if($request->has('fromTop')){
            $param = [
                'store_url'=> $request -> store_url,
            ];
            $store = DB::select('select * from stores where store_url = :store_url ORDER BY id DESC',$param);
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
                'id'=> $store[0] -> id,
                'name'=> $store[0] -> name,
                'furigana'=> $store[0] -> furigana,
                'telephone'=> $store[0] -> telephone,
                'zipCode'=> $store[0] -> zipCode,
                'prefectures'=> $store[0] -> prefectures,
                'address' => $store[0] -> address,
                'businessDay'=> $store[0] -> businessDay,
                'businessHours'=> $store[0] -> businessHours,
                'store_url'=> $store[0] -> store_url,
            ];
            return view('admin.reservationStatu',$data);
        }else{
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
                'id'=> $request -> id,
                'name'=> $request -> name,
                'furigana'=> $request -> furigana,
                'telephone'=> $request -> telephone,
                'zipCode'=> $request -> zipCode,
                'prefectures'=> $request -> prefectures,
                'address' => $request -> address,
                'businessDay'=> $request -> businessDay,
                'businessHours'=> $request -> businessHours,
                'store_url'=> $request -> store_url,
            ];
            return view('admin.reservationStatu',$data);
        }
       
    }

    public function user(Request $request)
    {
        $data = [
            'userId' => $request -> userId,
            'userName'=> $request -> userName,
            'userFurigana'=> $request -> userFurigana,
            'userTelephone'=> $request -> userTelephone,
            'userEmail'=> $request -> userEmail,
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        return view('admin.user',$data);
    }

    public function userEdit(Request $request)
    {
        $data = [
            'userId' => $request -> userId,
            'userName'=> $request -> userName,
            'userFurigana'=> $request -> userFurigana,
            'userTelephone'=> $request -> userTelephone,
            'userEmail'=> $request -> userEmail,
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        return view('admin.userEdit',$data);
    }

    public function userUpdate(Request $request)
    {
        $data = [
            'userId' => $request -> userId,
            'userName'=> $request -> userName,
            'userFurigana'=> $request -> userFurigana,
            'userTelephone'=> $request -> userTelephone,
            'userEmail'=> $request -> userEmail,
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        $userData = [
            'userId' => $request -> userId,
            'userName'=> $request -> userName,
            'userFurigana'=> $request -> userFurigana,
            'userTelephone'=> $request -> userTelephone,
            'userEmail'=> $request -> userEmail,
        ];
        DB::update('update users set name = :userName,furigana = :userFurigana,telephone = :userTelephone,email = :userEmail where id = :userId', $userData);
        return view('admin.user',$data);
    }

    public function userDelete(Request $request)
    {
        $id = $request -> id;
        $name = $request -> name;
        $furigana = $request -> furigana;
        $telephone = $request -> telephone;
        $zipCode = $request -> zipCode;
        $prefectures= $request -> prefectures;
        $address = $request -> address;
        $businessDay = $request -> businessDay;
        $businessHours = $request -> businessHours;
        $store_url= $request -> store_url;
        $data = [
            'userId' => $request -> userId,
        ];
        DB::delete('delete from users where id = :userId', $data);
        $param = [
            'store_url'=> $request -> store_url,
        ];
        $users = DB::select('select * from users where store_url = :store_url ORDER BY id DESC',$param);
        return view('admin.storeUsers',compact('users','id','name','furigana','telephone','zipCode','prefectures','address','businessDay','businessHours','store_url'));
    }

    public function userRegister(Request $request)
    {
        $data = [
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        return view('admin.userRegister',$data);
    }

    public function storeEdit(Request $request)
    {
        $store = [
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        return view('admin.storeEdit',$store);
    }

    public function storeUpdate(Request $request)
    {
        $store = [
            'id'=> $request -> id,
            'name'=> $request -> name,
            'furigana'=> $request -> furigana,
            'telephone'=> $request -> telephone,
            'zipCode'=> $request -> zipCode,
            'prefectures'=> $request -> prefectures,
            'address' => $request -> address,
            'businessDay'=> $request -> businessDay,
            'businessHours'=> $request -> businessHours,
            'store_url'=> $request -> store_url,
        ];
        DB::update('update stores set name = :name,furigana = :furigana,telephone = :telephone,zipCode = :zipCode,prefectures = :prefectures,address = :address,businessDay = :businessDay,prefectures = :businessHours,address = :businessHours,store_url = :store_url where id = :id', $store);
        return view('admin.store',$store);
    }

    public function storeDelete(Request $request)
    {
        $store = [
            'id'=> $request -> id,
        ];
        DB::update('delete from stores where id = :id', $store);
        $stores = DB::select('select * from stores ORDER BY id DESC');
        return view('admin.stores',['stores' => $stores]);
    }
    
    public function reservationStatus(Request $request)
    {
        $reservations = DB::select('select * from reservations ORDER BY id DESC');
        return view('admin.reservationStatus',['reservations' => $reservations]);
    }
    
}
