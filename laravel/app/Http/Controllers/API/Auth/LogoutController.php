<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogoutController extends Controller
{
    public function __invoke(Response $response)
    {
        Auth::guard('web')->logout();

        return $this->apiResponse('Logout Success', [], Response::HTTP_OK);
    }
}
