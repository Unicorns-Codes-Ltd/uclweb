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
            <h1 class="text-xl mb-4 text-center sm:text-left">New Batch Information</h1>
            <p>(<span class="text-red-500 mb-4">*</span>) marked fields are required.</p>

            <form method="POST" action="{{ route('batches.store') }}" id="course-store" enctype="multipart/form-data" >
                @csrf
                <div class="grid grid-cols-2 gap-5">
                    <!-- Name -->
                    <div class="">
                        <x-input-label for="number" :value="__('Number')" />
                        <x-text-input id="number" class="block mt-1 w-full" type="text" name="number"
                            :value="old('number')" required />
                        <x-input-error :messages="$errors->get('number')" class="mt-2" />
                    </div>


                    {{-- Course --}}
                    <div class="">
                        <x-input-label for="course_id" :value="__('Course')" />

                        <x-select-input id="course_id" name="course_id" required>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" class="capitalize">{{ $course->name }}</option>
                            @endforeach
                        </x-select-input>
                    </div>




                    {{-- Price --}}
                    <div class="flex justify-between gap-5">

                        <!-- Maximum seat -->
                        <div class="">
                            <x-input-label for="max_seat" :value="__('Maximum Seat')" />
                            <x-text-input id="max_seat" class="block mt-1 w-full" type="text" name="max_seat"
                                :value="old('max_seat')" required />
                            <x-input-error :messages="$errors->get('max_seat')" class="mt-2" />
                        </div>

                        <!-- start_date -->
                        <div class="">
                            <x-input-label for="start_date" :value="__('Start Date')" />
                            <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date"
                                :value="old('start_date')" required />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>

                    </div>

                    <!-- Group Link -->
                    <div class="">
                        <x-input-label for="group_link" :value="__('Group link')" />
                        <x-text-input id="group_link" class="block mt-1 w-full" type="text" name="group_link"
                            :value="old('group_link')" required />
                        <x-input-error :messages="$errors->get('group_link')" class="mt-2" />
                    </div>

                </div>
                <div class="flex items-center justify-end col-span-2 mt-4">

                    <x-primary-button class="ml-4" onclick="formsubmit()">
                        {{ __('Create Batch') }}
                    </x-primary-button>
                </div>

            </form>
        </div>

    </div>


    <x-slot name="script">
        {{-- <script src="{{asset('js/course/course.js')}}"></script> --}}
    </x-slot>
</x-app-layout>
