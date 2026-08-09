<?php

namespace Tests\Unit;

use App\Http\Requests\AskChatbotRequest;
use Tests\TestCase;

class AskChatbotRequestTest extends TestCase
{
    public function test_chatbot_request_has_expected_rules(): void
    {
        $request = new AskChatbotRequest();

        $rules = $request->rules();

        $this->assertSame('required|string|max:1000', $rules['message']);
    }
}
