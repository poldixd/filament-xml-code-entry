@use("Filament\Support\Facades\FilamentAsset")

<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div 
        x-load-css="[@js(FilamentAsset::getStyleHref('filament-xml-code-entry', package: 'poldixd/filament-xml-code-entry'))]"
        x-load-js="[@js(FilamentAsset::getScriptSrc('filament-xml-code-entry', package: 'poldixd/filament-xml-code-entry'))]"
        x-data="filamentXmlCodeEntry(@js(['state' => $getState()]))"
    >
        <div wire:ignore id="{{ $getFieldId() }}">
            <div x-ref="codeBlock"></div>
        </div>
    </div>
</x-dynamic-component>
