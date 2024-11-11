<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    @include('layouts.partials.css')
</head>

<body>
    @include('layouts.partials.nav')

    @include('layouts.partials.banner')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.js')

</body>

</html>
