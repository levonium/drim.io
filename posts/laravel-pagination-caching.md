---
layout: post.njk
title: Laravel - Pagination & Caching
description: Laravel - Pagination & Caching
footer: 1
---

Imagine a simple posts controller, the `index()` method returns a view that displays the listing of posts and only a few posts exist.

```php
public function index()
{
	$posts = Post::where('status', 'public')
		->orderBy('created_at', 'desc')
		->get();

	return view('posts.index', compact('posts'));
}
```

And a simplified blade view `/resources/views/posts/index.blade.php`

```html
@forelse($posts as $post)

	<h2 class="mb-2">
		<a href="/posts/{{ $post->slug }}" class="text-dark">{{ $post->title }}</a>
	</h2>

	<p>{!! $post->excerpt !!}</p>

@empty
	<h2>No posts were found 😼</h2>
@endforelse
```


That's fine, it works and displays the posts, however every time the page is loaded a database query is made. Which may be not a big deal if we have very little traffic but it's not optimal so let's cache those few posts.

We just pass the previous query to `Cache:remember` as an argument (thanks Laravel) and the `PostsController->index()` method now looks like this:

```php
public function index()
{
	$posts = Cache::remember('posts.all', 60 * 60 * 24, function() {
		return Post::where('status', 'public')
			->orderBy('created_at', 'desc')
			->get();
	});

	return view('posts.index', compact('posts'));
}
```

Great! Now it doesn't get to the database until we clear the cache `php artisan cache:clear`.

Then we publish more posts and it makes sense to add pagination. My first thought was that it's such a common case that if I just replace `->get()` with `->paginate(10)` it somehow would work 🙊 It does work, no errors, however it always returns the first 10 posts as we're storing only the first 10 posts into `posts.all`.

Now time to think out loud, let's restate what we need:
__get all posts, paginated and from cache__.
That didn't sound real to me, I think it would require `posts.all.PAGE` or something, so let's try again what we need in a little different order:
__get all posts from cache and paginate them__.

Makes more sense to me and seems pretty straight-forward using `LengthAwarePaginator`. It takes the following  arguments:

```php
$items,       // this would be a collection of all our posts
$total,       // this would be the posts count
$perPage,     // let's say 10
$currentPage, // we get this from request()
$options = [] // our posts listing isn't on the homepage (/), we need to pass the path
```

So the new `PostsController->index()` would look like this:

```php
public function index()
{
	$allPosts = Cache::remember('posts.all', 60 * 60 * 24, function() {
		return Post::where('status', 'public')
			->orderBy('created_at', 'desc')
			->get();
	});

	$perPage = 10;
	$currentPage = intval(request()->get('page', 1));

	$posts = new LengthAwarePaginator(
		$allPosts->forPage($currentPage, $perPage),
		$allPosts->count(),
		$perPage,
		$currentPage,
		['path' => 'posts']
	);

	return view('posts.index', compact('posts'));
}
```

We also need to add `{{ $posts->links }}` to our blade view for pagination links. And that's it.
