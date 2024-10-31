<?php
/*
Plugin Name: Positive phrases (Hungarian version, Pozitív gondolatok )
Plugin URI: http://wordpress.org/extend/plugins/positive-phrases/
Description: This show  phrases. Hungarian version) Pozitív gondolatok (nemcsak) agykontrollosoknak. Véletlenszerűen jelenít meg pozitív gondolatokat a  cikk után.
Author: Kunsági Zsolt
Version: 1.0
Author URI: http://blogbook.hu
*/
/*EOF*/

function addsentence($input) {

$sentences =array(
'Jól érzem magam.',
'Nyugodt, energikus és vidám vagyok.',
'Szerveim egészségesen működnek.',
'Elégedett és kiegyensúlyozott vagyok.',
'Békében és megértésben élek mindenkivel.',
'Türelemmel figyelek másokra.',
'Minden helyzetben megtalálom a jót, a szépet és a hasznosat.',
'Elfogadom és becsülöm magamat és embertársaimat.',
'Bízom magamban, bízom belső bölcsességemben.',

'Örömmel és bátran kezdek minden új dolognak.',
'Bármilyen helyzetbe kerülök, nyugodt és higgadt maradok.',
'Örömmel végzem a rám bízott feladatokat.',
'Minden helyzetben feltalálom magamat.',
'Tanulékony vagyok, az új dolgozokat örömmel fogadom.',
'Jó kedvvel teszem a dolgomat.',
'Figyelmemet remekül tudom összpontosítani.',
'Értékes és egyedi ember vagyok.',
'Mindenkiben észreveszem a jót, a szeretetreméltót.',

'Szeretem az embereket, szívesen segítek rajtuk.',
'Elfogadom mások szeretetét, segítségét.',
'Őszinte és becsületes vagyok.',
'Gondolataimat bátran megosztom másokkal.',
'Érzéseimet a megfelelő formában mindig őszintén kimutatom.',
'Emlékszem a számomra fontos dolgokra.',
'Jó a memóriám.',
'Remek ötleteim támadnak.',
'Könnyedén és örömmel tanulok.',

'Bármibe is kezdek, sikerre viszem azt.',
'Minden problémámra megtalálom a megoldást.',
'Szorgalmas és kitartó vagyok.',
'Biztonságban vagyok.',
'Életemet én irányítom.',
'Felelősséget vállalok minden döntésemért és tettemért.',
'Valamennyi döntésem a javamat szolgálja.',
'Kész vagyok változtatni az életemen.',
'A változtatásoktól egyre jobban érzem magam.',

'Örömmel fogadom életem minden percét.',
'Szeretettel és megértéssel közeledem másokhoz.',
'Vidám, boldog és szabad vagyok.',
'Bárhová megyek, szeretettel fogadnak az emberek.',
'Emberi kapcsolataimat a szeretet, a tisztelet és a megértés irányítja.',
'Minden kapcsolatom harmonikus.',
'Figyelek testem üzeneteire.',
'Vigyázok az egészségemre.',
'Egészséges ételeket fogyasztok.',

'Békesség van a szívemben és a lelkemben.',
'A szeretet jegyében élek és cselekszem.',
'Minden perc szépségét felismerem.',
'Bátran és őszintén szembenézek életem minden eseményével.',
'Kész vagyok változtatni hozzáállásomon és szóhasználatomon.',
'Örömmel elengedem a haragot és a sérelmeket, mert ez szabaddá, könnyűvé és gondtalanná tesz.',
'A változás életem természetes rendje.',
'Élvezem és elfogadom a változást.',
'Rendet tartok magamban és magam körül.',

'Egészséges, erős és elégedett vagyok.',
'Az embereknek szüksége van rám.',
'Öröm számomra szeretetet adni és kapni.',
'Életemet boldoggá és sikeressé tudom tenni.',
'Bőségben, egészségben és szeretetben élek.',
'Életemnek értelme van.',
'Egészséges vagyok és az is maradok.',
'Napról napra minden szempontból egyre jobban és jobban vagyok.',
'Szeretteim testileg és lelkileg egészségesek és szépen haladnak előre fejlődésük útján.',

'Becsülöm és szeretem magamat.',
'Erényeimből és eredményeim-~ből erőt merítek.',
'Hibáimból tanulok és azok révén is fejlődöm.',
'Jó kapcsolatban vagyok embertársaimmal.',
'Könnyen és jól döntök.',
'Megbízom megérzéseimben, egyre intuitívabb vagyok.',
'Könnyen fogadom a változást, szükség esetén magam is változom.',
'Örömmel szélnek eresztek minden feszültséget, idegességet, előítéletet és kritikát.',
'Könnyen megértek másokat.',

'Örömmel nézem embertársaim fejlődését.',
'Kivételes, egyedi ember vagyok.',
'Értékelem egyediségemet.',
'Szabadon önmagam lehetek és másoknak is megengedem, hogy szabadon önmaguk legyenek.',
'Az élet várt és váratlan módokon gazdagít.',
'Életem minden percét értékelem.',
'Tisztelettel fordulok a körülöttem élőkhöz.',
'Örömmel fogadom életem minden új napját.',
'Erős és talpraesett vagyok.',

'Szélnek eresztek mindent, ami fölöslegessé vált.',
'Egészséges ételekre vágyom.',
'Csodálom testemet, megőrzöm egészségét.',
'Elengedem a régit és befogadom az újat.',
'Mindenkiből a legjobb énjét hozom elő.',
'Hibáimból tanulok, eredményeimből erőt merítek.',
'Életem alakulásáért én vagyok a felelős.',
'Szeretni tudom magamat.',
'Szabadon és örömmel fejezem ki gondolataimat és érzéseimet.',

'Biztonságban érzem magamat.',
'Összhangban állok a világmindenséggel.',
'Minden élethelyzetben magabiztos maradok.',
'Elengedem a múltat és mindenkinek megbocsátok.',
'Örülni tudok embertársaim sikereinek.',
'Képes vagyok a feltétel nélküli szeretetre.',
'Képességeimmel az emberiség javát szolgálom.',
'Szeretetet, megértést és békességet teremtek magam körül.',
'Gondolataimmal, szavaimmal és tetteimmel az emberiség fejlődését szolgálom.',

'Napról napra egyre boldogabbá, egyre teljesebbé válik életem.'
);


$chosen = $sentences[ mt_rand( 0, count( $sentences) - 1 )];


  wp_register_style('addsentence_css', plugins_url('/css/addsentence.css', __FILE__));
	 
  wp_enqueue_style( 'addsentence_css' ); 

return $input . "<br><br>

<p style='font-family: GreatVibes, serif;font-size: 48px; line-height: 100%;'>$chosen</p>
<p><a href='https://wordpress.org/plugins/positive-phrases/' target='_blank' >Pozitív gondolatok plugin </a></p>";
}





add_filter('the_content', 'addsentence');
