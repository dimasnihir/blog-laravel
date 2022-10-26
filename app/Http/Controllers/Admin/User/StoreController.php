<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        // TODO: Implement __invoke() method.
        $date = $request->validated();
        $date['password'] = Hash::make($date['password']);
        User::firstOrcreate(['email' => $date['email']], $date);
        return redirect()->route('admin.user.index');
    }
}
