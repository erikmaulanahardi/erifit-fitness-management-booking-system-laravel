<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | EriFit</title>
</head>
<body>
    <header>
        <h1>EriFit - Fitness Management System</h1>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('membership') }}">Membership</a>
            <a href="{{ route('payment') }}">Payment</a>
            <a href="{{ route('profile') }}">My Profile</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} EriFit Fitness Center. All Rights Reserved</p>
    </footer>
</body>
</html>