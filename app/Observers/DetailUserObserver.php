<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\DetailUser;

class DetailUserObserver
{
    public function creating(DetailUser $detailUser): void
    {
        $detailUser->uuid = Uuid::uuid4();
    }

    /**
     * Handle the DetailUser "created" event.
     */
    public function created(DetailUser $detailUser): void
    {
        //
    }

    /**
     * Handle the DetailUser "updated" event.
     */
    public function updated(DetailUser $detailUser): void
    {
        //
    }

    /**
     * Handle the DetailUser "deleted" event.
     */
    public function deleted(DetailUser $detailUser): void
    {
        //
    }

    /**
     * Handle the DetailUser "restored" event.
     */
    public function restored(DetailUser $detailUser): void
    {
        //
    }

    /**
     * Handle the DetailUser "force deleted" event.
     */
    public function forceDeleted(DetailUser $detailUser): void
    {
        //
    }
}
