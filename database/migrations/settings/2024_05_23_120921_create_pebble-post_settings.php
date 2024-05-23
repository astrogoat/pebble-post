<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('pebble-post.enabled', false);
        $this->migrator->add('pebble-post.brand_id', '');
    }

    public function down()
    {
        $this->migrator->delete('pebble-post.enabled');
        $this->migrator->delete('pebble-post.brand_id');
    }
};
