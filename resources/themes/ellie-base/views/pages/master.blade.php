<!DOCTYPE html>
<html lang="en">
<head>
    @component_head( isset($site_name) ? $site_name : 'Ellie'  )
    <link href="css/app.css" rel="stylesheet">
</head>
<body class="{{ $classes }}">

@if( $edit_mode || ($header_top || $header) )
<div id="header" class="layout">

@if( $edit_mode)<div class="region-label">Header Top</div>@endif
{!! $header_top !!}

@if( $edit_mode)<div class="region-label">Header</div>@endif
{!! $header !!}
</div>
@endif

@if( $edit_mode || ($preface_top || $preface_bottom) )
<div id="preface" class="layout">

@if( $edit_mode)<div class="region-label">Preface Top</div>@endif
{!! $preface_top !!}

@if( $edit_mode)<div class="region-label">Preface Bottom</div>@endif
{!! $preface_bottom !!}
</div>
@endif

@if( $edit_mode || ($content_top || $content || $content_bottom) )
<div id="content" class="layout">
@if( $edit_mode)<div class="region-label">Content Top</div>@endif
{!! $content_top !!}

@if( $edit_mode)<div class="region-label">Content</div>@endif
{!! $content !!}

@if( $edit_mode)<div class="region-label">Content Bottom</div>@endif
{!! $content_bottom !!}
</div>
@endif

@if( $edit_mode || ($sidebar_first) )
<div id="sidebar-first" class="layout">
@if( $edit_mode)<div class="region-label">Sidebar First</div>@endif
{!! $sidebar_first !!}
</div>
@endif

@if( $edit_mode || ($sidebar_second) )
<div id="sidebar-second" class="layout">
@if( $edit_mode)<div class="region-label">Sidebar Second</div>@endif
{!! $sidebar_second !!}
</div>
@endif

@if( $edit_mode || ($footer_top || $footer || $footer_bottom) )
<div id="footer" class="layout">

@if( $edit_mode)<div class="region-label">Footer Top</div>@endif
{!! $footer_top !!}

@if( $edit_mode)<div class="region-label">Footer</div>@endif
{!! $footer !!}

@if( $edit_mode)<div class="region-label">Footer Bottom</div>@endif
{!! $footer_bottom !!}
</div>
@endif

</body>
</html>