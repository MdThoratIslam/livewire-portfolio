<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        //
        DB::insert('INSERT INTO `districts` (`id`, `division_id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) 
            VALUES 
            (64, 8, "Thakurgaon", "Thakurgaon", "thakurgaon", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (63, 8, "Rangpur", "Rangpur", "rangpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (62, 8, "Panchagarh", "Panchagarh", "panchagarh", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (61, 8, "Nilphamari", "Nilphamari", "nilphamari", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (60, 8, "Lalmonirhat", "Lalmonirhat", "lalmonirhat", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (59, 8, "Kurigram", "Kurigram", "kurigram", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (58, 8, "Gaibandha", "Gaibandha", "gaibandha", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (57, 8, "Dinajpur", "দিনাজপুর", "dinajpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (56, 7, "Sherpur", "Sherpur", "sherpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (55, 7, "Netrakona", "Netrakona", "netrakona", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (54, 7, "Mymensingh", "Mymensingh", "mymensingh", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (53, 7, "Jamalpur", "Jamalpur", "jamalpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (52, 6, "Pirojpur", "Pirojpur", "pirojpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (51, 6, "Patuakhali", "Patuakhali", "patuakhali", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (50, 6, "Jhalakathi", "Jhalakathi", "jhalakathi", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (49, 6, "Bhola", "Bhola", "bhola", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (48, 6, "Barishal", "Barishal", "barishal", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (47, 6, "Barguna", "Barguna", "barguna", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (46, 5, "Sylhet", "Sylhet", "sylhet", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (45, 5, "Sunamganj", "Sunamganj", "sunamganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (44, 5, "Moulvibazar", "Moulvibazar", "moulvibazar", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (43, 5, "Hobiganj", "Hobiganj", "hobiganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (42, 4, "Sirajganj", "Sirajganj", "sirajganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (41, 4, "Rajshahi", "Rajshahi", "rajshahi", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (40, 4, "Pabna", "Pabna", "pabna", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (39, 4, "Chapai", "Chapai", "chapai", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (38, 4, "Natore", "Natore", "natore", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (37, 4, "Nogaon", "Nogaon", "nogaon", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (36, 4, "Joypurhat", "Joypurhat", "joypurhat", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (35, 4, "Bogura", "Bogura", "bogura", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (34, 3, "Satkhira", "Satkhira", "satkhira", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (33, 3, "Narail", "Narail", "narail", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (32, 3, "Meherpur", "Meherpur", "meherpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (31, 3, "Magura", "Magura", "magura", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (30, 3, "Kushtia", "Kushtia", "kushtia", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (29, 3, "Khulna", "Khulna", "khulna", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (28, 3, "Jhenaidah", "Jhenaidah", "jhenaidah", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (27, 3, "Jashore", "Jashore", "jashore", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (26, 3, "Chuadanga", "Chuadanga", "chuadanga", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (25, 3, "Bagerhat", "Bagerhat", "bagerhat", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (24, 2, "Rangamati", "Rangamati", "rangamati", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (23, 2, "Noakhali", "Noakhali", "noakhali", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (22, 2, "Lakshmipur", "Lakshmipur", "lakshmipur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (21, 2, "Khagrachari", "Khagrachari", "khagrachari", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (20, 2, "Feni", "Feni", "feni", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (19, 2, "Cox\'s bazar", "Cox\'s bazar", "coxs-bazar", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (18, 2, "Cumilla", "Cumilla", "cumilla", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (17, 2, "Chattogram", "Chattogram", "chattogram", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (16, 2, "Chandpur", "Chandpur", "chandpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (15, 2, "Brahmanbaria", "Brahmanbaria", "brahmanbaria", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (14, 2, "Bandarban", "Bandarban", "bandarban", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (13, 1, "Tangail", "Tangail", "tangail", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (12, 1, "Shariatpur", "Shariatpur", "shariatpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (11, 1, "Rajbari", "Rajbari", "rajbari", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (10, 1, "Narshingdi", "Narshingdi", "narshingdi", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (9, 1, "Narayanganj", "Narayanganj", "narayanganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (8, 1, "Munshiganj", "Munshiganj", "munshiganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (7, 1, "Manikganj", "Manikganj", "manikganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (6, 1, "Madaripur", "Madaripur", "madaripur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (5, 1, "Kishoreganj", "Kishoreganj", "kishoreganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (4, 1, "Gopalganj", "Gopalganj", "gopalganj", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (3, 1, "Gazipur", "Gazipur", "gazipur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (2, 1, "Faridpur", "Faridpur", "faridpur", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
            (1, 1, "Dhaka", "Dhaka", "dhaka", NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL)');
    }
}
