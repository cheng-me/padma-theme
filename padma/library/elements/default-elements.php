<?php
add_action('padma_register_elements', 'padma_register_default_elements');
function padma_register_default_elements() {

	PadmaElementAPI::register_group('default-elements', 'Global Styling');
	
	PadmaElementAPI::register_element(array(
		'id' => 'default-text',
		'name' => 'Text',
		'description' => '&lt;body&gt;',
		'properties' => array('fonts'),
		'default-element' => true,
		'selector' => 'body'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-paragraph',
		'name' => 'Paragraph',
		'description' => 'All &lt;p&gt; elements',
		'properties' => array('margins'),
		'default-element' => true,
		'selector' => 'body p'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-hyperlink',
		'name' => 'Hyperlink',
		'default-element' => true,
		'selector' => 'a'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-headings',
		'name' => 'Headings',
		'description' => '&lt;H3&gt;, &lt;H2&gt;, &lt;H1&gt;',
		'default-element' => true,
		'selector' => 'h1, h2, h3'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-heading-h1',
		'name' => 'Heading 1',
		'description' => '&lt;H1&gt;',
		'default-element' => true,
		'selector' => 'h1',
		'parent' => 'default-headings'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-heading-h2',
		'name' => 'Heading 2',
		'description' => '&lt;H2&gt;',
		'default-element' => true,
		'selector' => 'h2',
		'parent' => 'default-headings'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-heading-h3',
		'name' => 'Heading 3',
		'description' => '&lt;H3&gt;',
		'default-element' => true,
		'selector' => 'h3',
		'parent' => 'default-headings'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-sub-headings',
		'name' => 'Sub Headings',
		'description' => '&lt;H4&gt;, &lt;H5&gt;, &lt;H6&gt;',
		'default-element' => true,
		'selector' => 'h4, h5, h6'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-sub-heading-h4',
		'parent' => 'default-sub-headings',
		'name' => 'Heading 4',
		'description' => '&lt;H4&gt;',
		'default-element' => true,
		'selector' => 'h4'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-sub-heading-h5',
		'parent' => 'default-sub-headings',
		'name' => 'Heading 5',
		'description' => '&lt;H5&gt;',
		'default-element' => true,
		'selector' => 'h5'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-sub-heading-h6',
		'parent' => 'default-sub-headings',
		'name' => 'Heading 6',
		'description' => '&lt;H6&gt;',
		'default-element' => true,
		'selector' => 'h6'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-form',
		'name' => 'Form',
		'description' => '&lt;form&gt;',
		'default-element' => true,
		'selector' => 'form'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-form-label',
		'name' => 'Label',
		'description' => 'Form Label',
		'default-element' => true,
		'selector' => 'form label',
		'parent' => 'default-form'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-form-input',
		'name' => 'Input',
		'description' => 'Inputs & Textareas',
		'default-element' => true,
		'selector' => 'input[type="text"], input[type="password"], input[type="email"], input[type="tel"], input[type="number"], input[type="month"], input[type="time"], input[type="url"], input[type="week"], textarea, select',
		'states' => array(
			'Focus' => 'input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="tel"]:focus, input[type="number"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="week"]:focus, textarea:focus'
		),
		'parent' => 'default-form'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-form-button',
		'name' => 'Button',
		'description' => 'Buttons & Submit Inputs',
		'default-element' => true,
		'selector' => 'input[type="submit"], input[type="button"], button, .button',
		'states' => array(
			'Hover' => 'input[type="submit"]:hover, input[type="button"]:hover, button:hover',
			'Active' => 'input[type="submit"]:active, input[type="button"]:active, button:active'
		),
		'parent' => 'default-form'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'default-blockquote',
		'name' => 'Blockquote',
		'properties' => array('background', 'borders', 'fonts', 'padding', 'corners', 'box-shadow', 'overflow'),
		'default-element' => true,
		'selector' => 'blockquote'
	));
	
	PadmaElementAPI::register_element(array(
		'id' => 'default-block',
		'name' => 'Block',
		'properties' => array('background', 'borders', 'fonts', 'padding', 'corners', 'box-shadow', 'overflow'),
		'default-element' => true,
		'selector' => '.block'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'block-title',
		'name' => 'Block Title',
		'selector' => '.block-title',
		'default-element' => true
	));

	PadmaElementAPI::register_element(array(
		'id' => 'block-title-inner',
		'name' => 'Block Title Inner',
		'selector' => '.block-title span',
		'default-element' => true,
		'parent' => 'block-title'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'block-title-link',
		'name' => 'Block Title Link',
		'selector' => '.block-title a',
		'default-element' => true,
		'parent' => 'block-title'
	));

	PadmaElementAPI::register_element(array(
		'id' => 'block-subtitle',
		'name' => 'Block Subtitle',
		'selector' => '.block-subtitle',
		'default-element' => true
	));
	
}