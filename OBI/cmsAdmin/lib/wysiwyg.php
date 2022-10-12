<?php

// NOTE: If you want to make changes to this file save it as
// wysiwyg_custom.php and it will get loaded instead of this
// file and won't get overwritten when you upgrade.

// NOTE: You can find the CSS for the wysiwyg in /lib/wysiwyg.css
// save wysiwyg.css file as wysiwyg_custom.css file as well if you want to
// make changes to the wysiwyg stylesheet

// this is called once at the top of the page
function loadWysiwygJavascript() {
  // call tinymce.gzip.js to automatically request a compressed script or create a new compression to tinymce.gzip.php
  // ... using the settings below whenever tinyMCE.init is called to create wysiwyg editor instances
  print "<script src='{$GLOBALS['CMS_ASSETS_URL']}/3rdParty/TinyMCE4/tinymce.gzip.js'></script>";
}

// this is called once for each wysiwyg editor on the page
function initWysiwyg($fieldname, $uploadBrowserCallback) {
  global $SETTINGS;
  $includeDomainsInLinks = $SETTINGS['wysiwyg']['includeDomainInLinks'] ? "remove_script_host: false, // domain name won't be removed from absolute links" : '';
  $programUrl            = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);
  $programUrl            = preg_replace("/ /", "%20", $programUrl);

  // load either wysiwyg_custom.css (if exists) or wysiwyg.css
  $wysiwygCssFilename    = file_exists( __DIR__ .'/wysiwyg_custom.css' ) ? 'wysiwyg_custom.css' : 'wysiwyg.css';
  $wysiwygCssUrl         = noCacheUrlForCmsFile("lib/$wysiwygCssFilename");

  // call custom wysiwyg functions named: initWysiwyg_sectionName_fieldName() or initWysiwyg_sectionName()
  if (__FUNCTION__ == 'initWysiwyg') {
    $fieldnameWithoutPrefix = preg_replace("/^field_/", '', $fieldname);
    $fieldSpecificFunction   = "initWysiwyg_{$GLOBALS['tableName']}_$fieldnameWithoutPrefix";
    $sectionSpecificFunction = "initWysiwyg_{$GLOBALS['tableName']}";

    if (function_exists($fieldSpecificFunction))   { return call_user_func($fieldSpecificFunction, $fieldname, $uploadBrowserCallback); }
    if (function_exists($sectionSpecificFunction)) { return call_user_func($sectionSpecificFunction, $fieldname, $uploadBrowserCallback); }
  }

  // display field
  print <<<__HTML__

  <script language="javascript" type="text/javascript"><!--
  tinyMCE.init({
    mode: "exact",
    theme: "modern",
    language: "{$SETTINGS['wysiwyg']['wysiwygLang']}",

    // Menubar: set to true to display the menus on top of the editor buttons. To configure the menu items, see: https://www.tinymce.com/docs/configure/editor-appearance/#menu
    menubar: false,

    // Define toolbar buttons. See list of toolbar buttons here: https://www.tinymce.com/docs/advanced/editor-control-identifiers/#toolbarcontrols
    toolbar1: "formatselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | superscript subscript charmap | removeformat fullscreen",
    toolbar2: "forecolor backcolor | link anchor | blockquote hr image media table | pastetext paste | code",
    toolbar3: '',

    // Add custom style formats which will be rendered as list options in the 'Formats' dropdown
    // IMPORTANT: you need to add 'styleselect' toolbar button above to enable the 'Formats' dropdown
    // Selecting a 'style format' from the 'Formats' dropdown list options will add a 'class', ie 'exampleClass'
    // ... and the corresponding CSS style of that class (see /cmsb/lib/wysiwyg.css) to the selected text or HTML element in the WYSIWYG editor
    // style_formats: [  // reference: https://www.tinymce.com/docs/configure/content-formatting/#style_formats
    //   { title: 'Example Class', selector: 'p',  classes: 'exampleClass' }
    //   { title: 'Bold text',     inline: 'b'} ,
    //   { title: 'Red text',      inline: 'span', styles: {color: '#ff0000'} },
    //   { title: 'Red header',    block: 'h1',    styles: {color: '#ff0000'} },
    //   { title: 'Example 1',     inline: 'span', classes: 'example1' },
    //   { title: 'Example 2',     inline: 'span', classes: 'example2' },
    // ],

    // Toolbar buttons size
    toolbar_items_size: 'small',

    // Statusbar: set to true to display status bar with editor resize handle at the bottom. See: https://www.tinymce.com/docs/configure/editor-appearance/#statusbar
    statusbar: false,

    // Load Plugins - list of available plugins can be found here: https://www.tinymce.com/docs/plugins/
    plugins: "contextmenu,table,fullscreen,paste,media,lists,charmap,textcolor,link,anchor,hr,paste,image,code",

    // Paste Settings - Docs: https://www.tinymce.com/docs/plugins/paste/
    paste_as_text: true, // enabled paste as text by default: https://www.tinymce.com/docs/plugins/paste/#paste_as_text

    // v2.50 - allow style in body (invalid XHTML but required to style html emails since many email clients won't display remote styles or styles from head)
    valid_children: "+body[style]", // docs: https://www.tinymce.com/docs/configure/content-filtering/#valid_children

    // Spellchecker plugin - No longer supported as Google no longer has a Public API.  Now using built in browser spellchecks
    browser_spellcheck: true,

    // Force <br> instead of <p> - see: https://www.tinymce.com/docs/configure/content-filtering/#forced_root_block
    // Uncomment these lines to enable this for new records
    //forced_root_block: false,

    //
    elements: '$fieldname',
    file_picker_callback: function(callback, value, meta) {
        $uploadBrowserCallback(callback, value, meta);
    },
    relative_urls: false,
    document_base_url: "/",

    $includeDomainsInLinks
    entity_encoding: "raw", // don't store extended chars as entities (&ntilde) or keyword searching won't match them

    verify_html: false, // allow all tags and attributes

    // add file modified time on end of url so updated files won't be cached by the browser
    // reference: https://www.tinymce.com/docs/configure/content-appearance/#content_css
    content_css: "$wysiwygCssUrl"
  });

  //--></script>

__HTML__;
}

?>