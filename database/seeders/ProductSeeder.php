<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Nike Shoe',
                "price"=>"13299",
                "description"=>"The oversized '90s graffiti-styled branding celebrates the streets you walk and the Air you walk on.",
                "category"=>"shoe",
                "gallery"=>"https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/13444948/2021/3/22/285daea2-05a9-42d9-9536-e66583214a981616405147893-ADIDAS-Unisex-Sports-Shoes-8941616405147425-1.jpg"
            ],
            [
                'name'=>'Roadster T-shirt',
                "price"=>"419",
                "description"=>"Grey Melange solid T-shirt, has a round neck, short sleeves",
                "category"=>"tshirt",
                "gallery"=>"https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/1824340/2017/8/3/11501764560457-Roadster-Men-Grey-Melange-Solid-Round-Neck-T-shirt-3291501764560241-1.jpg"
            ],
            [
                'name'=>'Nike T-shirt',
                "price"=>"1500",
                "description"=>"Black printed T-shirt",
                "category"=>"tshirt",
                "gallery"=>"https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/14028776/2021/5/17/ccb5d8cc-889f-42ea-bdfe-8cdbd63f8d7e1621251953298-Nike-Sportswear-Mens-T-Shirt-7661621251948423-1.jpg"
            ],
            [
                'name'=>'Levis',
                "price"=>"2939",
                "description"=>"Men 65504 Skinny Fit Jeans",
                "category"=>"jeans",
                "gallery"=>"https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/13367336/2021/5/31/da17396a-355f-4563-af35-7309c8d8a2ba1622441310509HRXByHrithikRoshanMenMedievalBlueColourblockAnti-StaticRapid1.jpg"
             ]
        ]);
    }
}
