<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        return view('admin.categories.create');
    }
}
