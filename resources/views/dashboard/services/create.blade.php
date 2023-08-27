<x-app-layout>
    <x-slot name="headscript">
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    </x-slot>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('services.index')" :active="request()->routeIs('serveces.index')">
                {{ __('All Services') }}
            </x-nav-link>
            <x-nav-link :href="route('services.create')" :active="request()->routeIs('serveces.create')">
                {{ __('New Service') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-4 text-center sm:text-left">New Service Information</h1>
            <p>(<span class="text-red-500 mb-4">*</span>) marked fields are required.</p>

            <form method="POST" action="{{ route('services.store') }}" id="service-store" enctype="multipart/form-data" >
                @csrf

                <div class="grid grid-cols-2 gap-5">
                    <!-- Name -->
                    <div class="col-span-2">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- icon -->
                    <div class="">
                        <x-input-label for="icon" :value="__('Icon')" />
                        <x-text-input id="icon" class="block mt-1 w-full file:mr-5 file:mb-[2px] file:py-2 file:px-2 file:border-0 file:font-jost file:uppercase  file:text-white file:bg-uorange" type="text" name="icon"
                            :value="old('icon')" required/>
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                        <p>You will find icon <a href="http://icon-sets.iconify.design/solar/" target="_blank" class="text-uorange">Here</a></p>
                    </div>

                    <!-- cover -->
                    <div class="">
                        <x-input-label for="cover" :value="__('Cover')" />
                        <x-text-input id="cover" class="block mt-1 w-full file:mr-5 file:mb-[2px] file:py-2 file:px-2 file:border-0 file:font-jost file:uppercase  file:text-white file:bg-uorange" type="file" name="cover"
                            :value="old('cover')" required/>
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>



                    <!-- Short description -->
                    <div class="col-span-2">
                        <x-input-label for="short_description" :value="__('Short Description')" class="mb-2" />
                        <x-textarea id="short_description" class="block mt-2 w-full" name="short_description" required
                            autocomplete="short_description"></x-textarea>
                        <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
                    </div>




                    <!-- description -->
                    <div class="col-span-2">
                        <x-input-label for="description" :value="__('Description')" class="mb-2" />
                        <x-textarea id="description" class="block mt-2 w-full" name="description" required
                            autocomplete="description"></x-textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                </div>
                <div class="flex items-center justify-end col-span-2 mt-4">

                    <x-primary-button class="ml-4" onclick="formsubmit()">
                        {{ __('Create Service') }}
                    </x-primary-button>
                </div>

            </form>
        </div>

    </div>


    <x-slot name="script">
        <script src="{{asset('js/service/service.js')}}"></script>
    </x-slot>
</x-app-layout>
