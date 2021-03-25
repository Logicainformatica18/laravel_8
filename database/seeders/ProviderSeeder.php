<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Provider;
class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create(['name' => 'CASA LEE','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'DEKORMONT','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'DOU DOU','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'FANNY','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'FEY','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'GALDIAZ','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'GO SHOP','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'GPACHECO','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'INKATINKA','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'KITS','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'LORENS','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'LUAU','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'MIA','description' =>'','cellphone' =>'']);
        Provider::create(['name' => 'SR. FERNANDO','description' =>'','cellphone' =>'']);


    }
}
