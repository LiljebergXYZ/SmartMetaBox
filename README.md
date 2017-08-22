# Smart Meta Box

This is a really basic helper class for WordPress themes and plugins that allows their authors to easily manage meta boxes. 

## What's new in this fork?
You now have the following types:

* text - Simple text-field
* textarea - Simple textarea
* checkbox - Checkboxes
* select - Select with options
* radio - Radio buttons

#### New types

* wp_editor - Wordpress TinyMCE textarea
* image - Image upload
* date - Datepicker

### Template condition

You can also choose to only show the meta box on a certain template using the new `template` option

```php
$options = array(
	'template' => array('frontpage-template.php')
);
```

## Example usage
```php
add_smart_meta_box('post_settings', array(
	'title'		=> __('Settings for post', 'mytextdomain'),
	'pages'		=> array('post'),
	'template'	=> array('frontpage-template.php'),
	'context'	=> 'advanced',
	'priority'	=> 'high',
	'fields'	=> array(
		array(
			'name' => __('My setting:', 'mytextdomain'),
			'id' => 'my_setting',
			'default' => '',
			'desc' => __('Please enter your setting value', 'mytextdomain'),
			'type' => 'text',
		),
	)
));
```