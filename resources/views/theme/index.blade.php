<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-background bg-grid">
    @include('theme.sections.navbar')
    <div class="relative overflow-hidden">


        <main class="h-screen mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight leading-relaxed font-black text-white sm:text-5xl md:text-6xl">
                    <span class="block ">Hi,I'm</span>
                    <span class="block text-primary">Mohammad</span>
                    <span
                        class="mx-auto block max-w-fit text-white animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-5">Software
                        Developer</span>
                </h1>

                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-20">
                    <a href="#about">
                        <div
                            class="w-[35px] h-[64px] rounded-3xl border-4 border-gray-500 flex justify-center items-start p-2">
                            <div class="w-3 h-3 rounded-full bg-gray-500 mb-1 animate-bing">
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </main>


        <div class="flex h-full mb-24 items-center justify-center gap-x-10">
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">Web Development</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus </p>
                    </div>
                </div>
            </div>
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">Front-End Development</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus</p>
                    </div>
                </div>
            </div>
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">Back-End Development</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus</p>
                    </div>
                </div>
            </div>
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">UX & UI Design</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus</p>
                    </div>
                </div>
            </div>
        </div>





        <div class="relative py-16 sm:py-16">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                <div class="relative sm:py-16 lg:py-0">
                    <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                        <div class="absolute inset-y-0 right-1/2 w-full bg-[#1E1E1E] rounded-r-3xl lg:right-72"></div>
                        <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404"
                            height="392" fill="none" viewBox="0 0 404 392">
                            <defs>
                                <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0"
                                    width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4"
                                        class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                        </svg>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                        <!-- Testimonial card-->
                        <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                            <img class="absolute inset-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100"
                                alt="">
                            <div class="absolute inset-0 bg-primary mix-blend-multiply"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary opacity-90">
                            </div>
                            <div class="relative px-8">
                                <div>
                                    <img class="h-12"
                                        src="https://tailwindui.com/img/logos/workcation.svg?color=white"
                                        alt="Workcation">
                                </div>
                                <blockquote class="mt-8">
                                    <div class="relative text-lg font-medium text-white md:flex-grow">
                                        <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-400"
                                            fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path
                                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="relative">Tincidunt integer commodo, cursus etiam aliquam neque, et.
                                            Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat
                                            dignissim id lobortis amet.</p>
                                    </div>

                                    <footer class="mt-4">
                                        <p class="text-base font-semibold text-indigo-200">Sarah Williams, CEO at
                                            Workcation</p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                    <!-- Content area -->
                    <div class="pt-12 sm:pt-16 lg:pt-20">
                        <h2 class="text-3xl text-white font-extrabold tracking-tight sm:text-4xl">About Me</h2>
                        <div class="mt-6 text-gray-400 space-y-6">
                            <p class="text-lg">Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna
                                sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.
                                Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus
                                vitae.</p>
                            <p class="text-base leading-7">Sollicitudin tristique eros erat odio sed vitae, consequat
                                turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut
                                volutpat donec laoreet quam urna. Sollicitudin tristique eros erat odio sed vitae,
                                consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra
                                donec ut volutpat donec laoreet quam urna.</p>
                            <p class="text-base leading-7">Rhoncus nisl, libero egestas diam fermentum dui. At quis
                                tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in
                                venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec,
                                a. Morbi enim fermentum lacus in. Viverra.</p>
                        </div>
                    </div>

                    <!-- Stats section -->
                    <div class="mt-10">
                        <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Founded</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">2021</dd>
                            </div>

                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Employees</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">5</dd>
                            </div>

                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Beta Users</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">521</dd>
                            </div>

                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Raised</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">$25M</dd>
                            </div>
                        </dl>
                        <div class="mt-10">
                            <a href="#" class="text-base font-medium text-primary"> Learn more about how
                                we're changing the world <span aria-hidden="true">&rarr;</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>









        <section>
            <div class="my-16 flex items-center justify-center space-x-4">
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20"
                                height="20" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Design System
                </span>

                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20"
                                height="20" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Product
                </span>
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20"
                                height="20" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Website
                </span>
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20"
                                height="20" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Branding
                </span>
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-secondary text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20"
                                height="20" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Logo Design
                </span>
            </div>
        </section>





        <section>
            <div class="container mx-auto flex items-center justify-center flex-wrap gap-8">
                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section>

            <div class="mt-48 flex flex-col items-center justify-center ">
                <h2 class="text-3xl text-white font-extrabold tracking-tight sm:text-4xl my-8">Technologies</h2>
                <p class="text-gray-500">I’ve had the opportunity to work across all kinds of product</p>

                <div class="my-12 w-full">

                    <div class="swiper w-full">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                    </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                                    </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25" />
                                    </svg>


                                </div>
                            </div>

                            ...
                        </div>
                    </div>


                </div>
            </div>
        </section>



        <section>
            <div class="my-2 flex flex-col items-center justify-center ">
                <h2 class="text-left text-3xl text-white font-extrabold tracking-tight sm:text-4xl my-8">
                    Contact
                </h2>
                <div class="container px-16 w-full flex items-start justify-center gap-x-24">
                    <div class="flex flex-col gap-y-4 w-4/12 bg-secondary h-full px-8 py-10 rounded-lg">
                        <div class=" space-y-2">
                            <label class="text-gray-400" for="name">name</label>
                            <input name="name" class="w-full rounded-md h-10 bg-[#28282F]" type="text">
                        </div>
                        <div class="mt-4 space-y-2">
                            <label class="text-gray-400" for="name">email</label>
                            <input name="email" class="w-full rounded-md h-10 bg-[#28282F]" type="text">
                        </div>
                        <div class="mt-12 space-y-2">
                            <label class="text-gray-400" for="name">message</label>
                            <textarea rows="7" name="email" class="w-full rounded-md bg-[#28282F]"></textarea>
                        </div>
                        <button class="w-full rounded-md h-10 text-white bg-primary" type="button">Send</button>
                    </div>

                    <div class="w-5/12 space-y-6">
                        <div class="flex items-center justify-start p-6 gap-x-6 w-11/12 bg-secondary rounded-3xl h-24">
                            <div class="w-14 h-14 rounded-xl border border-gray-400"></div>
                            <p class=" text-gray-400 font-bold">@lilmamad</p>
                            <svg class="ml-auto" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.875 7.5H6.5625C5.81658 7.5 5.10121 7.79632 4.57376 8.32376C4.04632 8.85121 3.75 9.56658 3.75 10.3125V23.4375C3.75 24.1834 4.04632 24.8988 4.57376 25.4262C5.10121 25.9537 5.81658 26.25 6.5625 26.25H19.6875C20.4334 26.25 21.1488 25.9537 21.6762 25.4262C22.2037 24.8988 22.5 24.1834 22.5 23.4375V13.125M9.375 20.625L26.25 3.75M26.25 3.75H19.6875M26.25 3.75V10.3125"
                                    stroke="#F1F1F1" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div class="flex items-center justify-start p-6 gap-x-6 w-11/12 bg-secondary rounded-3xl h-24">
                            <div class="w-14 h-14 rounded-xl border border-gray-400"></div>
                            <p class=" text-gray-400 font-bold">@lilmamad</p>
                            <svg class="ml-auto" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.875 7.5H6.5625C5.81658 7.5 5.10121 7.79632 4.57376 8.32376C4.04632 8.85121 3.75 9.56658 3.75 10.3125V23.4375C3.75 24.1834 4.04632 24.8988 4.57376 25.4262C5.10121 25.9537 5.81658 26.25 6.5625 26.25H19.6875C20.4334 26.25 21.1488 25.9537 21.6762 25.4262C22.2037 24.8988 22.5 24.1834 22.5 23.4375V13.125M9.375 20.625L26.25 3.75M26.25 3.75H19.6875M26.25 3.75V10.3125"
                                    stroke="#F1F1F1" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div class="flex items-center justify-start p-6 gap-x-6 w-11/12 bg-secondary rounded-3xl h-24">
                            <div class="w-14 h-14 rounded-xl border border-gray-400"></div>
                            <p class=" text-gray-400 font-bold">@lilmamad</p>
                            <svg class="ml-auto" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.875 7.5H6.5625C5.81658 7.5 5.10121 7.79632 4.57376 8.32376C4.04632 8.85121 3.75 9.56658 3.75 10.3125V23.4375C3.75 24.1834 4.04632 24.8988 4.57376 25.4262C5.10121 25.9537 5.81658 26.25 6.5625 26.25H19.6875C20.4334 26.25 21.1488 25.9537 21.6762 25.4262C22.2037 24.8988 22.5 24.1834 22.5 23.4375V13.125M9.375 20.625L26.25 3.75M26.25 3.75H19.6875M26.25 3.75V10.3125"
                                    stroke="#F1F1F1" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>


                        <div class="flex items-center justify-start p-6 gap-x-6 w-11/12 bg-secondary rounded-3xl h-24">
                            <div class="w-14 h-14 rounded-xl border border-gray-400"></div>
                            <p class=" text-gray-400 font-bold">@lilmamad</p>
                            <svg class="ml-auto" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.875 7.5H6.5625C5.81658 7.5 5.10121 7.79632 4.57376 8.32376C4.04632 8.85121 3.75 9.56658 3.75 10.3125V23.4375C3.75 24.1834 4.04632 24.8988 4.57376 25.4262C5.10121 25.9537 5.81658 26.25 6.5625 26.25H19.6875C20.4334 26.25 21.1488 25.9537 21.6762 25.4262C22.2037 24.8988 22.5 24.1834 22.5 23.4375V13.125M9.375 20.625L26.25 3.75M26.25 3.75H19.6875M26.25 3.75V10.3125"
                                    stroke="#F1F1F1" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

        </section>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>

<script>
    const swiper = new Swiper('.swiper', {
        spaceBetween: 200,
        grabCursor: false,
        slidesPerView: 7,
        allowTouchMove: false,
        loop: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
            reverseDirection: true
        },
        freeMode: false,
        speed: 5000,
        freeModeMomentum: true
    });
</script>

<style>
    .swiper {
        width: 100%;
        height: 300px;
    }

    .swiper-container {
        height: calc(100vh - 120px);
        margin: 60px;
    }


    .swiper-slide {


        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    .swiper-wrapper {
        -webkit-transition-timing-function: linear !important;
        -o-transition-timing-function: linear !important;
        transition-timing-function: linear !important;
    }
</style>
