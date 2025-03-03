<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalender Barium</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="BARIUM adalah Kalender Prestasi untuk mahasiswa Teknik Kimia yang memuat info LKTIN, Essay, Poster, Conference, Seminar Nasional, dan lainnya.">
    <meta name="keywords"
        content="Kalender Mahasiswa, LKTIN, Seminar, Teknik Kimia, Kompetisi Mahasiswa, Call for Papers, Workshop, Pelatihan, ISO, K3">
    <meta name="author" content="Himpunan Mahasiswa Profesi Teknik Kimia">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="Kalender Barium - Kabar Riset Seputar Mahasiswa">
    <meta property="og:description"
        content="Temukan informasi lomba, seminar, dan pelatihan terkini untuk mahasiswa Teknik Kimia di Kalender BARIUM.">
    <meta property="og:image" content="/logo.png">
    <meta property="og:url" content="https://barium.aimlesson.online">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kalender Barium - Kabar Riset Seputar Mahasiswa">
    <meta name="twitter:description"
        content="Informasi lomba, seminar, dan pelatihan terkini untuk mahasiswa Teknik Kimia.">
    <meta name="twitter:image" content="/logo.png">

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N1N8PJM7N1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-N1N8PJM7N1');
    </script>

    <?php
use App\Models\Event;
use Carbon\Carbon;

// Get the current date using Carbon
$currentDate = Carbon::today()->toDateString();

// Fetch the events for the current month
$latestEvents = Event::whereMonth('date', Carbon::now()->month)
    ->whereYear('date', Carbon::now()->year)
    ->orderBy('date', 'asc')
    ->get();

