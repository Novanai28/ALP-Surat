<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tulis Surat Otomatis</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
</head>
<body class="font-[Poppins] bg-gradient-to-tl from-[#0a94a8] to-[#260978] h-screen">
    <nav class="p-5 backdrop-blur-xl bg-transparent fixed w-full top-0 shadow-lg mx-auto md:flex md:justify-between md:items-center">
     <div class="flex justify-between items-center">
        <span class="corsor-pointer">
            <img class="h-16 inline" src="images/Logo New.png" alt="">

        </span>
        <span class="text-3xl cursor-pointer md:hidden block mx-2">
            <img class="h-10" src="images/fiturIcon.png" onclick="Menu(this)" alt="">
        </span>
    </div>
    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0  pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 text-white">
        <li class="mx-4 my-6 md:my-0">
            <a class="text-xl hover:text-yellow-300 duration-500" href="/#">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a class="text-xl hover:text-yellow-300 duration-500" href="/#fitur">Feature</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a class="text-xl hover:text-yellow-300 duration-500" href="/#syarat">Conditions</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a class="text-xl hover:text-yellow-300 duration-500" href="/#tentang">About</a>
        </li>
    </ul>

    <div>
    </nav>

    <section class="">
        <main class="mt-28">
            <div class="md:px-[100px] mt-28 bg-black/30 shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex text-white font cursor-default px-8 py-8 md:mx-8">
                <h1 class="font-bold text-center md:text-left md:text-2xl 2xl:text-4xl 2xl:mt-[100px]">
                    Membuat surat jadi lebih gampang
                    <br>dengan<span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-300 "> My Surat</span>
                </h1>
                <p class="text-center md:text-left mt-4 md:text-xl 2xl:text-2xl">
                    <img class="float-right md:ml-16 md:h-[170px] 2xl:h-[300px] h-[0px] inline md:visible invisible md:mr-[150px] md:ml-[100px] 2xl:ml-[500px]" src="images/komputerPeople.png" alt="">
                    Ingin membuat surat digital dengan mudah
                    dan cepat? <br>My Surat menyediakan berbagai
                    fitur unggulan<br>untuk memudahkan Anda. Gratis, Mudah, dan Cepat!
                </p>
                <a href="/#fitur" class="flex w-[100px] mt-8 mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[125px] md:text-xl md:mx-0 md:mb-8 md:mt-4 ">Buat Surat</a>
            </div>


        </div>

        <section id="fitur" class="fitur">
            <div class="md:px-[50px] mt-28 bg-black/30 shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex text-white font cursor-default px-8 py-8 md:mx-8">
                <h1 class="font-bold text-center md:text-left md:text-2xl 2xl:text-4xl 2xl:mt-[100px]">
                    Membuat surat jadi lebih gampang
                    <br>dengan<span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-300 "> My Surat</span>
                </h1>
                <p class="text-center md:text-left mt-4 md:text-xl 2xl:text-2xl">
                    <img class="float-right md:ml-16 md:h-[170px] 2xl:h-[300px] h-[0px] inline md:visible invisible md:mr-[150px] md:ml-[100px] 2xl:ml-[500px]" src="images/Write.png" alt="">
                    Ingin membuat surat digital dengan mudah
                    dan cepat? <br>My Surat menyediakan berbagai
                    fitur unggulan<br>untuk memudahkan Anda. Gratis, Mudah, dan Cepat!
                </p>
                <p class="mt-8 text-center font-bold">Jenis-Jenis Surat</p>
                <div class="mt-4 grid grid-cols-2 gap-8 md:grid-cols-4 md:gap-4 text-black text-[7px] md:text-[10px]">

                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="/suratLamaran" class="label">
                            <img class="flex  h-28 mx-auto mt-8" src="/images/Job letter.png" alt="gambarLamaran">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Surat Lamaran Pekerjaan</h2>
                            <p>Surat lamaran kerja adalah surat yang digunakan untuk mengajukan permohonan pekerjaan ke perusahaan
                                atau organisasi. Isinya berisi informasi tentang kualifikasi, pengalaman kerja, dan minat untuk
                            bergabung dengan perusahaan tersebut.</p>
                            <span class="flex w-[80px] mt-8 mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>
                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="SPD" class="label">
                            <img  class="flex  h-28 mx-auto mt-8" src="/images/Resign.png" alt="Gambar Label">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Surat Pengunduran Diri</h2>
                            <p>Surat pengunduran diri adalah dokumen tertulis yang berisi pemberitahuan resmi dari seseorang kepada
                                pihak yang berwenang atau atasan mengenai keputusannya untuk mengundurkan diri dari pekerjaan,
                            organisasi, atau posisi yang dipegang.</p>
                            <span class="flex w-[80px] mt-8 mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>
                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="DRH" class="label">
                            <img class="flex  h-28 mx-auto mt-8" src="/images/CV.png" alt="Gambar Label">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Daftar Riwayat Hidup</h2>
                            <p>Surat daftar riwayat hidup adalah dokumen atau tulisan berisikan informasi diri, identitas dan
                            pengalam atau kegiatan yang dilakukan oleh seseorang.</p>
                            <span class="flex w-[80px] mt-[94px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>
                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="SIO" class="label">
                            <img class="flex  h-28 mx-auto mt-8" src="/images/Ortu.png" alt="Gambar Label">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Surat Izin Orang Tua</h2>
                            <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                                menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                            maupun kelompok yang dipercaya.</p>
                            <span class="flex w-[80px] mt-8 mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>
                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="STMK" class="label">
                            <img class="flex  h-28 mx-auto mt-8" src="/images/tidak masuk.png" alt="Gambar Label">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Surat Tidak Masuk Kerja</h2>
                            <p>Surat izin tidak masuk kerja adalah surat dari karyawan yang dibuat secara tertulis berisi pernyataan
                                berhalangan hadir ke tempat kerja karena alasan tertentu. Contoh surat izin tidak masuk kerja
                            berikut bisa Anda sontek untuk digunakan ketika ada keperluan mendesak.</p>
                            <span class="flex w-[80px] mt-8 mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>
                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="SKUASA" class="label">
                            <img class="flex  h-28 mx-auto mt-8" src="/images/Surat kuasa.png" alt="Gambar Label">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Surat Kuasa</h2>
                            <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                                menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                            maupun kelompok yang dipercaya.</p>
                            <span class="flex w-[80px] mt-8 mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>
                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="SBR" class="label">
                            <img class="flex  h-28 mx-auto mt-8" src="/images/Surat B.png" alt="Gambar Label">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Surat Permohonan Blokir Rekening</h2>
                            <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                                menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                            maupun kelompok yang dipercaya.</p>
                            <span class="flex w-[80px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>
                    <div class="h-[350px] md:h-[500px] bg-white rounded-[20px] px-4">
                        <a href="SPO" class="label">
                            <img class="flex  h-28 mx-auto mt-8" src="/images/Penghasilan.png" alt="Gambar Label">
                            <div class="labelkecil">
                                <h3>By My Surat</h3>
                                <img src="/images/ceklis.png" alt="ceklis">
                            </div>
                            <h2 class="font-bold">Surat Penghasilan Orang Tua</h2>
                            <p>Surat izin orang tua atau disebut juga dengan surat persetujuan orang tua adalah dokumen yang
                                menyatakan bahwa orang tua menyerahkan tanggung jawab sementara terhadap anak kepada guru, individu,
                            maupun kelompok yang dipercaya.</p>
                            <span class="flex w-[80px] mt-8 mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[100px] md:text-sm md:mx-0 md:mb-8 md:mt-4 text-white  ">Buat surat</span>
                        </a>
                    </div>

                </div>
            </div>

            <section id="tentang" class="tentang">
                <br>
                <div class="row md:px-[100px] mt-28 bg-black/30 shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex text-white font cursor-default px-8 py-8 md:mx-8">
                    <h2 class="font-bold text-xl md:text-2xl lg:text-3xl "><span>Tentang</span> Kami</h2>
                    <div class="tentang-img">
                        <img src="/images/Letter.png" alt="gambarTentang">
                    </div>
                    <div class="content">
                        <p>Selamat datang di My Surat.
                        Kami percaya bahwa setiap kata memiliki kekuatan untuk membentuk masa depan seseorang, dan itulah mengapa kami berkomitmen untuk membantu Anda mengekspresikan diri Anda dengan tepat melalui surat. Di My Surat, kami menyediakan alat dan sumber daya yang Anda butuhkan untuk menulis surat yang mengesankan, mulai dari surat lamaran kerja hingga surat pribadi yang berarti.


                        </p>
                    </div>
                </div>
            </section>

            <section class="syarat" id="syarat">

                <div class="md:px-[100px] mt-28 bg-black/30 shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex text-white font cursor-default px-8 py-8 md:mx-8">
                    <h2 class="font-bold text-xl md:text-2xl lg:text-3xl"> Syarat dan Ketentuan Penggunaan<br>My<span>Surat</span></h2>
                    <br>

                    <h3 class="font-bold text-sm md:text-xl">1. Syarat dan Ketentuan</h3> <br>
                    <p> Dengan mengakses atau menggunakan situs web MySurat, Anda
                        dianggap telah membaca, memahami, dan setuju untuk terikat dengan semua syarat dan ketentuan yang tercantum di sini. Jika Anda tidak setuju dengan syarat dan ketentuan ini, Anda tidak diperkenankan menggunakan situs web ini.
                    </p>
                    <br>
                    <h3 class="font-bold text-sm md:text-xl">2. Ketentuan Penggunaan</h3> <br>
                    <p>Situs web MySurat menyediakan panduan, contoh, dan alat untuk membantu pengguna
                        dalam menulis surat. Pengguna bertanggung jawab sepenuhnya atas
                        penggunaan konten yang disediakan dan memastikan keakuratan dan keberlakuannya sesuai dengan hukum dan kebijakan yang berlaku di wilayah mereka.
                    </p>
                    <br>
                    <h3 class="font-bold text-sm md:text-xl">3. Kebijakan Privasi</h3> <br>
                    <p>MySurat menghormati privasi pengguna dan mengikuti kebijakan privasi yang ketat. Informasi pribadi yang diberikan oleh pengguna akan dijaga
                        kerahasiaannya sesuai dengan kebijakan privasi kami. Kami tidak akan menyediakan informasi pribadi pengguna kepada pihak ketiga tanpa izin pengguna.
                    </p>

                </div>

            </section>


            <footer class="bottom-0 mt-8">
                <div class="p-10 bg-gray-800 text-gray-200">
                    <div class="max-w-7xl mx-auto">
                        My Surat adalah sebuah platform online yang dirancang untuk memudahkan pembuatan surat. Dengan
                        My Surat, pengguna dapat membuat surat dengan cepat dan mudah menggunakan berbagai format surat
                        yang telah tersedia. Platform ini didesain agar mudah digunakan, sehingga pengguna dapat fokus pada
                        isi surat tanpa khawatir dengan teknis penulisan surat. Tujuannya adalah untuk membantu pengguna
                        membuat surat yang terlihat profesional dan mudah dibaca.
                    </div>
                </div>
            </footer>
            <script>
                function Menu(e){
                    let list = document.querySelector('ul');

                    e.name === 'menu' ? (e.name = "close", list.classList.
                        add('top-[80px]') , list.classList.add('opacity-100'),
                        list.classList.add('bg-gradient-to-tl'),  list.classList.add('from-[#0a94a8]'), list.classList.add('to-[#260978]')
                        ) :(e.name = "menu", list.classList.remove('top-[80px]')
                        , list.classList.remove('bg-gradient-to-tl'),  list.classList.remove('from-[#0a94a8]'), list.classList.remove('to-[#260978]') )
                    }
                </script>
            </body>
            </html>
