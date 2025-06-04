@extends('components.layout')
@section('content')
    <section id="home" class="pt-36 dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-between">
                <div class="sm:w-full flex items-center  px-3 lg:w-1/2">
                    <div class="">
                        <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Halo Semua, Saya <span
                                class="block font-bold text-dark text-4xl mt-1 lg:text-5xl "> MUHAMMAD SATRIADJI MUKTI</span></h1>
                        <h2 class="font-medium text-secondary">Web Developer | IT Department</h2>
                        <P>Seorang Mahasiswa yang berpengalaman mempelajari tentang Fullstack Engineering.</P>
                    </div>
                </div>
                <div class="sm:w-full flex items-center justify-center pl-5 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-10">
                        <img src="{{ asset('img/pakvincent.jpeg') }}" alt="" class="max-w-full mx-auto size-1/2" >
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- {{-- End Hero Section --}} -->

    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="sm:w-full flex items-center justify-center px-4 lg:w-1/2">
                    <div class="">
                        <h4 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Tentang Saya </h4>
                        
                        <p class="font-medium text-base text-secondary max-w-xl dark:text-white">Saya adalah Mahasiswa Teknik Informatika di Institut Teknologi Indonesia yang menekuni bidang Web Developer (Fullstack) dan juga bidang Software Angreeting
                    
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Kontak kami</h3>
                    <div class="flex items-center">
                        <a href="https://wa.me/+6282112911285" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-red-500 dark:text-black"><img src="/img/whatsapp.jpg" alt=""></a>
                        <a href="https://www.instagram.com/satriadjii/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-red-500 dark:text-black"><img src="/img/instagram.png" alt=""></a>
                        <a href="https://eu17.proxysite.com/process.php?d=dc9S71OP8B34RGyojl0LembtaKs%3D&b=1" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-red-500 dark:text-black"><img src="/img/pornhub.png" alt=""></a>
                        <a href="https://www.tiktok.com/@stzykk?_t=8rnQCZntHv8&_r=1" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-red-500 dark:text-black"><img src="/img/tik-tok.png" alt=""></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<!--start about section-->
<section id="about" class="pt-36 pb-32 dark:bg-dark">
    <div class="container mx-auto">
        <div class="flex-wrap justify-center grid place-items-center grid-cols-2">
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h4 class="font-bold uppercase text-primary text-lg mb-3">Jalan Lurus Jadi <span class="text-yellow-200">Fullstack Web Developer</span></h4>
                <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-lg dark:text-black"></h2>
                <p class="font-medium text-base text-secondary max-w-xl dark:text-blue-200">Pengen jadi Full Stack Developer biar punya gaji tinggi? Udah belajar coding, </p>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-black">HEHEHE</h3>
                <P>Aku akan menguasai dunia suatu hari nanti</P>
            </div>
            
        </div>
    </div>
</section>
<!--end about section-->
<!--pengalaman kerja-->
<section id="portofolio" class="pt-36 pb-16 bg-slate-200 dark:bg-slate-400" style="background-color: #111827;">
    <div class="container mx-auto">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text primary mb-2">Pengalaman kerja</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">Bekerja lebih dari 2 tahun</h2>
                <p class="font-medium text-md text-secondary md:text-lg text-white-600">seorang pengalaman yang sudah bekerja lebih dari 2 tahun di bidang IT.</p>
            </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:ms-auto">
            <div class="mb-12 p-4 md:w-1/2">
                <div></div>
            </div>
        </div>
    </div>

