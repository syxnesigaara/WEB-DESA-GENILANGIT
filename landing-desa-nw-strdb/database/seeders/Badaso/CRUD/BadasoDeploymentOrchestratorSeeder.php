<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(NewsCRUDDataDeleted::class);
        
        
        $this->seed(NewsCRUDDataTypeAdded::class);
        $this->seed(NewsCRUDDataRowAdded::class);
        $this->seed(ContentCRUDDataTypeAdded::class);
        $this->seed(ContentCRUDDataRowAdded::class);
        
        
        $this->seed(KepengurusanCRUDDataDeleted::class);
        $this->seed(KepengurusanCRUDDataTypeAdded::class);
        $this->seed(KepengurusanCRUDDataRowAdded::class);
        $this->seed(DemografiCRUDDataTypeAdded::class);
        $this->seed(DemografiCRUDDataRowAdded::class);
        $this->seed(KelembagaanCRUDDataTypeAdded::class);
        $this->seed(KelembagaanCRUDDataRowAdded::class);
    }
}
