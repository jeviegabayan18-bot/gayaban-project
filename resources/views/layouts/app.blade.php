<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Task Manager')</title>
    <style>
        :root {
            --ink: #1c1917;
            --muted: #57534e;
            --line: #e7e5e4;
            --paper: #faf7f2;
            --card: #ffffff;
            --green: #0f6e56;
            --green-dark: #0b5344;
            --red: #9f1239;
            --amber: #92400e;
            --amber-bg: #fef3c7;
            --done: #065f46;
            --done-bg: #d1fae5;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--ink);
            background: var(--paper);
        }
        a { color: var(--green); }
        header {
            background: var(--ink);
            color: #faf7f2;
            padding: 18px 24px;
        }
        header a { color: #faf7f2; text-decoration: none; margin-right: 18px; }
        header strong { margin-right: 28px; letter-spacing: 0.02em; }
        main { max-width: 960px; margin: 0 auto; padding: 32px 20px 64px; }
        h1 { font-size: 2rem; margin: 0 0 8px; }
        .lede { color: var(--muted); margin-top: 0; }
        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 20px;
            margin-top: 20px;
        }
        .row { display: flex; justify-content: space-between; align-items: center; gap: 12px; flex-wrap: wrap; }
        .btn, button {
            font-family: system-ui, sans-serif;
            border: 0;
            border-radius: 8px;
            padding: 9px 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 0.92rem;
        }
        .btn-primary, button.primary { background: var(--green); color: white; }
        .btn-primary:hover, button.primary:hover { background: var(--green-dark); }
        .btn-ghost { background: transparent; color: var(--ink); border: 1px solid var(--line); }
        .btn-danger { background: transparent; color: var(--red); border: 1px solid #fecdd3; }
        table { width: 100%; border-collapse: collapse; font-family: system-ui, sans-serif; }
        th, td { text-align: left; padding: 12px 10px; border-bottom: 1px solid var(--line); vertical-align: top; }
        th { font-size: 0.78rem; letter-spacing: 0.04em; text-transform: uppercase; color: var(--muted); }
        .badge { font-family: system-ui, sans-serif; font-size: 0.78rem; padding: 3px 8px; border-radius: 999px; }
        .pending { background: var(--amber-bg); color: var(--amber); }
        .completed { background: var(--done-bg); color: var(--done); }
        label { display: block; font-family: system-ui, sans-serif; font-size: 0.85rem; margin-bottom: 6px; }
        input, textarea, select {
            width: 100%;
            font: inherit;
            font-family: system-ui, sans-serif;
            padding: 10px 12px;
            border: 1px solid var(--line);
            border-radius: 8px;
            margin-bottom: 14px;
            background: white;
        }
        .flash {
            background: var(--done-bg);
            color: var(--done);
            padding: 10px 12px;
            border-radius: 8px;
            font-family: system-ui, sans-serif;
        }
        .error { color: var(--red); font-family: system-ui, sans-serif; font-size: 0.85rem; margin-top: -8px; margin-bottom: 12px; }
        .actions { display: flex; gap: 8px; flex-wrap: wrap; }
        .actions form { margin: 0; }
        .empty { color: var(--muted); font-family: system-ui, sans-serif; }
    </style>
</head>
<body>
    <header>
        <strong>WST21 Task Manager</strong>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/students') }}">Students</a>
        <a href="{{ url('/subjects') }}">Subjects</a>
        <a href="{{ route('tasks.index') }}">Tasks</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
