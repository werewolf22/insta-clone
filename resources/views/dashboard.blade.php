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
                <img src="/instagram-logo.jpeg" class="rounded-circle" style="height: 7rem;" alt="">
            </div>
            <div class="col-sm-10">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <h1 class="me-3">werewolf</h1>
                        <button class="btn btn-primary" style="height: fit-content;">Follow</button>
                    </div>
                    <a href="{{ route('posts.create') }}" style="text-decoration: none;">Add Post</a>
                </div>
                <div class="mb-3">
                    <small class="me-3"> <strong>23</strong> posts</small><small class="me-3"> <strong>23</strong> followers</small><small class="me-3"> <strong>23</strong> following</small>
                </div>
                <p class="lead" style="line-height:1.375rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda commodi voluptatibus inventore perferendis asperiores labore in atque ad consequuntur iure. Necessitatibus voluptates, architecto deleniti consequuntur eligendi commodi odio natus blanditiis.
                <a href="#" style="display:block; text-decoration: none;">link</a>
                </p>
            </div>
        </div>
    </header>
    <article class="row mt-4 c-posts">
        <div class="col-sm-4">
            <img src="/instagram-logo.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-4">
            <img src="/person-laptop.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-4">
            <img src="/person-laptop.jpg" class="img-fluid" alt="">
        </div>
    </article>
</x-app-layout>