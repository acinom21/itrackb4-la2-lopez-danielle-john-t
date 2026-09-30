<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Books')</title>
    <style>
        :root {
            --bg: #f6f4ef; --card: #ffffff; --ink: #1f2430; --muted: #6b7280;
            --line: #e7e3da; --accent: #3b4cca;
        }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
               background: var(--bg); color: var(--ink); line-height: 1.5; }
        a { color: var(--accent); text-decoration: none; }
        a:hover { text-decoration: underline; }
        .wrap { max-width: 960px; margin: 0 auto; padding: 0 20px; }

        .site-header { background: var(--ink); color: #fff; padding: 14px 0; }
        .site-header .wrap { display: flex; justify-content: space-between; align-items: center; gap: 12px; flex-wrap: wrap; }
        .brand { color: #fff; font-weight: 700; font-size: 1.15rem; }
        .student { font-size: .9rem; opacity: .85; }

        main { padding: 28px 20px 40px; }
        h1 { margin: 0 0 6px; font-size: 1.9rem; }
        .sub { color: var(--muted); margin: 0 0 20px; }

        .pills { display: flex; flex-wrap: wrap; gap: 8px; margin: 0 0 24px; }
        .pill { padding: 6px 14px; border-radius: 999px; border: 1px solid var(--line);
                background: var(--card); color: var(--ink); font-size: .9rem; }
        .pill:hover { text-decoration: none; border-color: var(--accent); }
        .pill.active { background: var(--accent); border-color: var(--accent); color: #fff; }

        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 16px; }
        .card { background: var(--card); border: 1px solid var(--line); border-radius: 12px;
                padding: 18px; border-top: 5px solid var(--accent);
                transition: transform .15s, box-shadow .15s; }
        .card:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0,0,0,.08); }
        .card h3 { margin: 8px 0 4px; font-size: 1.1rem; }
        .card h3 a { color: var(--ink); }
        .meta { color: var(--muted); font-size: .9rem; margin: 0; }

        .badge { display: inline-block; padding: 2px 10px; border-radius: 999px;
                 font-size: .75rem; font-weight: 600; color: #fff; background: var(--accent); }
        .genre-sci-fi   { --accent: #0e7490; }
        .genre-fantasy  { --accent: #7c3aed; }
        .genre-romance  { --accent: #be185d; }
        .genre-thriller { --accent: #b45309; }

        .detail { background: var(--card); border: 1px solid var(--line); border-radius: 14px;
                  padding: 28px; border-top: 6px solid var(--accent); max-width: 620px; }
        .featured-tag { display: inline-block; background: #fef3c7; color: #92400e;
                        padding: 4px 12px; border-radius: 999px; font-weight: 600;
                        font-size: .85rem; margin-bottom: 10px; }
        dl { display: grid; grid-template-columns: 110px 1fr; gap: 10px 16px; margin: 20px 0; }
        dt { color: var(--muted); }
        dd { margin: 0; font-weight: 500; }

        .back { display: inline-block; margin-top: 8px; }
        .empty { background: var(--card); border: 1px dashed var(--line); border-radius: 12px;
                 padding: 30px; text-align: center; color: var(--muted); }
        footer { border-top: 1px solid var(--line); color: var(--muted); font-size: .85rem;
                 text-align: center; padding: 18px 0; }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="wrap">
            <a class="brand" href="/books">📚 Book Shelf</a>
            <span class="student">Student: Danielle John T. Lopez</span>
        </div>
    </header>

    <main class="wrap">
        @yield('content')
    </main>

    <footer>Made by Danielle John T. Lopez</footer>
</body>
</html>