<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Portal - Home</title>
    <link rel="stylesheet" href="">
</head>
<body class="bg-gray-100">


    <!-- Header -->
    <header>
        <div>
            <h1>UniversityPortal</h1>
        </div>
        <a href="/login">Login</a>
    </header>


    <!-- Navbar -->
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer>
        <small>© Team 8. All rights reserved.</small>
    </footer>


</body>
</html>