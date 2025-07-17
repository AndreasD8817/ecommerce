<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            // --- Kategori: Eau de Parfum (EDP) ---
            [
                'name' => 'Parfum Elegance Bloom EDP',
                'description' => 'Aroma bunga mawar dan melati yang elegan dengan sentuhan musk lembut, cocok untuk acara malam.',
                'price' => 450000,
                'stock' => rand(20, 80), // Stok acak antara 20 dan 80
                'image' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/10/24/097e2a9b-3269-424a-a003-89945c709e99.jpg', // Contoh gambar dari Shopee
                'product_category_id' => 1,
            ],
            [
                'name' => 'Eternal Woods EDP',
                'description' => 'Perpaduan cedarwood, sandalwood, dan amber yang hangat dan tahan lama, ideal untuk pria dan wanita.',
                'price' => 520000,
                'stock' => rand(15, 60),
                'image' => 'https://fimgs.net/himg/o.93338.jpg', // Contoh gambar dari Fragrantica (Mancera Eternal Wood)
                'product_category_id' => 1,
            ],
            [
                'name' => 'Vanilla Dream EDP',
                'description' => 'Wewangian manis vanila dan karamel dengan sedikit sentuhan rempah, sangat menggoda.',
                'price' => 380000,
                'stock' => rand(30, 100),
                'image' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/10/16/3b7501a3-2ee8-444f-a99f-723223018e69.jpg', // Contoh gambar dari Tokopedia (L Scarf Parfum)
                'product_category_id' => 1,
            ],

            // --- Kategori: Eau de Toilette (EDT) ---
            [
                'name' => 'Fresh Citrus EDT',
                'description' => 'Aroma jeruk segar dan lemon yang energik, cocok untuk penggunaan sehari-hari di musim panas.',
                'price' => 280000,
                'stock' => rand(40, 120),
                'image' => 'https://fimgs.net/himg/o.58673.jpg', // Contoh gambar dari Fragrantica (Avon Fresh Citrus)
                'product_category_id' => 2,
            ],
            [
                'name' => 'Ocean Breeze EDT',
                'description' => 'Wewangian aquatic yang menenangkan seperti angin laut, memberikan kesan bersih dan dingin.',
                'price' => 310000,
                'stock' => rand(35, 90),
                'image' => 'https://i5.walmartimages.com/asr/2418048f-3665-4f40-8777-66a4f78696d5.8f895c8053644265435e0766f53a4792.jpeg', // Contoh gambar dari Walmart (Emper Ocean Breeze)
                'product_category_id' => 2,
            ],
            [
                'name' => 'Green Meadow EDT',
                'description' => 'Aroma hijau daun dan rumput segar yang menenangkan, cocok untuk kegiatan outdoor.',
                'price' => 295000,
                'stock' => rand(25, 75),
                'image' => 'https://www.lunarnco.com/cdn/shop/products/green-meadow-inspired-by-green-irish-tweed-for-men-1_1024x1024.jpg?v=1678129758', // Contoh gambar dari Lunar & Co (Green Meadow)
                'product_category_id' => 2,
            ],

            // --- Kategori: Eau de Cologne (EDC) ---
            [
                'name' => 'Classic Lime EDC',
                'description' => 'Cologne klasik dengan aroma jeruk nipis dan herbal, memberikan kesegaran cepat setelah mandi.',
                'price' => 150000,
                'stock' => rand(50, 150),
                'image' => 'https://via.placeholder.com/150/00FF00/FFFFFF?text=Classic+Lime+EDC', // Placeholder karena gambar spesifik sulit ditemukan
                'product_category_id' => 3,
            ],
            [
                'name' => 'Aqua Splash EDC',
                'description' => 'Kesegaran ringan beraroma air dan sedikit bunga, ideal untuk cuaca panas.',
                'price' => 175000,
                'stock' => rand(45, 130),
                'image' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/12/28/7f8f906e-8260-449e-876a-5b4d7f551934.jpg', // Contoh gambar dari Tokopedia (Bibit Parfum Aqua Splash)
                'product_category_id' => 3,
            ],

            // --- Kategori: Parfum (Extrait de Parfum) ---
            [
                'name' => 'Royal Oud Extrait',
                'description' => 'Parfum mewah dengan konsentrasi tinggi oud, amber, dan rempah, untuk kesan eksklusif dan tahan sangat lama.',
                'price' => 950000,
                'stock' => rand(5, 20),
                'image' => 'https://obarfum.com/wp-content/uploads/2023/06/ROYAL-OUD-1.png', // Contoh gambar dari Obarfum (Royal Oud)
                'product_category_id' => 4,
            ],
            [
                'name' => 'Mystic Amber Extrait',
                'description' => 'Kombinasi intens dari amber, musk, dan sedikit sentuhan vanila, menciptakan aura misterius.',
                'price' => 880000,
                'stock' => rand(8, 25),
                'image' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/10/25/1155099f-e63d-4952-b883-77292262d164.jpg', // Contoh gambar dari Tokopedia (NAP Mystic Amber)
                'product_category_id' => 4,
            ],
        ]);
    }
}
