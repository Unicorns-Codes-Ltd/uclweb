<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('quotations.all')" :active="request()->routeIs('quotations.all')">
                {{ __('All Quotations') }}
            </x-nav-link>
            <x-nav-link :href="route('quotations.create')" :active="request()->routeIs('quotations.create')">
                {{ __('New Quotation') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="bg-white rounded-md shadow p-6 flex justify-between items-center">
            <div class="">

                <h1 class="font-bold text-2xl">{{$quotation->name}}</h1>
                <p>Email: {{$quotation->email}}</p>
                <p>Phone: {{$quotation->phone}}</p>
            </div>
            <div class="">
                <h2 class="font-bold text-2xl text-uorange">{{$quotation->service}}</h2>
            </div>
        </div>
    </div>

    <div class="p-6 pt-0">
        <div class="bg-white rounded-md shadow p-6">
            <div class="flex justify-between items-center">

                <h2 class="font-bold text-xl text-uorange">Project Details</h2>
                @if ($quotation->attachment)
                <form action="{{route('fileDownload')}}" method="get">
                    @csrf
                    <input type="hidden" name="file_url" value="{{$quotation->attachment}}">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-nblue rounded border border-transparent font-semibold text-base text-white uppercase tracking-widest hover:bg-uorange focus:bg-uorange active:bg-uorange focus:outline-none focus:ring-none transition ease-in-out duration-150"><span class="text-sm mr-2" id="atchurl">{{$quotation->attachment}}</span><span class="iconify text-2xl" data-icon="line-md:download-loop"></span></button>
                </form>
                @endif
            </div>
            <hr class="my-4">
            <p>{!!$quotation->message!!}</p>
        </div>
    </div>

<x-slot name="script">
    <script>

        $(document).ready(function () {
            var text = $('#atchurl').html();
            var parts = text.split('/');
            var filename = parts[parts.length - 1];
            $('#atchurl').html(filename);
        });




    </script>
</x-slot>
</x-app-layout>
