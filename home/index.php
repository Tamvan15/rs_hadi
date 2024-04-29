<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body>
    <!-- Header -->
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="#">
                        <span class="sr-only">Home</span>
                        <a class="text-teal-700 transition hover:text-teal-700/75 font-bold text-2xl" href="#"> RS Hadoy
                        </a>
                    </a>
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Tentang Kami </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Reservasi </a>
                            </li>
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Kontak </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="#">
                            Login
                        </a>

                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" href="#">
                                Register
                            </a>
                        </div>
                    </div>

                    <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Banner Main -->
    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1613796446768-b7366aed3ac6?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xxl text-left ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    <strong class="block font-extrabold text-white"> RS Hadoy </strong>

                    <strong class="block font-extrabold text-teal-700"> Dapatkan Layanan Terbaik. </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl/relaxed">
                    Rumah Sakit dengan fasiitas lengkap dan dokter spesialis handal akan memngobati ada dengan sepenuh
                    hati.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#"
                        class="block w-full rounded bg-teal-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-teal-700 focus:outline-none focus:ring active:bg-teal-500 sm:w-auto">
                        Segera Dapatkan!
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Main -->

    <!-- About -->
    <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 sm:items-center">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-2xl font-bold text-teal-900 md:text-3xl">
                    Tentang Rumah Sakit
                </h2>

                <p class="hidden text-gray-500 md:mt-4 md:block">
                    Rumah Sakit Hadoy adalah rumah sakit modern yang menyediakan layanan kesehatan terbaik. Dengan
                    fasilitas lengkap dan dokter-dokter spesialis handal, kami siap memberikan perawatan terbaik untuk
                    Anda.
                </p>
            </div>
        </div>

        <img alt=""
            src="https://plus.unsplash.com/premium_photo-1702599099948-5ed43d0a3048?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-ss-[30px] md:h-[calc(100%_-_4rem)] md:rounded-ss-[60px]" />
    </section>
    <!-- End About -->

    <!-- Conditional Display based on User Login Status -->
    <section class="flex justify-center items-center h-auto py-10">
        <?php if (!isset($_SESSION['user'])): ?>
            <!-- Pop up if user not logged in -->
            <div class="w-full max-w-2xl rounded-lg border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8"
                role="alert">
                <div class="flex items-center gap-4">
                    <span class="shrink-0 rounded-full bg-teal-400 p-2 text-white">
                        <svg class="h-4 w-4" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
                                fill-rule="evenodd" />
                        </svg>
                    </span>

                    <p class="font-medium sm:text-lg">Perhatan!</p>
                </div>

                <p class="mt-2 text-gray-500">
                    Anda belum login, Silahkan Login atau Registrasi untuk melakukan Reservasi.
                </p>

                <div class="mt-4 sm:flex sm:gap-4">
                    <a class="inline-block w-full rounded-lg bg-teal-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto"
                        href="#">
                        Login
                    </a>

                    <a class="mt-2 inline-block w-full rounded-lg bg-gray-50 px-5 py-3 text-center text-sm font-semibold text-gray-500 sm:mt-0 sm:w-auto"
                        href="#">
                        Registrasi
                    </a>
                </div>
            </div>
        <?php else: ?>
            <!-- Form Reservasi -->
            <section class="bg-gray-100">
                <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                        <div class="lg:col-span-2 lg:py-12">
                            <div class="mt-8">
                                <a href="#" class="text-2xl font-bold text-teal-600">Reservasi Sekarang</a>
                            </div>
                        </div>

                        <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                            <form action="#" class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="tgl">Tanggal Periksa</label>
                                    <input class="w-full rounded-lg border-gray-200 p-3 shadow-sm border-2" type="date"
                                        id="tgl" required autofocus>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="poli">Poli</label>
                                    <select class="w-full rounded-lg border-gray-200 p-3 shadow-sm border-2" id="poli"
                                        required>
                                        <option value="">- Pilih -</option>
                                        <!-- Options will be populated here -->
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="pasien">Nama Pasien</label>
                                    <select class="w-full rounded-lg border-gray-200 p-3 shadow-sm border-2" id="pasien"
                                        required>
                                        <option value="">- Pilih -</option>
                                        <!-- Options will be populated here -->
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="keluhan">Keluhan</label>
                                    <textarea class="w-full rounded-lg border-gray-200 p-3 shadow-sm border-2" id="keluhan"
                                        required rows="4"></textarea>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="dokter">Nama Dokter</label>
                                    <select class="w-full rounded-lg border-gray-200 p-3 shadow-sm border-2" id="dokter"
                                        required>
                                        <option value="">- Pilih -</option>
                                        <!-- Options will be populated here -->
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="diagnosa">Diagnosa</label>
                                    <textarea class="w-full rounded-lg border-gray-200 p-3 shadow-sm border-2" id="diagnosa"
                                        required rows="4"></textarea>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700" for="obat">Obat</label>
                                    <select multiple class="w-full rounded-lg border-gray-200 p-3 shadow-sm border-2"
                                        size="7" id="obat" required>
                                        <!-- Options will be populated here -->
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <button type="submit"
                                        class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                                        Send Enquiry
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Form Reservasi -->
        <?php endif; ?>
    </section>
    <!-- End Conditional Display -->

    <!-- Contact -->
    <section class="bg-white lg:grid lg:grid-cols-5">
        <div class="relative block h-32 lg:col-span-2 lg:h-full">
            <img src="https://images.unsplash.com/photo-1630331619092-3568b4b14402?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" class="absolute inset-0 h-full w-full object-cover" />
        </div>

        <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                <div>
                    <p>
                        <span class="text-xs uppercase tracking-wide text-gray-500"> Hubungi Kami </span>

                        <a href="tel:0123456789"
                            class="block text-2xl font-medium text-gray-900 hover:opacity-75 sm:text-3xl">
                            0123456789
                        </a>
                    </p>

                    <ul class="mt-8 space-y-1 text-sm text-gray-700">
                        <li>Senin sampai Jumat: 08:00 - 20:00</li>
                        <li>Sabtu dan Minggu: 08:00 - 15:00</li>
                    </ul>

                    <ul class="mt-8 flex gap-6">
                        <li>
                            <a href="https://facebook.com" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Facebook</span>

                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://instagram.com" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Instagram</span>

                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://twitter.com" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Twitter</span>

                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <p class="font-medium text-gray-900">Layanan</p>

                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Konsultasi Dokter </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Pemeriksaan Umum </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Layanan Darurat </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Operasi dan Bedah </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Vaksinasi </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-medium text-gray-900">Tentang Kami</p>

                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Profil Rumah Sakit </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Tim Medis </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Karir </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Contact -->

    <!-- Footer -->
    <footer class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="flex justify-center text-teal-600 sm:justify-start">
                    <a href="#" class="text-teal-600 hover:text-teal-800 font-bold text-2xl">
                        RS Hadoy
                    </a>
                </div>

                <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                    Copyright &copy; 2022. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</body>

</html>