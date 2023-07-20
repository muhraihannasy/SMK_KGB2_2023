<?php

namespace App\Providers;

use App\Models\ClassRoom;
use App\Models\Competency;
use App\Models\DetailUser;
use App\Models\PaymentMontly;
use App\Models\PaymentRegistration;
use App\Models\RegistrationPPDB;
use App\Models\RegistrationPpdbAchievement;
use App\Models\RegistrationPpdbScholarship;
use App\Models\Role;
use App\Models\Student;
use App\Models\Study;
use App\Models\Teacher;
use App\Models\TeacherStudy;
use App\Models\User;
use App\Observers\ClassRoomObserver;
use App\Observers\CompetencyObserver;
use App\Observers\DetailUserObserver;
use App\Observers\PaymentMontlyObserver;
use App\Observers\PaymentRegistrationObserver;
use App\Observers\RegistrationPpdbAchievementObserver;
use App\Observers\RegistrationPPDBObserver;
use App\Observers\RegistrationPpdbScholarshipObserver;
use App\Observers\RoleObserver;
use App\Observers\StudentObserver;
use App\Observers\StudyObserver;
use App\Observers\TeacherObserver;
use App\Observers\UserObserver;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Competency::observe(CompetencyObserver::class);
        ClassRoom::observe(ClassRoomObserver::class);
        DetailUser::observe(DetailUserObserver::class);
        PaymentRegistration::observe(PaymentRegistrationObserver::class);
        PaymentMontly::observe(PaymentMontlyObserver::class);
        RegistrationPPDB::observe(RegistrationPPDBObserver::class);
        RegistrationPpdbAchievement::observe(RegistrationPpdbAchievementObserver::class);
        RegistrationPpdbScholarship::observe(RegistrationPpdbScholarshipObserver::class);
        Role::observe(RoleObserver::class);
        Study::observe(StudyObserver::class);
        Student::observe(StudentObserver::class);
        TeacherStudy::observe(TeacherObserver::class);
        Teacher::observe(TeacherObserver::class);
        User::observe(UserObserver::class);

        DB::listen(function (QueryExecuted $query) {
            Log::info($query->sql);
        });
    }
}
