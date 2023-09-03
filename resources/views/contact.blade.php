<x-guest-layout>
    <!-- =================Contact-Hero start======================= -->
    <section class="mt-28">
        <div class=" py-10 sm:py-24  bg-no-repeat bg-cover bg-center min-h-[300px] bg-udark/80 bg-blend-multiply" style="background-image: url({{asset('img/gallery_hero.jpg') }});">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center sm:text-left">Contact</h2>
                <p class=" text-base font-normal text-center sm:text-left mt-10 text-white">We're here to connect, collaborate, and help you achieve your digital goals. <br> Whether you have questions about our services, want to enroll in our courses, <br>or are interested in partnering with us, we'd love to hear from you.</p>
            </div>
        </div>
    </section>
    <!-- ==================contact-Hero start======================= -->
    <!-- =================Contact-form -start========== -->
    {{-- Contact us --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto py-10 sm:py-28 px-4 sm:px-0">
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
                    <div class="hidden justify-between items-center gap-4 mt-10">
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
                    <div class="hidden justify-end items-center gap-4 mt-10">
                        <div class="text-center basis-4/5">
                            <p class="text-ugray text-center">We reply 24 hrs, Normal inquiries by <br> bot & important
                                inquiries within an hr.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================Contact-form-start========== -->
    <!-- ==============Team start========== -->
    <section>
        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d773.0793640864458!2d89.55026045886947!3d22.824461263959154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1691395779143!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- ==============Team start========== -->

    <x-slot name="script">
        <script>

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
                            setTimeout(function(){
                                $('#contmsg').html('');
                            }, 5000);
                        } else if (response.status == "error") {
                            $('#contmsg').html(response.message);
                            setTimeout(function(){
                                $('#contmsg').html('');
                            }, 5000);
                        }
                    }
                });
            });
        </script>
    </x-slot>
</x-guest-layout>





