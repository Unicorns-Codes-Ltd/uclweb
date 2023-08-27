<x-app-layout>
    <x-slot name="headscript">
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    </x-slot>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('albums.index')" :active="request()->routeIs('albums.index')">
                {{ __('All Album') }}
            </x-nav-link>
            <x-nav-link :href="route('albums.create')" :active="request()->routeIs('albums.create')">
                {{ __('Add Photo To Album') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-4">New Album Information</h1>

            <form method="POST" action="{{ route('photos.store') }}" id="course-store" enctype="multipart/form-data" >
                @csrf
                <div class="">
                    {{-- Category --}}
                    <div class="">
                        <x-input-label for="album_id" :value="__('Album')" />

                        <x-select-input id="album_id" name="album_id" required>
                            @foreach ($albums as $album)
                                <option value="{{ $album->id }}" class="capitalize">{{ $album->name }}</option>
                            @endforeach
                        </x-select-input>
                    </div>

                    <!-- cover -->
                    <div class="">
                        <x-input-label for="cover" :value="__('Photos')" />
                        <x-text-input id="cover" class="block mt-1 w-full file:mr-5 file:mb-[2px] file:py-2 file:px-2 file:border-0 file:font-jost file:uppercase  file:text-white file:bg-uorange" type="file" name="cover"
                            :value="old('cover')" required />
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>

                </div>
                <div class="flex items-center justify-end col-span-2 mt-4">

                    <x-primary-button class="ml-4" onclick="formsubmit()">
                        {{ __('Create Album') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>


    <x-slot name="script">
        <script src="{{asset('js/course/course.js')}}"></script>
    </x-slot>
</x-app-layout>
