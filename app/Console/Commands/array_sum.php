<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class array_sum extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:array_sum { array : an array to be summed up}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'array_sum - Calculates the sum of the values of the array';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (is_null(json_decode($this->argument('array'))))
            return $this->error('Invalid parameter');
        $this->info(collect(\Arr::flatten(json_decode($this->argument('array'))))->sum());
    }
}
