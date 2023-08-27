<x-app-layout>
    <!-- Navigation Links -->
    <x-slot name="submenu">
            <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                {{ __('All Users') }}
            </x-nav-link>
            <x-nav-link :href="route('users.create')" :active="request()->routeIs('users.create')">
                {{ __('Add New User') }}
            </x-nav-link>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md text-nblue">
            <h1 class="text-xl mb-4 text-center sm:text-left">All Users</h1>
            <table id="userTable" class="display stripe text-xs sm:text-base" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#userTable').DataTable({
                processing: true,
                serverSide: true,
                    ajax: "{!! route('users.index') !!}",
                    columns: [
                        {"render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: null,
                            render: function(data) {
                                return `<div class="flex justify-end"><a href="${BASE_URL}users/${data.id}/edit" class="flex justify-center items-center bg-uorange rounded-md text-gray-200 hover:text-white py-2 px-2 mx-1 hover:bg-green-400" ><span class="iconify text-base" data-icon="dashicons:edit"></span></a>
                                <button type="button"  class="flex justify-center items-center bg-dorange rounded-md text-white py-2 px-2 mx-1 hover:bg-red-400" onclick="userDelete(${data.id});"><span class="iconify text-base" data-icon="bi:trash-fill"></span></button></div>`;
                            }
                        }
                    ]
                });


            function userDelete(userID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete this User ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL +'users/'+userID,
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
