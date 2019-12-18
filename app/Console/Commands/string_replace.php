<?php

namespace App\Console\Commands;
use Illuminate\Support\Str;

use Illuminate\Console\Command;

class string_replace extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:string_replace
                                {pattern : Pattern to be used to resort arguments}
                                {args* : List of arguments, exp: bleu red}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'string_replace - Replace string following given pattern';

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
        //Match pattern
        preg_match_all('/\{([0-9]{1,})\}/', $this->argument('pattern'), $matches, PREG_UNMATCHED_AS_NULL);
        $patterns = $matches[0];
        $indexes = $matches[1];

        //Sort
        dump(array_flip($indexes));
        $ordered_args = array_replace(array_flip($indexes), $this->argument('args'));
        dump($patterns, $ordered_args);

        //Replace
        $this->line( str_replace($patterns, $ordered_args, $this->argument('pattern')) );
    }
}
