<x-app-layout>
    <div class="py-5">
        <div class="container px-sm-3 px-lg-5 gy-5">
            <div class="p-4 p-sm-5 bg-white shadow rounded-3">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="font-medium" style="color: var(--bs-gray-900);">
                                {{ __('Post Create') }}
                            </h2>
                        </header>

                        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                            @csrf

                            <div class="row g-3 align-items-center py-3">
                                <div class="col-sm-1">
                                    <x-input-label for="caption" :value="__('Caption')" />
                                </div>
                                <div class="col-auto {{$errors->get('caption')? 'is-invalid':''}}">
                                    <x-text-input id="caption" name="caption" type="text" :error="$errors->get('caption')" class="mt-1" :value="old('caption')" required autofocus autocomplete="caption" />
                                </div>
                                <x-input-error for="caption" class="mt-2" :message="$errors->get('caption')" />
                            </div>

                            <div class="row g-3 align-items-center py-3">
                                <div class="col-sm-1">
                                    <x-input-label for="image" :value="__('Profile Picture')" />
                                </div>
                                <div class="col-auto {{$errors->get('image')? 'is-invalid':''}}">
                                    <!-- when selecting image file only the image files are seletable -->
                                    <x-text-input id="image" name="image" type="file" :error="$errors->get('image')" class=" mt-1" accept="image/*"/>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>