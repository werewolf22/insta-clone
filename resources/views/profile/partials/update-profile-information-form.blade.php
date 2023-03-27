<section>
    <header>
        <h2 class="font-medium" style="color: var(--bs-gray-900);">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm" style="color: var(--bs-gray-600);">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    
    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="row g-3 align-items-center py-3">
            <div class="col-sm-1">
                <x-input-label for="name" :value="__('Name')" />
            </div>
            <div class="col-auto {{$errors->get('name')? 'is-invalid':''}}">
                <x-text-input id="name" name="name" type="text" :error="$errors->get('name')" class="mt-1" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            </div>
            <x-input-error for="name" class="mt-2" :message="$errors->get('name')" />
        </div>

        <div class="row g-3 align-items-center py-3">
            <div class="col-sm-1">
                <x-input-label for="username" :value="__('Username')" />
            </div>
            <div class="col-auto {{$errors->get('username')? 'is-invalid':''}}">
                <x-text-input id="username" name="username" type="text" :error="$errors->get('username')" class="mt-1" :value="old('username', $user->username)" required autocomplete="username" />
            </div>
            <x-input-error for="username" class="mt-2" :message="$errors->get('username')" />
        </div>

        <div class="row align-items-center py-3">
            <div class="col-sm-1">
                <x-input-label for="email" :value="__('Email')" />
            </div>
            <div class="col-auto {{$errors->get('email')? 'is-invalid':''}}">
                <x-text-input id="email" name="email" type="email" :error="$errors->get('email')" class="mt-1" :value="old('email', $user->email)" required autocomplete="email" />
            </div>
            <x-input-error for="email" class="mt-2" :message="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2" style="color: --bs-text-gray-800;">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm btn btn-secondary">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm" style="color: --bs-text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="row g-3 align-items-center py-3">
            <div class="col-sm-1">
                <x-input-label for="description" :value="__('Description')" />
            </div>
            <div class="col-auto {{$errors->get('description')? 'is-invalid':''}}">
                <x-textarea-input id="description" name="description" :error="$errors->get('description')" class="mt-1" >
                 {{ old('description', $user->profile->description) }}
                </x-textarea-input>
            </div>
            <x-input-error for="description" class="mt-2" :message="$errors->get('description')" />
        </div>

        <div class="row g-3 align-items-center py-3">
            <div class="col-sm-1">
                <x-input-label for="website" :value="__('Website')" />
            </div>
            <div class="col-auto {{$errors->get('website')? 'is-invalid':''}}">
                <x-text-input id="website" name="website" type="text" :error="$errors->get('website')" class="mt-1" :value="old('website', $user->profile->website)" autocomplete="website" />
            </div>
            <x-input-error for="website" class="mt-2" :message="$errors->get('website')" />
        </div>

        <div class="row g-3 align-items-center py-3">
            <div class="col-sm-1">
                <x-input-label for="image" :value="__('Profile Picture')" />
            </div>
            <div class="col-auto {{$errors->get('image')? 'is-invalid':''}}">
                <x-text-input id="image" name="image" type="file" :error="$errors->get('image')" class=" mt-1" />
            </div>
            <x-input-error for="image" class="mt-2" :message="$errors->get('image')" />
        </div>


        <div class="d-flex align-items-center gap-4">
            <x-primary-button class="offset-sm-1">{{ __('Save') }}</x-primary-button>
            <a href="{{ url()->previous() }}"><x-secondary-button >{{ __('cancel') }}</x-primary-button></a>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="fs-6"
                    style="color: var(--bs-gray-600)"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
