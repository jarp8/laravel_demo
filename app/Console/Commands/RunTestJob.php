<?php

namespace App\Console\Commands;

use App\Jobs\TestJob;
use Illuminate\Console\Command;

class RunTestJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute job test';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        TestJob::dispatch();
    }
}
