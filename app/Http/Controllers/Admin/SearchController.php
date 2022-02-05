<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request)
        {
            $search = $request->input('search');

            $posts = Post::query()
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('short', 'LIKE', "%{$search}%")
                ->orWhere('content', 'LIKE', "%{$search}%")
                ->get();
            return view('admin.search', compact('posts'));
        }
}
