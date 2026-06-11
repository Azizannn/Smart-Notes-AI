<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'laravel') }}</title>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @laravelPWA
</head>

<body>
    <div class="flex min-h-screen">
        <aside class="hidden md:block w-64 bg-red-900 dark:bg-red-950 text-white p-6" id="aside">
            <div>
                <h1 class="text-x font-bold mb-6">
                    Smart Notes AI
                </h1>

                <nav>
                    <a href="/" class="block">Dasboard</a>
                    <a href="/notes" class="block">Notes</a>
                    <a href="/quiz" class="block">Quiz</a>
                </nav>

            </div>
        </aside>
        <main class="flex-1 bg-slate-100 dark:bg-gray-900 dark:text-white">
            <header class="bg-white border-b px-6 py-4 flex justify-between dark:bg-gray-800">
                <div class="flex gap-2 items-center">
                    <button class="md:hidden" id="menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                    </button>

                    <h2 class="font-semibold">
                        Smart Notes AI
                    </h2>
                </div>
                <div class="flex gap-2 items-center">
                    <button onclick="toggleDarkMode()" class="p-2" title="Toggle dark mode">
                        <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>

                        <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
                    </button>
                    <span>Hello, {{ session('username') }}</span>
                </div>

            </header>

            <div class="p-4">
                @yield('content')
            </div>
        </main>
    </div>
    <script>
        function updateIcon() {
            const isDark = document.documentElement.classList.contains('dark')
            document.getElementById('icon-sun').classList.toggle('hidden', isDark)
            document.getElementById('icon-moon').classList.toggle('hidden', !isDark)
        }

        function toggleDarkMode() {
            const html = document.documentElement
            if (html.classList.contains('dark')) {
                html.classList.remove('dark')
                localStorage.theme = 'light'
            } else {
                html.classList.add('dark')
                localStorage.theme = 'dark'
            }
            updateIcon()
        }

        updateIcon()
    </script>
</body>

</html>
