<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Footer;
use App\Models\Hero;
use App\Models\Price;
use App\Models\Service;
use App\Models\User;
use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


            User::factory(1)->create();
        $user = User::first();
        SiteSettings::create([
            'site_title' => 'Bussiness',
            'site_tagline' => ' prorpertyBook Assessment',
            'site_colour' =>  '#0011fa',
            'Status' => 'Active',
            'user_id' => $user->id,

        ]);

        Footer::create([


            'title' => 'We love to make perfect solutions for your business',
            'description'  => 'Why I say old chap that is, spiffing off his nut cor blimey guvnords ',
            'button_text' => 'Get Started',
            'published' => 'Yes',
            'user_id' => 1,


        ]);

        Hero::create([


            'title' => 'Corporate & Business. Together Forever',
            'description'  => 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.',
            'button_text_one' => 'Get Statertd',
            'button_text_two' => ' Watch Intro',
            'image' => 'uploads/car.jpg',
            'user_id' => 1,


        ]);
        Service::factory(6)->create();
       
   About::create([
        'title' => 'OUR STORY' ,
       'titledescription' => 'Our team comes with the experience and knowledge' ,
       'whotitle' => 'Whoe We are' ,
       'whodescription' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.',
       'visiontitle' => 'Vision' ,
       'visiondescription' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.' ,
       'historytitle' => 'History ' ,
       'historydescription' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.' ,
       'aboutimage' => 'uploads/us.jpg' ,
       'user_id' => $user->id,
   ]);
       
    

        Price::insert([

            [
                'subscription' => 'starter',
                'description' => 'If You try To Fail and Succeed have you failed or succeeded',
                'price' => '20',
                'features' => 'Web Development , Mobile app Developement, Proof Read',
            ],
            [
                'subscription' => 'Exclusive',
                'description' => 'If You try To Fail and Succeed have you failed or succeeded',
                'price' => '30',
                'features' => 'Web Development , Mobile app Developement, Proof Read',
            ],
            [
                'subscription' => 'Premium',
                'description' => 'If You try To Fail and Succeed have you failed or succeeded',
                'price' => '40',
                'features' => 'Web Development , Mobile app Developement, Proof Read',
            ],

           
            
        
        ]);
    }
}
