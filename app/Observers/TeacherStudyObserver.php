<?php

namespace App\Observers;

use Ramsey\Uuid\Uuid;

use App\Models\TeacherStudy;

class TeacherStudyObserver
{

    public function creating(TeacherStudy $teacherStudy): void
    {
        $teacherStudy->uuid = Uuid::uuid4();
    }

    /**
     * Handle the TeacherStudy "created" event.
     */
    public function created(TeacherStudy $teacherStudy): void
    {
        //
    }

    /**
     * Handle the TeacherStudy "updated" event.
     */
    public function updated(TeacherStudy $teacherStudy): void
    {
        //
    }

    /**
     * Handle the TeacherStudy "deleted" event.
     */
    public function deleted(TeacherStudy $teacherStudy): void
    {
        //
    }

    /**
     * Handle the TeacherStudy "restored" event.
     */
    public function restored(TeacherStudy $teacherStudy): void
    {
        //
    }

    /**
     * Handle the TeacherStudy "force deleted" event.
     */
    public function forceDeleted(TeacherStudy $teacherStudy): void
    {
        //
    }
}
