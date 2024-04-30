import { EditorView, basicSetup } from "codemirror"
import { xml } from "@codemirror/lang-xml"
import { lineNumbers } from '@codemirror/view';

export default (Alpine) => {
    Alpine.data('filamentXmlCodeEntry', ({
        state
    }) => {
        return {
            state,
            init() {
                this.codeMirror = new EditorView({
                    doc: this.state,
                    extensions: [
                        basicSetup,
                        xml(),
                        lineNumbers(),
                        EditorView.contentAttributes.of({
                            contenteditable: false,
                        }),
                        EditorView.lineWrapping,
                    ],
                    parent: this.$refs.codeBlock
                })
            },
        }
    });
}