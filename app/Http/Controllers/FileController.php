<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class FileController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function saveFile(Request $request)
    {
        if ($request->file('file')) {

            $this->validate($request, [
                'file' => ['required', File::types(['pdf',])->max(10000)]
            ]);

            $file = $request->file('file');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            if (!Storage::disk('dropbox')->put($fileName, file_get_contents($file))) {
                return back()->with('error', 'Ошибка при сохранении');
            } else {
                $link = Storage::disk('dropbox')->url($fileName);
                return back()->with('success', "Успешно сохранено, адрес для скачивания $link");
            }
        }
    }
}
