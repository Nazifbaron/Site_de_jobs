<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function show(Tag $tag)
    {
        return view('tags.show', [
            'tag' => $tag,
            'jobs' => $tag->jobs // tous les jobs liés à ce tag
        ]);
    }
}
