<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Color;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Color::create(['description'=>'AmarilloSuave','detail'=>'']);
        Color::create(['description'=>'Amarillo','detail'=>'']);
        Color::create(['description'=>'Azul','detail'=>'']);
        Color::create(['description'=>'Blanco','detail'=>'']);
        Color::create(['description'=>'Celeste','detail'=>'']);
        Color::create(['description'=>'Dorado','detail'=>'']);
        Color::create(['description'=>'Fucsia','detail'=>'']);
        Color::create(['description'=>'GoldRose','detail'=>'']);
        Color::create(['description'=>'Jadeclaro','detail'=>'']);
        Color::create(['description'=>'JadeOscuro','detail'=>'']);
        Color::create(['description'=>'Lila','detail'=>'']);
        Color::create(['description'=>'Marron','detail'=>'']);
        Color::create(['description'=>'Melon','detail'=>'']);
        Color::create(['description'=>'Morado','detail'=>'']);
        Color::create(['description'=>'Negro','detail'=>'']);
        Color::create(['description'=>'Negro','detail'=>'']);
        Color::create(['description'=>'Plateado','detail'=>'']);
        Color::create(['description'=>'Plomo','detail'=>'']);
        Color::create(['description'=>'Rojo','detail'=>'']);
        Color::create(['description'=>'Rosado','detail'=>'']);
        Color::create(['description'=>'Turqueza','detail'=>'']);
        Color::create(['description'=>'VerdeLimon','detail'=>'']);
        Color::create(['description'=>'Verde','detail'=>'']);
        Color::create(['description'=>'Violeta','detail'=>'']);
        
    }
}
