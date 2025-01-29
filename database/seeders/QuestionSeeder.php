<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question' => 'Apa ibu kota Indonesia?',
                'reading_material' => 'Indonesia memiliki banyak pulau dan provinsi, namun Jakarta adalah ibu kota yang ditetapkan sejak lama.',
                'options' => json_encode(['Jakarta', 'Surabaya', 'Medan', 'Bandung']),
                'correct_answer' => 'Jakarta',
            ],
            [
                'question' => 'Siapakah presiden pertama Indonesia?',
                'reading_material' => 'Presiden pertama Indonesia dikenal sebagai Bapak Proklamator dan pemimpin dalam kemerdekaan tahun 1945.',
                'options' => json_encode(['Soekarno', 'Soeharto', 'Habibie', 'Gus Dur']),
                'correct_answer' => 'Soekarno',
            ],
            [
                'question' => 'Apa lambang negara Indonesia?',
                'reading_material' => 'Lambang negara Indonesia mencerminkan keberagaman dan semboyan "Bhinneka Tunggal Ika".',
                'options' => json_encode(['Garuda Pancasila', 'Merah Putih', 'Padi dan Kapas', 'Bambu Runcing']),
                'correct_answer' => 'Garuda Pancasila',
            ],
            [
                'question' => 'Di mana letak Candi Borobudur?',
                'reading_material' => 'Candi Borobudur adalah salah satu warisan dunia yang terletak di Pulau Jawa.',
                'options' => json_encode(['Jawa Tengah', 'Yogyakarta', 'Jawa Timur', 'Bali']),
                'correct_answer' => 'Jawa Tengah',
            ],
            [
                'question' => 'Apa nama mata uang Indonesia?',
                'reading_material' => 'Indonesia adalah salah satu negara di Asia Tenggara dengan mata uang unik yang dikenal secara internasional.',
                'options' => json_encode(['Rupiah', 'Ringgit', 'Dollar', 'Baht']),
                'correct_answer' => 'Rupiah',
            ],
            [
                'question' => 'Pulau apa yang dikenal sebagai "Pulau Dewata"?',
                'reading_material' => 'Pulau ini dikenal karena keindahan alamnya, tradisi, dan budaya Hindu yang sangat kental.',
                'options' => json_encode(['Bali', 'Lombok', 'Sumatra', 'Kalimantan']),
                'correct_answer' => 'Bali',
            ],
            [
                'question' => 'Berapa jumlah sila dalam Pancasila?',
                'reading_material' => 'Pancasila adalah dasar negara Republik Indonesia yang terdiri dari beberapa sila.',
                'options' => json_encode(['4', '5', '6', '7']),
                'correct_answer' => '5',
            ],
            [
                'question' => 'Kapan Indonesia merdeka?',
                'reading_material' => 'Hari kemerdekaan Indonesia dirayakan setiap tanggal 17 Agustus.',
                'options' => json_encode(['1940', '1942', '1945', '1950']),
                'correct_answer' => '1945',
            ],
            [
                'question' => 'Gunung apa yang tertinggi di Indonesia?',
                'reading_material' => 'Gunung ini terletak di Papua dan dikenal sebagai salah satu dari Seven Summits.',
                'options' => json_encode(['Gunung Rinjani', 'Gunung Semeru', 'Gunung Kerinci', 'Gunung Jaya Wijaya']),
                'correct_answer' => 'Gunung Jaya Wijaya',
            ],
            [
                'question' => 'Apa nama laut yang membatasi Pulau Kalimantan dan Sulawesi?',
                'reading_material' => 'Laut ini merupakan salah satu kawasan penting di wilayah tengah Indonesia.',
                'options' => json_encode(['Laut Jawa', 'Laut Sulawesi', 'Laut Bali', 'Laut Flores']),
                'correct_answer' => 'Laut Sulawesi',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
