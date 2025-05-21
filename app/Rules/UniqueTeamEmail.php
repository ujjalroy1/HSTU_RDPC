<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueTeamEmail implements Rule
{
    public function passes($attribute, $value)
    {
        return !DB::table('teams')
            ->where('member1_email', $value)
            ->orWhere('member2_email', $value)
            ->orWhere('member3_email', $value)
            ->exists();
    }

    public function message()
    {
        return 'This email is already registered in another team.';
    }
}
