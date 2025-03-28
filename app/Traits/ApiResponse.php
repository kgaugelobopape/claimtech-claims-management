<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponse
{
    /**
     * Build success response
     * @param array $data
     * @param bool $success
     * @param int $code
     * @param string $message
     * @param string $location
     * @return JsonResponse
     */
    public function httpResponse(array $data, bool $success = true, int $code = Response::HTTP_OK, string $message = "message.operation_successful", string $location = "/welcome"): JsonResponse
    {
        return response()->json(["data" => $data, "message" => $message, "success" => $success, "location" => $location], $code);
    }

    /**
     * Build success response
     * @param array|string $message
     * @param int $code
     * @param string $location
     * @return JsonResponse
     */
    public function errorResponse(array|string $message, int $code, string $location = "/home"): JsonResponse
    {
        return response()->json(["error" => $message, "code" => $code, "location" => $location], $code);
    }
}
