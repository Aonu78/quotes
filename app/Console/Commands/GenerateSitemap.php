<?php

namespace App\Console\Commands;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // creates sitemap with all urls in your website
        SitemapGenerator::create("https://localhost.com")
               ->writeToFile(public_path('sitemap.xml'));
    }
}
