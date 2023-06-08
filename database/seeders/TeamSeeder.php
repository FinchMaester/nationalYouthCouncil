<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert([
            [
                'name' => 'Dig Bahadur Limbu',
                'position' => 'Chairperson',
                'role' => 'Chairperson',
                'image'=> 'digbahadur.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '+97714200539',
            ],
            [
                'name' => 'Shree Surendra Basnet',
                'position' => 'Vice Chairperson',
                'role' => 'Vice Chairperson',
                'image'=> 'surendra.jpg',
                'email' => 'surendradamak@gmail.com',
                'contact_number' => '+97716638152',
            ],
         
            [
                'name' => 'Dinesh Ghimire',
                'position' => 'Administrative Chief',
                'role' => 'Administrative Chief',
                'image'=> 'uploads/team/dinesh.jpg',
                'email' => 'dghimire72@gmail.com',
                'contact_number' => '9851211483',
            ],
            [
                'name' => 'Chandra Thapa',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/chandra.jpg',
                'email' => 'chandathapa02@gmail.com',
                'contact_number' => '9841358839',
            ],
            [
                'name' => 'Kamala Gyawali',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/kamala.jpg',
                'email' => 'kgyawali123@gmail.com',
                'contact_number' => '9841777074',
            ],
            [
                'name' => 'Shanti Ram Poudel',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/shanti.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9861999301',
            ],
            [
                'name' => 'Nawaraj Niraula',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/nawaraj.jpg',
                'email' => 'nawarajniroula@gmail.com',
                'contact_number' => '9841883040',
            ],
            [
                'name' => 'Ashok Parajuli',
                'position' => 'Section Officer',
                'role' => 'Information Officer',
                'image'=> 'uploads/team/ashok.jpg',
                'email' => 'aparajuli8@gmail.com',
                'contact_number' => '9841773715',
            ],
            [
                'name' => 'Narayani K.C.',
                'position' => 'Section Officer',
                'role' => 'Information Officer',
                'image'=> 'uploads/team/ashok.jpg',
                'email' => 'narayanikc291@yahoo.com',
                'contact_number' => '9841655414',
            ],
            [
                'name' => 'Sanamaya Ramtel',
                'position' => 'Section Officer',
                'role' => 'Information Officer',
                'image'=> 'uploads/team/ashok.jpg',
                'email' => 'sapuramtel@gmail.com',
                'contact_number' => '985439632',
            ],
            [
                'name' => 'Kalpana Khanal Basnet',
                'position' => 'Section Officer',
                'role' => 'Information Officer',
                'image'=> 'uploads/team/ashok.jpg',
                'email' => 'mailtokhanalkalpana@gmail.com',
                'contact_number' => '9841606231',
            ],
            [
                'name' => 'Khulanath Gautam',
                'position' => 'Section Officer',
                'role' => 'Information Officer',
                'image'=> 'uploads/team/ashok.jpg',
                'email' => 'khulanathgtm@yahoo.com',
                'contact_number' => '9841415745',
            ],
            [
                'name' => 'Sunita Karki',
                'position' => 'Account Officer',
                'role' => 'Account Officer',
                'image'=> 'uploads/team/sunita.jpg',
                'email' => 'sunita.jiri@gmail.com',
                'contact_number' => '9841478525',
            ],
           
        
            [
                'name' => 'Chandrawoti Koirala',
                'position' => 'Deputy Executive Officer',
                'role' => 'Deputy Executive Officer',
                'image'=> 'uploads/team/chandrawoti.jpg',
                'email' => 'cwkoirala22@gmail.com',
                'contact_number' => '9849220278',           
            ],
            [
                'name' => 'Rani Kumari Mallik',
                'position' => 'Technical Assistant',
                'role' => 'Technical Assistant',
                'image'=> 'uploads/team/rani.jpg',
                'email' => 'ranukam123@gmail.com',
                'contact_number' => '9841539741',       
            ],
       
         
            [
                'name' => 'Pushpa Dahal',
                'position' => 'Accountant',
                'role' => 'Accountant',
                'image'=> 'uploads/team/pushpa.jpg',
                'email' => 'apushpaa1234@gmail.com',
                'contact_number' => '9842494428',           
            ],

            [
                'name' => 'Hem Kumar Paudel',
                'position' => 'Computer Operator',
                'role' => 'Staffs',
                'image'=> 'uploads/team/durga.jpg',
                'email' => 'sagarpaaudel@gmail.com',
                'contact_number' => '9818503761',           
            ],
            [
                'name' => 'Rajesh Mainali',
                'position' => 'Computer Operator',
                'role' => 'Deputy Executive Officer',
                'image'=> 'uploads/team/durga.jpg',
                'email' => 'mainalirajesh287@gmail.com',
                'contact_number' => '9851199118',           
            ],
            [
                'name' => 'Mira Kafle',
                'position' => 'Computer Operator',
                'role' => 'Computer Operator',
                'image'=> 'uploads/team/mira.jpg',
                'email' => 'mira.kafle@gmail.com',
                'contact_number' => '9843639407',      
            ],

            [
                'name' => 'Apsara Koirala',
                'position' => 'Computer Operator',
                'role' => 'Computer Operator',
                'image'=> 'uploads/team/apsara.jpg',
                'email' => 'apsarakoirala32@gmail.com',
                'contact_number' => '9849353262',          
            ],
            [
                'name' => 'Naresh Maharjan',
                'position' => 'Driver',
                'role' => 'Driver',
                'image'=> 'uploads/team/naresh.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9860468088',         
            ],
            [
                'name' => 'Gokul Bhujel',
                'position' => 'Driver',
                'role' => 'Driver',
                'image'=> 'uploads/team/gokul.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9841482427',          
            ],
            [
                'name' => 'Laxmi Rai',
                'position' => 'Office Helper',
                'role' => 'Office Helper',
                'image'=> 'uploads/team/laxmi.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9841703324', 
            ],
            [
                'name' => 'Prem Kumari Khatri',
                'position' => 'Office Helper',
                'role' => 'Office Helper',
                'image'=> 'uploads/team/prem.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9847910005',         
            ],

            [
                'name' => 'Sarita Karki',
                'position' => 'Office Helper',
                'role' => 'Office Helper',
                'image'=> 'uploads/team/sarita.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9849816921',
            ],


        ]);
    }
}
