<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\GoodMorningMail;
use App\Models\User;

class SendGoodMorningEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        // Fetch all users from the database
        $users = User::whereRoleIs('student')->get();

        // Send the "Good Morning" email to each user
        foreach ($users as $user) {
            Mail::to($user->email)->send(new GoodMorningMail($user));
        }
    }
}