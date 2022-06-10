<?php

namespace Khalin\LaravelSlice\Commands;

use Illuminate\Console\Command;

class LaravelSliceCommand extends Command
{
    public $signature = 'laravel-slice';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
