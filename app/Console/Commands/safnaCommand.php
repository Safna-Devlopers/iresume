<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class safnaCommand extends Command
{
    protected $signature = 'safna:wersy';

    protected $description = 'wersy';

    public function handle(): void
    {
        $this->info('This Is Wersy');
    }
}
