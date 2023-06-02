<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginRequest extends ApiRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ];
    }
}