</section>
<!-- Pengalaman Kerja -->
<section id="portofolio" class="pt-36 pb-16 bg-black-100 dark:bg-black-200">
  <div class="container mx-auto">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">Pengalaman Kerja</h4>
        <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">
          Bekerja Lebih Dari 10 Tahun
        </h2>
        <p class="font-medium text-md text-secondary md:text-lg text-white-600">
          Seorang pengalaman yang sudah bekerja cukup lama di bidang IT,
          baik di bidang perangkat keras (Hardware) ataupun lunak (Software).
          Kemudian fokus ke dalam bidang software terutama di Web Based.
        </p>
      </div>
    </div>
    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
      <div class="mb-12 p-4 md:w-1/2">
        <div class="rounded-md shadow-md overflow-hidden">
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">
             | <span class="font-semibold text-lg text-primary mb-2 text-cyan-600">Web Developer</span>
          </h3>
          <p class="font-semibold text-base text-secondary text-white-600">
            <span class="font-bold">1 September - Present</span><br>
            Maintenance aplikasi perhotelan yang sudah berjalan dengan bahasa program ASP dan ASP.NET.
          </p>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">
            PT. LOKA SARI | <span class="font-semibold text-lg text-primary mb-2 text-cyan-600">Web Developer</span>
          </h3>
          <p class="font-semibold text-base text-secondary text-white-600">
            <span class="font-bold">1 September - Present</span><br>
            Maintenance aplikasi perhotelan yang sudah berjalan dengan bahasa program ASP dan ASP.NET.
          </p><h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">
            PT. LOKA SARI | <span class="font-semibold text-lg text-primary mb-2 text-cyan-600">Web Developer</span>
          </h3>
          <p class="font-semibold text-base text-secondary text-white-600">
            <span class="font-bold">1 September - Present</span><br>
            Maintenance aplikasi perhotelan yang sudah berjalan dengan bahasa program ASP dan ASP.NET.
          </p><h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">
            PT. LOKA SARI | <span class="font-semibold text-lg text-primary mb-2 text-cyan-600">Web Developer</span>
          </h3>
          <p class="font-semibold text-base text-secondary text-white-600">
            <span class="font-bold">1 September - Present</span><br>
            Maintenance aplikasi perhotelan yang sudah berjalan dengan bahasa program ASP dan ASP.NET.
          </p>
          <a href=""></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Pengalaman Kerja -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuntungan Jadi Fullstack Developer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        .card {
            background: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            border: none;
            background: #007BFF;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <h1>Apa Untungnya Jadi Fullstack Developer?</h1>
</header>

<div class="container">
    <div id="info" class="card">
        <p>Klik tombol di bawah untuk melihat keuntungan menjadi seorang Fullstack Developer!</p>
    </div>
    <button onclick="showBenefits()">Tampilkan Keuntungan</button>
</div>

<script>
    const benefits = [
        "Memiliki pemahaman mendalam tentang pengembangan frontend dan backend.",
        "Lebih fleksibel dalam tim karena dapat mengisi berbagai peran.",
        "Daya tarik tinggi di pasar kerja dengan gaji yang kompetitif.",
        "Kemampuan untuk membangun proyek dari awal hingga akhir secara mandiri.",
        "Dapat berkolaborasi lebih baik dengan tim teknis lainnya.",
        "Meningkatkan peluang untuk memimpin proyek atau menjadi manajer teknis."
    ];

    function showBenefits() {
        const infoDiv = document.getElementById('info');
        infoDiv.innerHTML = "<h2>Keuntungan Jadi Fullstack Developer:</h2><ul>" +
            benefits.map(benefit => `<li>${benefit}</li>`).join('') +
            "</ul>";
    }
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuntungan Fullstack Developer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111827;
            color: #d1d5db;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .card {
            background-color: #1f2937;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            color: #fbbf24;
            margin: 0 0 10px;
        }

        .card p {
            margin: 0 0 10px;
            line-height: 1.6;
        }

        .card a {
            color: #facc15;
            text-decoration: none;
            font-weight: bold;
        }

        .card a:hover {
            text-decoration: underline;
        }

        .icon {
            font-size: 36px;
            color: #fbbf24;
            margin-bottom: 10px;
        }

        .icon-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Card 1 -->
    <div class="card">
        <div class="icon-container">
            <span class="icon">💰</span>
        </div>
        <h3>Potensi Punya Gaji Tinggi</h3>
        <p>
            Fullstack Developer rata-rata digaji Rp 7jt - 12jt per bulan di Indonesia, tergantung pengalaman dan lokasi kerja. 
            Cek di sini: <a href="#">Info Gaji Fullstack Developer</a>
        </p>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <div class="icon-container">
            <span class="icon">💼</span>
        </div>
        <h3>Peluang Kerja Terbuka Lebar</h3>
        <p>
            Nggak cuma kerja di Indonesia, kamu juga bisa bekerja di luar negeri baik onsite atau remote kalau punya keahlian Fullstack Developer. 
            Cek di sini: <a href="#">Remote Fullstack Developer</a>
        </p>
    </div>
</div>

</body>
</html>
 <!-- Skills -->
<section id="portofolio" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-300">
  <div class="container mx-auto">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">
          Skills Yang Dimiliki
        </h4>
        <p class="font-medium text-md text-secondary md:text-lg text-gray-600">
         Software Engineer di Flip. Former Senior Software Engineer di Quipper. Former Backend Software Engineer di Google. Former Information Technology Expert di Pemerintahan Kota Jakarta untuk pengembangan portal for region planning BAPPEDA (Badan pengembangan dan Penelitian Daerah). Former Website Developer di BAS-IT Studio. Berpengalaman sebagai programmer profesional sejak 2020.
        </p>
      </div>
    </div>
    <div class="w-full px-4">
      <a href="#" class="max-w-[120px] py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
        <img src="#" alt="HTML">
      </a>
    </div>
  </div>
</section>
<!-- End Skills -->
@endsection
