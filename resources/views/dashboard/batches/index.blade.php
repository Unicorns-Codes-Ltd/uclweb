<x-app-layout>
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
        <div class="p-2 sm:p-6 bg-white rounded-md " >
            <h1 class="text-xl mb-4 text-center sm:text-left">All Batches</h1>
            <hr>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-4" id="batches">
                @forelse ($batches as $batch)
                    {{-- card --}}
                    <div class="rounded shadow-lg">
                        {{-- <div class="w-full h-[250px]  rounded-t bg-[url({{ asset($batch->course->cover) }})]"></div> --}}
                        <div class="p-4">

                            <h2 class="text-xl font-bold">{{$batch->course->name}}</h2>
                            <p>Batch number: {{$batch->number}}</p>
                            <p>Total Seat: {{$batch->max_seat}} Enrolled: {{$batch->estudents->count()}}</p>
                            <p>Start date: {{ date('d-M-Y', strtotime($batch->start_date))}}</p>
                            <div class="flex justify-between items-center">
                                @if ($batch->status == '1')
                                <span  class="bg-blue-400 rounded-full text-white text-xs px-2 inline-block py-1">Upcoming</span>
                                @elseif ($batch->status == '2')
                                <span  class="bg-uorange rounded-full text-white text-xs px-2 inline-block py-1">Running</span>
                                @else
                                <span  class="bg-red-500 rounded-full text-white text-xs px-2 inline-block py-1">Closed</span>

                                @endif
                                <div class="flex">
                                    <a href="{{route('batches.edit', $batch->id)}}" class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" >
                                        <span class="iconify text-base" data-icon="iconamoon:edit-light"></span>
                                    </a>

                                    <form method="POST" action="{{route('batches.destroy',$batch->id)}}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"  class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700">
                                            <span class="iconify text-base" data-icon="bi:trash-fill"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                <h2 class="text-xl font-bold">No batch added yet.</h2>


                @endforelse

            </div>
        </div>
    </div>


    <x-slot name="script">
        <script>
            $(document).ready(function () {
            });

            function quaryDelete(quaryID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to detede ?",
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

        </script>
    </x-slot>
</x-app-layout>
