<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
            $date = $request->validated();
            $tag_ids = $date['tag_ids'];
            unset($date['tag_ids']);
            $date['preview_image'] = Storage::put('/images', $date['preview_image']);
            $date['main_image'] = Storage::put('/images', $date['main_image']);
            $post = Post::firstOrcreate($date);
            $post->tags()->attach($tag_ids);

        return redirect()->route('admin.post.index');
    }
}
