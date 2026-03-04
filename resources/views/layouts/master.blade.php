<html>
    <head>
        <title>
        @yield('title','TodoApp')
        </title>
        <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .navbar {
            background: #1e293b;
            padding: 14px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            color: white;
            font-size: 20px;
        }

        .navbar nav a {
            color: #94a3b8;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        .navbar nav a:hover { color: white; }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .page-title {
            font-size: 24px;
            font-weight: bold;
            color: #1e293b;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid #e2e8f0;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #94a3b8;
            font-size: 13px;
            margin-top: 20px;
        }
    </style>
    @yield('styles')
    </head>
    <body>
        <div class="navbar">
            <nav>
                <a href="/tasklist">Tasks</a>
            <a href="/arraylist">Arrays</a>
            <a href="/multiply/5">Multiply</a>
            <a href="/factorial/5">Factorial</a>
            </nav>
        </div>
        <div class="container">
            <div class="page-title">
                @yield('heading','Welcome')
            </div>
            @yield('content')
        </div>

        <div class="footer">
        &copy; 2025 TodoApp — BCA Sem 6 | Gujarat University
    </div>

    @yield('scripts')
    </body>
</html>