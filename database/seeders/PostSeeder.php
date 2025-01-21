<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Transaksi Cepat dan Aman di TopupGame',
                'author_id' => 1,
                'rating' => 5,
                'slug' => 'transaksi-cepat-dan-aman-di-topupgame',
                'body' => 'Saya sangat puas dengan layanan di TopupGame. Proses topup PUBG Mobile sangat cepat, hanya dalam hitungan menit UC sudah masuk. Admin sangat responsif dalam membantu. Harga juga bersaing dengan platform lain. Recommended!',
                'category_id' => 1,
                'created_at' => '2025-01-20 15:30:00',
                'updated_at' => '2025-01-20 15:30:00'
            ],
            [
                'title' => 'Pengalaman Pertama Top Up ML',
                'author_id' => 2,
                'rating' => 4,
                'slug' => 'pengalaman-pertama-top-up-ml',
                'body' => 'Baru pertama kali top up Diamond ML disini. Prosesnya mudah dan straightforward. Meski agak lama sekitar 10 menit, tapi diamonds akhirnya masuk dengan aman. Mungkin bisa dipercepat lagi prosesnya.',
                'category_id' => 2,
                'created_at' => '2025-01-19 10:15:00',
                'updated_at' => '2025-01-19 10:15:00'
            ],
            [
                'title' => 'Points Valorant Instant Delivery',
                'author_id' => 3,
                'rating' => 5,
                'slug' => 'points-valorant-instant-delivery',
                'body' => 'Best top up service for Valorant! Points langsung masuk dalam 2 menit setelah pembayaran. CS ramah dan website user-friendly. Pasti akan top up disini lagi untuk beli skin bundle favorit.',
                'category_id' => 3,
                'created_at' => '2025-01-18 14:45:00',
                'updated_at' => '2025-01-18 14:45:00'
            ],
            [
                'title' => 'Marvel Rivals Token Worth It',
                'author_id' => 4,
                'rating' => 4,
                'slug' => 'marvel-rivals-token-worth-it',
                'body' => 'Harga token Marvel Rivals cukup terjangkau dibanding tempat lain. Proses verifikasi pembayaran agak lama tapi pelayanan bagus dan ramah. Overall recommended untuk para gamers Marvel.',
                'category_id' => 4,
                'created_at' => '2025-01-17 09:20:00',
                'updated_at' => '2025-01-17 09:20:00'
            ],
            [
                'title' => 'Layanan Top Up Game Terbaik',
                'author_id' => 5,
                'rating' => 5,
                'slug' => 'layanan-top-up-game-terbaik',
                'body' => 'Sudah berkali-kali top up PUBG di sini. Tidak pernah mengecewakan. Proses cepat, aman, dan CS sangat helpful. Terima kasih atas pelayanan terbaiknya!',
                'category_id' => 1,
                'created_at' => '2025-01-16 16:30:00',
                'updated_at' => '2025-01-16 16:30:00'
            ],
            [
                'title' => 'Diamond ML Instan',
                'author_id' => 1,
                'rating' => 5,
                'slug' => 'diamond-ml-instan',
                'body' => 'Top up 500 diamond ML langsung masuk dalam 5 menit. Harga kompetitif dan banyak bonus untuk member. Sangat recommended untuk para player Mobile Legends!',
                'category_id' => 2,
                'created_at' => '2025-01-15 11:45:00',
                'updated_at' => '2025-01-15 11:45:00'
            ],
            [
                'title' => 'Valorant Points Murah',
                'author_id' => 2,
                'rating' => 3,
                'slug' => 'valorant-points-murah',
                'body' => 'Harga points memang murah, tapi proses verifikasi pembayaran agak lama. Butuh sekitar 30 menit sampai points masuk. Mungkin bisa ditingkatkan lagi kecepatan prosesnya.',
                'category_id' => 3,
                'created_at' => '2025-01-14 13:20:00',
                'updated_at' => '2025-01-14 13:20:00'
            ],
            [
                'title' => 'Tokens Marvel Rivals Cepat',
                'author_id' => 3,
                'rating' => 5,
                'slug' => 'tokens-marvel-rivals-cepat',
                'body' => 'Proses top up token sangat cepat dan mudah. CS responsive dan ramah. Harga lebih murah dari official store. Recommended banget!',
                'category_id' => 4,
                'created_at' => '2025-01-13 15:10:00',
                'updated_at' => '2025-01-13 15:10:00'
            ],
            [
                'title' => 'UC PUBG Selalu Aman',
                'author_id' => 4,
                'rating' => 4,
                'slug' => 'uc-pubg-selalu-aman',
                'body' => 'Langganan top up UC PUBG disini karena prosesnya selalu aman. Meski kadang agak lama tapi tidak pernah ada masalah. CS juga fast response jika ada pertanyaan.',
                'category_id' => 1,
                'created_at' => '2025-01-12 10:30:00',
                'updated_at' => '2025-01-12 10:30:00'
            ],
            [
                'title' => 'Weekly Diamond ML',
                'author_id' => 5,
                'rating' => 5,
                'slug' => 'weekly-diamond-ml',
                'body' => 'Setiap minggu selalu top up ML disini. Prosesnya konsisten cepat dan aman. Harga bersaing dan sering ada promo menarik. The best lah pokoknya!',
                'category_id' => 2,
                'created_at' => '2025-01-11 14:15:00',
                'updated_at' => '2025-01-11 14:15:00'
            ],
            [
                'title' => 'Point Valorant Bundle',
                'author_id' => 1,
                'rating' => 4,
                'slug' => 'point-valorant-bundle',
                'body' => 'Beli bundle points Valorant disini lebih hemat. Proses cepat dan aman. Support tim ramah dan helpful. Sayangnya jarang ada promo khusus untuk Valorant.',
                'category_id' => 3,
                'created_at' => '2025-01-10 09:45:00',
                'updated_at' => '2025-01-10 09:45:00'
            ],
            [
                'title' => 'First Time Marvel Rivals',
                'author_id' => 2,
                'rating' => 3,
                'slug' => 'first-time-marvel-rivals',
                'body' => 'Pertama kali top up token Marvel Rivals. Prosesnya sedikit membingungkan untuk pemula. Untung CS membantu dengan sabar. Semoga ke depan bisa lebih user-friendly.',
                'category_id' => 4,
                'created_at' => '2025-01-09 16:20:00',
                'updated_at' => '2025-01-09 16:20:00'
            ],
            [
                'title' => 'PUBG Mobile UC Super Fast',
                'author_id' => 3,
                'rating' => 5,
                'slug' => 'pubg-mobile-uc-super-fast',
                'body' => 'Tercepat! UC masuk dalam 3 menit setelah pembayaran. Interface website juga mudah dipahami. Definitely akan jadi langganan untuk top up PUBG.',
                'category_id' => 1,
                'created_at' => '2025-01-08 11:30:00',
                'updated_at' => '2025-01-08 11:30:00'
            ],
            [
                'title' => 'Mobile Legends Top Up Review',
                'author_id' => 4,
                'rating' => 4,
                'slug' => 'mobile-legends-top-up-review',
                'body' => 'Pengalaman top up ML disini cukup menyenangkan. Proses smooth dan aman. CS fast response. Harga standard tapi pelayanan premium. Worth it!',
                'category_id' => 2,
                'created_at' => '2025-01-07 13:45:00',
                'updated_at' => '2025-01-07 13:45:00'
            ],
            [
                'title' => 'Value for Money Valorant',
                'author_id' => 5,
                'rating' => 5,
                'slug' => 'value-for-money-valorant',
                'body' => 'Harga points Valorant sangat worth it! Proses cepat, aman, dan professional. CS ramah dan website mudah digunakan. Recommended untuk semua player Valorant!',
                'category_id' => 3,
                'created_at' => '2025-01-06 15:00:00',
                'updated_at' => '2025-01-06 15:00:00'
            ],
        ];

        DB::table('posts')->insert($posts);
    }
}