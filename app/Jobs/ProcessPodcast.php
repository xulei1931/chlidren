<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 5;
    protected $podcast;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($podcast)
    {
        $this->podcast = $podcast;
       // $this->queue = 'test';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        print_r($this->podcast);
    }
}
