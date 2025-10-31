<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_it_displays_the_products_index()
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.index'));

        $response->assertStatus(200);
        $response->assertSee($product->name);
    }

    /** @test */
    public function test_it_displays_the_product_show_page()
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.show', $product));

        $response->assertStatus(200);
        $response->assertSee($product->name);
        $response->assertSee((string)$product->quantity);
    }

    /** @test */
    public function test_it_can_create_a_product()
    {
        $data = [
            'name' => 'Jauns Produkts',
            'quantity' => 5,
            'description' => 'Apraksts',
            'expiration_date' => now()->addYear()->format('Y-m-d'),
            'status' => 'active',
        ];

        $response = $this->post(route('products.store'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('products', ['name' => 'Jauns Produkts']);
    }

    /** @test */
    public function test_it_can_update_a_product()
    {
        $product = Product::factory()->create([
            'name' => 'Vecais Nosaukums'
        ]);

        $data = [
            'name' => 'Jaunais Nosaukums',
            'quantity' => $product->quantity,
            'description' => $product->description,
            'expiration_date' => $product->expiration_date?->format('Y-m-d'),
            'status' => $product->status,
        ];

        $response = $this->put(route('products.update', $product), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('products', ['name' => 'Jaunais Nosaukums']);
    }

    /** @test */
    public function test_it_can_delete_a_product()
    {
        $product = Product::factory()->create();

        $response = $this->delete(route('products.destroy', $product));

        $response->assertRedirect();
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
