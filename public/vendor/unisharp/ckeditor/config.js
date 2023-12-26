/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

    config.extraPlugins = 'image';
    config.extraPlugins = 'image2';

    config.removeButtons = 'Save,newpage,ImageButton,Image,Print,,Radio,Checkbox,ImageButton,Anchor,BidiLtr,BidiRtl,blockquote,flash,iframe,tabletools,pagebreak,';
    // config.removeButtons = 'Print,Form,Button,CreateDiv,PasteText,PasteFromWord,Select,HiddenField,Radio,Checkbox,ImageButton,Anchor,BidiLtr,BidiRtl,Font,Format,Styles,Preview,Indent,Outdent';
};

