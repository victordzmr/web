<?php
/**
 * Laravel JS Localization configuration.
 */

return [
	
	/*
	 * Set the names of files you want to add to generated javascript.
	 * Otherwise all the files will be included.
	 *
	 * 'messages' => [
	 *     'validation',
	 *     'forum/thread',
	 * ],
	 */
	'messages' => [
		'cookies',
	],
	
	/*
	 * The default path to use for the generated javascript.
	 */
	'path'     => storage_path('framework/cache/i18n.js'),

];