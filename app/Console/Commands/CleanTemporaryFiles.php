<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CleanTemporaryFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:temporary-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean temporary files in the storage directory';

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
     * @return int
     */
    public function handle()
    {
        $logFilePath = storage_path('logs/laravel.log');

        if (file_exists($logFilePath)) {
            file_put_contents($logFilePath, '');
            $this->info('laravel.log temp has been cleared.');
        } else {
            $this->info('laravel.log temp does not exist.');
        }
    }
}
