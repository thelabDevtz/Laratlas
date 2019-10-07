<?php


namespace thelabdev\Laratlas\Console;


use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'laratlas:install';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run command to migrate and seed the database tables';
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('migrate');
        $this->call('db:seed --class=thelabdev/Laratlas/Database/Seeds/DatabaseSeeder');
    }
}