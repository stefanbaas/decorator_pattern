####Welk design pattern is gekozen?
Decorator Design Pattern

####Wat zijn de kenmerken (toegevoegde waarde) van dit design pattern?
Door het gebruik van de ‘Decorator Design Pattern’ is het mogelijk om een object dynamisch aan te passen. Je kunt gemakkelijk extra functionaliteit toevoegen, zonder de hele code te moeten aanpassen. Het werkt dus veel flexibeler dan ‘inhertance’.
De code wordt ook overzichtelijker en makkelijker in gebruik, doordat er gebruik wordt gemaakt van meerdere simpele classes. Iedere functionaliteit heeft zijn eigen classe. Het grote voordeel van de ‘Decorator Design Pattern’ is dan je oude code niet hoeft te aan te passen, je kan het gewoon uitbreiden met nieuwe code.

####Welke concept is bedacht om het pattern te kunnen toepassen?
In onze opdracht hebben we ervoor gekozen om een classe te maken die op basis van verschillende onderdelen voor een computer, een lijst met alle onderdelen en een totaalprijs terug geeft. Als je dus een extra onderdeel toevoegt, zal dit toegevoegd worden aan de lijst met onderdelen en de prijs zal omhoog gaan. Doordat we gebruik maken van ‘Decorator Design Pattern’ hoef je niet de hele code te herschrijven zodra er een onderdeel bij komt. Je kan dus heel makkelijk een extra class toevoegen zodra er een onderdeel bij komt.
We hebben een ‘PlainComputer’ class met een standaard tekst met onderdelen en een standaard prijs. Daarnaast hebben we een decorator class die ervoor zorgd dat de lijst met onderdelen word uitgebreid en de prijs word verhoogd. Elke computeronderdeel krijgt zijn eigen classe, met daarin de tekst die toegevoegd moet worden en de prijs die bij de totaalprijs opgeteld moet worden.

####Wat zijn de responsibilities van de geïmplementeerde classes?
De verantwoordelijkheden van de geïmplementeerde classes in ons voorbeeld is dat het extra onderdeel aan de tekst met onderdelen toevoegt en dat de prijs verhoogd wordt. Bij het toevoegen van een extra onderdeel (extra classe)  moet alles nog steeds goed gaan. Ook moet het niet uitmaken hoeveel onderdelen je toevoegt, alles moet goed blijven gaan.

####In welk opzicht wordt polymorfie bereikt?
Polymorphism betekent letterlijk “many forms”. Bij het toevoegen van extra onderdelen aan de ‘PlainComputer’ wordt de prijs en lijst met onderdelen overschreven. Er zijn meerdere mogelijkheden, doordat je zelf kan bepalen welke onderdelen je toevoegt. Op basis daarvan wordt de uitkomst anders. De code is dus heel dynamisch.
