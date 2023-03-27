<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <!-- <div class="card my-4">
        <div class="card-body">
            You're logged in!
        </div>
    </div> -->
    <header class="border-bottom" style="min-height: 14rem;">
        <div class="row">
            <div class="col-sm-2 text-center">
                <img src="/storage/{{ $user->profile->image }}" onerror="if (this.src != '/no-image.png')this.src = '/no-image.png'" class="rounded-circle" style="height: 7rem;" alt="">
            </div>
            <div class="col-sm-10">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <h1 class="me-3" >{{$user->username}}</h1>
                        <div id="follow-div" {{$authUser?->following->contains('id', $user->id)? "data-this-user-followed": "" }} data-follow-link="{{ route('follow.store', $user->id) }}">

                        </div>
                        <!-- <button class="btn btn-primary" style="height: fit-content;" onclick="followUser(this)">
                            @if($user->followers->contains('id', $user->id))
                                Unfollow
                            @else
                                Follow
                            @endif
                        </button> -->
                    </div>
                    @can('update', $user->profile)
                        <a href="{{ route('profile.edit') }}" style="text-decoration: none;">Edit Profile</a>
                    @endcan
                </div>
                <div class="mb-3">
                    <small class="me-3"> <strong>{{ $user->posts->count() }}</strong> posts</small><small class="me-3"> <strong>{{ $user->followers->count() }}</strong> followers</small><small class="me-3"> <strong>{{ $user->following->count() }}</strong>  following</small>
                </div>
                <p class="lead" style="line-height:1.375rem;">{{$user->profile->description}}
                <a href="{{ $user->profile->website}}" target="_blank" style="display:block; text-decoration: none;">{{ $user->profile->website}}</a>
                </p>
            </div>
        </div>
    </header>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <article class="row mt-4 c-posts">
        @foreach($user->posts as $post)
            <div class="col-sm-4">
                <a href="{{ route('posts.show', $post->id) }}">
                    <img src="/storage/{{ $post->image }}" class="img-fluid" alt="">
                </a>
            </div>
        @endforeach
    </article>
    <x-slot name="customMainScripts">
        @vite(['resources/sass/app.scss', 'resources/js/follow.js'])
    </x-slot>
    <!-- <script>
        function followUser(el){
            axios.post("{{ route('follow.store', $user->id) }}").then(function(result){
                
                if(result.data.attached.length == 0)el.innerText = 'Follow';
                else el.innerText = 'Unfollow';
            }).catch(function(error){
                if(error.response.status == '401') window.location = '/login'; 
            });
        }
    </script> -->
</x-app-layout>