<x-app-layout>
    <!-- Navigation Links -->
    <x-slot name="submenu">
            <x-nav-link :href="route('subscribers.index')" :active="request()->routeIs('subscribers.index')">
                {{ __('All Subscribers') }}
            </x-nav-link>
            <x-nav-link :href="route('newsletters.index')" :active="request()->routeIs('newsletters.index')">
                {{ __('News Letters') }}
            </x-nav-link>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md text-gray-900">
            <h1 class="text-xl mb-4 text-center sm:text-left">All Subscribers</h1>
            <table id="subtable" class="display stripe text-xs sm:text-base" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#subtable').DataTable({
                processing: true,
                serverSide: true,
                    ajax: "{!! route('subscribers.index') !!}",
                    columns: [
                        {"render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: null,
                            render: function (data) {
                                if (data.status == 1){
                                    return `<span  class="iconify text-4xl text-uorange" data-icon="basil:toggle-on-solid" onclick="activateDeactivateSubscriber(${data.id},${data.status});"></span>`;
                                }else{
                                    return `<span  class="iconify text-4xl text-red-600" data-icon="basil:toggle-off-solid" onclick="activateDeactivateSubscriber(${data.id},${data.status});"></span>`;
                                }
                                // return statusLabels;
                            }
                        },
                        {
                            data: null,
                            render: function(data) {
                            return `<div class="flex justify-end">
                                <button type="button" title="Unsubscribe" class="flex justify-center items-center bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="subscriberDelete(${data.id});"><span class="iconify text-base" data-icon="bi:trash-fill"></span></button></div>`;
                            }
                        }
                    ]
                });


            function subscriberDelete(subscriberID) {
                Swal.fire({
                    title: "Unsubscribe ?",
                    text: "Are you sure to unsubscribe this email ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Unsubscribe",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'subscribers/' + subscriberID,
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
            function activateDeactivateSubscriber(subscriberID,status) {
                var message = ((status == 1?"De-activate":"Activate"));
                var updateStatus = ((status == 1?2:1));
                Swal.fire({
                    title: " "+message+"?",
                    text: "Do you want to "+message+" this Subscriber ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'PATCH',
                            url: BASE_URL +'subscribers/'+subscriberID,
                            data: {
                                subscriberID: subscriberID,
                                updateStatus: updateStatus,
                            },
                            success: function (response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
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
