<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        News::create([
            'title' => 'De kracht van diversiteit in de samenleving',
            'content' => "Nederland is een grote mix van culturen, talen en tradities en heeft een diverse bevolking uit alle hoeken van de wereld. Deze diversiteit verbetert onze gemeenschap en brengt unieke perspectieven en ervaringen met zich mee die bijdragen aan de sociale en culturele rijkdom van ons land.\n\nAls mensen met verschillende ideeën samenwerken, kunnen ze tot hele coole en nieuwe oplossingen komen. In Nederlandse bedrijven en scholen helpt het hebben van teams met mensen met allerlei achtergronden bijvoorbeeld bij het creëren van nieuwe ideeën of manieren om dingen te doen. Deze mix van ideeën is niet alleen goed voor het maken van nieuwe dingen; het helpt ook onze economie groeien.\n\nMaar het leukste van zoveel verschillende mensen in Nederland gaat niet alleen over geld of uitvindingen, het gaat over begrip en zorg voor elkaar. Wanneer we de cultuur of het verhaal van iemand anders leren kennen, beginnen we de wereld op een nieuwe manier te zien. Hierdoor kan iedereen beter met elkaar overweg en voelt het alsof ze deel uitmaken van één grote familie. Door onze verschillen te verwelkomen, maken we onze samenleving dus een betere plek om te wonen.",
            'image' => 'news1.png',
        ]);

        News::create([
            'title' => 'Het belang van diversiteit in het onderwijs',
            'content' => "Diversiteit in het onderwijs betekent dat iedereen, ongeacht achtergrond of overtuiging, gelijke kansen krijgt op school. Het leert ons verschillen te respecteren en te waarderen, wat essentieel is in onze veelzijdige wereld.\n\nDiversiteit bereidt studenten voor op de echte wereld. Het stimuleert openheid en leert ons vanuit meerdere perspectieven te denken. Docenten leren ook van deze rijke mix, door lesmethodes aan te passen en inclusiever te worden in hun benadering.\n\nScholen kunnen moeite hebben met het integreren van diversiteitsbeleid. Soms is er weerstand of een gebrek aan middelen. Maar door trainingen en workshops te organiseren, kunnen scholen docenten en studenten betrekken en bewust maken van het belang van diversiteit.",
            'image' => 'news2.png',
        ]);

        News::create([
            'title' => 'Succesvolle inclusie-initiatieven',
            'content' => "Inclusie-initiatieven zorgen ervoor dat iedereen in de samenleving mee kan doen, ongeacht hun achtergrond of capaciteiten. Deze initiatieven verbeteren de samenhang en zorgen voor gelijkheid.\n\nEen lokaal project dat sportactiviteiten voor mensen met en zonder beperking organiseert, is een geweldig voorbeeld. Het toont aan hoe gezamenlijke activiteiten begrip en vriendschap kunnen bevorderen. Een ander voorbeeld is een bedrijf dat zijn sollicitatieproces heeft aangepast om meer divers talent aan te trekken.\n\nDeze initiatieven leren ons dat inclusie iedereen ten goede komt. De volgende stap is om deze succesverhalen te delen en meer gemeenschappen en organisaties te inspireren om soortgelijke programma's te starten. Samen kunnen we bouwen aan een inclusievere wereld.",
            'image' => 'news3.png',
        ]);

        News::create([
            'title' => 'De impact van sociale cohesie op de mentale gezondheid van individuen',
            'content' => "Sociale cohesie gaat over het gevoel van samen zijn in een gemeenschap. Het helpt mensen om zich verbonden en ondersteund te voelen. Dit is belangrijk omdat het ons gelukkiger en gezonder kan maken. Wanneer mensen samenwerken en vriendelijk zijn tegen elkaar, voelen we ons beter.\n\nStudies tonen aan dat mensen met sterke sociale banden minder vaak last hebben van depressie en stress. Bijvoorbeeld, in buurten waar buren elkaar helpen en samen activiteiten doen, voelen mensen zich gelukkiger. Dit laat zien hoe belangrijk een hechte gemeenschap is voor onze geestelijke gezondheid.\n\nWe kunnen sociale cohesie verbeteren door samen met anderen dingen te doen, zoals vrijwilligerswerk of buurtfeesten. Door deel te nemen, helpen we niet alleen anderen, maar verbeteren we ook onze eigen mentale gezondheid. Iedereen kan een verschil maken door meer betrokken te zijn bij zijn of haar gemeenschap.",
            'image' => 'news4.png',
        ]);

        News::create([
            'title' => 'Samenwerking in de digitale wereld: hoe online gemeenschappen sociale cohesie bevorderen',
            'content' => "Dankzij het internet kunnen mensen van over de hele wereld met elkaar praten en samenwerken. Online gemeenschappen brengen mensen met dezelfde interesses samen. Dit is geweldig omdat je vrienden kunt maken en dingen kunt leren, zelfs als je ver uit elkaar woont.\n\nOnline groepen helpen mensen om zich deel van iets te voelen. Als je bijvoorbeeld van koken houdt, kun je lid worden van een kookgroep op het internet. Daar kun je recepten delen en advies krijgen. Dit zorgt voor een gevoel van samenwerking en vriendschap, ook al is het online.\n\nOnline samenwerken is niet altijd makkelijk. Soms kunnen mensen elkaar verkeerd begrijpen omdat ze niet face-to-face praten. Maar door duidelijk en vriendelijk te communiceren, kunnen deze problemen worden opgelost. Zo kunnen online gemeenschappen blijven groeien en mensen over de hele wereld verbinden.",
            'image' => 'news5.png',
        ]);

        News::create([
            'title' => 'Sociale cohesie in tijden van crisis: hoe gemeenschappen samenwerken om uitdagingen aan te gaan',
            'content' => "Tijdens een crisis, zoals een overstroming of pandemie, is het super belangrijk dat mensen samenwerken. Als iedereen elkaar helpt, kunnen we grote problemen makkelijker aan. Samen staan we sterk en kunnen we dingen sneller beter maken.\n\nTijdens de laatste grote storm hielpen buren elkaar met het opruimen van de schade. Sommigen boden zelfs een slaapplaats aan voor degenen die hun huis waren kwijtgeraakt. Dit soort acties laten zien hoe krachtig een gemeenschap kan zijn als mensen samenwerken.\n\nElke keer als we samen een crisis doorkomen, leren we hoe belangrijk het is om elkaar te helpen. Deze lessen kunnen we gebruiken om in de toekomst nog beter op problemen te reageren. Door samen te werken, kunnen we ervoor zorgen dat onze gemeenschappen sterker en veerkrachtiger zijn tegenover nieuwe uitdagingen.",
            'image' => 'news6.png',
        ]);
    }
}
