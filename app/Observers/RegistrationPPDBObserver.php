<?php

namespace App\Observers;

use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

// Model
use App\Models\RegistrationPPDB;

class RegistrationPPDBObserver
{
    public function creating(RegistrationPPDB $registrationPpdb): void
    {
        $count_registration_ppdb = RegistrationPPDB::count();
        $code_registration = Str::random(7);

        $registrationPpdb->uuid = Uuid::uuid4();
        $registrationPpdb->no_registration = date("Y") . str_pad($count_registration_ppdb + 1, 6, "0", STR_PAD_LEFT);
        $registrationPpdb->code_registration = $code_registration;
    }

    /**
     * Handle the RegistrationPPDB "created" event.
     */
    public function created(RegistrationPPDB $registrationPPDB): void
    {
        //
    }

    /**
     * Handle the RegistrationPPDB "updated" event.
     */
    public function updated(RegistrationPPDB $registrationPPDB): void
    {
        //
    }

    /**
     * Handle the RegistrationPPDB "deleted" event.
     */
    public function deleted(RegistrationPPDB $registrationPPDB): void
    {
        //
    }

    /**
     * Handle the RegistrationPPDB "restored" event.
     */
    public function restored(RegistrationPPDB $registrationPPDB): void
    {
        //
    }

    /**
     * Handle the RegistrationPPDB "force deleted" event.
     */
    public function forceDeleted(RegistrationPPDB $registrationPPDB): void
    {
        //
    }
}
