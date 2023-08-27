<x-app-layout>
    <!-- Navigation Links -->
    <x-slot name="submenu">
            <x-nav-link :href="route('roles.index')" :active="request()->routeIs('roles.index')">
                {{ __('All Roles') }}
            </x-nav-link>
            <x-nav-link :href="route('roles.create')" :active="request()->routeIs('roles.create')">
                {{ __('Add New Role') }}
            </x-nav-link>
    </x-slot>

    @if (count($errors) > 0)
        <div class="p-2 sm:p-6">
            <div class="text-red-500 bg-red-100 px-4 py-2">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="p-2 sm:p-6">
        <form action="{{route('roles.store')}}" method="POST">
            @csrf
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white  px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <x-input-label for="guard_name">Role Name:</x-input-label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <x-text-input type="text" name="name" id="name" placeholder="New role name" class=""></x-text-input>
                            </div>
                        </div>
                    </div>
                    <fieldset>
                        <div class="text-base font-medium text-gray-900 " aria-hidden="true">Permissions:</div>
                        <div class="mt-4 grid grid-cols-2 sm:grid-cols-4 gap-4">
                            @foreach ($permissions as $permission)
                                <div class="flex items-start @if ($loop->first) col-span-2 sm:col-span-4 @endif">
                                    <div class="flex h-5 items-center">
                                        <input id="" name="permission[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-500 focus:ring-blue-400" value="{{$permission->id,}}">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <x-input-label for="comments">{{ $permission->name }}</x-input-label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <x-primary-button  type="submit">Save Role</x-primary-button>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>
