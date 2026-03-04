<html>
    <head>
        <title>TodoApp</title>
         <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }

        .header {
            background-color: #3b82f6;
            color: white;
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 { margin: 0; font-size: 22px; }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 16px;
            font-size: 15px;
        }

        nav a:hover { text-decoration: underline; }

        .content { padding: 24px; }

        .page-banner {
            background-color: #fef9c3;
            border-left: 4px solid #f59e0b;
            padding: 10px 20px;
            font-size: 14px;
            color: #92400e;
        }
    </style>
    </head>
    <body>
        <div class="header">
        <h1>⚡ TodoApp</h1>
        <nav>
            <a href="/tasklist">Tasks</a>
            <a href="/compactmethod">Students</a>
            <a href="/multivars">Info</a>
        </nav>
        </div>
{{-- TASK 8 --}}
@stack('messages')
        <div class="content">