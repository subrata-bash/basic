<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        Slider::create([
            'title' => 'Manage your finances more effectively',
            'description' => 'Track your daily finances automatically. Manage your money in a friendly & flexible way, making it easy to spend guilt-free.',
            'link' => '#',
        ]);
    }
}
