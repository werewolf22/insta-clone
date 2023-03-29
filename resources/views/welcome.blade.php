<x-app-layout>
    <div class="py-5">
        <div class="container px-sm-3 px-lg-5 gy-5">
            @auth
                @forelse($posts as $post)
                    <div class="p-4 p-sm-5 my-3 bg-white shadow rounded-3">
                        <div class="max-w-xl">
                            <section class="row">
                                <div class="col-sm-8 mx-auto">
                                    <a href="{{ route('posts.show', $post->id) }}"><img src="/storage/{{ $post->image }}" class="w-100"  alt="Post image"></a>
                                </div>
                                <div class="col-sm-8 mx-auto">
                                    <div class="d-flex align-items-center">
                                        <img src="/storage/{{ $post->user->profile->image }}" alt="Profile Image" class="rounded-circle " style="width: 5%;">
                                        <a href="{{ route('profile.show', $post->user->id) }}" class="text-reset text-decoration-none"><h3 class="px-3">{{ $post->user->username }}</h3></a>
                                        <a href="#" class="fs-3 text-decoration-none">Follow</a>
                                    </div>
                                    <hr>
                                    <p class="mt-3"><a href="{{ route('profile.show', $post->user->id) }}" class="text-reset text-decoration-none"><span class="fs-3 me-3">{{ $post->user->username }}</span></a> {{ $post->caption }}</p>
                                    
                                </div>
                            </section>
                        </div>
                    </div>
                @empty
                    <div class="p-4 p-sm-5 bg-white shadow rounded-3">
                        <div class="max-w-xl">
                            <div class="alert alert-danger" role="alert">
                                No Posts Yet
                            </div>
                        </div>
                    </div>
                @endforelse
                {{ $posts->links() }}
            @else
                <div class="p-4 p-sm-5 bg-white shadow rounded-3">
                    <div class="max-w-xl">
                        <div class="alert alert-info" role="alert">
                            <h1>Welcome to Instagram</h1>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>