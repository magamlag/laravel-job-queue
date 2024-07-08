<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;
use Illuminate\Support\Facades\Validator;

class SubmissionController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        ProcessSubmission::dispatch($request->only(['name', 'email', 'message']));

        return response()->json(['status' => 'Job dispatched'], 200);
    }
}
