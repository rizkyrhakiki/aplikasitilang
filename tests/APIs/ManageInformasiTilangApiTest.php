<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ManageInformasiTilang;

class ManageInformasiTilangApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/manage_informasi_tilangs', $manageInformasiTilang
        );

        $this->assertApiResponse($manageInformasiTilang);
    }

    /**
     * @test
     */
    public function test_read_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/manage_informasi_tilangs/'.$manageInformasiTilang->id
        );

        $this->assertApiResponse($manageInformasiTilang->toArray());
    }

    /**
     * @test
     */
    public function test_update_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->create();
        $editedManageInformasiTilang = factory(ManageInformasiTilang::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/manage_informasi_tilangs/'.$manageInformasiTilang->id,
            $editedManageInformasiTilang
        );

        $this->assertApiResponse($editedManageInformasiTilang);
    }

    /**
     * @test
     */
    public function test_delete_manage_informasi_tilang()
    {
        $manageInformasiTilang = factory(ManageInformasiTilang::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/manage_informasi_tilangs/'.$manageInformasiTilang->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/manage_informasi_tilangs/'.$manageInformasiTilang->id
        );

        $this->response->assertStatus(404);
    }
}
