<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{ 
    //Percobaan membuat controller baru
    public function index()
    {
        $post = [
            ['id'=> 1, 'title' => "judul 1", 'body' => "Body dari post 1"],
            ['id'=> 2, 'title' => "judul 2", 'body' => "Body dari post 2"],
            ['id'=> 3, 'title' => "judul 3", 'body' => "Body dari post 3"]
        ];
        
        echo "<ul>";
        foreach ($post as $key) {
            echo "<li><a href = '".route('post.detail', $key['id'])."'>".$key['title']."</a></li>";
        }
        echo "</ul>";

        echo "<a href = '".route('registerPage')."'>Ke Halaman daftar </a>";
    }

    public function storeData(Request $req)
    {
        return dd($req->all());
    }
}
