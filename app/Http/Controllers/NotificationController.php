<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\EmailNotification; //harus diisi
use Illuminate\Support\Facades\Notification; //harus diisi
use App\Models\User;

class NotificationController extends Controller
{
    //
    public function test()
    {
        $user = User::all();
        $data = "Ini adalah contoh data";
        //dibawah ini merupakan
        //contoh mengirimkan notifikasi ke semua user
        Notification::send($user, new EmailNotification($data));

        return response()->json([
            'message' => 'Notifikasi berhasil dikirim'
        ]);
    }
}
