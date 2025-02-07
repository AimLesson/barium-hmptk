<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalender Barium</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="BARIUM adalah Kalender Prestasi untuk mahasiswa Teknik Kimia yang memuat info LKTIN, Essay, Poster, Conference, Seminar Nasional, dan lainnya.">
    <meta name="keywords" content="Kalender Mahasiswa, LKTIN, Seminar, Teknik Kimia, Kompetisi Mahasiswa, Call for Papers, Workshop, Pelatihan, ISO, K3">
    <meta name="author" content="Himpunan Mahasiswa Profesi Teknik Kimia">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="Kalender Barium - Kabar Riset Seputar Mahasiswa">
    <meta property="og:description" content="Temukan informasi lomba, seminar, dan pelatihan terkini untuk mahasiswa Teknik Kimia di Kalender BARIUM.">
    <meta property="og:image" content="/logo.png"> 
    <meta property="og:url" content="https://barium.aimlesson.online"> 
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kalender Barium - Kabar Riset Seputar Mahasiswa">
    <meta name="twitter:description" content="Informasi lomba, seminar, dan pelatihan terkini untuk mahasiswa Teknik Kimia.">
    <meta name="twitter:image" content="/logo.png"> 
    
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N1N8PJM7N1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-N1N8PJM7N1');
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body>

    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <header class="mb-8 flex items-center justify-center border-b py-4 md:mb-12 md:py-8 xl:mb-16">
                <!-- logo - start -->
                <a href="/" class="inline-flex items-center gap-2.5 text-xl font-bold text-black md:text-2xl" aria-label="logo">
                    <img src="logo.png" alt="Himpunan Mahasiswa Profesi Teknik Kimia" class="h-8 w-auto md:h-10" />
                    Himpunan Mahasiswa Profesi Teknik Kimia
                </a>
                <!-- logo - end -->
            </header>
            
      
          <section class="flex flex-col items-center">      
            <div class="flex max-w-xl flex-col items-center pb-0 pt-8 text-center sm:pb-16 lg:pb-32 lg:pt-32">
              <h1 class="mb-8 text-3xl font-bold text-black sm:text-4xl md:mb-12 md:text-5xl">Kabar Riset Seputar Mahasiswa</h1>
      
              <p class="mb-8 leading-relaxed text-gray-500 md:mb-12 xl:text-lg">BARIUM adalah Kalender Prestasi yang memuat Info Lomba LKTIN, Essay, Poster, Confrence, Call for Paper, SeminarNasional,
                Workshop, Pelatihan K3, dan ISO</p>
      
            </div>
          </section>
        </div>
      </div>

    <div class="max-w-4xl mx-auto mb-10">
        <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Kalender Barium</h1>
            <div id="calendar" class="rounded-lg overflow-hidden"></div>
        </div>
    </div>

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <!-- text - start -->
          <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Kegiatan Terikini</h2>
          </div>
          <!-- text - end -->
      
          <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
            <?php
            use App\Models\Event;
            $events = Event::latest()->take(8)->get(); // Fetch the latest 8 events
            ?>

            <?php foreach ($events as $event): ?>
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white shadow-md">
                    <a href="<?= $event->link_info ?? '#' ?>" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="<?= asset('storage/' . $event->pamflet) ?>" loading="lazy" alt="<?= $event->title ?>" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="<?= $event->link_info ?? '#' ?>" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600"><?= $event->title ?></a>
                        </h2>

                        <p class="mb-4 text-gray-500">
                            <strong>Deadline :</strong> <?= date('F j, Y', strtotime($event->date)) ?><br>
                            <strong>Biaya :</strong> <?= $event->price ? 'Rp' . number_format($event->price, 2) : 'Free' ?>
                        </p>

                        <div class="mt-auto flex gap-2">
                            <?php if ($event->link_info): ?>
                                <a href="<?= $event->link_info ?>" 
                                   class="inline-block rounded-lg bg-blue-500 px-4 py-2 text-sm text-white hover:bg-blue-600 transition"
                                   target="_blank">Informasi</a>
                            <?php endif; ?>
                        
                            <?php if ($event->link_reg): ?>
                                <a href="<?= $event->link_reg ?>" 
                                   class="inline-block rounded-lg bg-indigo-500 px-4 py-2 text-sm text-white hover:bg-indigo-600 transition"
                                   target="_blank">Daftar</a>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            <?php endforeach; ?>
          </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: <?php echo json_encode($events->map(function($event) {
                    return [
                        'title' => $event->title,
                        'start' => $event->date,
                        'url' => $event->link_info
                    ];
                })); ?>,
                eventColor: '#2563EB',
                eventTextColor: '#FFFFFF',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridMonth'
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>
