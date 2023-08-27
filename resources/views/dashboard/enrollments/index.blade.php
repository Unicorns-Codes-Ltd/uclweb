<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('enrollments.index')" :active="request()->routeIs('enrollments.index')">
                {{ __('All Enrollments') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-4 text-center sm:text-left">All Enrollments</h1>

            <table id="enrolllmentTable" class="display stripe text-xs sm:text-base" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Student Name</th>
                        <th>Total</th>
                        <th>Total</th>
                        <th>Total</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#enrolllmentTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('enrollments.index') !!}",
                columns: [{
                        "render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: null,
                        render: function (data) {

                            return data.user.name;
                        }
                    },
                    {
                        data: 'total',
                        name: 'total'
                    },
                    {
                        data: null,
                        render: function (data) {
                            if (data.status == '1'){
                                var statusLabels = '<span  class="bg-orange-300 rounded-full text-white text-sm px-2 inline-block py-1">Pending</span>';
                            }else if(data.status == '2'){
                                var statusLabels = '<span  class="bg-green-300 rounded-full text-gray-800 text-sm px-2 inline-block py-1">Approved</span>';
                            }

                            return statusLabels;
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex"><a href="${BASE_URL}enrollments/${data.id}/edit" class="flex justify-center items-center bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify text-base" data-icon="iconamoon:edit-light"></span></a><!--<button type="button"  class="flex justify-center items-center bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="categoryDelete(${data.id});"><span class="iconify text-base" data-icon="bi:trash-fill"></span></button>--></div>`;
                        }
                    }
                ]
            });


            function categoryDelete(categoryID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete this category ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'enrollments/' + categoryID,
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
