<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\PaymentMontly;

class PaymentMontlyObserver
{
    public function creating(PaymentMontly $paymentMontly): void
    {
        $paymentMontly->uuid = Uuid::uuid4();
    }

    /**
     * Handle the PaymentMontly "created" event.
     */
    public function created(PaymentMontly $paymentMontly): void
    {
        //
    }

    /**
     * Handle the PaymentMontly "updated" event.
     */
    public function updated(PaymentMontly $paymentMontly): void
    {
        //
    }

    /**
     * Handle the PaymentMontly "deleted" event.
     */
    public function deleted(PaymentMontly $paymentMontly): void
    {
        //
    }

    /**
     * Handle the PaymentMontly "restored" event.
     */
    public function restored(PaymentMontly $paymentMontly): void
    {
        //
    }

    /**
     * Handle the PaymentMontly "force deleted" event.
     */
    public function forceDeleted(PaymentMontly $paymentMontly): void
    {
        //
    }
}
