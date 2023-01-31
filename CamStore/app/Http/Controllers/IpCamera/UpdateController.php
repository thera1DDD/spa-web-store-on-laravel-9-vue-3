<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\IpCamera;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(\App\Http\Requests\IpCamera\UpdateRequest $request, IpCamera $camera)
    {
        $data =$request->validated();
        $camera->update($data);
        return view('camera.show', compact('camera'));
    }
}
