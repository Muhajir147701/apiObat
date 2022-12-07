<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\obat;

class ObatFactory extends Factory
{
    
    protected $model = obat::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id=rand(15,100);
        $std=870;
        $link=$id+$std;
        $harga=10000;
        return [
            //

            'obat_name'=>$this->faker->address(),
            'obat_picture'=> "https://picsum.photos/id/$link/100/150",
            'harga'=> $harga+$id,            
            'deskripsi'=>$this->faker->sentence(10)
            
        ];
    }
}
