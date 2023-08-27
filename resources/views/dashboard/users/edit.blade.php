<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                {{ __('All Users') }}
            </x-nav-link>
            <x-nav-link :href="route('users.create')" :active="request()->routeIs('users.create')">
                {{ __('Add New User') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6 ">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-4 text-center sm:text-left">Edit this user</h1>
            <p>{{$user->roles->first()->name}}</p>
            <form method="POST" action="{{ route('users.update',$user->id) }}">
                @csrf
                @method('PATCH')

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="role" :value="__('Role')" />
                    <x-select-input id="role" name="role">
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}" class="capitalize" @if ($user->roles->first()->id == $role->id) @selected(true) @endif>{{$role->name}}</option>
                        @endforeach
                    </x-select-input>
                </div>

                {{-- <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div> --}}

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Update User') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
