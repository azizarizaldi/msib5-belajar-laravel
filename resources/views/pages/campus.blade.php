@extends("layouts.app")

@section('main-content')

<div class="container mt-3">
    <div class="row mb-5">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="assets/images/sttbandung-logo.png" alt="avatar"
                        class="img-fluid" style="width: 200px;">
                    <h5 class="my-3">{{$data['name']}}</h5>
                    <p class="text-muted mb-1"><i class="fa fa-globe"></i> Website : <a href="{{$data['website_url']}}" target="_blank" class="text-decoration-none">{{$data['website_url']}}</a></p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fas fa-envelope fa-lg text-primary"></i>
                            <p class="mb-0"><a href="mailto:{{$data['email']}}" class='text-decoration-none' target="_blank">{{$data['email']}}</a></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                            <p class="mb-0"><a href="{{$data['facebook_url']}}" class='text-decoration-none' target="_blank">{{$data['facebook_name']}}</a></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                            <p class="mb-0"><a href="{{$data['instagram_url']}}" class='text-decoration-none' target="_blank">{{$data['instagram_name']}}</a></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <p class="mb-0"><a href="{{$data['twitter_url']}}" class='text-decoration-none' target="_blank">{{$data['twitter_name']}}</a></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-youtube fa-lg" style="color: #ff0000;"></i>
                            <p class="mb-0"><a href="{{$data['youtube_url']}}" class='text-decoration-none' target="_blank">{{$data['youtube_name']}}</a></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-tiktok fa-lg" style="color: #000000;"></i>
                            <p class="mb-0"><a href="{{$data['tiktok_url']}}" class='text-decoration-none' target="_blank">{{$data['tiktok_name']}}</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mb-5">
            <div class="card mb-4">
                <iframe class="rounded" width="100%" height="400" src="https://www.youtube.com/embed/MXBAV6P1WI4?si=cU4TtMYuFMh8S6Br" frameborder="0" allowfullscreen></iframe>
            </div>            

            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Sejarah Kampus</h4>
                    <p class='text-paragraph'>
                        Sekolah Tinggi Teknologi Bandung berdiri sejak tahun 1991, yang di prakarsai oleh alumni Institut Teknologi Bandung (ITB). Visi Sekolah Tinggi Teknologi Bandung adalah menjadi perguruan tinggi yang berdaya saing dan unggul secara nasional pada tahun 2025. Dengan harapan dapat memberikan kesempatan yang lebih luas kepada masyarakat untuk mendapatkan pendidikan di Perguruan Tinggi serta bertujuan untuk menghasilkan sarjana dan tenaga ahli yang kompeten di bidangnya dan mampu menghadapi tantangan global, mampu memanfaatkan berbagai peluang yang ada di sekelilingnya, dan memiliki jiwa kewirausahaan yang tinggi dengan harapan dapat menjadi seorang pengusaha sukses serta dapat menciptakan kesempatan kerja bagi lingkungannya. Saat ini Sekolah Tinggi Teknologi Bandung memiliki 4 Program Studi, yaitu Teknik Industri, Teknik Informatika, Desain Komunikasi Visual dan Bisnis Digital. Kurikulum yang digunakan selalu disesuaikan dengan kebutuhan, baik kebutuhan industri manufaktur ataupun industri lain. STTB yang berkedudukan di Jl. Soekarno Hatta No. 378 Bandung, saat ini sudah mendapatkan kepercayaan dari masyarakat, ini bisa dilihat dari meningkatnya jumlah Mahasiswa dari berbagai Program Studi yang berasal dari berbagai daerah, mulai dari Aceh sampai Papua, bahkan ada mahasiswa yang berasal dari luar Negeri seperti Malaysia, Qatar, Timor Leste, dan lain-lain.
                    </p>
                    <p class='text-paragraph mt-2'>
                    Selain itu banyak Pencapaian Prestasi Dosen maupun Mahasiswa yang sudah diraih, baik di tingkat Nasional maupun Internasional. Prestasi dosen yang diraih salah satunya adalah hibah penelitian dosen, baik dari DIKTI maupun DRPM, yang jumlahnya selalu meningkat. Selain prestasi dosen, Sekolah Tinggi Teknologi Bandung juga memiliki Prestasi mahasiswa, baik di bidang akademik maupun non Akademik. Prestasi tersebut diantaranya prestasi di tingkat nasional dan internasional.
                    </p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Visi</h5>
                    <p class='text-paragraph'>
                        Menjadi Socio-Creativepreneur University yang Mengembangkan Potensi Lokal ke Tataran Global untuk Memberikan Dampak Kemajuan Ekonomi bagi Masyarakat Nasional.
                    </p>
                    <h5 class="mt-2">Misi</h5>
                    <ul class='text-paragraph-no-indent'>
                        <li>
                            Menyelenggarakan Pendidikan tinggi yang dinamis dan kreatif di bidang sosial, seni budaya, dan teknologi berbasis kewirausahaan;
                        </li>
                        <li>
                            Menyelenggarakan Penelitian di bidang sosial, seni budaya, dan teknologi untuk menghasilkan terobosan kreatif dan inovatif serta tepat guna sehingga memberi manfaat bagi pembangunan Nasional;
                        </li>
                        <li>
                            Menyelenggarakan layanan Pengabdian Masyarakat secara profesional dalam rangka memberi solusi kreatif terhadap permasalahan di masyarakat terutama dalam bidang sosial, seni budaya, dan teknologi;
                        </li>
                        <li>
                            Menyelenggarakan Pendidikan Tinggi yang bermutu melalui pengembangan kemitraan di tingkat Nasional, regional maupun global;
                        </li>
                        <li>
                            Menciptakan ekosistem Socio-Creativepreneurship melalui pengembangan lembaga Ekonomi Kreatif yang memberi manfaat bagi masyarakat Nasional.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection