<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\ClassRoom;

class ClassRoomObserver
{
    public function creating(ClassRoom $classRoom): void
    {
        $classRoom->uuid = Uuid::uuid4();
    }

    /**
     * Handle the ClassRoom "created" event.
     */
    public function created(ClassRoom $classRoom): void
    {
        //
    }

    /**
     * Handle the ClassRoom "updated" event.
     */
    public function updated(ClassRoom $classRoom): void
    {
        //
    }

    /**
     * Handle the ClassRoom "deleted" event.
     */
    public function deleted(ClassRoom $classRoom): void
    {
        //
    }

    /**
     * Handle the ClassRoom "restored" event.
     */
    public function restored(ClassRoom $classRoom): void
    {
        //
    }

    /**
     * Handle the ClassRoom "force deleted" event.
     */
    public function forceDeleted(ClassRoom $classRoom): void
    {
        //
    }
}