$events = Event::get();
    ?>


    <style>
        /* Keyframes for slow reveal animation */
        @keyframes slowReveal {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animation class */
        .animate-slow-reveal {
            animation: slowReveal 1s ease-out;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .mySwiper {
            width: 100%;
            max-width: 100vw;
        }
    </style>
</head>

<body
    class="bg-gradient-to-r from-cyan-200 to-cyan-500 pb-6 sm:pb-8 lg:pb-12 mx-auto max-w-screen-2xl px-4 md:px-8 animate-slow-reveal">

    {{-- Navbar --}}
    <header class="mb-8 flex items-center justify-center border-b md:mb-12 xl:mb-16">
        <a href="/" class="inline-flex items-center gap-2.5 text-2xl font-bold text-black md:text-3xl"
            aria-label="logo">
            <img src="logo3.png" alt="Himpunan Mahasiswa Profesi Teknik Kimia" class="h-12 md:h-24 w-auto" />
        </a>
    </header>

    {{-- Hero section --}}
    <section class="flex flex-col-reverse lg:flex-row justify-between px-5 sm:gap-10 md:gap-10">
        <!-- content - start -->
        <div class="flex flex-col justify-between xl:w-5/12">

            <div class="text-center sm:text-center lg:text-left py-8 lg:py-12 xl:py-24">
                <p class="mb-4 font-semibold text-teal-900 md:mb-6 md:text-lg xl:text-xl">Very proud to introduce</p>

                <h1 class="mb-4 text-4xl font-bold text-gray-900 sm:text-5xl md:mb-4 md:text-6xl">Kalender Barium</h1>

                <p class="mb-4 text-gray-900 text-sm sm:text-base md:mb-6">
                    BARIUM adalah Kalender Prestasi yang memuat Info Lomba LKTIN, Essay, Poster, Conference, Call for
                    Paper, Seminar Nasional, Workshop, Pelatihan K3, dan ISO.
                </p>

                <div class="flex flex-col sm:flex-row gap-2.5 sm:justify-center lg:justify-start">

                    <button onclick="scrollToSection('calendarSection')"
                        class="inline-block rounded-lg bg-gray-800 px-6 py-3 text-center text-sm font-semibold text-white transition duration-100 hover:bg-indigo-600 md:text-base">
                        Show Calendar
                    </button>

                    <button onclick="scrollToSection('eventSection')"
                        class="inline-block rounded-lg bg-teal-900 px-6 py-3 text-center text-sm font-semibold text-white transition duration-100 hover:bg-teal-700 md:text-base">
                        Show Event
                    </button>
                </div>
            </div>

            <!-- social - start -->
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center sm:justify-start gap-4">
                <span class="text-sm font-semibold uppercase tracking-widest text-gray-500 sm:text-base">Social</span>
                <span class="h-px w-12 bg-gray-200"></span>

                <div class="flex gap-4">
                    <a href="#" target="_blank"
                        class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-gray-700">
                        <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>

                    <a href="#" target="_blank"
                        class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-gray-700">
                        <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>

                    <a href="#" target="_blank"
                        class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-gray-700">
                        <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- social - end -->
        </div>
        <!-- content - end -->
        <!-- image - start -->
        <div class="flex justify-center items-center w-32 md:w-1/2 lg:max-w-lg mx-auto">
            <img src="logo.png" loading="lazy" alt="Kalender Barium"
                class="h-auto w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg object-contain object-center" />
        </div>
        <!-- image - end -->
    </section>


    {{-- Monthly section --}}
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div id="calendarSection" class="lg:max-w-lg lg:w-full md:w-1/2 w-full mb-10 md:mb-0">
                <h1 class="sm:text-4xl text-3xl text-center uppercase mb-4 font-bold text-gray-900">Kalender Kegiatan
                </h1>
                <div class="bg-white p-4 rounded-lg">
                    <div id="calendar" class="rounded-lg overflow-hidden text-sm"></div>
                </div>
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="sm:text-4xl text-3xl mb-4 font-semibold uppercase text-gray-900">Kegiatan Bulan Ini</h1>
                <div class="swiper mySwiper max-w-full">
                    <div class="swiper-wrapper">
                        <?php foreach ($latestEvents as $event): ?>
                        <div class="swiper-slide w-full max-w-xs sm:max-w-sm md:max-w-md">
                            <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-md p-4">
                                <a href="<?= $event->link_info ?? '#' ?>"
                                    class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                                    <img src="<?= asset('storage/' . $event->pamflet) ?>" loading="lazy"
                                        alt="<?= $event->title ?>"
                                        class="absolute inset-0 h-full w-full object-contain object-center transition duration-200 group-hover:scale-110" />
                                </a>

                                <div class="flex flex-1 flex-col p-4 sm:p-6">
                                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                                        <a href="<?= $event->link_info ?? '#' ?>"
                                            class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">
                                            <?= $event->title ?>
                                        </a>
                                    </h2>

                                    <p class="mb-4 text-gray-500">
                                        <strong>Deadline :</strong>
                                        <?= date('F j, Y', strtotime($event->date)) ?><br>
                                        <strong>Biaya :</strong>
                                        <?= $event->price ? 'Rp' . number_format($event->price, 2) : 'Free' ?>
                                    </p>

                                    <div class="mt-auto flex gap-2">
                                        <?php    if ($event->link_info): ?>
                                        <a href="<?= $event->link_info ?>"
                                            class="inline-block rounded-lg bg-blue-500 px-4 py-2 text-sm text-white hover:bg-blue-600 transition"
                                            target="_blank">Informasi</a>
                                        <?php    endif; ?>

                                        <?php    if ($event->link_reg): ?>
                                        <a href="<?= $event->link_reg ?>"
                                            class="inline-block rounded-lg bg-indigo-500 px-4 py-2 text-sm text-white hover:bg-indigo-600 transition"
                                            target="_blank">Daftar</a>
                                        <?php    endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Events section --}}
    <section id="eventSection">
        <h1 class="sm:text-4xl uppercase text-3xl mb-4 font-semibold text-gray-900">Kegiatan Terbaru</h1>
        <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
            <?php foreach ($events as $event): ?>
            <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-md p-4">
                <a href="<?= $event->link_info ?? '#' ?>"
                    class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                    <img src="<?= asset('storage/' . $event->pamflet) ?>" loading="lazy" alt="<?= $event->title ?>"
                        class="absolute inset-0 h-full w-full object-contain object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="<?= $event->link_info ?? '#' ?>"
                            class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">
                            <?= $event->title ?>
                        </a>
                    </h2>

                    <p class="mb-2 text-gray-500">
                        <?= $event->keterangan ?>
                    </p>

                    <p class="mb-4 text-gray-500">
                        <strong>Deadline :</strong>
                        <?= date('F j, Y', strtotime($event->date)) ?><br>
                        <strong>Biaya :</strong>
                        <?= $event->price ? 'Rp' . number_format($event->price, 2) : 'Free' ?>
                    </p>

                    <div class="mt-auto flex gap-2">
                        <?php    if ($event->link_info): ?>
                        <a href="<?= $event->link_info ?>"
                            class="inline-block rounded-lg bg-blue-500 px-4 py-2 text-sm text-white hover:bg-blue-600 transition"
                            target="_blank">Informasi</a>
                        <?php    endif; ?>

                        <?php    if ($event->link_reg): ?>
                        <a href="<?= $event->link_reg ?>"
                            class="inline-block rounded-lg bg-indigo-500 px-4 py-2 text-sm text-white hover:bg-indigo-600 transition"
                            target="_blank">Daftar</a>
                        <?php    endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="text-gray-600 body-font mt-8 bg-white rounded-lg">
        <div class="container px-5 py-4 mx-auto flex flex-col items-center">
          <a class="flex title-font font-medium items-center justify-center text-gray-900">
            <img src="logo.png" alt="Himpunan Mahasiswa Profesi Teknik Kimia" class="h-12 md:h-12 w-auto" />
            <span class="ml-3 text-xl">Kalender Barium</span>
          </a>
          <p class="text-sm text-gray-500 mt-4 text-center">© 2025 Kalender Barium | Developed by 
            <a href="https://www.instagram.com/gerson.m5/" class="text-gray-900 ml-1" rel="noopener noreferrer" target="_blank">@gerson.m5</a> | Open for website development projects & freelance work |
            <a href="https://wa.me/6285156106221" target="_blank" class="text-green-500 hover:underline">Contact via WhatsApp</a>
          </p>
        </div>
      </footer>
    

    <script>
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var eventsData = @json($events->map(function ($event) {
                return [
                    'title' => trim((string) $event->title), // Ensure it's a string and trim spaces
                    'start' => $event->date,
                    'url' => $event->link_info ?? '#'
                ];
            }));

            console.log(eventsData); // Debugging: Check in browser console

            function getContentHeight() {
                return window.innerWidth < 768 ? 350 : 440; // 350px on mobile, 440px on desktop
            }

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                contentHeight: getContentHeight(),
                aspectRatio: 2,
                events: eventsData,
                eventColor: '#2563EB',
                eventTextColor: '#FFFFFF',
                displayEventTime: false,
                headerToolbar: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                }
            });

            calendar.render();

            // Update contentHeight on window resize
            window.addEventListener('resize', function () {
                calendar.setOption('contentHeight', getContentHeight());
            });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 15,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                }
            }
        });
    </script>

</body>

</html>