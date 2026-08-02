<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_order_buttons_and_modal_markup_are_correct(): void
    {
        $card = (object) [
            'title' => 'Test Model',
            'price' => '10 000',
            'price_label' => 'от 10 000',
            'power_kw' => '3.2',
            'area_m2' => '35',
        ];

        $html = view('partials.home.card-footer', ['card' => $card])->render();

        $this->assertStringContainsString('class="btn custom-btn w-100 open-order-modal"', $html);
        $this->assertStringContainsString('data-bs-toggle="modal"', $html);
        $this->assertStringContainsString('data-bs-target="#installationOrderModal"', $html);
        $this->assertStringContainsString('data-model="Test Model"', $html);
        $this->assertStringContainsString('data-price="от 10 000"', $html);
        $this->assertStringContainsString('data-power="3.2 (до 35)"', $html);

        $serviceCard = (object) [
            'title' => 'Service Model',
            'price' => '5 000',
            'price_label' => 'от 5 000',
        ];

        $serviceHtml = view('partials.home.service-card-footer', ['card' => $serviceCard])->render();

        $this->assertStringContainsString('data-bs-toggle="modal"', $serviceHtml);
        $this->assertStringContainsString('data-bs-target="#installationOrderModal"', $serviceHtml);
        $this->assertStringContainsString('data-model="Service Model"', $serviceHtml);
        $this->assertStringContainsString('data-price="от 5 000"', $serviceHtml);
        $this->assertStringContainsString('data-power=""', $serviceHtml);

        $modalHtml = view('partials.home.modal-form-fields')->render();

        $this->assertStringContainsString('id="installationOrderForm"', $modalHtml);
        $this->assertStringContainsString('name="model_name"', $modalHtml);
        $this->assertStringContainsString('name="price"', $modalHtml);
        $this->assertStringContainsString('name="power_area"', $modalHtml);
        $this->assertStringContainsString('name="name"', $modalHtml);
        $this->assertStringContainsString('name="email"', $modalHtml);
        $this->assertStringContainsString('name="phone"', $modalHtml);
        $this->assertStringContainsString('type="submit"', $modalHtml);

        $this->assertSame(route('installation.order'), url('/installation-order'));
        $this->assertSame(route('contact.message'), url('/contact-message'));
    }
}
