<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function show(string $docsuuid, string $filename)
    {
        
        $filePath = storage_path("app\documents\\$docsuuid\\$filename");
        if (!Storage::exists("documents\\$docsuuid\\$filename")) {
            abort(404);
        }


        $headers = [
            'Content-Type' => Storage::mimeType($filePath),
        ];
    
        return response()->file($filePath, $headers);
        }
}
