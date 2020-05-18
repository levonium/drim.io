<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
@include('_partials.head')

<body>
    <div class="page layout__posts">
        <main class="main">

            <header>
                <h1>{{ $page->title }}</h1>
            </header>

            <article id="content">
                @yield('content')
            </article>

            @if (! $page->skipLinks)
            <footer>
                <a href="/" class="rect">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/></svg>
                    Home
                </a>
                <a href="/posts" class="rect">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M1 4h2v2H1V4zm4 0h14v2H5V4zM1 9h2v2H1V9zm4 0h14v2H5V9zm-4 5h2v2H1v-2zm4 0h14v2H5v-2z"/></svg>
                    Posts
                </a>
                <a href="#" hidden id="cache" class="rect">
                    <span class="save" hidden>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v18l-8-4-8 4V2zm2 0v15l6-3 6 3V2H4zm5 5V5h2v2h2v2h-2v2H9V9H7V7h2z"/></svg>
                        Save
                    </span>
                    <span class="remove" hidden>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v18l-8-4-8 4V2z"/></svg>
                        Remove
                    </span>
                </a>
            </footer>
            @endif

        </main>
    </div>

    @push('scripts')
        <script src="{{ mix('js/posts.js', 'assets/build') }}" defer></script>
    @endpush

    @include('_partials.footer')
</body>
</html>
