<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        // TODO: Implement __invoke() method.
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('admin.category.show', $category->id);
    }
}
