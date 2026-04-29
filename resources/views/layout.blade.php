<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">My Portfolio</a>

        <div>
            <a class="nav-link d-inline text-white" href="/">Home</a>
            <a class="nav-link d-inline text-white" href="/projects">Projects</a>
            <a class="nav-link d-inline text-white" href="/contact">Contact</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>
