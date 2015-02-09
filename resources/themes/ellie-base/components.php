<?php

\Component::register('head', function($title) {
	return \Theme::view('partials.components.head', array('title' => $title) );
});

\Component::register('modal', function($title, $content) {
	return \Theme::view('partials.components.modal', compact('title', 'content'));
});

