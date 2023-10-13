<?php

namespace Database\Seeders;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '11',
            'email' => 'admin@gmail.com',
            'phone' => '085955290636',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            'is_admin' => true
        ]);

        User::create([
            'nik' => '1123',
            'email' => 'guru@gmail.com',
            'phone' => '0859550975546',
            'firstName' => 'Ahmad faiz',
            'lastName' => 'Ahmad faiz',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'bogor',
            'password' => bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '976546475647',
            'is_admin' => false
        ]);

        User::create(["nik" => "7787559438", "email" => "lsessions0@blogtalkradio.com", "phone" => "5063128031", "firstName" => "Lauri", "lastName" => "Sessions", "jns_kelamin" => "Perempuan", "alamat" => "31 Jenna Hill", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-06 05:51:04", "photoProfile" => "photoProfile.jpg", "remember_token" => "319 Esker Drive"]);
        User::create(["nik" => "6254112256", "email" => "gpenrice1@scientificamerican.com", "phone" => "7937628565", "firstName" => "Guglielmo", "lastName" => "Penrice", "jns_kelamin" => "Laki-laki", "alamat" => "932 Karstens Road", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-20 12:25:23", "photoProfile" => "photoProfile.jpg", "remember_token" => "9 Cardinal Hill"]);
        User::create(["nik" => "5909904019", "email" => "wlawland2@state.tx.us", "phone" => "7377428936", "firstName" => "Wynne", "lastName" => "Lawland", "jns_kelamin" => "Perempuan", "alamat" => "83404 Arizona Plaza", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-10 09:30:15", "photoProfile" => "photoProfile.jpg", "remember_token" => "6013 Stuart Junction"]);
        User::create(["nik" => "5134103011", "email" => "bpolding3@chronoengine.com", "phone" => "3193428214", "firstName" => "Butch", "lastName" => "Polding", "jns_kelamin" => "Laki-laki", "alamat" => "9718 Oxford Avenue", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-07 07:43:07", "photoProfile" => "photoProfile.jpg", "remember_token" => "0302 Esker Street"]);
        User::create(["nik" => "8303557777", "email" => "rjarrette4@narod.ru", "phone" => "3645366000", "firstName" => "Reagen", "lastName" => "Jarrette", "jns_kelamin" => "Laki-laki", "alamat" => "376 Quincy Crossing", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-22 05:59:13", "photoProfile" => "photoProfile.jpg", "remember_token" => "620 Lien Point"]);
        User::create(["nik" => "1025212509", "email" => "arosenkrantz5@hud.gov", "phone" => "9467386164", "firstName" => "Ashton", "lastName" => "Rosenkrantz", "jns_kelamin" => "Laki-laki", "alamat" => "7349 Buhler Avenue", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-21 13:31:38", "photoProfile" => "photoProfile.jpg", "remember_token" => "256 Melvin Park"]);
        User::create(["nik" => "5212323622", "email" => "jpickett6@php.net", "phone" => "6666965100", "firstName" => "Junette", "lastName" => "Pickett", "jns_kelamin" => "Perempuan", "alamat" => "3475 Carpenter Alley", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-17 07:16:52", "photoProfile" => "photoProfile.jpg", "remember_token" => "1077 Lighthouse Bay Alley"]);
        User::create(["nik" => "0644788968", "email" => "nstleger7@jimdo.com", "phone" => "6044400653", "firstName" => "Nehemiah", "lastName" => "St Leger", "jns_kelamin" => "Laki-laki", "alamat" => "714 Trailsway Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2022-09-26 19:05:35", "photoProfile" => "photoProfile.jpg", "remember_token" => "7 Kennedy Park"]);
        User::create(["nik" => "8162895914", "email" => "mcorry8@wordpress.com", "phone" => "2452156224", "firstName" => "Margarita", "lastName" => "Corry", "jns_kelamin" => "Perempuan", "alamat" => "215 Atwood Crossing", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-06 03:14:29", "photoProfile" => "photoProfile.jpg", "remember_token" => "448 Fallview Court"]);
        User::create(["nik" => "9969884344", "email" => "zmalatalant9@goodreads.com", "phone" => "7945238866", "firstName" => "Zandra", "lastName" => "Malatalant", "jns_kelamin" => "Perempuan", "alamat" => "04 Menomonie Court", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-04 21:52:45", "photoProfile" => "photoProfile.jpg", "remember_token" => "400 Holy Cross Terrace"]);
        User::create(["nik" => "6019521079", "email" => "ipostena@prweb.com", "phone" => "5551365498", "firstName" => "Isabel", "lastName" => "Posten", "jns_kelamin" => "Perempuan", "alamat" => "41 West Hill", "password" => bcrypt("12345678"), "email_verified_at" => "2023-02-07 09:15:20", "photoProfile" => "photoProfile.jpg", "remember_token" => "6 Twin Pines Place"]);
        User::create(["nik" => "6638347535", "email" => "mransonb@thetimes.co.uk", "phone" => "9499430059", "firstName" => "Milly", "lastName" => "Ranson", "jns_kelamin" => "Perempuan", "alamat" => "595 Thackeray Trail", "password" => bcrypt("12345678"), "email_verified_at" => "2023-08-24 23:13:47", "photoProfile" => "photoProfile.jpg", "remember_token" => "523 Judy Crossing"]);
        User::create(["nik" => "0465628737", "email" => "tmokesc@chron.com", "phone" => "6117915028", "firstName" => "Tadeas", "lastName" => "Mokes", "jns_kelamin" => "Laki-laki", "alamat" => "7 Clemons Trail", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-26 22:55:01", "photoProfile" => "photoProfile.jpg", "remember_token" => "44253 Paget Avenue"]);
        User::create(["nik" => "0693702206", "email" => "fjessettd@fda.gov", "phone" => "4032329756", "firstName" => "Fifine", "lastName" => "Jessett", "jns_kelamin" => "Perempuan", "alamat" => "71 Eagle Crest Way", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-07 04:26:56", "photoProfile" => "photoProfile.jpg", "remember_token" => "280 Upham Parkway"]);
        User::create(["nik" => "3905388715", "email" => "shallowaye@ask.com", "phone" => "8216627723", "firstName" => "Salli", "lastName" => "Halloway", "jns_kelamin" => "Perempuan", "alamat" => "3 Ramsey Lane", "password" => bcrypt("12345678"), "email_verified_at" => "2023-08-31 04:50:10", "photoProfile" => "photoProfile.jpg", "remember_token" => "6 Starling Alley"]);
        User::create(["nik" => "7558901006", "email" => "rlaurenzf@ycombinator.com", "phone" => "5892222606", "firstName" => "Richmound", "lastName" => "Laurenz", "jns_kelamin" => "Laki-laki", "alamat" => "996 Welch Court", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-23 18:51:36", "photoProfile" => "photoProfile.jpg", "remember_token" => "044 Toban Road"]);
        User::create(["nik" => "9632955366", "email" => "twinspireg@go.com", "phone" => "7519193766", "firstName" => "Truda", "lastName" => "Winspire", "jns_kelamin" => "Perempuan", "alamat" => "8 Grover Circle", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-25 01:42:10", "photoProfile" => "photoProfile.jpg", "remember_token" => "75 Ridgeview Place"]);
        User::create(["nik" => "3441580508", "email" => "egadmanh@opera.com", "phone" => "2392027724", "firstName" => "Ernest", "lastName" => "Gadman", "jns_kelamin" => "Laki-laki", "alamat" => "3 Morningstar Avenue", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-04 06:30:10", "photoProfile" => "photoProfile.jpg", "remember_token" => "657 Anthes Center"]);
        User::create(["nik" => "2280163284", "email" => "tlarmuthi@geocities.com", "phone" => "1884423671", "firstName" => "Taite", "lastName" => "Larmuth", "jns_kelamin" => "Laki-laki", "alamat" => "14 Meadow Ridge Terrace", "password" => bcrypt("12345678"), "email_verified_at" => "2022-12-31 18:04:59", "photoProfile" => "photoProfile.jpg", "remember_token" => "3677 Dexter Drive"]);
        User::create(["nik" => "6689833828", "email" => "ncaulketj@yandex.ru", "phone" => "4758201116", "firstName" => "Nessi", "lastName" => "Caulket", "jns_kelamin" => "Perempuan", "alamat" => "4 Barnett Park", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-26 00:16:41", "photoProfile" => "photoProfile.jpg", "remember_token" => "948 Artisan Drive"]);
        User::create(["nik" => "5789715834", "email" => "ftedmank@mapy.cz", "phone" => "1093017805", "firstName" => "Freddie", "lastName" => "Tedman", "jns_kelamin" => "Laki-laki", "alamat" => "298 Shopko Road", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-10 15:45:39", "photoProfile" => "photoProfile.jpg", "remember_token" => "7520 Maple Wood Trail"]);
        User::create(["nik" => "7775612487", "email" => "pdarrigonel@addthis.com", "phone" => "7179511023", "firstName" => "Penelopa", "lastName" => "Darrigone", "jns_kelamin" => "Perempuan", "alamat" => "45 Weeping Birch Avenue", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-31 03:48:32", "photoProfile" => "photoProfile.jpg", "remember_token" => "62634 Kings Circle"]);
        User::create(["nik" => "6783597806", "email" => "pblaneym@phpbb.com", "phone" => "7552406881", "firstName" => "Phyllida", "lastName" => "Blaney", "jns_kelamin" => "Perempuan", "alamat" => "9 Alpine Terrace", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-22 17:58:49", "photoProfile" => "photoProfile.jpg", "remember_token" => "7727 Golf Course Trail"]);
        User::create(["nik" => "3982527376", "email" => "hhadcockn@hibu.com", "phone" => "9166281191", "firstName" => "Hagen", "lastName" => "Hadcock", "jns_kelamin" => "Laki-laki", "alamat" => "77561 Scofield Trail", "password" => bcrypt("12345678"), "email_verified_at" => "2022-12-15 12:22:44", "photoProfile" => "photoProfile.jpg", "remember_token" => "1406 Sloan Parkway"]);
        User::create(["nik" => "7709631126", "email" => "dnelthorpeo@phpbb.com", "phone" => "8839323346", "firstName" => "Doris", "lastName" => "Nelthorpe", "jns_kelamin" => "Perempuan", "alamat" => "8014 Westend Junction", "password" => bcrypt("12345678"), "email_verified_at" => "2023-05-31 19:13:30", "photoProfile" => "photoProfile.jpg", "remember_token" => "0 Dottie Alley"]);
        User::create(["nik" => "0428668461", "email" => "abugdenp@ebay.co.uk", "phone" => "3034462631", "firstName" => "Adair", "lastName" => "Bugden", "jns_kelamin" => "Laki-laki", "alamat" => "85727 Thierer Lane", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-21 09:18:31", "photoProfile" => "photoProfile.jpg", "remember_token" => "81 Tomscot Drive"]);
        User::create(["nik" => "3440549593", "email" => "ariddelq@bloomberg.com", "phone" => "3279020029", "firstName" => "Alex", "lastName" => "Riddel", "jns_kelamin" => "Laki-laki", "alamat" => "5 Continental Crossing", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-13 19:23:47", "photoProfile" => "photoProfile.jpg", "remember_token" => "66933 Onsgard Drive"]);
        User::create(["nik" => "5970455342", "email" => "mmyfordr@zimbio.com", "phone" => "4199531518", "firstName" => "Marlyn", "lastName" => "Myford", "jns_kelamin" => "Perempuan", "alamat" => "165 Elka Park", "password" => bcrypt("12345678"), "email_verified_at" => "2022-12-14 06:05:58", "photoProfile" => "photoProfile.jpg", "remember_token" => "41 1st Hill"]);
        User::create(["nik" => "5596146021", "email" => "ldaughtons@networksolutions.com", "phone" => "7825039119", "firstName" => "Leif", "lastName" => "Daughton", "jns_kelamin" => "Laki-laki", "alamat" => "2 Randy Trail", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-26 22:07:11", "photoProfile" => "photoProfile.jpg", "remember_token" => "214 Oxford Trail"]);
        User::create(["nik" => "9222777840", "email" => "ebirtwistlet@oaic.gov.au", "phone" => "1137354703", "firstName" => "Emelen", "lastName" => "Birtwistle", "jns_kelamin" => "Laki-laki", "alamat" => "17 Monterey Avenue", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-25 06:55:34", "photoProfile" => "photoProfile.jpg", "remember_token" => "354 Pleasure Road"]);
        User::create(["nik" => "6591161112", "email" => "pstanifordu@fda.gov", "phone" => "7935032775", "firstName" => "Pippa", "lastName" => "Staniford", "jns_kelamin" => "Perempuan", "alamat" => "9 Eggendart Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-29 09:11:17", "photoProfile" => "photoProfile.jpg", "remember_token" => "72 Rigney Center"]);
        User::create(["nik" => "5683516781", "email" => "rsheplandv@ebay.com", "phone" => "1196615541", "firstName" => "Rubi", "lastName" => "Shepland", "jns_kelamin" => "Perempuan", "alamat" => "7 Harbort Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-05 15:02:18", "photoProfile" => "photoProfile.jpg", "remember_token" => "0 Maple Wood Park"]);
        User::create(["nik" => "7138998953", "email" => "fmeddowsw@squidoo.com", "phone" => "1831372581", "firstName" => "Fredelia", "lastName" => "Meddows", "jns_kelamin" => "Perempuan", "alamat" => "4742 Vermont Place", "password" => bcrypt("12345678"), "email_verified_at" => "2023-08-19 07:58:48", "photoProfile" => "photoProfile.jpg", "remember_token" => "44697 Randy Place"]);
        User::create(["nik" => "3629207588", "email" => "hoakesx@about.me", "phone" => "2504096549", "firstName" => "Helyn", "lastName" => "Oakes", "jns_kelamin" => "Perempuan", "alamat" => "41 Orin Hill", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-09 15:36:52", "photoProfile" => "photoProfile.jpg", "remember_token" => "70 Messerschmidt Center"]);
        User::create(["nik" => "6612636696", "email" => "dcleally@goodreads.com", "phone" => "6201405023", "firstName" => "Darya", "lastName" => "Cleall", "jns_kelamin" => "Perempuan", "alamat" => "18 Holy Cross Trail", "password" => bcrypt("12345678"), "email_verified_at" => "2023-08-31 22:37:10", "photoProfile" => "photoProfile.jpg", "remember_token" => "3 Golf Course Circle"]);
        User::create(["nik" => "5204172637", "email" => "bcleynez@dedecms.com", "phone" => "6564552652", "firstName" => "Berti", "lastName" => "Cleyne", "jns_kelamin" => "Laki-laki", "alamat" => "1 Buena Vista Parkway", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-25 06:50:57", "photoProfile" => "photoProfile.jpg", "remember_token" => "6572 Clarendon Center"]);
        User::create(["nik" => "7492923295", "email" => "bcran10@skyrock.com", "phone" => "7383100556", "firstName" => "Bartlett", "lastName" => "Cran", "jns_kelamin" => "Laki-laki", "alamat" => "7 Graceland Road", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-04 19:44:18", "photoProfile" => "photoProfile.jpg", "remember_token" => "0206 Little Fleur Point"]);
        User::create(["nik" => "1112532056", "email" => "gmedforth11@gmpg.org", "phone" => "6575138768", "firstName" => "Gustaf", "lastName" => "Medforth", "jns_kelamin" => "Laki-laki", "alamat" => "9964 Center Drive", "password" => bcrypt("12345678"), "email_verified_at" => "2023-08-08 00:35:33", "photoProfile" => "photoProfile.jpg", "remember_token" => "98139 Nova Parkway"]);
        User::create(["nik" => "9832592887", "email" => "dtebb12@posterous.com", "phone" => "3208156943", "firstName" => "Derrek", "lastName" => "Tebb", "jns_kelamin" => "Laki-laki", "alamat" => "6 Fisk Place", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-28 09:24:01", "photoProfile" => "photoProfile.jpg", "remember_token" => "6467 Hollow Ridge Way"]);
        User::create(["nik" => "0117720739", "email" => "aanning13@toplist.cz", "phone" => "4342528904", "firstName" => "Anallise", "lastName" => "Anning", "jns_kelamin" => "Perempuan", "alamat" => "73 Milwaukee Circle", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-09 00:16:58", "photoProfile" => "photoProfile.jpg", "remember_token" => "89635 Meadow Valley Drive"]);
        User::create(["nik" => "7509427991", "email" => "htatem14@mtv.com", "phone" => "1041745826", "firstName" => "Horten", "lastName" => "Tatem", "jns_kelamin" => "Laki-laki", "alamat" => "6 Waubesa Road", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-05 12:46:36", "photoProfile" => "photoProfile.jpg", "remember_token" => "39321 Kropf Court"]);
        User::create(["nik" => "5703267463", "email" => "esprigg15@theglobeandmail.com", "phone" => "7157751388", "firstName" => "Enrichetta", "lastName" => "Sprigg", "jns_kelamin" => "Perempuan", "alamat" => "53875 Roxbury Parkway", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-09 04:03:09", "photoProfile" => "photoProfile.jpg", "remember_token" => "7 Bunker Hill Road"]);
        User::create(["nik" => "7596439233", "email" => "pkender16@github.io", "phone" => "4556638711", "firstName" => "Phillip", "lastName" => "Kender", "jns_kelamin" => "Laki-laki", "alamat" => "820 Dixon Terrace", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-20 16:03:59", "photoProfile" => "photoProfile.jpg", "remember_token" => "95 Thackeray Circle"]);
        User::create(["nik" => "2510276921", "email" => "khiom17@usgs.gov", "phone" => "5277499244", "firstName" => "Kayla", "lastName" => "Hiom", "jns_kelamin" => "Perempuan", "alamat" => "0 Moose Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-05 00:05:31", "photoProfile" => "photoProfile.jpg", "remember_token" => "6332 Browning Street"]);
        User::create(["nik" => "2061995438", "email" => "mgethen18@over-blog.com", "phone" => "5868112559", "firstName" => "Mohandas", "lastName" => "Gethen", "jns_kelamin" => "Laki-laki", "alamat" => "692 Tony Terrace", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-16 01:16:58", "photoProfile" => "photoProfile.jpg", "remember_token" => "7948 Anthes Circle"]);
        User::create(["nik" => "5553742692", "email" => "mfilipputti19@soup.io", "phone" => "7355923378", "firstName" => "Mufinella", "lastName" => "Filipputti", "jns_kelamin" => "Perempuan", "alamat" => "5 Luster Park", "password" => bcrypt("12345678"), "email_verified_at" => "2023-08-16 06:58:32", "photoProfile" => "photoProfile.jpg", "remember_token" => "1376 Esker Road"]);
        User::create(["nik" => "2983175332", "email" => "kkoenen1a@buzzfeed.com", "phone" => "2371103835", "firstName" => "Kelsi", "lastName" => "Koenen", "jns_kelamin" => "Perempuan", "alamat" => "9745 Aberg Way", "password" => bcrypt("12345678"), "email_verified_at" => "2023-02-03 10:32:27", "photoProfile" => "photoProfile.jpg", "remember_token" => "2856 Fulton Junction"]);
        User::create(["nik" => "2826993291", "email" => "khinkins1b@is.gd", "phone" => "9943972337", "firstName" => "Kimmy", "lastName" => "Hinkins", "jns_kelamin" => "Perempuan", "alamat" => "99468 Troy Street", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-19 14:19:00", "photoProfile" => "photoProfile.jpg", "remember_token" => "444 Anhalt Way"]);
        User::create(["nik" => "1741197244", "email" => "xamerici1c@is.gd", "phone" => "1251014415", "firstName" => "Ximenes", "lastName" => "Americi", "jns_kelamin" => "Laki-laki", "alamat" => "35232 Clyde Gallagher Street", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-01 10:00:06", "photoProfile" => "photoProfile.jpg", "remember_token" => "9656 Boyd Place"]);
        User::create(["nik" => "2492425924", "email" => "kberntssen1d@unicef.org", "phone" => "8451808017", "firstName" => "Kirbie", "lastName" => "Berntssen", "jns_kelamin" => "Perempuan", "alamat" => "5 Green Place", "password" => bcrypt("12345678"), "email_verified_at" => "2022-12-29 02:35:08", "photoProfile" => "photoProfile.jpg", "remember_token" => "8 Merchant Parkway"]);
        User::create(["nik" => "1538031973", "email" => "dsanzio1e@cnet.com", "phone" => "9521179260", "firstName" => "Derek", "lastName" => "Sanzio", "jns_kelamin" => "Laki-laki", "alamat" => "415 Mosinee Drive", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-21 03:51:13", "photoProfile" => "photoProfile.jpg", "remember_token" => "98 Sachtjen Pass"]);
        User::create(["nik" => "3604857945", "email" => "jrosbottom1f@1688.com", "phone" => "3114474460", "firstName" => "Joelle", "lastName" => "Rosbottom", "jns_kelamin" => "Perempuan", "alamat" => "2050 Columbus Way", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-11 16:29:52", "photoProfile" => "photoProfile.jpg", "remember_token" => "54 Oxford Court"]);
        User::create(["nik" => "4635400611", "email" => "theadings1g@google.com.au", "phone" => "7777572059", "firstName" => "Townie", "lastName" => "Headings", "jns_kelamin" => "Laki-laki", "alamat" => "80258 Mockingbird Street", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-29 22:27:56", "photoProfile" => "photoProfile.jpg", "remember_token" => "7 Arkansas Avenue"]);
        User::create(["nik" => "5026202527", "email" => "lpadley1h@soundcloud.com", "phone" => "9896675708", "firstName" => "L;urette", "lastName" => "Padley", "jns_kelamin" => "Perempuan", "alamat" => "2405 Barnett Drive", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-05 17:43:58", "photoProfile" => "photoProfile.jpg", "remember_token" => "3487 Eagle Crest Terrace"]);
        User::create(["nik" => "2923452941", "email" => "bbricksey1i@japanpost.jp", "phone" => "7189665717", "firstName" => "Bobbee", "lastName" => "Bricksey", "jns_kelamin" => "Perempuan", "alamat" => "36 Montana Hill", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-01 17:31:16", "photoProfile" => "photoProfile.jpg", "remember_token" => "3244 Declaration Alley"]);
        User::create(["nik" => "1891840452", "email" => "dmcalinion1j@ucsd.edu", "phone" => "8817102312", "firstName" => "Dermot", "lastName" => "McAlinion", "jns_kelamin" => "Laki-laki", "alamat" => "30 Green Crossing", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-14 06:34:49", "photoProfile" => "photoProfile.jpg", "remember_token" => "9 Oak Junction"]);
        User::create(["nik" => "6639406748", "email" => "lshadfourth1k@bloomberg.com", "phone" => "3275439798", "firstName" => "Laughton", "lastName" => "Shadfourth", "jns_kelamin" => "Laki-laki", "alamat" => "68776 Prairieview Circle", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-18 07:59:05", "photoProfile" => "photoProfile.jpg", "remember_token" => "33193 Sommers Street"]);
        User::create(["nik" => "1342353048", "email" => "naloshkin1l@google.nl", "phone" => "8351579783", "firstName" => "Neils", "lastName" => "Aloshkin", "jns_kelamin" => "Laki-laki", "alamat" => "94 Badeau Point", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-07 12:25:15", "photoProfile" => "photoProfile.jpg", "remember_token" => "14201 Old Shore Trail"]);
        User::create(["nik" => "5775671031", "email" => "lpohls1m@washingtonpost.com", "phone" => "9708960929", "firstName" => "Lonni", "lastName" => "Pohls", "jns_kelamin" => "Perempuan", "alamat" => "68470 Arizona Place", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-01 12:15:03", "photoProfile" => "photoProfile.jpg", "remember_token" => "199 Gale Plaza"]);
        User::create(["nik" => "4433688460", "email" => "lgoldes1n@ucoz.com", "phone" => "7339681128", "firstName" => "Lane", "lastName" => "Goldes", "jns_kelamin" => "Perempuan", "alamat" => "52 Johnson Place", "password" => bcrypt("12345678"), "email_verified_at" => "2023-02-02 06:57:01", "photoProfile" => "photoProfile.jpg", "remember_token" => "31765 Lien Trail"]);
        User::create(["nik" => "4061206990", "email" => "aadshed1o@dion.ne.jp", "phone" => "3848255871", "firstName" => "Ansel", "lastName" => "Adshed", "jns_kelamin" => "Laki-laki", "alamat" => "9223 Emmet Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2023-05-19 03:13:09", "photoProfile" => "photoProfile.jpg", "remember_token" => "61968 Butterfield Junction"]);
        User::create(["nik" => "6009668786", "email" => "fprott1p@weibo.com", "phone" => "7803507590", "firstName" => "Fredia", "lastName" => "Prott", "jns_kelamin" => "Perempuan", "alamat" => "489 Arizona Drive", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-15 02:37:16", "photoProfile" => "photoProfile.jpg", "remember_token" => "58162 Buena Vista Plaza"]);
        User::create(["nik" => "9727842623", "email" => "fvanzon1q@comcast.net", "phone" => "5914959505", "firstName" => "Fleming", "lastName" => "Van Zon", "jns_kelamin" => "Laki-laki", "alamat" => "2837 Ridgeview Road", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-05 23:55:50", "photoProfile" => "photoProfile.jpg", "remember_token" => "08 Ridgeview Avenue"]);
        User::create(["nik" => "1011979152", "email" => "oreedie1r@guardian.co.uk", "phone" => "8598174040", "firstName" => "Ode", "lastName" => "Reedie", "jns_kelamin" => "Laki-laki", "alamat" => "25370 Holmberg Way", "password" => bcrypt("12345678"), "email_verified_at" => "2022-12-11 03:26:10", "photoProfile" => "photoProfile.jpg", "remember_token" => "2368 Dunning Circle"]);
        User::create(["nik" => "3150396050", "email" => "pwigsell1s@theguardian.com", "phone" => "4344080808", "firstName" => "Penelopa", "lastName" => "Wigsell", "jns_kelamin" => "Perempuan", "alamat" => "2 Nobel Road", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-27 10:36:49", "photoProfile" => "photoProfile.jpg", "remember_token" => "10 Vernon Point"]);
        User::create(["nik" => "3549289782", "email" => "dasprey1t@archive.org", "phone" => "4071695397", "firstName" => "Darci", "lastName" => "Asprey", "jns_kelamin" => "Perempuan", "alamat" => "949 Thompson Terrace", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-07 06:05:14", "photoProfile" => "photoProfile.jpg", "remember_token" => "48 Transport Hill"]);
        User::create(["nik" => "4228142680", "email" => "smoores1u@time.com", "phone" => "7329710073", "firstName" => "Sancho", "lastName" => "Moores", "jns_kelamin" => "Laki-laki", "alamat" => "1 Ilene Point", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-10 21:48:02", "photoProfile" => "photoProfile.jpg", "remember_token" => "4448 Dexter Pass"]);
        User::create(["nik" => "0358260698", "email" => "kstroder1v@amazon.com", "phone" => "8211266983", "firstName" => "Karee", "lastName" => "Stroder", "jns_kelamin" => "Perempuan", "alamat" => "0552 Hooker Way", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-21 04:03:36", "photoProfile" => "photoProfile.jpg", "remember_token" => "70 Crownhardt Alley"]);
        User::create(["nik" => "0032983662", "email" => "nrobertson1w@is.gd", "phone" => "3601407168", "firstName" => "Nevil", "lastName" => "Robertson", "jns_kelamin" => "Laki-laki", "alamat" => "2001 Amoth Drive", "password" => bcrypt("12345678"), "email_verified_at" => "2022-12-11 15:59:38", "photoProfile" => "photoProfile.jpg", "remember_token" => "56936 Browning Crossing"]);
        User::create(["nik" => "7175217684", "email" => "jfarrance1x@behance.net", "phone" => "5101701060", "firstName" => "Johanna", "lastName" => "Farrance", "jns_kelamin" => "Perempuan", "alamat" => "598 Nevada Avenue", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-12 22:12:54", "photoProfile" => "photoProfile.jpg", "remember_token" => "94 Bellgrove Place"]);
        User::create(["nik" => "3283757429", "email" => "elockey1y@trellian.com", "phone" => "3243572075", "firstName" => "Emylee", "lastName" => "Lockey", "jns_kelamin" => "Perempuan", "alamat" => "5 Vermont Park", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-19 10:30:59", "photoProfile" => "photoProfile.jpg", "remember_token" => "601 Dunning Avenue"]);
        User::create(["nik" => "1125160543", "email" => "gforestall1z@narod.ru", "phone" => "4526280598", "firstName" => "Gerik", "lastName" => "Forestall", "jns_kelamin" => "Laki-laki", "alamat" => "42 Hallows Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-29 14:46:10", "photoProfile" => "photoProfile.jpg", "remember_token" => "9541 Eagan Hill"]);
        User::create(["nik" => "0284014745", "email" => "dlimon20@wsj.com", "phone" => "4033537506", "firstName" => "Demetria", "lastName" => "Limon", "jns_kelamin" => "Perempuan", "alamat" => "3184 Ilene Circle", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-13 10:26:25", "photoProfile" => "photoProfile.jpg", "remember_token" => "950 6th Circle"]);
        User::create(["nik" => "6881287232", "email" => "ttripney21@aol.com", "phone" => "6067405412", "firstName" => "Tammy", "lastName" => "Tripney", "jns_kelamin" => "Perempuan", "alamat" => "315 Stoughton Drive", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-08 22:25:45", "photoProfile" => "photoProfile.jpg", "remember_token" => "15 Redwing Crossing"]);
        User::create(["nik" => "0536261229", "email" => "gsundin22@myspace.com", "phone" => "9765807784", "firstName" => "Gasper", "lastName" => "Sundin", "jns_kelamin" => "Laki-laki", "alamat" => "8749 Algoma Avenue", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-09 15:53:35", "photoProfile" => "photoProfile.jpg", "remember_token" => "62282 Goodland Park"]);
        User::create(["nik" => "4692843748", "email" => "pbouchard23@discovery.com", "phone" => "6514270652", "firstName" => "Panchito", "lastName" => "Bouchard", "jns_kelamin" => "Laki-laki", "alamat" => "93 Victoria Way", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-22 13:34:56", "photoProfile" => "photoProfile.jpg", "remember_token" => "65119 Sage Lane"]);
        User::create(["nik" => "5288201757", "email" => "hdonativo24@google.fr", "phone" => "1641955219", "firstName" => "Hanson", "lastName" => "Donativo", "jns_kelamin" => "Laki-laki", "alamat" => "86 Coolidge Terrace", "password" => bcrypt("12345678"), "email_verified_at" => "2022-12-25 22:36:07", "photoProfile" => "photoProfile.jpg", "remember_token" => "6572 American Place"]);
        User::create(["nik" => "2978758546", "email" => "rmursell25@cyberchimps.com", "phone" => "7406902612", "firstName" => "Reba", "lastName" => "Mursell", "jns_kelamin" => "Perempuan", "alamat" => "5801 Lindbergh Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2023-05-20 11:34:47", "photoProfile" => "photoProfile.jpg", "remember_token" => "695 Weeping Birch Court"]);
        User::create(["nik" => "6349242467", "email" => "agrigori26@canalblog.com", "phone" => "9525169949", "firstName" => "Angie", "lastName" => "Grigori", "jns_kelamin" => "Laki-laki", "alamat" => "14920 Toban Court", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-13 03:26:06", "photoProfile" => "photoProfile.jpg", "remember_token" => "232 Oneill Crossing"]);
        User::create(["nik" => "5158677085", "email" => "lpeyntue27@shinystat.com", "phone" => "1035055008", "firstName" => "Livy", "lastName" => "Peyntue", "jns_kelamin" => "Perempuan", "alamat" => "1 Hoffman Place", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-19 12:20:15", "photoProfile" => "photoProfile.jpg", "remember_token" => "636 Glendale Point"]);
        User::create(["nik" => "3215688565", "email" => "djacobovitch28@so-net.ne.jp", "phone" => "6074439362", "firstName" => "Derward", "lastName" => "Jacobovitch", "jns_kelamin" => "Laki-laki", "alamat" => "9 West Alley", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-28 14:47:19", "photoProfile" => "photoProfile.jpg", "remember_token" => "93 Rowland Street"]);
        User::create(["nik" => "4706202329", "email" => "gwilbud29@merriam-webster.com", "phone" => "2976937044", "firstName" => "Georgeanna", "lastName" => "Wilbud", "jns_kelamin" => "Perempuan", "alamat" => "0 Sage Plaza", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-19 20:55:19", "photoProfile" => "photoProfile.jpg", "remember_token" => "1 Melrose Way"]);
        User::create(["nik" => "6061464142", "email" => "mgotling2a@yale.edu", "phone" => "3662738686", "firstName" => "Miquela", "lastName" => "Gotling", "jns_kelamin" => "Perempuan", "alamat" => "9 Pennsylvania Alley", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-12 11:26:35", "photoProfile" => "photoProfile.jpg", "remember_token" => "53325 Oxford Park"]);
        User::create(["nik" => "4124370369", "email" => "bscholfield2b@mozilla.org", "phone" => "5557619634", "firstName" => "Bria", "lastName" => "Scholfield", "jns_kelamin" => "Perempuan", "alamat" => "4975 Leroy Parkway", "password" => bcrypt("12345678"), "email_verified_at" => "2023-07-28 07:34:48", "photoProfile" => "photoProfile.jpg", "remember_token" => "8299 Schmedeman Pass"]);
        User::create(["nik" => "4959151013", "email" => "seichmann2c@arstechnica.com", "phone" => "4853266376", "firstName" => "Shamus", "lastName" => "Eichmann", "jns_kelamin" => "Laki-laki", "alamat" => "6277 Sundown Plaza", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-15 05:08:00", "photoProfile" => "photoProfile.jpg", "remember_token" => "109 Wayridge Point"]);
        User::create(["nik" => "2920775731", "email" => "ldory2d@army.mil", "phone" => "2486370423", "firstName" => "Loralie", "lastName" => "Dory", "jns_kelamin" => "Perempuan", "alamat" => "8 Springview Road", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-21 10:36:17", "photoProfile" => "photoProfile.jpg", "remember_token" => "067 Eagle Crest Crossing"]);
        User::create(["nik" => "4315679305", "email" => "kdowles2e@sohu.com", "phone" => "6125210493", "firstName" => "Kassey", "lastName" => "Dowles", "jns_kelamin" => "Perempuan", "alamat" => "534 Doe Crossing Parkway", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-07 09:18:23", "photoProfile" => "photoProfile.jpg", "remember_token" => "74635 Meadow Vale Park"]);
        User::create(["nik" => "0945594941", "email" => "ccraigmile2f@soundcloud.com", "phone" => "5015729912", "firstName" => "Carmencita", "lastName" => "Craigmile", "jns_kelamin" => "Perempuan", "alamat" => "0 Everett Drive", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-04 06:44:59", "photoProfile" => "photoProfile.jpg", "remember_token" => "86652 Eagan Plaza"]);
        User::create(["nik" => "5341547489", "email" => "adesaur2g@fastcompany.com", "phone" => "3503552133", "firstName" => "Agatha", "lastName" => "Desaur", "jns_kelamin" => "Perempuan", "alamat" => "55 Victoria Park", "password" => bcrypt("12345678"), "email_verified_at" => "2023-04-17 14:10:15", "photoProfile" => "photoProfile.jpg", "remember_token" => "23074 Sullivan Lane"]);
        User::create(["nik" => "8666270187", "email" => "rtennet2h@economist.com", "phone" => "8853480613", "firstName" => "Ring", "lastName" => "Tennet", "jns_kelamin" => "Laki-laki", "alamat" => "5 Fallview Place", "password" => bcrypt("12345678"), "email_verified_at" => "2023-01-24 13:03:20", "photoProfile" => "photoProfile.jpg", "remember_token" => "7 Milwaukee Place"]);
        User::create(["nik" => "3866387067", "email" => "emccathy2i@facebook.com", "phone" => "3166254369", "firstName" => "Enrichetta", "lastName" => "McCathy", "jns_kelamin" => "Perempuan", "alamat" => "5321 7th Alley", "password" => bcrypt("12345678"), "email_verified_at" => "2022-09-25 11:36:35", "photoProfile" => "photoProfile.jpg", "remember_token" => "099 East Parkway"]);
        User::create(["nik" => "0545626188", "email" => "rsouthcomb2j@jugem.jp", "phone" => "1708364612", "firstName" => "Ric", "lastName" => "Southcomb", "jns_kelamin" => "Laki-laki", "alamat" => "5 Ridgeview Pass", "password" => bcrypt("12345678"), "email_verified_at" => "2022-09-25 01:03:02", "photoProfile" => "photoProfile.jpg", "remember_token" => "65214 Aberg Plaza"]);
        User::create(["nik" => "8183374379", "email" => "jheyball2k@mlb.com", "phone" => "1953585779", "firstName" => "Jim", "lastName" => "Heyball", "jns_kelamin" => "Laki-laki", "alamat" => "60509 Jenifer Plaza", "password" => bcrypt("12345678"), "email_verified_at" => "2023-06-11 02:47:47", "photoProfile" => "photoProfile.jpg", "remember_token" => "5484 Luster Center"]);
        User::create(["nik" => "9108484015", "email" => "rtombs2l@devhub.com", "phone" => "3364881955", "firstName" => "Rupert", "lastName" => "Tombs", "jns_kelamin" => "Laki-laki", "alamat" => "53969 Sutherland Road", "password" => bcrypt("12345678"), "email_verified_at" => "2023-03-19 06:47:35", "photoProfile" => "photoProfile.jpg", "remember_token" => "43114 Fulton Junction"]);
        User::create(["nik" => "6756207911", "email" => "cdulanty2m@com.com", "phone" => "5897768082", "firstName" => "Cindi", "lastName" => "Dulanty", "jns_kelamin" => "Perempuan", "alamat" => "6720 Blue Bill Park Crossing", "password" => bcrypt("12345678"), "email_verified_at" => "2022-10-31 12:21:55", "photoProfile" => "photoProfile.jpg", "remember_token" => "343 Manufacturers Parkway"]);
        User::create(["nik" => "3833484837", "email" => "rpoppy2n@nifty.com", "phone" => "9158968425", "firstName" => "Romona", "lastName" => "Poppy", "jns_kelamin" => "Perempuan", "alamat" => "94 Cody Circle", "password" => bcrypt("12345678"), "email_verified_at" => "2023-02-11 09:21:55", "photoProfile" => "photoProfile.jpg", "remember_token" => "089 Duke Circle"]);
        User::create(["nik" => "3913023151", "email" => "mlegrice2o@freewebs.com", "phone" => "7753605135", "firstName" => "Meade", "lastName" => "Legrice", "jns_kelamin" => "Laki-laki", "alamat" => "70 Buell Crossing", "password" => bcrypt("12345678"), "email_verified_at" => "2023-08-01 07:15:42", "photoProfile" => "photoProfile.jpg", "remember_token" => "157 Vermont Place"]);
        User::create(["nik" => "0588196274", "email" => "tcaulton2p@nba.com", "phone" => "2009071187", "firstName" => "Thorn", "lastName" => "Caulton", "jns_kelamin" => "Laki-laki", "alamat" => "23 Montana Crossing", "password" => bcrypt("12345678"), "email_verified_at" => "2023-09-14 04:56:18", "photoProfile" => "photoProfile.jpg", "remember_token" => "81474 Dexter Avenue"]);
        User::create(["nik" => "9916306516", "email" => "leveral2q@answers.com", "phone" => "9043765726", "firstName" => "Lynette", "lastName" => "Everal", "jns_kelamin" => "Perempuan", "alamat" => "42 Havey Plaza", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-06 17:23:33", "photoProfile" => "photoProfile.jpg", "remember_token" => "54055 Kennedy Court"]);
        User::create(["nik" => "5091243453", "email" => "bstaniklaw2r@ucoz.com", "phone" => "7362682665", "firstName" => "Bendick", "lastName" => "Staniklaw", "jns_kelamin" => "Laki-laki", "alamat" => "88 Arapahoe Circle", "password" => bcrypt("12345678"), "email_verified_at" => "2022-11-03 01:07:51", "photoProfile" => "photoProfile.jpg", "remember_token" => "05587 Evergreen Hill"]);

        // Siswa::create([
        //     'nis' => '11',
        //     'email' => 'hilmy@gmail.com',
        //     'phone' => '085955290636',
        //     'firstName' => 'Ahmad hilmy',
        //     'lastName' => 'Ahmad hilmy',
        //     'jns_kelamin' => 'Laki-laki',
        //     'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
        //     'password' =>bcrypt('12345678'), //password
        // ]);


        User::create([
            'nik' => '21',
            'email' => 'guru@gmail.com',
            'phone' => '09887675552344',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '41',
            'email' => '14@gmail.com',
            'phone' => '82373432356',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '51',
            'email' => '16@gmail.com',
            'phone' => '162536257',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '61',
            'email' => '019@gmail.com',
            'phone' => '62357257564',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '71',
            'email' => '827@gmail.com',
            'phone' => '56323525624726',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '81',
            'email' => '192@gmail.com',
            'phone' => '874124153146',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '91',
            'email' => '016@gmail.com',
            'phone' => '76237267355',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '111',
            'email' => '134@gmail.com',
            'phone' => '56156234624',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '121',
            'email' => '8715@gmail.com',
            'phone' => '75757574727723',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '143',
            'email' => '1927@gmail.com',
            'phone' => '676326381827',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '122',
            'email' => '212y@gmail.com',
            'phone' => '17632761423',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '982788',
            'email' => '272@gmail.com',
            'phone' => '273827637833462',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);


        User::create([
            'nik' => '08676',
            'email' => '245@gmail.com',
            'phone' => '9235623414236',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '808',
            'email' => '78275@gmail.com',
            'phone' => '14242634623',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '980809',
            'email' => '726375@gmail.com',
            'phone' => '927382368686',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '89079798',
            'email' => '26562532357@gmail.com',
            'phone' => '127835612352',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '89668',
            'email' => '23625@gmail.com',
            'phone' => '25626532537',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '27489',
            'email' => '82732836@gmail.com',
            'phone' => '227627572357',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '253723',
            'email' => '7796@gmail.com',
            'phone' => '928386236238',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '2372738',
            'email' => '027@gmail.com',
            'phone' => '26726852723244',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '2637263',
            'email' => '63473@gmail.com',
            'phone' => '256372473257',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '252653',
            'email' => '6868@gmail.com',
            'phone' => '523463432786783',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '5637723',
            'email' => '7525@gmail.com',
            'phone' => '235423578325452374',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '2387287',
            'email' => '236@gmail.com',
            'phone' => '3462434537457354',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '3797294',
            'email' => '3427@gmail.com',
            'phone' => '63476324237457234',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);
        User::create([
            'nik' => '979',
            'email' => 'u53234@gmail.com',
            'phone' => '823868236482634',
            'firstName' => 'Ahmad hilmy',
            'lastName' => 'Ahmad hilmy',
            'jns_kelamin' => 'Laki-laki',
            'alamat' => 'RT03/RW06 Dsn. Gogourung Dawuhan Kademangan Blitar Jawa Timur 66161 Indonesia',
            'password' =>bcrypt('12345678'), //password
            'email_verified_at' => now(),
            'photoProfile' => 'photoProfile.jpg',
            'remember_token' => '1234567898765432',
            // 'is_admin' => true
        ]);


    }
}
