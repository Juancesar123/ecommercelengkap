<?php namespace Tests\Repositories;

use App\Models\transaksiPembelian;
use App\Repositories\transaksiPembelianRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class transaksiPembelianRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var transaksiPembelianRepository
     */
    protected $transaksiPembelianRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->transaksiPembelianRepo = \App::make(transaksiPembelianRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->make()->toArray();

        $createdtransaksiPembelian = $this->transaksiPembelianRepo->create($transaksiPembelian);

        $createdtransaksiPembelian = $createdtransaksiPembelian->toArray();
        $this->assertArrayHasKey('id', $createdtransaksiPembelian);
        $this->assertNotNull($createdtransaksiPembelian['id'], 'Created transaksiPembelian must have id specified');
        $this->assertNotNull(transaksiPembelian::find($createdtransaksiPembelian['id']), 'transaksiPembelian with given id must be in DB');
        $this->assertModelData($transaksiPembelian, $createdtransaksiPembelian);
    }

    /**
     * @test read
     */
    public function test_read_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->create();

        $dbtransaksiPembelian = $this->transaksiPembelianRepo->find($transaksiPembelian->id);

        $dbtransaksiPembelian = $dbtransaksiPembelian->toArray();
        $this->assertModelData($transaksiPembelian->toArray(), $dbtransaksiPembelian);
    }

    /**
     * @test update
     */
    public function test_update_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->create();
        $faketransaksiPembelian = factory(transaksiPembelian::class)->make()->toArray();

        $updatedtransaksiPembelian = $this->transaksiPembelianRepo->update($faketransaksiPembelian, $transaksiPembelian->id);

        $this->assertModelData($faketransaksiPembelian, $updatedtransaksiPembelian->toArray());
        $dbtransaksiPembelian = $this->transaksiPembelianRepo->find($transaksiPembelian->id);
        $this->assertModelData($faketransaksiPembelian, $dbtransaksiPembelian->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_transaksi_pembelian()
    {
        $transaksiPembelian = factory(transaksiPembelian::class)->create();

        $resp = $this->transaksiPembelianRepo->delete($transaksiPembelian->id);

        $this->assertTrue($resp);
        $this->assertNull(transaksiPembelian::find($transaksiPembelian->id), 'transaksiPembelian should not exist in DB');
    }
}
