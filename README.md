# Laravel Test
De website in deze repository heeft veel bugs en is niet erg goed geschreven. De onderstaande onderdelen zijn ontworpen om te testen hoe je deze problemen aanpakt en nieuwe functies toevoegd.

We maken ons geen zorgen over de lay-out of styling van de pagina. 

Gelieve deze respository te klonen en je wijzigingen voor elk onderdeel vast te leggen. In nette commit berichten.

## Deel 1

* Verbeter de routing die in de site wordt gebruikt.
* Voeg validatie toe aan het nieuwe productproces en zorg ervoor dat de naam van het product uniek is.

[x]

## Deel 2

* Los alle veiligheidsproblemen op die je opmerkt in de controller.
* Los eventuele beveiligingsproblemen op, bugs/verbeteringen aan de blade templates (maak je geen zorgen over de lay-out en styling).

[x]

## Deel 3

Momenteel doet het veld "beschrijving" in het formulier niets.

* Gelieve de producttabel te updaten om een "description" veld op te nemen, en het in te vullen vanuit dit formulier.

[x]

## Deel 4

* Creëer een nieuwe Product Service Class (misschien in App/Service/Product) waarvan het de taak is om een product te beheren.
Refactor de code zodat deze nieuwe class het werk doet voor new() en delete() in plaats van de controller.

[x]

## Deel 5

Momenteel doet het "tags" veld in het formulier niets. We willen graag tags aanmaken voor nieuwe producten:

* Maak een nieuw Tag model, en een nieuwe pivot tabel om de producten te koppelen aan de Tags (many-to-many).
* Neem de tags string wanneer het formulier wordt ingediend en splits deze op komma's.
* Maak een tag aan voor elk van deze items - maar alleen als deze uniek is.
* Koppel het product aan elk geselecteerde tag (of de tags nu nieuw waren of al eerder bestonden).

[x]

## Deel 6

Maak een nieuwe ProductCreated event wanneer een product wordt gecreëerd.
Luister naar de ProductCreated event (listener) en stuur een eenvoudige melding naar alle gebruikers om hen te laten weten dat het product is gemaakt.

[ ]

------------------------------

Mijn naam is Harmen Drenth.
Ik schrijf dit aan het eind van de opdracht als evaluatie van alle stappen.
In deze evaluatie geef ik aan welke onderdelen mij makkelijk af gingen en waar ik moeilijkheden mee had
Het eerste probleem waar ik tegen aan liep was het opzetten van de omgeving.
Ik begon met de opdracht proberen te downloaden op mijn persoonlijke laptop waar PHP 8 op gedownload was.
Dit bleek niet samen te gaan met het laravel versie van dit project. 
Ik wist niet of ik de laravel versie kan updaten zonder problemen te veroorzaken, dus ben ik verder gaan werken op mijn werk laptop.
Vebeterpunt een is dus niet zeker zijn of ik de laravel versie kan updaten.

Opdrachten een tot en met drie gingen soepel. 
Dit zijn dingen die ik eerder gedaan heb en geen problemen tegen kwam.
Bij opdracht vier kwam ik tegen iets dat ik niet geleerd heb in mijn vooropleiding. 
Service Class is iets waar geen aandacht werd besteed tijdens lessen en heb dus geleerd alles in de controller te houden.
Na wat onderzoek kwam ik snel achter wat een Service Class is en heb ik deze effectief geimplementeerd.

Voor opdracht vijf wist ik eerst even niet wat bedoeld werd met pivot table, maar ik kwam al snel achter wat dit is. Dit werd in mijn school een koppeltabel genoemd dus de term herkende ik niet.
Dit is de opdracht waar ik niet helemaal blij ben met mijn code want voor elke tag wordt er een nieuwe database oproep gedaan voor vergelijking. 
Ik had dit vast beter kunnen doen maar op het moment weet ik niet hoe ik dit anders zou moeten doen.
Bij opdracht zes liep ik nogmaals tegen iets aan wat ik nooit heb geleerd, en dat is een event listener.
Onderzoek naar dit onderdeel was erg lastig, want ik begreep de uitleg websites en video's niet.
Samen met het feit dat ik ook nooit gewerkt heb met email voor meldingen denk ik niet dat ik deze opdracht af kan ronden.

Als samenvatting denk ik dat ik het meeste van de opdracht goed uitgevoerd heb maar dat ik maar dat ik een beetje begeleiding nodig heb wanneer ik met gevorderde functies en opdrachten werk, zodat ik de opdrachten goed kan afronden.
Ik heb bij opdracht vier laten zien dat ik wel goed onderzoek kan doen naar onderdelen die ik niet geleerd heb, maar dat ik gevorderde functies niet begrijp zonder uitleg of voorbeelden. 
Met uitleg of voorbeelden denk ik mij er wel mee te kunnen redden

Ik heb deze opdracht Dinsdag 29 Maart gedownload en opgestart, en ik ben begonnen met de opdrachten op vrijdag 1 april direct na mijn schooltijd. In totaal heb ik vrijdag een halve dag gewerkt, zaterdag de hele dag, en zondag een halve dag gewerkt. Dit komt uit tot 16 uur.