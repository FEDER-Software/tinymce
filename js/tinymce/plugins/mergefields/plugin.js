/**
 * plugin.js
 *
 * Copyright, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://www.tinymce.com/license
 * Contributing: http://www.tinymce.com/contributing
 */

/*jshint unused:false */
/*global tinymce:true */

/**
 * Example plugin that adds a toolbar button and menu item.
 */
tinymce.PluginManager.add('mergefields', function(editor, url) {
	// Add a button that opens a window
	editor.addButton('mergefields', {
		text: 'Variablen',
		icon: false,
		onclick: function() {
			// Open window
			editor.windowManager.open({
				title: 'TinyMCE site',
				url: url + '/dialog.php',
				width: 600,
				height: 400,
				buttons: [
					{
						text: 'Insert',
						onclick: function() {
							// Top most window object
							var win = editor.windowManager.getWindows()[0];

							// Insert the contents of the dialog.html textarea into the editor
							editor.insertContent(win.getContentWindow().document.getElementById('content').value);

							// Close the window
							win.close();
						}
					},

					{text: 'Close', onclick: 'close'}
				]
			});
		}
	});

	// Adds a menu item to the tools menu
	editor.addMenuItem('mergefields', {
		text: 'Example plugin',
		context: 'tools',
		onclick: function() {
			// Open window with a specific url
			editor.windowManager.open({
				title: 'TinyMCE site',
				url: url + '/dialog.php',
				width: 600,
				height: 400,
				buttons: [
					{
						text: 'Insert',
						onclick: function() {
							// Top most window object
							var win = editor.windowManager.getWindows()[0];

							// Insert the contents of the dialog.html textarea into the editor
							editor.insertContent(win.getContentWindow().document.getElementById('content').value);

							// Close the window
							win.close();
						}
					},

					{text: 'Close', onclick: 'close'}
				]
			});
		}
	});
});