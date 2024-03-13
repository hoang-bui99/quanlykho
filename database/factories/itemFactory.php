<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class itemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Ten_hang'=>$this->faker->name(),
            'Don_vi_tinh'=>$this->faker->name(),
            'So_luong_nhap'=>$this->faker->randomNumber(),
            'Gia_nhap'=>$this->faker->randomNumber(),
            'Gia_ban'=>$this->faker->randomNumber()
        ];
    }
}
