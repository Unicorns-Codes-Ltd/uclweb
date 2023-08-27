<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\NewsletterMail;
use App\Models\Subscriber;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;

class SendNewsletter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $newsletter;

    /**
     * Create a new job instance.
     */
    public function __construct($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        // Trying to send Newsletter
        $subscribers = Subscriber::where('status',1)->get('email','id');

        foreach ($subscribers as $subscriber) {
            try{
            Mail::to($subscriber->email)->send(new NewsletterMail($this->newsletter));

            }catch (\Exception $exception){

            }
        }


    }
}
