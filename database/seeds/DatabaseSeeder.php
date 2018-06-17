<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Default Users
        DB::table('users')->insert([
            'username' => 'administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('administrator'),
            'name' => 'Admins',
            'surname' => 'Adminsons',
            'admin' => '1',
            'employee' => '0'
        ]);
        DB::table('users')->insert([
            'username' => 'employee',
            'email' => 'employee@employee.com',
            'password' => bcrypt('employee'),
            'name' => 'Emploijī',
            'surname' => 'Emploijīsons',
            'admin' => '0',
            'employee' => '1'
        ]);
        DB::table('users')->insert([
            'username' => 'Rihards',
            'email' => 'Rihards@email.com',
            'password' => bcrypt('rihards'),
            'name' => 'Rihards',
            'surname' => 'Krastiņš',
            'admin' => '0',
            'employee' => '0'
        ]);
        DB::table('users')->insert([
            'username' => 'Mikus',
            'email' => 'Mikus@email.com',
            'password' => bcrypt('mikusmikus'),
            'name' => 'Mikus',
            'surname' => 'Kalniņš',
            'admin' => '0',
            'employee' => '0'
        ]);
        DB::table('users')->insert([
            'username' => 'LordVader',
            'email' => 'LordVader@empire.com',
            'password' => bcrypt('starwars'),
            'name' => 'Lord',
            'surname' => 'Vader',
            'admin' => '0',
            'employee' => '0'
        ]);

        //Default Products
        DB::table('products')->insert([
            'title' => 'Star Wars Choose Your Side Hat',
            'body' => 'We understand that the movies tend to take the stance of good versus evil, but it is never that simple in real life, is it? From a certain point of view, anything can be "good." If we take a step back, it is hard to choose sides, but no matter which one we choose, we will at least have a snazzy hat to go with it. In fact, it is part of the uniform. Choose between The Empire or The Rebellion with these Star Wars themed hats. Both caps are black and feature their iconic logos front and center. Hook and loop patch on the back and be adjusted for Sith or Jedi comfort.',
            'price' => '17.22',
            'cover_image' => 'Star_Wars_Choose_Your_Side_Cap.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars Darth Vader Briefcase',
            'body' => 'If there is one thing you do not want to be, it is not ready for a meeting with Darth Vader. Dude strides so fast that his heavy cape billows out behind him. That is a good sign that he is going to be on time and you would better be, too. Also, anybody who can Force Kick you from across the table is bad to anger during meetings. Be on time and be prepared or suffer the consequences. Show up on time armed with this Darth Vader Briefcase to be ready for anything the Dark Side requires of you. This briefcase with styling like Vader\'s armor can hold old-school maps to the location of the Rebel base, your hologram projector (or your tablet or laptop if that technology is more your speed), and that risk assessment report you wrote on how the thermal exhaust ports really should be shielded. Hopefully you won\'t have to go after Smith in accounting again, cause he puts everybody to sleep and then nobody will be listening when it comes your turn....',
            'price' => '86.18',
            'cover_image' => 'Star_Wars_Darth_Vader_Briefcase.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars Darth Vader Slippers',
            'body' => 'You know that hissing sound when Darth Vader breathes? It\'s not the breathing machine you\'ve been led to believe. Really, what you are hearing is Anakin sighing because his boots hurt his feet. If only he had some nice cozy slippers to nestle his tootsies into. Good thing, at least, you can with these Darth Vader Slippers. Slide your aching feet into some slippers of pure Sith comfort. If your toes are robotic and evil, these Darth Vader Slippers are just the slippers you\'ve been looking for. They are very padded, have no-slip dots, and are constructed by the same made up aliens that built the rest of Vader\'s suit - promise. Regardless, in your Darth Vader Slippers, your feet will be cozy and everyone who sees you will be jealous. Because that\'s what it really means to be a Sith.',
            'price' => '25.84',
            'cover_image' => 'Star_Wars_Darth_Vader_Slippers.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars Darth Vader Teapot Set',
            'body' => 'It\'s no secret that Darth Vader has anger issues. He\'s quick with the barking of orders and the Force Choking. He rules by intimidation, which works... okay. We wonder, though, if Vader could take a page from a leader who had the admiration and respect of his crew: Jean-Luc Picard. And let\'s face it, the crew of the Enterprise were much better shots than the average Stormtrooper. What\'s the big difference between the two leaders? Tea, of course. Earl Grey. Hot. If only Vader could sit down and wrap his black gloves around a steaming mug of bergamot-scented tea, then he could get to the bottom of all his anger and be a more productive leader. Then maybe someone could have fixed that thermal exhaust port so it didn\'t go directly to the reactor system. Alas, we can\'t rewrite history... but you can muse about what could have been while enjoying your favorite tea with this Star Wars Darth Vader Teapot Set.',
            'price' => '51.70',
            'cover_image' => 'Star_Wars_Darth_Vader_Teapot_Set.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars Episode VII The Force Awakens Kylo Ren Ultimate FX',
            'body' => 'Not much to say, couldn\'t find a description :(',
            'price' => '112.03',
            'cover_image' => 'Star_Wars_Episode_VII_The_Force_Awakens_Kylo_Ren_Ultimate_FX.png',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars First Edition On-Ear Headphones',
            'body' => 'Figran D\'an uses them. Tedn Dahai uses them. Max Rebo, Sy Snootles, and Droopy McCool use them. Heck, even DJ Zuckuss uses them. And now you can enjoy them, too. No, we\'re not talking about Special Edition Deflector Shields - we\'re talking about Star Wars First Edition On-Ear Headphones! Star Wars First Edition On-Ear Headphones feature professionally-tuned, 40mm drivers which pump the tunes into your earballs with amazing clarity. They\'ve got Quiescent PNC (Passive Noise Reduction) to cut out the background noise around you. And Star Wars First Edition On-Ear Headphones are very portable - folding up into their own carrying case. Star Wars First Edition On-Ear Headphones were created by infusing Star Wars goodness into STREET by 50™ Credit headphones - and they are ready to take your ears to a musical galaxy far, far away!',
            'price' => '172.34',
            'cover_image' => 'Star_Wars_First_Edition_On-Ear_Headphones.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars Hero Droid RC BB-8',
            'body' => 'Direct from a droid manufacturing plant in a galaxy far, far away comes this scaled down version of the spherical astromech droid made famous by the documentaries collectively known on Earth as "Star Wars." This little BB unit is ready to obey your commands - both remote control commands and voice commands. Just like the larger version of BB-8 you met in Star Wars: The Force Awakens, this astromech has a strong strong loyalty subprogram and is ready to do whatever you command. (As a related note, this could be the best warning we\'ve ever seen on a product. "Caution. Do not walk down stairs. BB-8 will follow and could get damaged.") If you\'ve always felt like you needed someone to talk to, this BB-8 is ready to listen. He reacts to 13 different words or phrases and simultaneously uses his motion detector to scan for intruders. Or you can use the included 2-stick remote for 360° control over his movements. Or put him in Follow Me mode to let him tag along wherever you go. Along with the film-accurate lights and sounds (plus over 100 unique animations), he also randomly expresses his mood the way only an astromech droid can. Basically, it\'s just like having your own BB unit without the messiness of having the First Order looking for you.',
            'price' => '198.23',
            'cover_image' => 'Star_Wars_Hero_Droid_RC_BB-8.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars R2-D2 Bluetooth Speakerphone.jpg',
            'body' => 'R2-D2 has all sorts of surprises inside him. He\'s got plans and a message from Princess Leia, Luke\'s lightsaber, rocket jets, and a real mean streak (hey, he flat out kills another droid in an episode of Clone Wars). He also has a bunch of these speakers inside, so he always has a gift ready for new people he meets. Plug this Star Wars R2-D2 Bluetooth Speakerphone into a USB port, and it\'ll charge up. When it\'s charged, either pair the speaker with your Bluetooth-enabled phone or plug your audio device into Artoo\'s standard 3.5mm audio jack. Artoo will light up, literally, including the familiar indicator light and some new funky blue "underdome" lighting he\'s had installed. Since he\'s Bluetooth, you can even make calls on him when you have your phone paired up. But his raison d\'etre is to play music for you. The first song we played through our Star Wars R2-D2 Bluetooth Speakerphone was the Cantina Song. It was also the second. And the third. And the... okay, we\'ve got it on loop.',
            'price' => '43.08',
            'cover_image' => 'Star_Wars-R2-D2_Bluetooth_Speakerphone.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars R2-D2 Coffee Press',
            'body' => 'We don\'t know about you, but we\'re kind of a mess in the mornings. We get up on the wrong side of the bed literally (what? inside is a side!). We try to brush our teeth with shaving cream, and we put our underwear on backwards. We\'re basically a hot mess. In slippers. That probably don\'t match. Let R2 help you navigate your mornings more successfully with this Star Wars R2-D2 Coffee Press. He\'s happy to help a human in need. Put your grounds and boiling water in his glass body, brew for a few minutes, plunge, and he\'ll serve up 32 oz. of piping hot coffee. For folks playing along at home, that\'s 4 cups, so even if your motivator is so bad that the Jawas put you back on the scrap heap, he can still get you going',
            'price' => '34.46',
            'cover_image' => 'Star_Wars_R2-D2_Coffee_Press.jpg',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
        DB::table('products')->insert([
            'title' => 'Star Wars The Last Jedi Porg Animated Plush',
            'body' => 'We\'re not gonna lie - we were pretty excited back when Disney first took over the Star Wars franchise. And not just because they suddenly announced the six new movies that were headed our way, but also because, come on, haven\'t you ever wanted to take home a cute animatronic from a Disney ride and keep it as a pet? Except, we learned it doesn\'t work that way. Don\'t ask us how. But this little animated porg can be your very own! No longer restricted to just sitting in a ride cart on a track and pointing at the moving figures, this one is totally huggable and loveable. The little porg flaps its wings and moves its mouth as one of three different sounds come out. And no ride operator will be chasing you down to take it back, either!',
            'price' => '21.53',
            'cover_image' => 'Star_Wars_The_Last_Jedi_Porg_Animated_Plush.gif',
            'amount_in_storage' => '200',
            'user_id' => '5'
        ]);
    }
}
