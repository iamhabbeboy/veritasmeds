<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function index()
    {
    }
    public function store(Request $request, Picture $picture)
    {
        if ($request->hasFile('file')) {
            
            $files = $request->file;
            $allowedfileExtension = ['jpeg', 'jpg', 'png', 'gif'];
            $drugimage = [];

            foreach ($files as $key => $file) {

                $filename = $file->getClientOriginalName();
                $extension = strtolower($file->getClientOriginalExtension());
                $check_ext = in_array($extension, $allowedfileExtension);

                if ($check_ext) {

                    $imageName = substr(str_replace(' ', '-', $filename), 0, 10);
                    $imageName .= '-' . md5(time()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/drug_images'), $imageName);
                    $drugimage[] = ['filepath' => 'drug_images/' . $imageName];

                } else {
                    echo 'errformat';
                }
            }

            session(['drugimages' => $drugimage]);
            // dd(session('drugimages'));
        }
    }
}
