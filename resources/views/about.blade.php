<x-guest-layout>
    <section class="mt-28">
        <div class=" py-10 sm:py-24  bg-no-repeat bg-cover bg-center min-h-[300px] bg-udark/80 bg-blend-multiply" style="background-image: url({{asset('img/gallery_hero.jpg') }});">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl lg:text-7xl text-white font-bold text-center sm:text-left">About us</h2>
                <p class=" text-base font-normal text-center sm:text-left mt-10 text-white">The company was founded in 2018 as an IT startup, experiences with custom software <br>development, web development and other IT services in Khulna, Bangladesh.</p>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->

    <!-- ======================About-main start============== -->
    <section>
        <div class=" bg-white pt-10 pb-16 lg:pt-20 lg:pb-24 px-3 lg:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="md:grid md:grid-cols-2 md:gap-10 md:items-center lg:items-start">
                    <div class="">
                        {{-- <div class="aboutus_line">
                            <p class=" text-lg text-uorange font-normal text-center md:text-left">About Us</p>
                        </div> --}}
                        <h2
                            class="text-2xl lg:text-4.5xl text-udark font-bold uppercase text-center md:text-left leading-8 lg:leading-10 my-4">Mission & Vision</h2>

                        <p class=" text-base text-udark text-justify lg:text-left">We believe we are good at what we do because we have the quality and infrastructure for amazing IT services just right. Our ambition is to be known in the marketplace for the quality of our work and the high level of our services. This we achieve through continuously improving our company culture, project management, and knowledge management routines within and across our client teams.

                           </p>
                        <ul class=" mt-4 pl-4">
                            <li class=" list-disc text-base text-udark">Understand in depth client business requirements.
                            </li>
                            <li class=" list-disc text-base text-udark">Bridge the gap between business and technology.
                            </li>
                            <li class=" list-disc text-base text-udark">Steer clients through technology.
                            </li>
                            <li class=" list-disc text-base text-udark">Innovate state-of-the-art turnkey solution and services.
                            </li>
                            <li class=" list-disc text-base text-udark">Deliver world-class end-to-end IT solutions.
                            </li>
                        </ul>
                        <div class=" mt-6 flex items-center sm:justify-center md:justify-start">
                            <div class="mr-3 ">
                                <img class=" w-16 h-16 rounded-full" src="{{asset('img/team01.jpg')}}" alt="">
                            </div>
                            <div class="">
                                <p class=" text-base font-bold text-udark">Ovijit Shaha </p>
                                <p class=" text-base font-normal text-uorange">Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 lg:mt-0 hidden sm:block">
                        <img class=" rounded-md" src="./img/aboutmain.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ======================About-main start============== -->
    <!-- ==================Get-know about-us start============ -->
    <section>
        <div class=" bg-ulorange py-10 lg:py-20 ">
            <div class="max-w-7xl mx-auto px-3 lg:px-0">
                <div class=" grid  md:grid-cols-2 lg:items-center  gap-5 ">
                    <div class="">
                        <div class="about_area">
                            <img class="w-full rounded-md" src="./img/aboutus.jpg" alt="">
                            <div class="about_vedio_area">
                                <div class="about_vedio rounded-md"
                                    style="background-image: url('./img/aboutVedio.jpg');">
                                    <div class="vedio_btn">
                                        <button class=" text-4xl text-white modal-link "><iconify-icon
                                                icon="icon-park-solid:play"></iconify-icon></button>
                                    </div>
                                    <div id="custom-modal" class="custom-modal">
                                        <div class="custom-modal-dialog">
                                            <div class="custom-modal-content">
                                                <span class="close-modal">X</span>
                                                <div class="custom-modal-body">
                                                    <div class="custom-modal-inner">
                                                        <div class="">
                                                            <iframe class="w-full" height="315"
                                                                src="https://www.youtube.com/embed/o2kw4MaBVa4"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="getknow-gap">
                        {{-- <div class="getknow_about_us">
                            <p class=" text-lg text-uorange font-normal text-center lg:text-left ">Get to
                                know</p>
                        </div> --}}
                        <h2 class="text-2xl lg:text-4.5xl text-udark font-bold uppercase text-center lg:text-left  mb-4">
                            About us</h2>
                        <div class="mt-2">
                            <p class=" text-base font-normal text-udark text-justify">Unicorns Codes Ltd. is the leading information technology consulting, services, and
                                business process outsourcing organization that envisioned and instigated the adoption
                                of the flexible business practices that today enable our client companies to operate
                                more efficiently and produce more value.

                            </p>

                            <p class="text-base font-normal text-udark text-justify mt-5">We are a group of designers, engineers, and IT specialists passionate about our work.
                                Together we form one of Bangladesh's leading custom software companies for
                                software development outsourcing. We offer software development, web development,
                                content management, graphics design, digital marketing, domain and hosting services,
                                professional training, IT consultancy, and offshore outsourcing services to local and
                                international customers across multiple industries. We understand the challenges that
                                our customers face within and across these industries. We provide practical, pragmatic,
                                and robust solutions to address those challenges.</p>
                        </div>
                        <div class="bg-uorange px-6 py-4 lg:px-10 lg:py-7 rounded-xl lg:rounded-3xl mt-8 lg:mt-12">
                            <div class=" flex justify-between">
                                <div class="">
                                    <h2 class=" text-xl lg:text-3xl font-bold text-white ">Unicorns Codes Ltd.</h2>
                                </div>
                                <div class="">
                                    <h2 class="text-xl lg:text-3xl font-bold text-white">#1</h2>
                                </div>
                            </div>
                            <p class=" text-base text-white mt-2">Best Creative IT Agency And Solutions
                                <br>Since 2018.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="marquee bg-white py-4 lg:py-10 rounded-lg lg:rounded-3xl mt-10 md:mt-20 lg:mt-40">
                    <div class="marquee-content px-6 lg:px-14 ">
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
        </div>

    </section>
    <!-- ==================Get-know about-us end============ -->
    <!-- ==============Team start========== -->
    <section>
        <div class=" bg-white pt-10 pb-24 sm:pb-44 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0">
                {{-- <div class="solution_text">
                    <p class=" text-lg font-normal text-uorange  text-center ">Our Team</p>
                </div> --}}
                <div class="">
                    <h2 class=" text-2xl sm:text-4.5xl text-udark font-bold text-center uppercase  my-4">meet our team
                    </h2>
                    <p class=" text-base font-normal text-center text-udark">At Unicorns Codes Ltd, we're proud to have a team of dedicated and talented professionals who are passionate about technology, design, and innovation. Get to know the faces behind our success, each bringing a unique set of skills and experiences to the table.</p>
                </div>
                <div class=" mt-10">
                    <div class="swiper teamSwiper px-3 xl:px-0">
                        <div class="swiper-wrapper">

                            {{-- member --}}
                            <div class="swiper-slide">
                                <div class="team_member-img w-full aspect-square rounded-md bg-cover bg-top bg-no-repeat" style="background-image: url({{asset('img/team01.jpg')}});">
                                </div>
                                <div class=" mt-4">
                                    <h2 class="text-lg sm:text-xl text-udark font-bold text-center ">Ovijit Shaha</h2>
                                    <p class=" text-base text-udark text-center">Chief Executive Officer</p>
                                </div>
                            </div>
                            {{-- member --}}
                            <div class="swiper-slide">
                                <div class="team_member-img w-full aspect-square rounded-md bg-cover bg-top bg-no-repeat" style="background-image: url({{asset('img/team02.jpg')}});">
                                </div>
                                <div class=" mt-4">
                                    <h2 class="text-lg sm:text-xl text-udark font-bold text-center ">Faisal Islam</h2>
                                    <p class=" text-base text-udark text-center">Marketing Officer</p>
                                </div>
                            </div>
                            {{-- member --}}
                            <div class="swiper-slide">
                                <div class="team_member-img w-full aspect-square rounded-md bg-cover bg-top bg-no-repeat" style="background-image: url({{asset('img/team04.jpg')}});">
                                </div>
                                <div class=" mt-4">
                                    <h2 class="text-lg sm:text-xl text-udark font-bold text-center ">Ishtiuq Ahmed</h2>
                                    <p class=" text-base text-udark text-center">UI/UX Designer</p>
                                </div>
                            </div>
                            {{-- member --}}
                            <div class="swiper-slide">
                                <div class="team_member-img w-full aspect-square rounded-md bg-cover bg-top bg-no-repeat" style="background-image: url({{asset('img/team03.jpg')}});">
                                </div>
                                <div class=" mt-4">
                                    <h2 class="text-lg sm:text-xl text-udark font-bold text-center ">MD. Sabbir Hussain</h2>
                                    <p class=" text-base text-udark text-center"> Full-stack Developer</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==============Team start========== -->
</x-guest-layout>

