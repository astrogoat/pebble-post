<?php

namespace Astrogoat\PebblePost;

use Astrogoat\PebblePost\Settings\PebblePostSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PebblePostServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('pebble-post')
            ->settings(PebblePostSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ])
            ->includeFrontendViews(function (IncludeFrontendViews $frontendViews) {
                return $frontendViews->addToEnd('pebble-post::script');
            });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('pebble-post')->hasConfigFile()->hasViews();
    }
}
