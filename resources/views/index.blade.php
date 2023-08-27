<x-guest-layout>

    <X-slot name="headstyle">
        <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}">
    </X-slot>

    {{-- Hero  --}}
    <section class="mt-20 relative sm:min-h-[calc(100vh-122px)] bg-bottom bg-cover sm:bg-contain bg-no-repeat"
        style="background-image: url({{ asset('images/hero.jpeg') }})">

        <div class="max-w-7xl mx-auto pt-20 sm:pt-24">
            {{-- top --}}
            <div class="flex justify-between">
                {{-- heading --}}
                <div class="flex-grow sm:flex-srhink sm:basis-1/2 flex flex-col items-center sm:items-start">
                    <h1
                        class="text-udark text-4xl text-center sm:text-left sm:text-6xl capitalize font-semibold sm:leading-[70px]">
                        <span class="text-ugray">Forging</span> the <br> future <span
                            class=" text-uviolet">together</span>
                    </h1>
                    <x-primary-button class="sm:mt-16 mt-52">Get Solution</x-primary-button>
                </div>
                {{-- paragraph --}}
                <div class="hidden sm:flex sm:flex-col items-end">
                    <p class="w-1/2">Tech & Creativity Hub: Industrial Attachment, Software Dev, Web & Graphic Design,
                        Digital Marketing, IT & Computer Training. Courses: Game Dev, Web Dev, Graphic & UI/UX, Digital
                        Marketing. Join Unicorns Codes!</p>
                    <img src="{{ asset('images/arrow1.svg') }}" alt="" srcset="" class="mt-4 mr-10 h-28">
                </div>
            </div>
            {{-- bottob --}}
            <div class="grid sm:grid-cols-2 py-4 sm:py-24">
                {{-- social icon --}}
                <div class="hidden sm:flex flex-row justify-center sm:justify-center sm:flex-col gap-8 px-4">
                    <a href=""> <img src="{{ asset('images/tw.png') }}" alt="" srcset=""> </a>
                    <a href=""> <img src="{{ asset('images/li.png') }}" alt="" srcset=""> </a>
                    <a href=""> <img src="{{ asset('images/ig.png') }}" alt="" srcset=""> </a>
                </div>
                {{-- analytics --}}
                <div class="hidden sm:flex justify-end">
                    <div class="flex sm:flex-col gap-8">

                        <div class="">
                            <p class="text-uviolet text-7xl font-bold"><span class="text-usweet">17.9</span>K</p>
                            <p class="text-ugray">Products Done</p>
                        </div>
                        <div class="">
                            <p class="text-uviolet text-7xl font-bold"><span class="text-ublue">172</span>K</p>
                            <p class="text-ugray">Projects Live</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- client slider --}}
    <section class="bg-ugray/10">
        <div class="max-w-7xl mx-auto">
            <div class="marquee py-4 sm:py-10 ">
                <div class="marquee-content px-6 sm:px-14 ">
                    <div class="marquee-item">
                        <img src="./img/Aven.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Circle.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Earth.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/FoxHub.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Goldline.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Aven.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Circle.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Earth.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/FoxHub.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Goldline.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Aven.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Circle.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Earth.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/FoxHub.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Goldline.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Aven.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Circle.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Earth.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/FoxHub.png" alt="">
                    </div>
                    <div class="marquee-item">
                        <img src="./img/Goldline.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service --}}
    <section class="py-10 sm:py-24">
        <div class="max-w-7xl mx-auto sm:flex">
            {{-- <div class="solution_text">
                <p class=" text-lg font-normal text-uorange  text-center ">Our Solutions</p>
            </div> --}}
            <div class="sm:basis-2/5">
                <h2 class="text-2xl sm:text-6xl text-udark font-bold text-center sm:text-left uppercase">Services</h2>
                <div class="sm:flex">
                    <div class="hidden sm:block relative overflow-hidden pr-4 w-24">
                        <img src="{{ asset('images/elements/line.png') }}" alt="" srcset=""
                            class="">
                    </div>
                    <div class="mt-1 pt-8 sm:pt-[100px]">
                        <ul class="grid grid-cols-2 sm:grid-cols-1 gap-5 sm:gap-[100px] px-4 sm:px-0" id="tabs-nav">
                            @foreach ($services as $service)
                            <li class="border-l-4 border-uorange pl-4 text-ugray">
                                <a  href="#content{{$service->id}}">{{$service->title}}</a>

                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="mt-8 sm:mt-20 px-4 sm:px-0">
                    <a href="{{ route('service') }}">
                        <button
                            class="flex justify-start items-center gap-4 text-udark sm:px-2 pb-2 border-b-2 border-white hover:border-b-2 hover:border-udark">
                            View all Services
                            <span class="iconify text-xl" data-icon="solar:round-arrow-right-up-linear"></span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="basis-3/5 px-4 sm:px-0">
                <p class="hidden sm:block text-base font-normal text-ugray">Tech & Creativity Hub: Industrial Attachment, Software Dev,
                    Web & Graphic Design, Digital Marketing, IT & Computer Training. Courses: Game Dev, Web Dev, Graphic
                    & UI/UX, Digital Marketing. Join Unicorns Codes!</p>
                <div class="h-full" id="tabs-content">

                    @foreach ($services as $service)
                    <div id="content{{$service->id}}" class=" bg-dorange tab-content mt-4 rounded-md">
                        @include('layouts.inc.service')
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    {{-- Course --}}
    <section>
        <div class=" bg-usweet/20 pt-10 sm:pt-20 pb-10 sm:pb-20">
            <div class="max-w-7xl ml-auto mr-auto sm:ml-[10vw] sm:mr-0">
                <div class="flex flex-col sm:flex-row sm:gap-10">
                    <h2 class="basis-1/5 text-2xl sm:text-6xl text-udark font-bold text-center sm:text-left uppercase  my-4">COURSES
                    </h2>
                    <p class="hidden sm:block basis-3/5 text-ugray">Tech & Creativity Hub: Industrial Attachment, Software Dev, Web &
                        Graphic Design, Digital Marketing, IT & Computer Training. Courses: Game Dev, Web Dev, Graphic &
                        UI/UX, Digital Marketing. Join Unicorns Codes!</p>
                    <div class="basis-1/5 flex justify-center sm:justify-start">
                        <a href="{{ route('cource') }}">
                            <button
                                class="flex justify-start items-center gap-4 text-udark px-2 pb-2 border-b-2 border-transparent hover:border-b-2 hover:border-udark">View
                                all Courses <span class="iconify text-xl"
                                    data-icon="solar:round-arrow-right-up-linear"></span></button>
                        </a>
                    </div>
                </div>
                <div class="mt-4 sm:mt-10 px-3 xl:px-0">
                    {{-- owl-carousel owl-theme --}}
                    <div class="owl-carousel owl-theme grid grid-cols-1 sm:grid-cols-3 gap-5">
                        @foreach ($courses as $course)

                        {{-- individual course --}}
                        <div class="item">
                            <div class="w-full aspect-video bg-udark bg-center bg-no-repeat bg-cover backdrop-blur-sm"
                                style="background-image: url({{ asset($course->cover) }})"></div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <h2 class="basis-2/3 font-semibold text-udark">{{$course->name}}</h2>
                                    <a href="{{route('courses.show',$course->id)}}">
                                        <button
                                            class="basis-1/3 flex justify-center items-center gap-4 transition duration-150 ease-in-out border border-ugray rounded text-ugray px-5 py-2.5 hover:bg-uorange hover:border-uorange hover:text-white">Details
                                            <span class="iconify" data-icon="solar:upload-linear"></span></button>
                                    </a>
                                </div>
                                <div class="text-ugray mt-4">
                                    <p>{!!$course->short_description!!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    <section class="py-10 sm:py-20">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between gap-4 px-4 sm:px-0">
            <div class="basis-1/2">
                <h2 class="font-medium text-2xl text-center sm:text-left sm:text-6xl text-udark">What People Say <br>About Us!</h2>
                <p class="mt-4 text-ugray text-center sm:text-left">I am so glad I went with my heart and not my head. God bless</p>
            </div>
            <div class="basis-1/2 owl-theme">
                {{-- item --}}
                <div class="">
                    <div class="flex flex-col sm:flex-row items-center sm:justify-start  sm:items-end gap-4 text-ugray">
                        <div class="userpp w-24 aspect-square rounded-full bg-no-repeat bg-cover bg-center" style="background-image: url({{asset('images/man.jpg')}})"></div>
                        <div class="text-center sm:text-left">
                            <h3>John Smith</h3>
                            <p>CEO</p>
                        </div>
                    </div>
                    <div class="mt-4 text-ugray">
                        <p class="text-center sm:text-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptatem laborum quis
                            architecto quo exercitationem rem similique sit obcaecati consequuntur at non, repudiandae,
                            qui porro rerum fugit? Architecto provident quae quibusdam deserunt nisi autem obcaecati
                            laborum accusantium libero alias? Beatae!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Gallery --}}

    <section class="bg-udark py-10  sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-0">
            <div class="flex gap-4">
                <div class="basis-2/5">
                    <h2 class="font-medium text-2xl sm:text-6xl text-white">Gallery</h2>
                </div>

                <div class="basis-3/5 hidden sm:block">
                    <p class="text-white text-center sm:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, deserunt.
                        Recusandae fuga aperiam assumenda asperiores iste quasi itaque cumque voluptate esse eligendi.
                        Error, vitae! Exercitationem a veniam eligendi eum. Obcaecati facere dolorum eum, at accusantium
                        id maiores eligendi assumenda est!</p>
                </div>
            </div>
            {{-- Images --}}

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Contact us --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto py-10 sm:py-28 px-4 sm:px-0">
            <div class="text-center mb-10">
                <h2 class="font-medium text-2xl sm:text-6xl text-udark">Contact Us</h2>
            </div>
            <div class="flex flex-col-reverse sm:flex-row justify-between sm:gap-10 gap-5 ">
                <div class="sm:basis-1/2">
                    <div class="hidden sm:flex justify-center items-center">
                        <img class="w-4/5" src="{{ asset('images/contact.png') }}" alt="contact Banner">
                    </div>

                    <div class="sm:flex justify-between items-center sm:gap-4 mt-10">
                        <a href="tel:+8801986426767"
                            class="flex justify-center items-center text-ublue gap-4 px-20 py-5 border border-ugray rounded-md hover:border-ublue hover:text-white hover:bg-ublue transition duration-150 ease-in-out "><span
                                class="iconify text-xl" data-icon="mdi:telephone"></span>(+880)1986426767</a>
                        <a href="mailto:info@unicornscodes.com"
                            class="mt-4 sm:mt-0 flex justify-center items-center text-ublue gap-4 px-20 py-5 border border-ugray rounded-md hover:border-ublue hover:text-white hover:bg-ublue transition duration-150 ease-in-out "><span
                                class="iconify text-xl" data-icon="mdi:email"></span>info@unicornscodes.com</a>
                    </div>
                    <div class="hidden sm:flex justify-between items-center gap-4 mt-10">
                        <div class="text-center sm:basis-1/2">
                            <p class="text-ugray text-center">Our support team will get back to in 48-H <br>
                                during standard business hours.</p>
                        </div>
                        <div class="text-center sm:basis-1/2">
                            <p class="text-ugray text-center">Our customer care is open from <br>
                                Mon-Fri, 10:00 Am to 6:00 Pm</p>
                        </div>
                    </div>

                </div>
                <div class="sm:basis-1/2 flex flex-col justify-end">
                    <div class=" mt-6 sm:mt-12">
                        <form id="contactusfrom">
                            <div class="flex justify-end items-center w-full contact_input mb-4 sm:mb-8">
                                <x-input-label class="mr-2" for="name">Name:</x-input-label>
                                <x-text-input id="name" class="basis-4/5 block py-2 text-lg text-ugray"
                                    type="text" name="name" :value="old('name')" required autocomplete="name"
                                    placeholder="Type your full name here" />
                            </div>
                            <div class="flex justify-end items-center w-full contact_input mb-4 sm:mb-8">
                                <x-input-label class="mr-2" for="email">Email:</x-input-label>
                                <x-text-input id="cfemail" class="basis-4/5 block py-2 text-lg text-ugray"
                                    type="email" name="cfemail" :value="old('email')" required autocomplete="email"
                                    placeholder="Email Address" />
                            </div>
                            <div class="flex justify-end items-center w-full contact_input mb-4 sm:mb-8">
                                <x-input-label class="mr-2" for="cfphone">Subject:</x-input-label>
                                <x-text-input id="cfphone" class="basis-4/5 block py-2 w-full text-lg text-ugray"
                                    type="text" name="cfphone" :value="old('subject')" required autocomplete="subject"
                                    placeholder="Subject" />
                            </div>

                            <div class="flex justify-end items-start w-full contact_input sm:mb-8">
                                <x-input-label class="mr-2" for="cfphone">Subject:</x-input-label>
                                <x-textarea class="basis-4/5" name="cfmessage" id="cfmessage" rows="3"
                                    placeholder="Message"></x-textarea>
                            </div>
                            <div class="flex justify-end mt-4">
                                <div class="sm:basis-4/5">
                                    <p id="contmsg" class=" text-ugreen"></p>
                                </div>
                            </div>
                            <div class="flex justify-end mt-10">
                                <div class="">
                                    <p>&nbsp;</p>
                                </div>
                                <div class="basis-4/5">
                                    <button type="submit"
                                        class="w-full flex justify-center items-center text-uorange gap-4 px-20 py-5 border border-uorange rounded-md  hover:text-white hover:bg-uorange transition duration-150 ease-in-out ">
                                        <span class="iconify text-xl" data-icon="fa:send"></span>SEND MESSAGE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="flex justify-end items-center gap-4 mt-10">
                        <div class="text-center basis-4/5">
                            <p class="text-ugray text-center">We reply 24 hrs, Normal inquiries by <br> bot & important
                                inquiries within an hr.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Script --}}
    <x-slot name="script">
        <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 50,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3000,
                // fluidSpeed:true,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })

            // Contuctus
            $('form#contactusfrom').submit(function(e) {
                e.preventDefault();
                console.log('Form submited');


                var name = $('#name').val();
                var email = $('#cfemail').val();
                var phone = $('#cfphone').val();
                var message = $('#cfmessage').val();

                $.ajax({
                    method: 'POST',
                    url: BASE_URL + 'contactUs/send',
                    data: {
                        name,
                        phone,
                        email,
                        message
                    },
                    success: function(response) {
                        console.log(response.message);
                        if (response.status == "success") {
                            $('#contmsg').html(response.message);
                            $('form#contactusfrom').trigger("reset");
                            setTimeout(function() {
                                $('#contmsg').html('');
                            }, 5000);
                        } else if (response.status == "error") {
                            $('#contmsg').html(response.message);
                            setTimeout(function() {
                                $('#contmsg').html('');
                            }, 5000);
                        }
                    }
                });
            });


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
