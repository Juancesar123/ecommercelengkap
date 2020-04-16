<?php namespace Tests\Repositories;

use App\Models\merek;
use App\Repositories\merekRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class merekRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var merekRepository
     */
    protected $merekRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->merekRepo = \App::make(merekRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_merek()
    {
        $merek = factory(merek::class)->make()->toArray();

        $createdmerek = $this->merekRepo->create($merek);

        $createdmerek = $createdmerek->toArray();
        $this->assertArrayHasKey('id', $createdmerek);
        $this->assertNotNull($createdmerek['id'], 'Created merek must have id specified');
        $this->assertNotNull(merek::find($createdmerek['id']), 'merek with given id must be in DB');
        $this->assertModelData($merek, $createdmerek);
    }

    /**
     * @test read
     */
    public function test_read_merek()
    {
        $merek = factory(merek::class)->create();

        $dbmerek = $this->merekRepo->find($merek->id);

        $dbmerek = $dbmerek->toArray();
        $this->assertModelData($merek->toArray(), $dbmerek);
    }

    /**
     * @test update
     */
    public function test_update_merek()
    {
        $merek = factory(merek::class)->create();
        $fakemerek = factory(merek::class)->make()->toArray();

        $updatedmerek = $this->merekRepo->update($fakemerek, $merek->id);

        $this->assertModelData($fakemerek, $updatedmerek->toArray());
        $dbmerek = $this->merekRepo->find($merek->id);
        $this->assertModelData($fakemerek, $dbmerek->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_merek()
    {
        $merek = factory(merek::class)->create();

        $resp = $this->merekRepo->delete($merek->id);

        $this->assertTrue($resp);
        $this->assertNull(merek::find($merek->id), 'merek should not exist in DB');
    }
}
