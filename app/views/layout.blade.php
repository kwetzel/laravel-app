<html>
    <body>
        <h1>Just another Laravel app</h1>
        <ul>
        	<li>{{ link_to('posts', 'posts') }}</li>
        </ul>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>