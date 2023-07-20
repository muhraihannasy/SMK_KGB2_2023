<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\RegistrationPpdbAchievement;

class RegistrationPpdbAchievementObserver
{
    public function creating(RegistrationPpdbAchievement $registrationPpdbAchievement): void
    {
        $registrationPpdbAchievement->uuid = Uuid::uuid4();
    }

    /**
     * Handle the RegistrationPpdbAchievement "created" event.
     */
    public function created(RegistrationPpdbAchievement $registrationPpdbAchievement): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbAchievement "updated" event.
     */
    public function updated(RegistrationPpdbAchievement $registrationPpdbAchievement): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbAchievement "deleted" event.
     */
    public function deleted(RegistrationPpdbAchievement $registrationPpdbAchievement): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbAchievement "restored" event.
     */
    public function restored(RegistrationPpdbAchievement $registrationPpdbAchievement): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbAchievement "force deleted" event.
     */
    public function forceDeleted(RegistrationPpdbAchievement $registrationPpdbAchievement): void
    {
        //
    }
}
