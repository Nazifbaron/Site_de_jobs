<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function __invoke(Tag $tag)
    {
        //récupéré tous les jobs associés a un tag
        return view('resultas',['jobs'=>$tag->jobs]);
    }
   
}
