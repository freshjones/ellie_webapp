<!DOCTYPE html>
<html lang="en">
<head>
    @component_head( isset($site_name) ? $site_name : 'Ellie'  )
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="{{ $classes }}">

@if( $edit_mode || ($header_top || $header) )
<div id="header" class="layout">

    <div class="region region-header-top">
        @if( $edit_mode)
            <div class="region-edit">
                <div class="label">Header Top</div>
                <div class="tools">
                    <div class="label fa fa-cog"></div>
                    <ul class="menu">
                        <li><a href="">Add Content</a></li>
                        <li><a href="">Hide Region</a></li>
                    </ul>
                </div>
            </div>
        @endif
        <div class="region-content">
        {!! $header_top !!}
        </div>
    </div>

    <div class="region region-header">
        @if( $edit_mode)
            <div class="region-edit active">
                <div class="label">Header</div>
                <div class="tools">
                    <div class="label fa fa-cog"></div>
                    <ul class="menu">
                        <li><a href="">Add Content</a></li>
                        <li><a href="">Hide Region</a></li>
                    </ul>
                </div>
            </div>
        @endif
        <div class="region-content">
        {!! $header !!}
        </div>
    </div>

</div>
@endif

@if( $edit_mode || ($preface_top || $preface_bottom) )
<div id="preface" class="layout">

    <div class="region region-preface-top">
        @if( $edit_mode)<div class="region-label">Preface Top</div>@endif
        <div class="region-content">
        {!! $preface_top !!}
        </div>
    </div>

    <div class="region region-preface-bottom">
        @if( $edit_mode)<div class="region-label">Preface Bottom</div>@endif
        <div class="region-content">
        {!! $preface_bottom !!}
        </div>
    </div>

</div>
@endif

@if( $edit_mode || ($content_top || $content || $content_bottom) )
<div id="content" class="layout">

    <div class="region region-content-top">
        @if( $edit_mode)<div class="region-label">Content Top</div>@endif
        <div class="region-content">
        {!! $content_top !!}
        </div>
    </div>

    <div class="region region-content">
        @if( $edit_mode)<div class="region-label">Content</div>@endif
        <div class="region-content">
        {!! $content !!}
        </div>
    </div>

    <div class="region region-content-bottom">
        @if( $edit_mode)<div class="region-label">Content Bottom</div>@endif
        <div class="region-content">
        {!! $content_bottom !!}
        </div>
    </div>

</div>
@endif

@if( $edit_mode || ($sidebar_first) )
<div id="sidebar-first" class="layout">

    <div class="region region-sidebar-first">
        @if( $edit_mode)<div class="region-label">Sidebar First</div>@endif
        <div class="region-content">
        {!! $sidebar_first !!}
        </div>
    </div>

</div>
@endif

@if( $edit_mode || ($sidebar_second) )
<div id="sidebar-second" class="layout">

    <div class="region region-sidebar-second">
        @if( $edit_mode)<div class="region-label">Sidebar Second</div>@endif
        <div class="region-content">
        {!! $sidebar_second !!}
        </div>
    </div>

</div>
@endif

@if( $edit_mode || ($footer_top || $footer || $footer_bottom) )
<div id="footer" class="layout">

    <div class="region region-footer-top">
        @if( $edit_mode)<div class="region-label">Footer Top</div>@endif
        <div class="region-content">
        {!! $footer_top !!}
        </div>
    </div>

    <div class="region region-footer">
        @if( $edit_mode)<div class="region-label">Footer</div>@endif
        <div class="region-content">
        {!! $footer !!}
        </div>
    </div>

    <div class="region region-footer-bottom">
        @if( $edit_mode)<div class="region-label">Footer Bottom</div>@endif
        <div class="region-content">
        {!! $footer_bottom !!}
        </div>
    </div>

</div>
@endif

</body>
</html>