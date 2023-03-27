<x-main-layout>
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if(1==2)
    <!-- <header class="d-flex py-3 bg-white shadow-sm border-bottom">
        <div class="container">
            {{ $header }}
        </div>
    </header> -->
    @endif
    @if(isset($additionalScripts))
        <x-slot name="additionalScripts">
            {{ $additionalScripts }}
        </x-slot>
    @endif

    @if(isset($customMainScripts))
        <x-slot name="customMainScripts">
            {{ $customMainScripts }}
        </x-slot>
    @endif

    <!-- Page Content -->
    <main class="container my-5">
        {{ $slot }}
    </main>
</x-main-layout>
