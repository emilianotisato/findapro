<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\Provider;
use App\Models\ServiceCategory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProvidersControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_admins_can_access_providers_panel()
    {
        $this->get('/admin/providers')
            ->assertRedirect('/login');

        $user = User::factory()->create(['role'=>'user']);

        $this->actingAs($user)
            ->get('/admin/providers')
            ->assertStatus(403);
        
    }

    /** @test */
    public function it_can_list_all_available_providers()
    {
        $admin = User::factory()->create([
            'role' => 'admin'
        ]);

        $category = ServiceCategory::factory()->create();

        $providers = Provider::factory()->count(3)->create(['service_category_id' => $category->id]);

        $this->actingAs($admin)
            ->get('/admin/providers')
            ->assertStatus(200)
            ->assertViewIs('admin.providers.index')
            ->assertViewHas('providers', $providers)
            ->assertSee($providers[0]->name)
            ->assertSee($providers[0]->contact_name)
            ->assertSee($providers[0]->contact_phone)
            ->assertSee($providers[0]->serviceCategory->name)
            ;
    }

    /** @test */
    public function it_can_create_a_provider()
    {
      $admin = User::factory()->create([
        'role' => 'admin'
      ]);
      $data = [
        'name' => 'Provider 1',
        'contact_name' => 'John Doe',
        'contact_phone' => '123456789',
        'contact_email' => 'john@doe.com'
      ];

      $this->assertDatabaseMissing('providers', $data);

      $this->actingAs($admin)->post('/admin/providers', $data);

      $this->assertDatabaseHas('providers', $data);
    }
}
