<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showData(Request $request, $id) {
        $dataDiri = [
            [
                "id" => 0,
                "nama" => 'Rafi Muhammad',
                "summary" => 'Hello, my name is Rafi Muhammad. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
                "hobby" => ['Ngoding', 'Main Futsal'],
                "matkul" => ['Web Programming', 'Software Engineering'],
                "gambar" => 'pics/rafi.jpg',
                "umur" => 21,
            ],
            [
                "id" => 1,
                "nama" => 'Sekar Azalea',
                "summary" => 'Hello, my name is Sekar Azalea. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
                "hobby" => ['Yoga'],
                "matkul" => ['Human and Computer Interaction'],
                "gambar" => 'pics/sekar.jpg',
                "umur" => 20
            ],
            [
                "id" => 2,
                "nama" => 'Umar Siddiq Gege Khoiruddin',
                "summary" => 'Hello, my name is Umar Siddiq Gege Khoiruddin, now I m studying at Bina Nusantara University majoring in computer science and statistics since 2020 ',
                "hobby" => ['Membaca buku'],
                "matkul" => ['Computer network'],
                "gambar" => 'pics/umar.jpg',
                "umur" => 20
            ]
        ];

        $activeData = null;
        foreach ($dataDiri as $key => $value) {
            if ($id == $value['id']) {
                $activeData = (object)$value;
            }
        }

        return view('profile', ['data' => $activeData]);
    }
}
