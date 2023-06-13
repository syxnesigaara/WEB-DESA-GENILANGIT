<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class KepengurusanCRUDDataDeleted extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
      	\DB::beginTransaction();
       	try {
			$data_type = Badaso::model('DataType')->where('name', 'kepengurusan')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'kepengurusan')->delete();
            }

			Badaso::model('Permission')->removeFrom('kepengurusan');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/kepengurusan');

            if ($menuItem->exists()) {
                $menuItem->delete();
            }

			\DB::commit();
       	} catch(Exception $e) {
        	\DB::rollBack();

        	throw new Exception('Exception occur ' . $e);
       	}
    }
}
