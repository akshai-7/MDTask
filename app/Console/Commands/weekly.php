<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmailUsingGmail;
class weekly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weekly:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send the mail successfully';

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
        $emails = User::pluck('email');
        foreach($emails as $email){
            Mail::To($email) ->send(new sendEmailUsingGmail);
        }
    }
}
