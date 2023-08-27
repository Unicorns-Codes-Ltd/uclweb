<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('quotations.all')" :active="request()->routeIs('quotations.all')">
                {{ __('All Quotations') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">

            <table id="quotationTable" class="display stripe text-xs sm:text-base" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#quotationTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('quotations.all') !!}",
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
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: null,
                        render: function (data) {
                            if (data.status == '1'){
                                var statusLabels = '<span  class="bg-green-500 rounded-full text-white text-sm px-2 inline-block py-1">Unread</span>';
                            }else {
                                var statusLabels = '<span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2 inline-block py-1">Readed</span>';
                            }

                            return statusLabels;
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex flex-col sm:flex-row gap-1"><a href="${BASE_URL}quotations/show/${data.id}" class="flex justify-center items-center bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify text-base" data-icon="ic:baseline-remove-red-eye"></span></a><button type="button"  class="flex justify-center items-center bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="quaryDelete(${data.id});"><span class="iconify text-base" data-icon="bi:trash-fill"></span></button></div>`;
                        }
                    }
                ]
            });


            function quaryDelete(quaryID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to detede this message ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'quotations/delete/' + quaryID,
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

            // Changing Status
            function readUnreadQuary(quaryID) {
                // var message = ((status == 'unreaded'? 'readed' : 'unreaded'));
                // var updateStatus = ((status == 'unreaded' ? 'readed' : 'unreaded'));
                // Swal.fire({
                //     title: " "+message+"?",
                //     text: "Do you want to mark this message as "+message+" ?",
                //     icon: 'warning',
                //     showCancelButton: true,
                //     confirmButtonColor: '#3085d6',
                //     cancelButtonColor: '#d33',
                //     confirmButtonText: "Yes",
                // }).then((result) => {
                //     if (result.value) {
                //         $.ajax({
                //             method: 'PATCH',
                //             url: BASE_URL +'dashboard/quaries/toggle/'+quaryID,
                //             data: {
                //                 quaryID: quaryID,
                //                 updateStatus: updateStatus,
                //             },
                //             success: function (response) {
                //                 if (response.status == "success") {
                //                     Swal.fire('Success!', response.message, 'success');
                //                     datatablelist.draw();
                //                 }
                //             }
                //         });
                //     }
                // });
            }
        </script>
    </x-slot>
</x-app-layout>
