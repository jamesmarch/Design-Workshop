<?php if(!defined('KIRBY')) exit ?>

title: Standard Post Type
pages: false
files: true
fields:
	title: 
		label:    Title
		type:     text
		required: true
		help:     This will also appear in the sidebar menu.
	date:
		label:    Date
		type:     date
		format:   dd.mm.yyyy
		required: true
	author:
		label:    Author
		type:     text
		required: true
	tags:
		label:    Tags
		type:     tags
		help:     A list of tags for your post.
	text: 
		label:    Text
		type:     textarea
		size:     large
		required: true
		buttons:
			- h3
			- bold
			- italic
			- email
			- link