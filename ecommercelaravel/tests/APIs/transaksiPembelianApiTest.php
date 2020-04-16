<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\transaksiPembelian;

class transaksiPembelianApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/transaksi_pembelians', $transaksiPembelian
        );

        $this->assertApiResponse($transaksiPembelian);
    }

    /**
     * @test
     */
    public function test_read_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/transaksi_pembelians/'.$transaksiPembelian->id
        );

        $this->assertApiResponse($transaksiPembelian->toArray());
    }

    /**
     * @test
     */
    public function test_update_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->create();
        $editedtransaksiPembelian = factory(transaksiPembelian::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/transaksi_pembelians/'.$transaksiPembelian->id,
            $editedtransaksiPembelian
        );

        $this->assertApiResponse($editedtransaksiPembelian);
    }

    /**
     * @test
     */
    public function test_delete_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/transaksi_pembelians/'.$transaksiPembelian->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/transaksi_pembelians/'.$transaksiPembelian->id
        );

        $this->response->assertStatus(404);
    }
}
