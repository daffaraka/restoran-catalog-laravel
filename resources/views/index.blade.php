@extends('layout')
@section('content')
    <div class="container-fluid" id="jumbotron-container">
        <div class="container py-5">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 text-light">
                    <h1 class="fw-bold">My Resto</h1>
                    <p class="text-justify">Salah satu rahasia utama yang telah kami jaga selama bertahun-tahun untuk menjaga
                        kualitas terbaik
                        kami adalah cinta yang kami selalu masukkan ke dalam setiap hidangan. Kami memahami bahwa makanan
                        bukan hanya tentang rasa dan tampilan, tetapi juga tentang perasaan, kenangan, dan pengalaman yang
                        kami ciptakan untuk setiap pelanggan yang datang ke restoran kami. Setiap bahan, setiap resep,
                        setiap detail dalam penyajian, semuanya adalah ekspresi dari komitmen kami untuk menciptakan
                        pengalaman makan yang tak terlupakan. Kami percaya bahwa cinta kami terhadap kuliner tercermin dalam
                        setiap suapan, dan kami sangat senang dapat berbagi cinta ini dengan Anda, satu hidangan lezat
                        sekaligus.</p>
                    <div class="d-flex">
                        <a href="" class="btn btn-primary">Menu</a>
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 p-0">
                    <div class="d-flex justify-content-end">
                        <img class="img-thumbnail p-0 border-0" id="jumbotron-image"
                            src="https://media.timeout.com/images/106000654/image.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid py-5" id="about">
        <div class="container">
            <h1 class="text-center fw-bold">About Us</h1>
            <p class="text-justify">Restoran ini adalah sebuah tempat yang memadukan harmoni yang indah antara cita rasa
                yang luar biasa dan seni
                yang tak tertandingi. Anda akan segera terpesona oleh cahaya lembut yang dipancarkan oleh lentera-lentera
                yang menggantung, menciptakan nuansa romantis yang memikat. Namun, keindahan yang sejati terletak dalam
                aroma lezat yang menguar dari setiap masakan khas yang dipersiapkan dengan cermat, menggoda selera Anda
                begitu Anda meletakkan kaki di dalam restoran ini. <br> <br>

                Setiap hidangan yang disajikan adalah sebuah karya seni, tidak hanya dalam tampilan visualnya yang menawan,
                tetapi juga dalam rasa yang tak terlupakan. Dengan setiap suapan, Anda akan merasakan kecermatan dan
                dedikasi yang melibatkan setiap detail dalam penyajiannya. Restoran ini bukan sekadar tempat untuk makan,
                tetapi tempat untuk merayakan semua indra Anda dan menciptakan kenangan yang akan Anda simpan selamanya.
                <br> <br>

                Ini adalah tempat yang penuh inspirasi, sempurna untuk merayakan momen-momen istimewa dalam hidup Anda,
                seperti ulang tahun, perayaan pernikahan, atau pertemuan romantis. Dan, tentu saja, ini juga adalah tempat
                yang ideal untuk sekadar menikmati hidangan lezat dan berkumpul dengan teman-teman terdekat, berbagi cerita,
                tawa, dan kebahagiaan. Sambutlah pengalaman kuliner yang tak tertandingi di restoran ini, di mana segala
                sesuatu dipersiapkan dengan penuh kasih dan dedikasi, menciptakan kenangan yang tak terlupakan setiap kali
                Anda melangkah ke dalamnya.

            </p>
        </div>
    </div>

    <div class="container" id="menu">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="nasi-goreng">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Goreng Spesial</h5>
                        <p class="card-text">Nasi goreng lezat dengan campuran daging ayam, udang, sayuran, dan bumbu khas.
                            Cocok untuk pecinta masakan pedas.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="pasta-carbonara" data-target="popup-nasi-goreng">
                    <div class="card-body">
                        <h5 class="card-title">Pasta Carbonara</h5>
                        <p class="card-text">Pasta al dente dengan saus krim lezat, keju parmesan, dan irisan bacon garing.
                            Rasakan cita rasa Italia di setiap gigitan.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="sushi-sashimi">
                    <div class="card-body">
                        <h5 class="card-title">Sushi Sashimi Platter</h5>
                        <p class="card-text">Kombinasi beragam sashimi segar dan nigiri sushi, disajikan dengan saus wasabi
                            dan jahe. Pengalaman autentik Jepang di piring Anda.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="burger-gourmet">
                    <div class="card-body">
                        <h5 class="card-title">Burger Gourmet</h5>
                        <p class="card-text">Burger daging sapi pilihan dengan bacon, keju cheddar, tomat segar, dan saus
                            rempah khusus. Kesempurnaan burger dalam satu gigitan.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="sate-ayam">
                    <div class="card-body">
                        <h5 class="card-title">Sate Ayam</h5>
                        <p class="card-text">Potongan ayam yang dibakar di atas bara api, disajikan dengan saus kacang yang
                            kaya rasa dan nasi empuk. Hidangan klasik Indonesia.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="ayam-bakar">
                    <div class="card-body">
                        <h5 class="card-title">Ayam Bakar</h5>
                        <p class="card-text">Ayam bakar dengan bumbu khas Indonesia, disajikan dengan nasi, lalapan, dan
                            sambal. Rasakan cita rasa tradisional.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="iga-sapi">
                    <div class="card-body">
                        <h5 class="card-title">Iga Sapi</h5>
                        <p class="card-text">Iga sapi panggang dengan saus barbeque, disajikan dengan kentang goreng dan
                            sayuran segar. Kenikmatan daging sapi yang lezat.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="card" id="nasi-kebuli">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Kebuli</h5>
                        <p class="card-text">Nasi dengan rempah-rempah khas dan daging, disajikan dengan acar dan telur.
                            Hidangan beraroma yang menggugah selera.</p>
                        <button class="btn btn-primary btn-pop-up">Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-popup" id="popup-nasi-goreng">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h5 class="card-title">Nasi Goreng Spesial</h5>
            <p class="card-text">Nasi goreng lezat dengan campuran daging ayam, udang, sayuran, dan bumbu khas. Cocok untuk
                pecinta masakan pedas.</p>
        </div>
    </div>

    <!-- Popup untuk "Pasta Carbonara" -->
    <div class="card-popup" id="popup-pasta-carbonara">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h5 class="card-title">Pasta Carbonara</h5>
            <p class="card-text">Pasta al dente dengan saus krim lezat, keju parmesan, dan irisan bacon garing. Rasakan cita
                rasa Italia di setiap gigitan.</p>
        </div>
    </div>

    <!-- Popup untuk "Sushi Sashimi Platter" -->
    <div class="card-popup" id="popup-sushi-sashimi">
        <div class="popup-content">
            <span class ="close-btn">&times;</span>
            <h5 class="card-title">Sushi Sashimi Platter</h5>
            <p class="card-text">Kombinasi beragam sashimi segar dan nigiri sushi, disajikan dengan saus wasabi dan jahe.
                Pengalaman autentik Jepang di piring Anda.</p>
        </div>
    </div>

    <!-- Popup untuk "Burger Gourmet" -->
    <div class="card-popup" id="popup-burger-gourmet">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h5 class="card-title">Burger Gourmet</h5>
            <p class="card-text">Burger daging sapi pilihan dengan bacon, keju cheddar, tomat segar, dan saus rempah
                khusus.
                Kesempurnaan burger dalam satu gigitan.</p>
        </div>
    </div>


    <div class="card-popup" id="popup-ayam-bakar">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h5 class="card-title">Ayam Bakar</h5>
            <p class="card-text">Ayam bakar dengan bumbu khas Indonesia, disajikan dengan nasi, lalapan, dan sambal.
                Rasakan cita rasa tradisional.</p>
        </div>
    </div>

    <div class="card-popup" id="popup-iga-sapi">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h5 class="card-title">Iga Sapi</h5>
            <p class="card-text">Iga sapi panggang dengan saus barbeque, disajikan dengan kentang goreng dan sayuran segar.
                Kenikmatan daging sapi yang lezat.</p>
        </div>
    </div>

    <div class="card-popup" id="popup-nasi-kebuli">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h5 class="card-title">Nasi Kebuli</h5>
            <p class="card-text">Nasi dengan rempah-rempah khas dan daging, disajikan dengan acar dan telur. Hidangan
                beraroma yang menggugah selera.</p>
        </div>
    </div>


    <div class="container-fluid mb-5" id="galery">
        <div class="container">
            <h1 class="fw-bold text-center">Galery</h1>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner bg-dark">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/gambar1.png') }}" class="d-block w-auto carousel-image"
                                alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/gambar2.png') }}" class="d-block w-auto carousel-image"
                                alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/gambar3.png') }}" class="d-block w-auto carousel-image"
                                alt="...">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>

    <footer id="footer-container">

        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-md-3">
                    <h4>My Resto</h4>
                    <a class="nav-link" href="#">Home</a>
                </div>

                <div class="col-md-3">
                    <h4>Gallery</h4>
                    <a class="nav-link" href="#galery">Gallery Menu</a>
                </div>

                <div class="col-md-3">
                    <h4>Menu</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error vero tenetur, animi perspiciatis magni
                        maxime nihil consequatur culpa sapiente nemo sit quam molestiae sunt laboriosam impedit eos
                        voluptatum similique iure.</p>
                </div>

                <div class="col-md-3">
                    <h4>Kontak</h4>
                    <a class="nav-link" href="https://linktr.ee/baleudangbaliindonesia">Linktree</a>

                    <a class="nav-link" href="https://www.tiktok.com/@baleudang?_t=8cdoupmp1iq&_r=1">Tiktok</a>
                    <a class="nav-link" href="https://wa.me/628176780003">Reservasi</a>

                </div>
            </div>
        </div>
    </footer>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Memunculkan popup yang sesuai saat tombol "Detail" diklik
        $(".btn-pop-up").click(function() {
            // Dapatkan ID popup yang sesuai
            var popupId = $(this).closest(".card").attr("id");
            // console.log(target);
            $("#popup-" + popupId).fadeIn();
        });

        // Menutup popup saat tombol close di dalam popup diklik
        $(".close-btn").click(function() {
            $(".card-popup").fadeOut();
        });
    });
</script>

<style>
    .card-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 999;
        text-align: center;
    }

    .popup-content {
        background: #fff;
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        position: relative;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
</style>
