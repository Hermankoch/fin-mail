<?php

declare(strict_types=1);

namespace FinityLabs\FinMail\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use FinityLabs\FinMail\Models\SentEmail;
use Illuminate\Auth\Access\HandlesAuthorization;

class SentEmailPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SentEmail');
    }

    public function view(AuthUser $authUser, SentEmail $sentEmail): bool
    {
        return $authUser->can('View:SentEmail');
    }

}
