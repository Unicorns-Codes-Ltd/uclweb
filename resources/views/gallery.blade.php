<x-guest-layout>


    <x-slot name="headerstyle">

    </x-slot>

    <section class="mt-28">
        <div class=" py-10 sm:py-24  bg-no-repeat bg-cover bg-center min-h-[300px] bg-udark/80 bg-blend-multiply" style="background-image: url({{asset('img/gallery_hero.jpg') }});">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center sm:text-left">Gallery</h2>
                <p class=" text-base font-normal text-center sm:text-left mt-10 text-white">Explore the dynamic world of our creations. Browse through our gallery to witness the stunning designs, user-friendly interfaces, innovative websites, and successful digital campaigns that we have had the privilege to work on.</p>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->
    <!-- ==============Gallery start========== -->
    <section>
        <div class=" bg-ulorange pt-10 pb-24 lg:pb-44 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0">
                {{-- <div class="solution_text">
                    <p class=" text-lg font-normal text-uorange  text-center ">Our Gallery</p>
                </div> --}}
                <div class=" mt-10">
                    <div class="galary_tab">
                        <div class="tabs ">
                            <div class=" lg:w-1/2 mx-auto">

                                <ul id="tabs-nav" class=" grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 justify-center ">
                                    @forelse ($albums as $album)



                                    <li class="border-b-2 border-uorange text-ugray pb-2 text-center">
                                        <a  href="#content{{$album->id}}">{{$album->name}}</a>

                                    </li>
                                    @empty
                                    <P>No album added.</P>
                                    @endforelse
                                </ul>
                            </div>
                            <!-- END tabs-nav -->
                            <div id="tabs-content">
                                @forelse ($albums as $album)

                                <div id="content{{$album->id}}" class="tab-content">
                                    <div class=" mt-7">
                                        <div class="grid md:grid-cols-2 lg:grid-cols-4 md:gap-4 gap-5">
                                            @forelse ($album->photos as $photo)
                                            <div class="w-full aspect-square rounded-md bg-center bg-cover bg-no-repeat imagep" style="background-image: url({{asset($photo->cover)}})" data-url="{{asset($photo->cover)}}" ></div>
                                            @empty
                                            <div class="col-span-4 py-24">

                                                <p class="text-center w-full">No image found in this album</p>
                                            </div>
                                            @endforelse
                                        </div>
                                        {{-- <div class=" flex justify-center mt-6 md:mt-12">
                                            <a href=""
                                                class="load-more text-white text-base font-bold bg-udark py-2.5 px-4 rounded-md">VIEW
                                                MORE
                                                SERVICE</a>
                                        </div> --}}
                                    </div>
                                </div>
                                @empty

                                @endforelse
                            </div>
                            <!-- END tabs-content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hidden w-screen min-h-screen bg-lgreen fixed top-0 right-0 z-[100] sm:py-24" id="imagepop">
        <div class="max-w-4xl mx-auto bg-white rounded p-6">
            <div class="flex justify-end mb-4" id="servicedetailsinpop">
                <div class="bg-lgreen w-6 h-6 text-uorange rounded hover:bg-uorange hover:text-white transition ease-in-out duration-150" id="serqupopclose">
                    <span class="iconify text-2xl" data-icon="iconoir:cancel"></span>
                </div>
            </div>

            {{-- img --}}
            <div class="flex justify-center items-center">

                <img src="" alt=""  class="imgshow">
            </div>
        </div>
    </section>
    <!-- ==============gallery start========== -->

    <x-slot name="script">
        <script>
            // Show the first tab and hide the rest
            $('#tabs-nav li:first-child').addClass('active');
            $('.tab-content').hide();
            $('.tab-content:first').show();

            // Click function
            $('#tabs-nav li').click(function(){
            $('#tabs-nav li').removeClass('active');
            $(this).addClass('active');
            $('.tab-content').hide();

            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
            });


            $('.imagep').click(function (e) {
                e.preventDefault();
                // $( this ).attr('data-url');
                let url = $(this).data('url');
                $('#imagepop .imgshow').attr('src', url);
                $('#imagepop').removeClass('hidden');
                console.log(url);
            });

            $('#serqupopclose').click(function (e) {
                e.preventDefault();
                $('#imagepop').addClass('hidden');
            });
        </script>
    </x-slot>
</x-guest-layout>

