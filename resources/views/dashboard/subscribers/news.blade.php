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


    {{-- <x-slot name="headscript">

    </x-slot> --}}

    <div class="p-2 sm:p-6 ">
        <div class="p-2 sm:p-6 bg-white rounded-md text-gray-900">
            <h1 class="text-xl mb-4 text-center sm:text-left">New Newsletter</h1>


            <form method="POST" action="{{ route('newsletters.store') }}" id="newscreate">
                @csrf

                <!-- Body -->
                <div class="mt-4">
                    <x-input-label for="newsbody" :value="__('Newsletter text')" />
                    <textarea class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        name="body" id="newsbody" rows="10" required></textarea>
                    <x-input-error :messages="$errors->get('body')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4" onclick="formsubmit()">
                        {{ __('Compose Newsletter') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md text-gray-900">
            <h1 class="text-xl mb-4 text-center sm:text-left">All Newsletter</h1>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                @forelse ($newsletters as $newsletter)
                <div class="p-4 rounded-md shadow-md bg-uorange/20">
                    @if ($newsletter->status == 1)
                        <span  class="bg-green-500 rounded-full text-white text-sm px-2"> Unsent </span>
                    @else
                        <span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2"> Sent</span>
                    @endif
                    <p class="mt-4">{!! $newsletter->text!!}</p>

                    <div class="flex mt-4"><a href="{{route('newsletters.show', $newsletter->id)}}" target="_blank" class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify" data-icon="ic:baseline-remove-red-eye"></span></a>
                        {{-- <form action="{{route('newsletters.send',$newsletter->id)}}" method="post">
                            @csrf
                            @method('POST')
                            <button type="submit"  class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify" data-icon="material-symbols:send-rounded"></span></button>
                        </form> --}}
                        <button type="submit"  class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" onclick="newsletterSend({{$newsletter->id}});"><span class="iconify" data-icon="material-symbols:send-rounded"></span></button>

                        <button type="button"  class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="newsletterDelete({{$newsletter->id}});"><span class="iconify" data-icon="bi:trash"></span></button></div>
                </div>
                @empty

                @endforelse
            </div>

            {{-- <table id="userTable" class="display stripe" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Text</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

            </table> --}}
        </div>
    </div>


    <x-slot name="script">
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
        <script>


            function newsletterDelete(subscriberID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete this newsletter ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'newsletters/delete/' + subscriberID,
                            success: function(response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
                                    location.reload();
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

            // Newsletter send
            function newsletterSend(subscriberID) {
                Swal.fire({
                    title: " Send ?",
                    text: "Do you want to send this Newsletter ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Send",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'POST',
                            url: BASE_URL + 'newsletters/send/' + subscriberID,
                            success: function(response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
                                    datatablelist.draw();
                                }
                            }
                        });
                    }
                });
            }



            $(document).ready(function() {

                // Calling classic editor function
                createEditor('#newsbody');

            });

            // News create
            function formsubmit(){
                $("form#newscreate").submit();
            }
        </script>
    </x-slot>
</x-app-layout>
