<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\Study;

class StudyObserver
{

    public function creating(Study $study): void
    {
        $study->uuid = Uuid::uuid4();
    }

    /**
     * Handle the Study "created" event.
     */
    public function created(Study $study): void
    {
        //
    }

    /**
     * Handle the Study "updated" event.
     */
    public function updated(Study $study): void
    {
        //
    }

    /**
     * Handle the Study "deleted" event.
     */
    public function deleted(Study $study): void
    {
        //
    }

    /**
     * Handle the Study "restored" event.
     */
    public function restored(Study $study): void
    {
        //
    }

    /**
     * Handle the Study "force deleted" event.
     */
    public function forceDeleted(Study $study): void
    {
        //
    }
}
