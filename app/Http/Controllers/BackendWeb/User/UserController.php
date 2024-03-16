<?php

namespace App\Http\Controllers\BackendWeb\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CRUDController;
use App\Http\Requests\ProfileRegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use CrudTrait;

    protected function unsetUpdateEmptyField(): array
    {
        return ['password'];
    }

    protected function model(): string
    {
        return User::class;
    }

    protected function addAutoInput(Request $request): array
    {
        $role_id = $request->input('role', []);
        return ['role_id' => $role_id];
    }

    protected function getFormRequest(): string
    {
        return ProfileRegisterRequest::class;
    }

    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        $roleList = Role::all()->whereNotIn('id', ['1']);
        return view('users.create', compact('roleList'));
    }

    public function edit(User $user)
    {
        $roleList = Role::all()->whereNotIn('id', ['1']);
        return view('users.edit', compact(['user', 'roleList']));
    }
}
