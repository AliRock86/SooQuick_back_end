<?php

use App\Permision;
use Illuminate\Database\Seeder;

class PermisionsTableSeeder extends Seeder
{
    private $numberOfPermisions = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Permisions table seeder notice'], [
            ['Edit this file to change the number of Permisions created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfPermisions . ' Permisions ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfPermisions);

        for ($i = 0; $i < $this->numberOfPermisions; ++$i) {
            factory(Permision::class)->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
