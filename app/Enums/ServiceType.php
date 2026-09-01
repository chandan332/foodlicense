<?php

namespace App\Enums;

enum ServiceType: string
{
    case Fssai = 'fssai';
    case Gst = 'gst';
    case Trademark = 'trademark';

    public function label(): string
    {
        return match ($this) {
            self::Fssai => 'FSSAI Registration & License',
            self::Gst => 'GST Registration',
            self::Trademark => 'Trademark Registration',
        };
    }

    public function view(): string
    {
        return "services.{$this->value}";
    }
}
