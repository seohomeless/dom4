<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 5,
                'category_id' => 1,
                'title' => 'Product1',
                'articul' => '1',
                'photo' => NULL,
                'vendor' => 'sofa LTD',
                'price' => 200000,
                'description' => 'Super! Soft!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'category_id' => 2,
                'title' => 'Product2',
                'articul' => '2',
                'photo' => NULL,
                'vendor' => 'DiVaNo LTD',
                'price' => 2000000000,
                'description' => 'Shiift.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}