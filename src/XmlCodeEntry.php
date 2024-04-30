<?php

namespace poldixd\FilamentXmlCodeEntry;

use Filament\Infolists\Components\Entry;

class XmlCodeEntry extends Entry
{
    protected string $view = 'filament-xml-code-entry::xml-code-entry';

    public function getFieldId()
    {
        return str(__CLASS__.'-'.$this->getId())->slug();
    }
}
