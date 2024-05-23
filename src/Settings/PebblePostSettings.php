<?php

namespace Astrogoat\PebblePost\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class PebblePostSettings extends AppSettings
{
    public string $brand_id;

    public function rules(): array
    {
        return [
            'brand_id' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function labels(): array
    {
        return [
            'brand_id' => 'Brand ID',
        ];
    }

    public function help()
    {
        return [
            'brand_id' => 'Your PebblePost Brand ID. Provided by your PebblePost account team.',
        ];
    }

    public function description(): string
    {
        return 'Quickly and easily engage decision-ready audiences and measure performance across all points of sale with address-level accuracy using Programmatic Direct Mail.';
    }

    public static function group(): string
    {
        return 'pebble-post';
    }
}
