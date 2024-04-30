<?php

namespace poldixd\FilamentXmlCodeEntry;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentXmlCodeEntryServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-xml-code-entry';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasAssets()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make(static::$name, __DIR__.'/../resources/dist/filament-xml-code-entry.css'),
            Js::make(static::$name, __DIR__.'/../resources/dist/filament-xml-code-entry.js'),
        ], 'poldixd/filament-xml-code-entry');
    }
}
