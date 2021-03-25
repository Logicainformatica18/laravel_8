<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Size;
class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(['description' => '20x20','detail' =>'H.10']);
        Size::create(['description' => '25x25','detail' =>'']);
        Size::create(['description' => '30x30','detail' =>'H.10']);
        Size::create(['description' => '35x35','detail' =>'']);
        Size::create(['description' => '40x30','detail' =>'']);
        Size::create(['description' => '45x35','detail' =>'']);
        Size::create(['description' => 'chica','detail' =>'']);
        Size::create(['description' => 'chico','detail' =>'11cm 18cm']);
        Size::create(['description' => 'colores','detail' =>'']);
        Size::create(['description' => 'd.20','detail' =>'H.10 H.14']);
        Size::create(['description' => 'd.25','detail' =>'H.10 H.14']);
        Size::create(['description' => 'd.26','detail' =>'']);
        Size::create(['description' => 'd.30','detail' =>'H.10 H.14']);
        Size::create(['description' => 'd.32','detail' =>'']);
        Size::create(['description' => 'd.35','detail' =>'']);
        Size::create(['description' => 'd.38','detail' =>'']);
        Size::create(['description' => 'd.40','detail' =>'']);
        Size::create(['description' => 'Extragrande','detail' =>'']);
        Size::create(['description' => 'Grande','detail' =>'']);
        Size::create(['description' => 'h.15','detail' =>'']);
        Size::create(['description' => 'h.25','detail' =>'']);
        Size::create(['description' => 'h.30','detail' =>'']);
        Size::create(['description' => 'h.40','detail' =>'']);
        Size::create(['description' => 'h.45','detail' =>'']);
        Size::create(['description' => 'h.60','detail' =>'']);
        Size::create(['description' => 'h7','detail' =>'d.30 d.20 d.25 d.30']);
        Size::create(['description' => 'Mediano','detail' =>'22cm A4']);
        Size::create(['description' => 'MINI','detail' =>'']);

        Size::create(['description' => 'Negro','detail' =>'']);
        Size::create(['description' => 'Plastico','detail' =>'']);
        Size::create(['description' => 'Rojo','detail' =>'']);
        Size::create(['description' => 'STD','detail' =>'x4 x6']);
        Size::create(['description' => 'x3','detail' =>'20/25/30cm']);
        Size::create(['description' => 'x4','detail' =>'20/25/30/35cm']);
        Size::create(['description' => 'x5','detail' =>'20/25/35/40cm']);


        // Size::create(['description' => 'XS','detail' =>'']);
        // Size::create(['description' => 'S','detail' =>'']);
        // Size::create(['description' => 'M','detail' =>'']);
        // Size::create(['description' => 'L','detail' =>'']);
        // Size::create(['description' => 'XL','detail' =>'']);
    }
}
