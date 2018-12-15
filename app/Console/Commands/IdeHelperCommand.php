<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IdeHelperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'utils:ide-helper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ide Helper post update handler';

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
        if (app()->environment() !== 'production') {
            $this->call('ide-helper:generate');
            $this->call('ide-helper:meta');
        }
        $this->info('Ide Helper updated!');
    }
}
