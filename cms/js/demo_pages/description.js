/* ------------------------------------------------------------------------------
*
*  # CKEditor editor
*
*  Demo JS code for editor_ckeditor.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Setup
    CKEDITOR.replace('short_description', {
        height: 400,
        extraPlugins: 'forms'
    });

    CKEDITOR.replace('long_description', {
        height: 400,
        extraPlugins: 'forms'
    });



    // Toggle readonly state
    function toggleReadOnly(isReadOnly) {
        // Change the read-only state of the editor.
        // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setReadOnly
        editorReadOnly.setReadOnly(isReadOnly);
    }
    document.getElementById('readOnlyOn').onclick = function() {
        toggleReadOnly();
    }
    document.getElementById('readOnlyOff').onclick = function() {
        toggleReadOnly(false);
    }



    // Enter key configuration
    // ------------------------------

    // Define editor
    var editorKey;

    // Setup editor
    function changeEnter() {

        // If an editor instance exists, destroy it first.
        if (editorKey)
            editorKey.destroy(true);

        // Create an editor instance again, with appropriate settings.
        editorKey = CKEDITOR.replace('editor-enter', {
            height: 400,
            enterMode: Number(document.getElementById('xEnter').value),
            shiftEnterMode: Number(document.getElementById('xShiftEnter').value)
        });
    }

    // Trigger initialization
    changeEnter();

    // // Change configuration
    document.getElementById('xEnter').onchange = function() {
        changeEnter();
    }
    document.getElementById('xShiftEnter').onchange = function() {
        changeEnter();
    }

    // We are using Select2 selects here
    $('.select').select2({
        minimumResultsForSearch: Infinity
    })



    // Inline editor
    // ------------------------------

    // We need to turn off the automatic editor creation first
    CKEDITOR.disableAutoInline = true;

    // The inline editor should be enabled on an element with "contenteditable" attribute set to "true".
    // Otherwise CKEditor will start in read-only mode.
    var introduction = document.getElementById('editor-inline');
    introduction.setAttribute('contenteditable', true);

    // Initialize
    CKEDITOR.inline('editor-inline', {
        // Allow some non-standard markup that we used in the introduction.
        extraAllowedContent: 'a(documentation);abbr[title];code',
        removePlugins: 'stylescombo'
    });
    
});
