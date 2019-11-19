<?php namespace Tests\Repositories;

use App\Models\ManageInformasiTilang;
use App\Repositories\ManageInformasiTilangRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ManageInformasiTilangRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ManageInformasiTilangRepository
     */
    protected $manageInformasiTilangRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->manageInformasiTilangRepo = \App::make(ManageInformasiTilangRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->make()->toArray();

        $createdManageInformasiTilang = $this->manageInformasiTilangRepo->create($manageInformasiTilang);

        $createdManageInformasiTilang = $createdManageInformasiTilang->toArray();
        $this->assertArrayHasKey('id', $createdManageInformasiTilang);
        $this->assertNotNull($createdManageInformasiTilang['id'], 'Created ManageInformasiTilang must have id specified');
        $this->assertNotNull(ManageInformasiTilang::find($createdManageInformasiTilang['id']), 'ManageInformasiTilang with given id must be in DB');
        $this->assertModelData($manageInformasiTilang, $createdManageInformasiTilang);
    }

    /**
     * @test read
     */
    public function test_read_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->create();

        $dbManageInformasiTilang = $this->manageInformasiTilangRepo->find($manageInformasiTilang->id);

        $dbManageInformasiTilang = $dbManageInformasiTilang->toArray();
        $this->assertModelData($manageInformasiTilang->toArray(), $dbManageInformasiTilang);
    }

    /**
     * @test update
     */
    public function test_update_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->create();
        $fakeManageInformasiTilang = factory(ManageInformasiTilang::class)->make()->toArray();

        $updatedManageInformasiTilang = $this->manageInformasiTilangRepo->update($fakeManageInformasiTilang, $manageInformasiTilang->id);

        $this->assertModelData($fakeManageInformasiTilang, $updatedManageInformasiTilang->toArray());
        $dbManageInformasiTilang = $this->manageInformasiTilangRepo->find($manageInformasiTilang->id);
        $this->assertModelData($fakeManageInformasiTilang, $dbManageInformasiTilang->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->create();

        $resp = $this->manageInformasiTilangRepo->delete($manageInformasiTilang->id);

        $this->assertTrue($resp);
        $this->assertNull(ManageInformasiTilang::find($manageInformasiTilang->id), 'ManageInformasiTilang should not exist in DB');
    }
}
