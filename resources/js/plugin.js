import XmlCodeEntryAlpinePlugin from './xml-code-entry.js';

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(XmlCodeEntryAlpinePlugin);
})