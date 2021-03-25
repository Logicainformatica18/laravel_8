<?php
namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['description' => 'Adornos de mesa','detail' =>'']);
        Category::create(['description' => 'Bandeja','detail' =>'']);
        Category::create(['description' => 'Base cupcakes','detail' =>'']);
        Category::create(['description' => 'Escaleras','detail' =>'']);
        Category::create(['description' => 'Faroles LED','detail' =>'']);
        Category::create(['description' => 'Figuras Led','detail' =>'']);
        Category::create(['description' => 'Jaulas','detail' =>'']);
        Category::create(['description' => 'Letreros Led','detail' =>'']);
        Category::create(['description' => 'Porta novios','detail' =>'']);
        Category::create(['description' => 'Porta retratos','detail' =>'']);
        Category::create(['description' => 'Porta tortas','detail' =>'']);
        Category::create(['description' => 'Porta vela','detail' =>'']);
        Category::create(['description' => 'Ternopor','detail' =>'']);

        Category::create(['description' => 'Acrilicos','detail' =>'']);
        Category::create(['description' => 'Candy toy','detail' =>'']);
        Category::create(['description' => 'Adornos de mesa','detail' =>'']);
        Category::create(['description' => 'Flores','detail' =>'']);
        Category::create(['description' => 'Cesped','detail' =>'']);
        Category::create(['description' => 'Masetero','detail' =>'']);
        Category::create(['description' => 'Bandejas','detail' =>'']);
        Category::create(['description' => 'Espejos','detail' =>'']);
        Category::create(['description' => 'P.T Metal','detail' =>'']);
        Category::create(['description' => 'Cajitas Armables','detail' =>'']);
        Category::create(['description' => 'Maletas','detail' =>'']);
        Category::create(['description' => 'Cilindros','detail' =>'']);
        Category::create(['description' => 'Hexagonal','detail' =>'']);
        Category::create(['description' => 'Bolas','detail' =>'']);
        Category::create(['description' => 'Tapetes','detail' =>'']);
        Category::create(['description' => 'Rollo Cesped','detail' =>'']);
        Category::create(['description' => 'Ramo de Flores','detail' =>'']);
        Category::create(['description' => 'Luces Led','detail' =>'']);
        Category::create(['description' => 'Columnas','detail' =>'']);
        Category::create(['description' => 'Balcones','detail' =>'']);
        Category::create(['description' => 'Caballetes','detail' =>'']);
    }
}
