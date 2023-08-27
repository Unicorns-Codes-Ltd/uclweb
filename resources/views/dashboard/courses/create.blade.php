<x-app-layout>
    <x-slot name="headscript">
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    </x-slot>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('courses.index')" :active="request()->routeIs('courses.index')">
                {{ __('All Courses') }}
            </x-nav-link>
            <x-nav-link :href="route('courses.create')" :active="request()->routeIs('courses.create')">
                {{ __('New Course') }}
            </x-nav-link>
            <x-nav-link :href="route('batches.index')" :active="request()->routeIs('batches.index')">
                {{ __('All Batch') }}
            </x-nav-link>
            <x-nav-link :href="route('batches.create')" :active="request()->routeIs('batches.create')">
                {{ __('New Batch') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-4 text-center sm:text-left">New Course Information</h1>
            <p>(<span class="text-red-500 mb-4">*</span>) marked fields are required.</p>

            <form method="POST" action="{{ route('courses.store') }}" id="course-store" enctype="multipart/form-data" >
                @csrf
                <div class="grid grid-cols-2 gap-5">
                    <!-- Name -->
                    <div class="">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Slug -->
                    <div class="">
                        <x-input-label for="slug" :value="__('Slug')" />
                        <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug"
                            :value="old('slug')" required readonly />
                        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                    </div>


                    {{-- Category --}}
                    <div class="">
                        <x-input-label for="category_id" :value="__('Category')" />

                        <x-select-input id="category_id" name="category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" class="capitalize">{{ $category->name }}</option>
                            @endforeach
                        </x-select-input>
                    </div>

                    {{-- Instructor --}}
                    <div class="">
                        <x-input-label for="instructor_id" :value="__('Instructor')" />

                        <x-select-input id="instructor_id" name="instructor_id" required>
                            @foreach ($instructors as $instructor)
                                <option value="{{ $instructor->id }}" class="capitalize">{{ $instructor->name }}
                                </option>
                            @endforeach
                        </x-select-input>
                    </div>

                    <!-- Short description -->
                    <div class="col-span-2">
                        <x-input-label for="short_description" :value="__('Short Description')" class="mb-2" />
                        <x-textarea id="short_description" class="block mt-2 w-full" name="short_description" required
                            autocomplete="short_description"></x-textarea>
                        <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
                    </div>


                    <!-- cover -->
                    <div class="flex-grow">
                        <x-input-label for="cover" :value="__('Cover')" />
                        <x-text-input id="cover" class="block mt-1 w-full file:mr-5 file:mb-[2px] file:py-2 file:px-2 file:border-0 file:font-jost file:uppercase  file:text-white file:bg-uorange" type="file" name="cover"
                            :value="old('cover')" required/>
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>

                    {{-- Price --}}
                    <div class="sm:flex justify-between gap-5">

                        <!-- regular_price -->
                        <div class="">
                            <x-input-label for="regular_price" :value="__('Regular Price')" />
                            <x-text-input id="regular_price" class="block mt-1 w-full" type="number" name="regular_price"
                                :value="old('regular_price')" required />
                            <x-input-error :messages="$errors->get('regular_price')" class="mt-2" />
                        </div>
                        <!-- current_price -->
                        <div class="">
                            <x-input-label for="current_price" :value="__('Current Price')" />
                            <x-text-input id="current_price" class="block mt-1 w-full" type="number" name="current_price"
                                :value="old('current_price')" required />
                            <x-input-error :messages="$errors->get('current_price')" class="mt-2" />
                        </div>
                    </div>

                    <!-- description -->
                    <div class="col-span-2">
                        <x-input-label for="description" :value="__('Description')" class="mb-2" />
                        <x-textarea id="description" class="block mt-2 w-full" name="description" required
                            autocomplete="description"></x-textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- materials -->
                    <div class="col-span-2">
                        <x-input-label for="materials" :value="__('Material Includes')" class="mb-2" />
                        <x-textarea id="materials" class="block mt-2 w-full" name="materials" required
                            autocomplete="materials"></x-textarea>
                        <x-input-error :messages="$errors->get('materials')" class="mt-2" />
                    </div>

                    <!-- curriculam -->
                    <div class="col-span-2">
                        <x-input-label for="curriculam" :value="__('Curriculam')" class="mb-2" />
                        <x-textarea id="curriculam" class="block mt-2 w-full" name="curriculam" required
                        autocomplete="curriculam"></x-textarea>
                        <x-input-error :messages="$errors->get('curriculam')" class="mt-2" />
                    </div>


                </div>
                <div class="flex items-center justify-end col-span-2 mt-4">

                    <x-primary-button class="ml-4" onclick="formsubmit()">
                        {{ __('Create Course') }}
                    </x-primary-button>
                </div>

            </form>
        </div>

    </div>


    <x-slot name="script">
        <script src="{{asset('js/course/course.js')}}"></script>
    </x-slot>
</x-app-layout>
