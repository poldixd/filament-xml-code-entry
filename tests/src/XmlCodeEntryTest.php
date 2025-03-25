<?php

use poldixd\FilamentXmlCodeEntry\XmlCodeEntry;

it('loads custom field', function () {
    $field = XmlCodeEntry::make('test');

    expect($field)->toBeInstanceOf(XmlCodeEntry::class)
        ->and($field->getName())->toBe('test');
});
