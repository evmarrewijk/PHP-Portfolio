# JavaScript opdrachten - sprint 4 - eindopdracht

In deze eindopdracht gaan we alvast een beetje werken aan je thema-switcher en aan een simpele rekenoplossing.

Je hebt een klein stuk je HTML gekregen, daar gaan we mee werken.

Uiteraard als developer zorg je er ook voor dat de HTML en CSS een beetje leuk eruit ziet ;-) 

**LET OP** Zorg ervoor dat je op de elementen met class-name werkt

We gaan twee onderdelen maken, eerst een opzet een een thema te wisselen en daarna werken we aan een 
simpele rekenopdracht. We gebruiken uiteraard alle code van de drie sprints.

## Opdrachten

### Start opdracht
* Maak een index.html, main.js en main.css bestand op de juiste locatie
* Zorg ervoor dat je pagina een aantal  basis onderdelen heeft: header, main, footer
* Plaats onderaan de main een button met de tekst "Wissel thema"
* Plaats onder de button ook een input element met een label "Aantal dagen"
* Plaats onder het input veld een tweede button met een label "Bereken in uren"
* Zorg ervoor dat er ook wat informatie staat op jouw pagina op de juiste plaats
* Stijl de elementen met een licht thema en een donker thema, in je CSS bestand heb je dus bijvoorbeeld text-light text-dark en dat ook voor background. 
* Zorg ervoor dat je standaard het lichte thema gekozen hebt op jouw elementen

### Thema wisselaar
* Maak een event op de button die een functie uitvoert (zie hieronder)
* Kijk welk thema gekozen is, en zorg ervoor dat je alle elementen van stijl wissel van licht naar donker
* Als laatste toon je in de developers console naar welk thema er gewisselt is
* ***Advanced***
* * Maak een derde thema aan, kleuren maken niet uit. Zorg ervoor dat de gebruiker kan wisselen met 1 klik voor een van de thema's
* * Zorg voor een melding in het scherm die zegt naar welk thema er gewisselt is

### Rekenmachine
* Maak een event op de tweede button die een functie uitvoert (zie hieronder)
* Als men op de button klikt sla je de waardes op in een Array
* Daarna toon je voor alle waardes in de Array het aantal uur in een eigen element met telkens de tekst  "In .. dagen zit .. uur" 
* ***Advanced***
* * Bereken ook het aantal minuten en seconden
* * Als het aantal uur minder is dan 24 maak je de tekst geel van het element
* * Als het aantal uur meer is dan 24 en minder dan 144 maak je de tekst blauw van het element
* * Als het aantal uur meer is dan 144 maak je de tekst rood van het element
* ***Expert***
* * Sorteer het aantal dagen steeds van hoog naar laag
* * Maak een tweede input element aan en verzin een andere rekenoplossing

