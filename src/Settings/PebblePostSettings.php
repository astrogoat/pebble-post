<?php

namespace Astrogoat\PebblePost\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class PebblePostSettings extends AppSettings
{
    // public string $url;

    protected array $rules = [
        // 'url' => Rule::requiredIf($this->enabled === true),
    ];

    public function description(): string
    {
        return 'Interact with PebblePost.';
    }

    public static function group(): string
    {
        return 'pebble-post';
    }
}
