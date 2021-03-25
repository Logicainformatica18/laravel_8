<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['description' => 'Acrilico','detail' =>'']);
        Type::create(['description' => 'Loza/Cerámica','detail' =>'']);
        Type::create(['description' => 'Madera','detail' =>'']);
        Type::create(['description' => 'Metal','detail' =>'']);
        Type::create(['description' => 'Plastico','detail' =>'']);
        Type::create(['description' => 'Ternopor','detail' =>'']);

        Type::create(['description' => 'Carton','detail' =>'']);
        Type::create(['description' => 'Papeleria','detail' =>'']);
        Type::create(['description' => 'Tela','detail' =>'']);
        Type::create(['description' => 'Vidrio','detail' =>'']);
    }
}
