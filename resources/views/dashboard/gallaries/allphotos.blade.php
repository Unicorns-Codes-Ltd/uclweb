<x-app-layout>

    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('albums.index')" :active="request()->routeIs('albums.index')">
                {{ __('All Album') }}
            </x-nav-link>
            <x-nav-link :href="route('albums.create')" :active="request()->routeIs('albums.create')">
                {{ __('Add Photo To The Album') }}
            </x-nav-link>

        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h2 class="text-xl sm:text-4.5xl font-bold text-nblue leading-none text-center md:text-start">{{$album->name}}</h2>
            <hr class="my-4">
            <div class="grid grid-cols-4 gap-5">
                @forelse ($album->photos as $photo)

                <div class="aspect-square rounded bg-cover bg-center bg-no-repeat relative group" style="background-image: url({{asset($photo->cover)}})">

                    <form action="{{route('photos.destroy',$photo->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="absolute bottom-2 right-2 bg-black/40 w-10 h-10 rounded flex justify-center items-center text-white group-hover:text-red-500 group-hover:bg-lgreen transiation duration-150 ease-in-out"><span class="iconify" data-icon="bi:trash-fill"></span></button>
                    </form>
                </div>
                @empty

                @endforelse
            </div>

        </div>
    </div>



    <x-slot name="script">
        <script>
        </script>
    </x-slot>
</x-app-layout>
