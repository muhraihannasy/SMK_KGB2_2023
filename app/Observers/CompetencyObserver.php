<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\Competency;

class CompetencyObserver
{

    public function creating(Competency $competency): void
    {
        $competency->uuid = Uuid::uuid4();
    }

    /**
     * Handle the Competency "created" event.
     */
    public function created(Competency $competency): void
    {
        //
    }

    /**
     * Handle the Competency "updated" event.
     */
    public function updated(Competency $competency): void
    {
        //
    }

    /**
     * Handle the Competency "deleted" event.
     */
    public function deleted(Competency $competency): void
    {
        //
    }

    /**
     * Handle the Competency "restored" event.
     */
    public function restored(Competency $competency): void
    {
        //
    }

    /**
     * Handle the Competency "force deleted" event.
     */
    public function forceDeleted(Competency $competency): void
    {
        //
    }
}
