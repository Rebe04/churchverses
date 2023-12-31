<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Stancl\Tenancy\Facades\Tenancy;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tenants = Tenant::all();
        foreach ($tenants as $tenant) {
            tenancy()->initialize($tenant);
            /**
             * Run the database seeds.
             *
             * @return void
             */

            $books = [
                ['name' => 'Génesis'],
                ['name' => 'Éxodo'],
                ['name' => 'Levítico'],
                ['name' => 'Números'],
                ['name' => 'Deuteronomio'],
                ['name' => 'Josué'],
                ['name' => 'Jueces'],
                ['name' => 'Rut'],
                ['name' => '1 Samuel'],
                ['name' => '2 Samuel'],
                ['name' => '1 Reyes'],
                ['name' => '2 Reyes'],
                ['name' => '1 Crónicas'],
                ['name' => '2 Crónicas'],
                ['name' => 'Esdras'],
                ['name' => 'Nehemías'],
                ['name' => 'Ester'],
                ['name' => 'Job'],
                ['name' => 'Salmos'],
                ['name' => 'Proverbios'],
                ['name' => 'Eclesiastés'],
                ['name' => 'Cantares'],
                ['name' => 'Isaías'],
                ['name' => 'Jeremías'],
                ['name' => 'Lamentaciones'],
                ['name' => 'Ezequiel'],
                ['name' => 'Daniel'],
                ['name' => 'Oseas'],
                ['name' => 'Joel'],
                ['name' => 'Amós'],
                ['name' => 'Abdías'],
                ['name' => 'Jonás'],
                ['name' => 'Miqueas'],
                ['name' => 'Nahúm'],
                ['name' => 'Habacuc'],
                ['name' => 'Sofonías'],
                ['name' => 'Hageo'],
                ['name' => 'Zacarías'],
                ['name' => 'Malaquías'],
                ['name' => 'Mateo'],
                ['name' => 'Marcos'],
                ['name' => 'Lucas'],
                ['name' => 'Juan'],
                ['name' => 'Hechos'],
                ['name' => 'Romanos'],
                ['name' => '1 Corintios'],
                ['name' => '2 Corintios'],
                ['name' => 'Gálatas'],
                ['name' => 'Efesios'],
                ['name' => 'Filipenses'],
                ['name' => 'Colosenses'],
                ['name' => '1 Tesalonicenses'],
                ['name' => '2 Tesalonicenses'],
                ['name' => '1 Timoteo'],
                ['name' => '2 Timoteo'],
                ['name' => 'Tito'],
                ['name' => 'Filemón'],
                ['name' => 'Hebreos'],
                ['name' => 'Santiago'],
                ['name' => '1 Pedro'],
                ['name' => '2 Pedro'],
                ['name' => '1 Juan'],
                ['name' => '2 Juan'],
                ['name' => '3 Juan'],
                ['name' => 'Judas'],
                ['name' => 'Apocalipsis'],
            ];

            foreach ($books as $book) {
                Book::create($book);
            }
            tenancy()->end();
        }
    }
}
