<?php

namespace App\Http\Controllers;

use App\Http\Requests\AskChatbotRequest;
use App\Services\OpenAiService;

class ChatbotController extends Controller
{
    public function __construct(protected OpenAiService $openAiService)
    {
    }

    public function ask(AskChatbotRequest $request)
    {
        $result = $this->openAiService->ask($request->input('message'));

        return response()->json($result);
    }
}
