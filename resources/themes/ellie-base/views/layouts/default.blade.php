<!DOCTYPE html>
<html lang="en">
<head>
    @component_head( isset($site_name) ? $site_name : 'Ellie'  )

    <link href="app.css" rel="stylesheet">

    <!-- <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->

</head>
<body>

<div id="header" class="layout">
@yield('header_top')
@yield('header')
</div>

<div id="preface" class="layout">
@yield('preface_top')
@yield('preface_bottom')
</div>

<div id="content" class="layout">
@yield('content_top')
@yield('content')
@yield('content_bottom')
</div>

<div id="sidebar-first" class="layout">
@yield('sidebar-first')
</div>

<div id="sidebar-second" class="layout">
@yield('sidebar-second')
</div>

<div id="footer" class="layout">
@yield('footer_top')
@yield('footer')
</div>

</body>
</html>