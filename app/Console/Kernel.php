<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
                // runs generate sitemap command in weekdays(Mon-Fri) at 9 am
                $schedule->command('generate:sitemap')->weekdays()->at('9:00');

                // or run this command for daily routine
                $schedule->command('generate:sitemap')->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
