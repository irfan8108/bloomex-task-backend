<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;

trait ApiResponse {

    public function rollback($e, $message = "Something went wrong! Process not completed"){
        DB::rollBack();
        $this->throw($e, $message);
    }

    public function throw($e, $message = "Something went wrong! Process not completed"){
        // Log::info($e);
        throw new HttpResponseException(response()->json(["message" => $message], 500));
    }

    public function sendResponse($result, $message = "success", $code = 200){
        $response = [
            'status' => true
        ];
        
        if(!empty($result)){
            $response['data'] = $result;
        }

        if(!empty($message)){
            $response['message'] = $message;
        }
        return response()->json($response, $code);
    }

}