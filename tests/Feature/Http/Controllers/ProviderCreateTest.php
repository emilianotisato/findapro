<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Provider;
use App\Models\ServiceCategory;

class ProviderCreateTest extends TestCase
{
    use RefreshDatabase;
    use withFaker;
   
   /** @test */
    public function create_provider()
    {
      

       /* $ProviderData = Provider::factory()->create([
            'name' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'contact_phone' => $this->faker->phoneNumber,
            'contact_email' => $this->faker->email,
            //'category' => $this->faker->jobTitle,
        ]);*/

        $ProviderData = Provider::factory()->create()->toArray();
       
        $response = $this->post('admin.providers.create.createproviderform', $ProviderData);

        //$this->assertDatabaseHas('providers', $ProviderData);
        
        //$response->assertRedirect('/admin/providers/create');
    }
}
