@extends('layouts.guest')

@section('title', 'Buy and Verify giftcards online instantly')
@section('content')

    <!-- Hero Section -->
    <div class="relative isolate px-6 pt-14 lg:px-8 bg-[#F1F4FC]">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl pt-16 sm:pt-24 lg:pt-32 pb-8 sm:pb-12 lg:pb-16">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative flex items-center gap-2 rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Validate | Purchase
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Purchase and validate digital gift cards</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        Your No.1 stop for any gift card purchase and validation - swift response, top-knotch security and trusted by over 5,000 users daily.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ route('giftcards.index') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Buy Card
                        </a>
                        <a href="{{ route('giftcards.index') }}" class="text-sm font-semibold leading-6 text-gray-900">
                            Validate Card<span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Desktop Banner -->
            <div class="hidden md:flex md:h-[152px] md:justify-center md:items-center">
                <img src="{{ asset('/images/giftcards-banner.webp') }}" alt="" loading="lazy" width="3648" height="455" decoding="async" data-nimg="1" class="w-auto h-[100%] object-cover object-center" style="color: transparent;">
            </div>

            <!-- Mobile Banner -->
            <div class="mobile-banner-box flex justify-center items-center md:hidden">
                <img src="{{ asset('/images/giftcards-mobile-banner.webp') }}" alt="" loading="lazy" width="1005" height="330" decoding="async" data-nimg="1" class="w-auto h-auto" srcset="{{ asset('/images/giftcards-mobile-banner.webp') }} 1x, {{ asset('/images/giftcards-mobile-banner.webp') }} 2x" style="color: transparent;">
            </div>
        </div>

    <!-- Features Section -->
    <div class="bg-[#F1F4FC] py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Wide Selections</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Why choose us?
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    We offer a comprehensive and secure platform for all your gift card needs, ensuring a seamless and trustworthy experience.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                </svg>
                            </div>
                            Easy to Use
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Our platform is user-friendly, making it simple for anyone to purchase and validate gift
                            cards quickly and efficiently.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            Secure Transactions
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            We prioritize your security, ensuring all transactions are protected and your data is safe.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            Wide Selection
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Choose from a vast range of gift cards for various brands and services, catering to all your needs.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            24/7 Support
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Our customer support team is available around the clock to assist you with any inquiries or issues.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    @include('partials.cta')

    <div class="px-4">
        @include('partials.faq')
    </div>

@endsection
