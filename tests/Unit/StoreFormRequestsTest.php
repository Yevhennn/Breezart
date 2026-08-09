<?php

namespace Tests\Unit;

use App\Http\Requests\StoreContactMessageRequest;
use App\Http\Requests\StoreInstallationOrderRequest;
use Tests\TestCase;

class StoreFormRequestsTest extends TestCase
{
    public function test_installation_order_request_has_expected_rules(): void
    {
        $request = new StoreInstallationOrderRequest();

        $rules = $request->rules();

        $this->assertSame('required|string|max:255', $rules['name']);
        $this->assertSame('required|email|max:255', $rules['email']);
        $this->assertSame('required|string|max:50', $rules['phone']);
        $this->assertSame('required|string|max:255', $rules['model_name']);
    }

    public function test_contact_message_request_has_expected_rules(): void
    {
        $request = new StoreContactMessageRequest();

        $rules = $request->rules();

        $this->assertSame('required|string|max:255', $rules['full-name']);
        $this->assertSame('required|email|max:255', $rules['email']);
        $this->assertSame('required|string|max:2000', $rules['message']);
    }
}
