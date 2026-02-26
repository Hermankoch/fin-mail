<?php

declare(strict_types=1);

namespace FinityLabs\FinMail\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum EmailStatus: int implements HasColor, HasIcon, HasLabel
{
    case Draft = 1;
    case Queued = 2;
    case Sent = 3;
    case Failed = 4;

    public function getLabel(): ?string
    {
        return __('fin-mail::fin-mail.enums.email_status.'.$this->value);
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Queued => 'warning',
            self::Sent => 'success',
            self::Failed => 'danger',
        };
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Draft => Heroicon::OutlinedPencilSquare,
            self::Queued => Heroicon::OutlinedClock,
            self::Sent => Heroicon::OutlinedCheckCircle,
            self::Failed => Heroicon::OutlinedXCircle,
        };
    }
}
