<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Dotenv\Exception\ValidationException;

class AuthController extends Controller
{

    public function login(Request $req): JsonResponse
    {
        try {
            $validated = $req->validate([
                'email' => 'required|exists:users,email',
                'password' => 'required|string'
            ]);

            if (Auth::attempt($validated)) {
                $user = Auth::user();
                Log::info('Authenticated user:', ['id' => $user->id, 'email' => $user->email]);
                return new JsonResponse(
                    [
                        'message' => 'success',
                        'status' => true
                    ],
                    Response::HTTP_OK
                );
            }

            return new JsonResponse(
                [
                    'message' => 'failure',
                    'status' => false
                ],
                Response::HTTP_OK
            );
        } catch (ValidationException $e) {
            return new JsonResponse(
                [
                    'message' => 'success',
                    'error' => $e->getMessage(),
                    'status' => true
                ],
                Response::HTTP_OK
            );
        }
    }
}
