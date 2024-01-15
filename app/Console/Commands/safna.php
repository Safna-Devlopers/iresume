<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class safna extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'safna:website';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Open Website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Visit https://safna.net/');
    }
}
