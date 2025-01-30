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
                'question' => 'Apa sinonim dari kata "Indah"?',
                'reading_material' => 'Sinonim adalah kata yang memiliki makna serupa atau hampir sama.',
                'options' => json_encode(['Cantik', 'Buruk', 'Jelek', 'Gersang']),
                'correct_answer' => 'Cantik',
                'category' => 'Kebahasaan',
            ],
            [
                'question' => 'Manakah yang termasuk kata baku?',
                'reading_material' => 'Kata baku adalah kata yang sesuai dengan ejaan dalam KBBI.',
                'options' => json_encode(['Aktifitas', 'Analisa', 'Kualitas', 'Resiko']),
                'correct_answer' => 'Kualitas',
                'category' => 'Kebahasaan',
            ],
            [
                'question' => 'Antonim dari kata "Membuka" adalah?',
                'reading_material' => 'Antonim adalah kata yang memiliki makna berlawanan.',
                'options' => json_encode(['Menutup', 'Melihat', 'Mencari', 'Menulis']),
                'correct_answer' => 'Menutup',
                'category' => 'Kebahasaan',
            ],
            [
                'question' => 'Apa fungsi dari tanda baca titik?',
                'reading_material' => 'Tanda baca digunakan untuk memberi makna pada kalimat.',
                'options' => json_encode(['Mengakhiri kalimat', 'Menunjukkan kutipan', 'Menyambung kata', 'Menjelaskan ulang']),
                'correct_answer' => 'Mengakhiri kalimat',
                'category' => 'Kebahasaan',
            ],
            [
                'question' => 'Kalimat berikut yang benar adalah?',
                'reading_material' => 'Gunakan ejaan yang benar sesuai PUEBI.',
                'options' => json_encode([
                    'Saya akan pergi ke rumah nenek.',
                    'Saya akan pergi kerumah nenek.',
                    'Saya akan pergi keRumah nenek.',
                    'Saya akan pergi k rumah nenek.'
                ]),
                'correct_answer' => 'Saya akan pergi ke rumah nenek.',
                'category' => 'Kebahasaan',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
