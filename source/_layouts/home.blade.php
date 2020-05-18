<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
@include('_partials.head')

<body>
    <div class="page layout__home">
        <main class="main">
            @yield('content')
        </main>
    </div>

    @include('_partials.footer')
</body>
</html>
