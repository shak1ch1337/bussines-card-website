<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use Illuminate\Support\Facades\Storage;

class SocialController extends Controller
{
    public function index(Social $social)
    {
        return $social->all();
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "title_social" => "required",
            "link" => "required",
            "icon" => "required",
            "image" => "required"
        ]);

        if ($request->hasFile("image"))
        {


            $path = $request->file("image")->storeAs("", "image.jpg", "public");

            $social = Social::create([
                "title_social" => $request->title_social,
                "link" => $request->link,
                "icon" => $path
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Соц.сеть добавлена!",
                "data" => $social
            ], 201);
        }
        return response()->json([
            "status" => "Error",
            "message" => "Произошла неизвесиная ошибка!"
        ]);
    }

    public function destroy(String $id)
    {
        $social = Social::findOrFail($id);
        $social->delete();

        return response()->json([
            "status" => "success",
            "message" => "Соц.сеть была удалена!"
        ], 200);
    }
}
