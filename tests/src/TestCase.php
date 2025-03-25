<?php

namespace poldixd\FilamentXmlCodeEntry\Tests;

use Awcodes\Curator\CuratorServiceProvider;
use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Intervention\Image\ImageServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use poldixd\FilamentXmlCodeEntry\FilamentXmlCodeEntryServiceProvider;
use RyanChandler\BladeCaptureDirective\BladeCaptureDirectiveServiceProvider;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            ActionsServiceProvider::class,
            AdminPanelProvider::class,
            BladeCaptureDirectiveServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            BladeIconsServiceProvider::class,
            CuratorServiceProvider::class,
            FilamentServiceProvider::class,
            FormsServiceProvider::class,
            ImageServiceProvider::class,
            InfolistsServiceProvider::class,
            LivewireServiceProvider::class,
            NotificationsServiceProvider::class,
            SupportServiceProvider::class,
            TablesServiceProvider::class,
            WidgetsServiceProvider::class,
            FilamentXmlCodeEntryServiceProvider::class,
        ];
    }
}
