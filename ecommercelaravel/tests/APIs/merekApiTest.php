<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\merek;

class merekApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_merek()
    {
        $merek = factory(merek::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/mereks', $merek
        );

        $this->assertApiResponse($merek);
    }

    /**
     * @test
     */
    public function test_read_merek()
    {
        $merek = factory(merek::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/mereks/'.$merek->id
        );

        $this->assertApiResponse($merek->toArray());
    }

    /**
     * @test
     */
    public function test_update_merek()
    {
        $merek = factory(merek::class)->create();
        $editedmerek = factory(merek::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/mereks/'.$merek->id,
            $editedmerek
        );

        $this->assertApiResponse($editedmerek);
    }

    /**
     * @test
     */
    public function test_delete_merek()
    {
        $merek = factory(merek::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/mereks/'.$merek->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/mereks/'.$merek->id
        );

        $this->response->assertStatus(404);
    }
}
