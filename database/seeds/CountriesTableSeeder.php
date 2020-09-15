<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    private $numberOfCountries = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Countries table seeder notice'], [
            ['Edit this file to change the number of Countries created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfCountries . ' Countries ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfCountries);

        for ($i = 0; $i < $this->numberOfCountries; ++$i) {
            factory(Country::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
