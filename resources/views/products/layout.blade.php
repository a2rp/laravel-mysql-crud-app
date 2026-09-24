<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laravel product CRUD application with quantity and price management.">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title', 'Product Manager') | Ashish Ranjan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <a class="brand" href="{{ route('product/index') }}">
                <img src="{{ asset('logo.png') }}" alt="Product Manager logo">
                <span><small>Laravel CRUD</small><strong>Product Manager</strong></span>
            </a>
            <nav class="nav" aria-label="Primary navigation">
                <a href="{{ route('product/index') }}">Products</a>
                <a href="{{ route('product/create') }}">Add product</a>
            </nav>
        </div>
    </header>
    <main class="page">@yield('content')</main>
    <footer class="footer">
        <p>Copyright © {{ date('Y') }} <a href="https://www.ashishranjan.net/" target="_blank" rel="noopener noreferrer">Ashish Ranjan</a></p>
        <div class="footer-links" aria-label="External links">
            <a class="icon-link" href="https://www.ashishranjan.net/" target="_blank" rel="noopener noreferrer" aria-label="Portfolio" title="Portfolio">◉</a>
            <a class="icon-link" href="https://github.com/a2rp" target="_blank" rel="noopener noreferrer" aria-label="GitHub" title="GitHub">GH</a>
            <a class="icon-link" href="https://codepen.io/ash1198" target="_blank" rel="noopener noreferrer" aria-label="CodePen" title="CodePen">CP</a>
            <a class="icon-link" href="https://www.linkedin.com/in/aashishranjan" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn">in</a>
            <a class="icon-link" href="https://www.facebook.com/theash.ashish/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook">f</a>
            <a class="icon-link" href="https://www.youtube.com/@ashishranjan-ashz?sub_confirmation=1" target="_blank" rel="noopener noreferrer" aria-label="YouTube" title="YouTube">▶</a>
            <a class="icon-link" href="mailto:ash.ranjan09@gmail.com" aria-label="Email" title="Email">✉</a>
            <a class="icon-link" href="https://a2rp-donation-page.netlify.app/" target="_blank" rel="noopener noreferrer" aria-label="Support" title="Support">?</a>
            <a class="icon-link" href="https://buymeacoffee.com/a2rp" target="_blank" rel="noopener noreferrer" aria-label="Buy Me a Coffee" title="Buy Me a Coffee">☕</a>
            <a class="icon-link" href="https://patreon.com/a2rp" target="_blank" rel="noopener noreferrer" aria-label="Patreon" title="Patreon">♥</a>
        </div>
    </footer>
</body>
</html>