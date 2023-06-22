<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           // Define the data you want to insert
           $data = [
            [
                'career_id' => 'GCL004-17',
                'career_group' => 'GC004',
                'name_career_th' => 'ช่างอิเล็กทรอนิกส์',
                'name_career_en' => 'Electronic Technician',
                'name_career_arabic' => 'فني الكتروني',
                'name_img' => 'public/img/electronics.png',
                'created_at' => Carbon::now(),                
            ],
            [
                'career_id' => 'GCL004-16',
                'career_group' => 'GC004',
                'name_career_th' => 'พนักงานการใช้คอมพิวเตอร์ (ฐานข้อมูล)',
                'name_career_en' => 'Employees using computers',
                'name_career_arabic' => 'الموظفون الذين يستخدمون أجهزة الكمبيوتر (قواعد البيانات)',
                'name_img' => 'public/img/Tech.png',
                'created_at' => Carbon::now(),    
            ],
            [
                'career_id' => 'GCL005-13',
                'career_group' => 'GC005',
                'name_career_th' => 'พนักงานบริหารงานโลจิสติก',
                'name_career_en' => 'Logistics Management Staff',
                'name_career_arabic' => 'موظفي إدارة الخدمات اللوجستية',
                'name_img' => 'public/img/logistics.png',
                'created_at' => Carbon::now(),    
            ],
            [
                'career_id' => 'GCL001-2',
                'career_group' => 'GC001',
                'name_career_th' => 'ช่างก่อสร้าง',
                'name_career_en' => 'Bricklayer',
                'name_career_arabic' => 'كبناء',
                'name_img' => 'public/img/Constuction.png',
                'created_at' => Carbon::now(),    
            ],
            [
                'career_id' => 'GCL003-5',
                'career_group' => 'GC003',
                'name_career_th' => 'ช่างซ่อมรถยนต์',
                'name_career_en' => 'Car Mechanic',
                'name_career_arabic' => 'ميكانيكي للسيارات',
                'name_img' => 'public/img/technician.png',
                'created_at' => Carbon::now(),    
            ],
            // Add more rows of data as needed
        ];

        // Specify the table name
        $table = 'worker_datas';

        // Insert the data into the table
        DB::table($table)->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
