<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(Request $request)
    {
        /* Simple Put File */
//        Storage::disk('dropbox')->put('demo.txt', "Hello");

        /* Simple Get File Content */
//        Storage::disk('dropbox')->get('demo.txt');
//
//        /* Simple Store File */
//        $path = Storage::disk('dropbox')->putFileAs(
//            'avatars', $request->file('avatar'), $request->user()->id
//        );
//
//        dd('DONE');
    }

    public function saveFile(Request $request)
    {
        Storage::disk('dropbox')->put('demo.txt', "Hello");
    }
}
