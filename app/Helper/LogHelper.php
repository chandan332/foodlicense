<?php

namespace App\Helper;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogHelper
{
    public static function withEx(string $successMessage, string $errorMessage, Closure $action, bool $isLoggingBefore = false)
    {
        $return = null;
        try {
            if ($isLoggingBefore) {
                self::successLogger($successMessage);
                $return = $action();
            } else {
                $return = $action();
                self::successLogger($successMessage);
            }
            if ($return === null) {
                return ['status' => true, 'message' => $successMessage];
            }
            return ['status' => true, 'message' => $successMessage, 'data' => $return];
        } catch (\Exception $e) {
            $message = $errorMessage . $e->getMessage();
            self::errorLogger($message);
            return ['status' => false, 'message' => $message];
        }
    }

    private static function successLogger($message)
    {
        if (Auth::check()) {
            $email = Auth::user()->email;
            return Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/' . $email . '/laravel.log'),
            ])->info($message);
        }
        return Log::info($message);
    }

    private static function errorLogger($message)
    {
        if (Auth::check()) {
            $email = Auth::user()->email;
            return Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/' . $email . '/laravel.log'),
            ])->error($message);
        }
        return Log::error($message);
    }
}
