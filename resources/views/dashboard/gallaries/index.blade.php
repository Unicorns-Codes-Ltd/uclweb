<x-app-layout>
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
            <h1 class="text-xl mb-1 text-uorange">New Album Information</h1>

            <form method="POST" action="{{ route('albums.store') }}" id="course-store" enctype="multipart/form-data" >
                @csrf
                <div class="grid grid-cols-3 ">

                    <div class="col-span-2">
                        <!-- Name -->
                        <div class="">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ml-4" >
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>
                </div>

            </form>
        </div>

        <div class="p-2 sm:p-6 bg-white rounded-md mt-2">
            <h1 class="text-xl mb-4 text-center sm:text-left">All Albums</h1>

            <table id="albulTable" class="display stripe text-xs sm:text-base" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#albulTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('albums.index') !!}",
                columns: [{
                        "render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: null,
                        render: function (data) {
                            if (data.status == '1'){
                                var statusLabels = '<span  class="bg-green-500 rounded-full text-white text-sm px-2 inline-block py-1">Active</span>';
                            }else {
                                var statusLabels = '<span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2 inline-block py-1">Inactive</span>';
                            }

                            return statusLabels;
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex flex-col sm:flex-row gap-1"><a href="${BASE_URL}albums/${data.id}/edit" class="flex justify-center items-center bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify text-base" data-icon="iconamoon:edit-light"></span></a> <a href="${BASE_URL}albums/${data.id}" class="flex justify-center items-center  bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify text-base" data-icon="ic:baseline-remove-red-eye"></span></a><button type="button"  class="flex justify-center items-center bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="albumDelete(${data.id});"><span class="iconify text-base" data-icon="bi:trash-fill"></span></button></div>`;
                        }
                    }
                ]
            });


            function albumDelete(quaryID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete album and images in it?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'albums/' + quaryID,
                            success: function(response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
                                    datatablelist.draw();
                                } else if (response.status == "error") {
                                    Swal.fire('This item is not deletable!', response.message, 'error');
                                    datatablelist.draw();
                                }
                            }
                        });
                    }
                });
            }

        </script>
    </x-slot>
</x-app-layout>
