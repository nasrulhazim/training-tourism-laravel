<?php

use App\Mail\ContactUs;
use App\Models\User;
use App\Notifications\Claim\Approval;
use Illuminate\Support\Facades\Mail;

Mail::to('nasrul@cleani.com')
    ->send(new ContactUs());

echo "mail sent" . PHP_EOL;

$user = User::inRandomOrder()->first();

$user->notify(
    new Approval
);

echo "notifications sent" . PHP_EOL;
