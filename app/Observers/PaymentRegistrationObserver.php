<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\PaymentRegistration;

class PaymentRegistrationObserver
{
    public function creating(PaymentRegistration $paymentRegistration): void
    {
        $paymentRegistration->uuid = Uuid::uuid4();
    }

    /**
     * Handle the PaymentRegistration "created" event.
     */
    public function created(PaymentRegistration $paymentRegistration): void
    {
        //
    }

    /**
     * Handle the PaymentRegistration "updated" event.
     */
    public function updated(PaymentRegistration $paymentRegistration): void
    {
        //
    }

    /**
     * Handle the PaymentRegistration "deleted" event.
     */
    public function deleted(PaymentRegistration $paymentRegistration): void
    {
        //
    }

    /**
     * Handle the PaymentRegistration "restored" event.
     */
    public function restored(PaymentRegistration $paymentRegistration): void
    {
        //
    }

    /**
     * Handle the PaymentRegistration "force deleted" event.
     */
    public function forceDeleted(PaymentRegistration $paymentRegistration): void
    {
        //
    }
}
