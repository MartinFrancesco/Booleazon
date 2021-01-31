<?php

use Illuminate\Database\Seeder;
use App\Cd;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Cd::truncate();

        for ($i = 0; $i < 30; $i++) {

            //Definiamo lo slug
            $titolo = $faker->words(4, true);

            //Creazione istanza
            $newCd = new Cd();

            //Popolare colonne
            $newCd->titolo = $titolo;
            $newCd->artista = $faker->words(2, true);
            $newCd->genere = $faker->words(2, true);
            $newCd->anno = $faker->year();
            $newCd->prezzo = $faker->randomFloat(2, 10, 200);
            $newCd->disponibilità = $faker->numberBetween(0, 1);
            $newCd->cover = $faker->imageUrl(200, 200, 'cover', true);
            $newCd->slug = Str::slug( $titolo, '-');
            // $data['slug'] = Str::slug($data['title'], '-');
            // $newCd->colore = $faker->numberBetween(0, 1);

            //Salvataggio
            $newCd->save();
        }
    }
}
