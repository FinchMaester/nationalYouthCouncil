<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mvc;

class MvcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mvc::create([
            'title' => 'Vision',
            'slug' => 'vision',
            'image' => '',
            'description' => 'नेपाली युवालाई सबल¸ प्रतिस्पर्धी र आत्मनिर्भर बनाउदै राज्यका हरेक अंगमा सार्थक सहभागिता सुनिश्चित गरी नेपाललाई आधुनिक¸ न्यायपूर्ण र समृद्ध राष्ट्र बनाउने ।'
        ]);
        Mvc::create([
            'title' => 'Goal',
            'slug' => 'goal',
            'image' => '',
            'description' => '<li>युवाको नेतृत्व तथा क्षमता विकास</li>
            <li>उद्यमशिलताको विकास र स्वरोजगार</li>
            युवाको पहुँच र सहभागिताको सुनिश्चितता</li>
            <li>समृद्ध राष्ट्र निर्माण</li>'
        ]);
        Mvc::create([
            'title' => 'Values',
            'slug' => 'values',
            'image' => '',
            'description' => '<li>स्वस्थ¸कर्मठ र उद्यमी युवा</li>
            <li>अधिकार र कर्तव्य प्रति सचेत युवा</li>
            <li>समावेशी र सशक्त युवा</li>
            <li>नेतृत्वदायी र स्वाबलम्बी युवा</li>'
        ]);
        Mvc::create([
            'title' => 'Mission',
            'slug' => 'mission',
            'image' => '',
            'description' => '<li>राष्ट्र निर्माण एवम् राष्ट्रिय विकासमा युवाको भूमिका र सम्भाव्यताको विकास र विस्तार गर्ने,</li>
            <li>युवावर्गमा सिर्जनशीलता, उद्यमशीलता तथा अन्वेषणात्मक क्षमताको विकास गरी राष्ट्रको आधारभूत शक्तिका रुपमा स्थापित गर्दै उनीहरुमा रहेका क्षमता उजागर गर्ने,</li>
            <li>श्रमको सम्मान गर्ने संस्कृति विकास गर्दै युवाको शारिरीक, मानसिक, बौद्धिक, नैतिक तथा संवेगात्मक पक्षको समुचित विकास गरी उच्च मनोबलयुक्त, नैतिक, सुंसस्कृत, सिर्जनशील तथा व्यवसायिकरुपमा दक्ष युवा तयार गर्ने,</li>
            <li>युवाका आधारभूत अधिकारहरु सुनिश्चित गर्दै उत्पादनशील स्रोतहरुमा उनीहरुको पहुँच बढाएर राष्ट्रका राजनीतिक, आर्थिक, सामाजिक एवम् सांस्कृतिक क्षेत्रका सबै तहका नीति निर्माण, निर्णय एवम् कार्यान्वयनमा सहभागी गराउनुका साथै लैङ्गिक संवेदनशीलतामा आधारित अर्थपूर्ण सहभागिताका माध्यमबाट नेतृत्व क्षमता विकास गरी युवालाई राष्ट्रिय विकासको संवाहक शक्तिका रुपमा स्थापित गर्ने,</li>
            <li>प्राथमिकता तथा विशेष प्राथमिकताको समुहका युवालाई सकारात्मक विभेदका माध्यमबाट सशक्त गरी विकासको मूल प्रवाहमा ल्याउने ।</li>'
        ]);

        
    }

}
