<?php

use App\Models\Film;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HapusFilmJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filmId;

    /**
     * Create a new job instance.
     *
     * @param  int  $filmId
     * @return void
     */
    public function __construct($filmId)
    {
        $this->filmId = $filmId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $film = Film::find($this->filmId);

        if ($film) {
            $film->delete();
        }
    }
}