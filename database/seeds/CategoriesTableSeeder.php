<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('products')->delete();
        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'name' => 'sofa',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'name' => 'divan',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'name' => 'Shkaff',
            ),
        ));
        
        
    }
}