<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class RunScrapy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrapy:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the Scrapy spider';

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
        $process = new Process(['scrapy', 'crawl', 'mediaspider'], 'C:\laragon\www\media_monitoring\media_scraper\media_scraper');
        $process->run();

        if (!$process->isSuccessful()) {
            $this->error('Error running Scrapy spider.');
            $this->error($process->getErrorOutput());
            return 1;
        }

        $this->info('Scrapy spider ran successfully.');
        $this->info($process->getOutput());
        return 0;
    }
}
