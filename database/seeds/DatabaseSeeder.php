<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // check if table users is empty
        if (DB::table('users')->count() == 0) {

            DB::table('users')->insert([

                'name' => 'mahdi',
                'email' => 'm73hdi@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ]);

        } else {
            echo "\e Table is not empty, therefore NOT ";
        }


        if (DB::table('report')->count() == 0) {

            DB::table('report')->insert([

                [
                    'body' => 'this is test send sms body',
                    'to_phoneNumber' => '09355188545',
                    'status' => 'sent',
                    'nameApi' => 'Kavehnegar',
                    'error' => 'false',
                ],
                [
                    'body' => 'test send sms body message 2',
                    'to_phoneNumber' => '09351234567',
                    'status' => 'sent',
                    'nameApi' => 'Kavehnegar',
                    'error' => 'false',
                ],
                [
                    'body' => 'send sms body 3',
                    'to_phoneNumber' => '09127241654',
                    'status' => 'fail',
                    'nameApi' => 'Kavehnegar',
                    'error' => 'true',
                ],
                [
                    'body' => 'send sms body 4',
                    'to_phoneNumber' => '09383076625',
                    'status' => 'fail',
                    'nameApi' => 'Kavehnegar',
                    'error' => 'true',
                ],
            ]);

        } else {
            echo "\e Table is not empty, therefore NOT ";
        }

    }


}
