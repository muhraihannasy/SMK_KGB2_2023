<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\RegistrationPpdbScholarship;

class RegistrationPpdbScholarshipObserver
{

    public function creating(RegistrationPpdbScholarship $registrationPpdbScholarship): void
    {
        $registrationPpdbScholarship->uuid = Uuid::uuid4();
    }

    /**
     * Handle the RegistrationPpdbScholarship "created" event.
     */
    public function created(RegistrationPpdbScholarship $registrationPpdbScholarship): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbScholarship "updated" event.
     */
    public function updated(RegistrationPpdbScholarship $registrationPpdbScholarship): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbScholarship "deleted" event.
     */
    public function deleted(RegistrationPpdbScholarship $registrationPpdbScholarship): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbScholarship "restored" event.
     */
    public function restored(RegistrationPpdbScholarship $registrationPpdbScholarship): void
    {
        //
    }

    /**
     * Handle the RegistrationPpdbScholarship "force deleted" event.
     */
    public function forceDeleted(RegistrationPpdbScholarship $registrationPpdbScholarship): void
    {
        //
    }
}
