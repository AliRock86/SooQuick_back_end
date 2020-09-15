<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    private $numberOfRegions = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Regions table seeder notice'], [
            ['Edit this file to change the number of Regions created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfRegions . ' Regions ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfRegions);

        for ($i = 0; $i < $this->numberOfRegions; ++$i) {
            factory(Region::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
