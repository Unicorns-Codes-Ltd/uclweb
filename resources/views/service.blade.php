<x-guest-layout>

    <section class="mt-28">
        <div class=" py-10 sm:py-24  bg-no-repeat bg-cover bg-center min-h-[300px] bg-udark/80 bg-blend-multiply" style="background-image: url({{asset('img/gallery_hero.jpg') }});">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center sm:text-left">Services</h2>
                <p class=" text-base font-normal text-center sm:text-left mt-10 text-white">We offer a comprehensive range of services including Graphic Design, UI/UX Design, Web Development, and Digital Marketing. Our expertise in these areas empowers businesses to thrive in the digital landscape, from creating visually compelling designs to developing user-friendly websites and executing strategic digital marketing campaigns</p>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->
    <!-- ===============Service-Start=========== -->
    <section>
        <div class=" max-w-7xl mx-auto pt-10 pb-10 lg:pb-20 px-3 lg:px-0">

            <div class=" mt-7">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 md:gap-4 gap-3">

                    @foreach ($services as $service)
                    @include('layouts.inc.service')
                    @endforeach
                </div>
                <div class=" flex justify-center mt-6 md:mt-12">
                    <a href="" class="load-more text-white text-base font-bold bg-udark py-2.5 px-4 rounded-md">VIEW
                        MORE
                        SERVICE</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ===============Service-End=========== -->

    <!-- ==============Team start========== -->
    <section>
        <div class=" bg-white pt-10 pb-24 lg:pb-44 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0">
                {{-- <div class="solution_text">
                    <p class=" text-lg font-normal text-uorange  text-center ">Who we Are</p>
                </div> --}}
                <div class="">
                    <h2 class=" text-2xl lg:text-4.5xl text-udark font-bold text-center uppercase  my-4">Custom IT
                        solution
                    </h2>
                    <p class=" text-base font-normal text-center text-udark">We provide smart and flexible digital services. <br> With the unlimited ability and what we
                        can do, we always try to bring our customer the best. Here are our specialties.</p>
                </div>
                <div class=" mt-10">
                    <div class="grid md:grid md:grid-cols-3 gap-5 justify-center mt-12">
                        <div class=" flex justify-center">
                            <div class=" flex flex-col items-center">
                                <div class="solution_box bg-uorange">
                                    <p><span class="iconify" data-icon="fa:send"></span></p>
                                </div>
                                <div class="mt-3 lg:mt-6">
                                    <h2 class="text-lg lg:text-2xl font-bold text-udark">DOMAIN & HOSTING</h2>

                                </div>
                                <div class="mt-1 lg:mt-5">
                                    <p class=" text-lg text-udark text-center">Our web hosting plans give you disk space on our high-performance web servers that
                                        are located in the USA. The ability to provide a complete solution for a website to all
                                        your customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center">
                            <div class=" flex flex-col items-center">
                                <div class="solution_box bg-udark">
                                    <p><span class="iconify" data-icon="ph:code-bold"></span></p>
                                </div>
                                <div class="mt-3 lg:mt-6">
                                    <h2 class="text-lg lg:text-2xl font-bold text-udark">IT CONSULTANCY</h2>

                                </div>
                                <div class="mt-1 lg:mt-5">
                                    <p class=" text-lg text-udark text-center">IT is an inevitable requirement for a business to expand and manage its processes. While
                                        our clients often come to us with a basic understanding of their technical needs, they are
                                        not aware of how their current IT strategy fits with their long-term goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center">
                            <div class=" flex flex-col items-center">
                                <div class="solution_box bg-dorange">
                                    <p><span class="iconify" data-icon="ph:app-store-logo-bold"></span></p>
                                </div>
                                <div class="mt-3 lg:mt-6">
                                    <h2 class="text-lg lg:text-2xl font-bold text-udark">OFFSHORE OUTSOURCING</h2>

                                </div>
                                <div class="mt-1 lg:mt-5">
                                    <p class=" text-lg text-udark text-center">Succeeding with distributed development and an offshore team is not always
                                        straightforward. To help you make the most of your Unicorns Codes Ltd extension team
                                        we recommend that you participate in our onboarding program.</p>
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

