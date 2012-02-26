<?php

$lang = array(

	'cachebust' => 'Cache-Busting',
	'cachebust_note' => 'Update this to a unique string to force Minimee to create a new cache file.<br />Optional, and for most scenarios unneccessary. Consult <a href="http://johndwells.com/software/minimee" title="Minimee Docs">docs</a> for more.',
	'cachebust_hint' => 'e.g. `1.0.0`.',

	'base_path' => 'Base Path',
	'base_path_note' => 'The base path from which your CSS and JS files reside.<br />Optional, defaults to FCPATH constant (the root path to your site).',
	'base_path_hint' => 'e.g. ' . rtrim(FCPATH, '/'),

	'base_url' => 'Base URL',
	'base_url_note' => 'The base URL from which your CSS and JS files serve.<br />Optional, defaults to Site URL.',
	'base_url_hint' => 'e.g. ' . rtrim(get_instance()->config->item('base_url'), '/'),

	'cache_path' => 'Cache Path',
	'cache_path_note' => 'Relative paths (without a leading slash) will be appended to the Base Path.<br />If left blank, will guess `cache`.',
	'cache_path_hint' => 'e.g. ' . rtrim(FCPATH, '/') . '/cache',

	'cache_url' => 'Cache URL',
	'cache_url_note' => 'Relative paths (without a leading slash) will be appended to the Base URL.<br />If left blank, will guess `cache`.',
	'cache_url_hint' => 'e.g. ' . rtrim(get_instance()->config->item('base_url'), '/') . '/cache',

	'combine' => 'Combine Assets',
	'combine_note' => 'Specify which types of assets to combine.',
	
	'css_prepend_mode' => 'CSS Prepend Mode',
	'css_prepend_mode_note' => 'By default when minifying CSS, Minimee will rewrite <strong>relative</strong> image & @import URLs into absolute URLs. Turn OFF to skip this step.',

	'css_prepend_url' => 'CSS Prepend URL',
	'css_prepend_url_note' => 'The URL to use when `CSS Prepend Mode` is ON.<br />Optional, by default uses the Base URL.',
	'css_prepend_url_hint' => 'e.g. ' . rtrim(get_instance()->config->item('base_url'), '/'),

	'disable' => 'Disable Minimee entirely?',

	'minify' => 'Minify Assets',
	'minify_note' => 'Specify which types of assets to run through minification engine.<br />Note: HTML minification only available for EE2.4+',

	'remote_mode' => 'Remote file mode?',
	'remote_mode_note' => 'Specify how to fetch remote and {stylesheet=} URLs. \'Auto\' mode will try cURL first.',

	'save' => 'Save Settings',
	'yes' => 'Yes',
	'no' => 'No',
	'on' => 'On',
	'off' => 'Off',
	'auto' => 'Auto',
	'curl' => 'cURL',
	'fgc' => 'file_get_contents()',

	'config_loc_caution_config' => 'Minimee appears to be configured via your config.php file. There is no need to have this extension installed.',
	'basic_config' => 'Basic Preferences',
	'advanced_config' => 'Advanced Preferences'
);