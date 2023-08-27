<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                {{ __('All Category') }}
            </x-nav-link>
            <x-nav-link :href="route('categories.create')" :active="request()->routeIs('categories.create')">
                {{ __('New Category') }}
            </x-nav-link>
            <x-nav-link :href="route('categories.edit', $category->id)" :active="request()->routeIs('categories.edit', $category->id)">
                {{ __('Edit This Category') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-4 text-center sm:text-left">Edit Category</h1>

            <form method="POST" action="{{ route('categories.update', $category->id) }}">
                @csrf
                @method('PATCH')

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{!!$category->name!!}" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Slug -->
                <div class="mt-4">
                    <x-input-label for="slug" :value="__('Slug')" />
                    <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug" value="{!!$category->slug!!}" required />
                    <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                </div>

                <!-- Keywords -->
                <div class="mt-4">
                    <x-input-label for="keywords" :value="__('Keywords')" />
                    <x-textarea id="keywords" class="block mt-1 w-full" name="keywords" required>{!!$category->keywords!!}</x-textarea>
                    <x-input-error :messages="$errors->get('keywords')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-text-input id="edit_id" class="" type="hidden" name="edit_id" value="{!!$category->id!!}" />

                    <x-primary-button class="ml-4">
                        {{ __('Update Category') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>


    <x-slot name="script">
        <script>
            $("form #name").on('blur', () => {
                const slug = slugify($("form #name").val());
                $("form #slug").val(slug);
            });

        </script>
    </x-slot>
</x-app-layout>
