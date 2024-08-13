@extends('layouts.guest')

@section('title', 'About Us')
@section('content')

    <!-- Hero Section -->
    <section class="bg-[#F1F4FC] pt-24 md:pt-32 md:mb-8">
        <div class="py-8 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-5xl tracking-tight font-extrabold text-center text-gray-900" data-aos="zoom-in" data-aos-animation="600" data-aos-mirror="true">About Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 text-md sm:text-xl" data-aos="zoom-in" data-aos-animation="600" data-aos-mirror="true" data-aos-delay="200">Your No.1 stop for any gift card purchase and validation - swift response time, top-notch security, and trusted by over 5,000 users daily.</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="pt-8 pb-12">
        <div class="px-8 mx-auto max-w-screen-md">
            <p class="mb-8 text-lg text-gray-700" data-aos="fade-up" data-aos-animation="600" data-aos-mirror="true" data-aos-duration="600">We offer a platform where users can purchase digital gift cards from all over the world. We are dedicated to making gift-giving easier, more convenient, and more personal.</p>

            <div class="mx-auto mt-8 max-w-2xl sm:mt-12 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16" data-aos="fade-right" data-aos-animation="600" data-aos-mirror="true">
                        <dt class="text-lg font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                </svg>
                            </div>
                            Purchase Card
                        </dt>
                        <dd class="mt-2 text-lg leading-7 text-gray-600">
                            Purchase digital gift cards from various retailers and brands.
                        </dd>
                    </div>
                    <div class="relative pl-16" data-aos="fade-right" data-aos-animation="600" data-aos-mirror="true" data-aos-duration="200">
                        <dt class="text-lg font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            Validate Card
                        </dt>
                        <dd class="mt-2 text-lg leading-7 text-gray-600">
                            Ensure the authenticity of your gift cards with our validation service.
                        </dd>
                    </div>

                </dl>
            </div>
        </div>
    </section>

    <div class="bg-gray-50 p-8 min-h-[350px] flex items-center justify-center font-[sans-serif] text-[#333]">
        <div class="bg-white shadow-[0_4px_24px_-8px_rgba(0,0,0,0.2)] grid lg:grid-cols-4 sm:grid-cols-2 sm:gap-24 gap-12 rounded-3xl px-20 py-10">
            <div class="text-center" data-aos="fade-up" data-aos-animation="600" data-aos-mirror="true" data-aos-duration="200">
                <h3 class="text-4xl font-extrabold">90.8<span class="text-indigo-600">K+</span></h3>
                <p class="text-gray-500 font-semibold mt-3">Total Users</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-animation="600" data-aos-mirror="true" data-aos-duration="400">
                <h3 class="text-4xl font-extrabold">20<span class="text-indigo-600">K</span></h3>
                <p class="text-gray-500 font-semibold mt-3">Daily Transaction</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-animation="600" data-aos-mirror="true" data-aos-duration="600">
                <h3 class="text-4xl font-extrabold">12<span class="text-indigo-600">K</span></h3>
                <p class="text-gray-500 font-semibold mt-3">Daily Validations</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-animation="600" data-aos-mirror="true" data-aos-duration="800">
                <h3 class="text-4xl font-extrabold">8<span class="text-indigo-600">K</span></h3>
                <p class="text-gray-500 font-semibold mt-3">Daily Card Purchases</p>
            </div>
        </div>
    </div>

    @include('partials.cta')

@endsection
