<style>
        /* CSS tambahan untuk tampilan yang lebih menarik */
         #heroCarousel .carousel-item {
            height: 100vh; /* Membuat setiap slide setinggi layar penuh */
            min-height: 500px; /* Tinggi minimal untuk layar yang lebih pendek */
        }

        #heroCarousel .carousel-item img {
            height: 100%;
            object-fit: cover; /* Membuat gambar menutupi area tanpa distorsi */
            filter: brightness(60%); /* Sedikit menggelapkan gambar agar tulisan mudah dibaca */
        }

        /* Mengatur posisi caption agar benar-benar di tengah */
        #heroCarousel .carousel-caption {
            top: 50%;
            transform: translateY(-50%);
            bottom: auto; /* Membatalkan posisi default dari bootstrap */
        }

        #produk-unggulan {
            min-height: 100vh; /* Tinggi MINIMAL 100% dari layar */
            display: flex; /* Mengaktifkan mode flexbox */
            flex-direction: column; /* Mengatur item agar berbaris ke bawah */
            justify-content: center; /* Menengahkan konten secara vertikal */
            scroll-margin-top: 60px; /* Angka ini bisa disesuaikan, coba antara 70px - 90px */
        }

        .card{
            overflow: hidden;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover; /* Agar gambar produk ukurannya sama */
            transition: transform 0.3s ease;
        }
        .card:hover .card-img-top {
            transform: scale(1.05);
        }
        html{
            scroll-behavior: smooth;
        }
        /* css cart */
        .cart-item-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .quantity-input {
            width: 110px; /* Lebar input field untuk kuantitas */
        }
    </style>