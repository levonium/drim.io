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

        </main>

        <script>
            async function getCachedUrls () {
                const postsSlug = window.location.origin + '/posts/'

                const cache = await caches.open('posts-cache')
                const keys = await cache.keys()

                return keys
                    .filter((request, index, array) => request.url.startsWith(postsSlug))
                    .map(request => request.url)
            }

            const wrapper = document.getElementById('cached-content')
            getCachedUrls().then(urls => {
                const listItems =  !urls.length
                    ? 'Nothing found'
                    : urls.map(url => `<li><a href="${url}">${url}</a></li>`)
                wrapper.innerHTML = `<ul>${listItems}</ul>`
            })
        </script>

        @include('_partials.footer')
    </div>
</body>
</html>
