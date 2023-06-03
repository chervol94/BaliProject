<?php

declare (strict_types=1);

namespace Apps\Shared\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DummyController extends Controller 
{
    public function __invoke(
    ): JsonResponse
    {
        return new JsonResponse(
            [
                'ok' => 'Everything Looking Good!'
            ]
        );
    }

}