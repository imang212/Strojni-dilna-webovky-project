# Strojni dilna webovka

**popis:**\
Firemní webovka.

**technologie:**

backend: php

frontend: vanilla css, html, JavaScript

databaze: MySQL

## Anotace

Jedná se o firemní web na Strojní dílnu, jež obrábí kovy a dělá zámečničinu. Dokumentace se skládá
nejdříve z úvodu. Poté mám rešerši, kde jsou obrázky stránek, kterými jsem se inspiroval. Technologie
a potom v praktické části mám návrh a produktivizaci, kam jsem dal dle mého úsudku vhodné kódy.
V závěru mám napsáno všechno, co jsem udělal.

## Klíčová slova

Obrázky, popis, registrace, přihlášení, responzivita, kontakty, stroje, formulář, jazyky, cookies

## Obsah

- Úvod
- 1 Rešerše
- 2 Technologie
   - 2.1 HTML
   - 2.2 CSS
   - 2.3 MySQL....................................................................................................................................
   - 2.4 PHP
   - 2.5 JAVASCRIPT
   - 2.6 BOOTSTRAP
- 3 Praktická část
   - 3.1 Návrhy
   - 3.2 Produktizace
   - 3.3 Popis pro uživatele
- Závěr
- Použitá literatura
- Seznam obrázků


## Úvod

Rozhodl jsem se ve své projektové práci udělat web na tátovu firmu, která se zabývá obráběním
kovů. Vybral jsem si to, protože táta je profesí soustružník, v oboru pracuje od roku 1984,firmu si
vybudoval postupně od píky. Začal stavbou dílny a postupného skupování různých strojů, nástrojů,
nářadí a materiálů pro výrobu. Přesto, že si svou živnost založil před 16 lety, nemá ještě žádnou
webovou stránku a tak si myslím, že už je načase nějakou vytvořit.

Stránka bude v html a stylována v css i bootstrapu. Na hlavní stránce bude switcher s obrázky
strojní dílny. Udělám databáze v MySQL na účty, zakázky a novinky, aby se stále uchovali v systému.
Rozvržení udělám přes flexbox, aby i při zmenšení stránky šli na stránce vidět všechny věci a mělo to
rovnost. Dále udělám responzivitu, aby stránka fungovala i pro mobil. Udělám popis stránky, popis
našich strojů a napíšu kontaktní údaje. Dále napíšu, co všechno děláme a z jakých materiálů. Na stránce
bude přihlášení a registrace. Jeden účet také bude mít admin, přes který se bude upravovat stránka a
přidávat novinky. Na stránce bude formulář na vyplnění žádosti o zakázku. Stránka se bude moc
přeložit do angličtiny, bubou odkazy na další části stránky. Nějaké funkce budou udělané v javascriptu
a nějaké i v php. Udělám hosting a tam dám celou webovku.


## 1 Rešerše

_Obrázek 1 Responsivní navigace_

**Responzivní navigace ze stránky codepen.io** – Stylována, udělaná ve flexboxu a

s responzivním menu přes JavaScript.

**Příklad formuláře pro komentáře ze stránky codepen.io** – stylování

_Obrázek 2 Formulář na komentáře_


_Obrázek 3 Formulář pro vyplnění dotazu_

**Příklad formuláře pro vyplnění dotazu ze stránky codepen.io** – stylování

_Obrázek 4 Slider_

**Příklad slideru s čísly ze stránky codepen.io** – Slider, který je udělaný přes JavaScript.


_Obrázek 5 Stránka na kovoobrábění_

**Inspirace ze stránky kovoobrabenikorvas.cz** – Stránka na kovoobrábění s moderním stylem.

Je udělaná veřejně a nastavena pro sociální média. Udělaná v bootstrapu a přes WordPress.

Můžeme tam najít naimportvaný google font, spoustu naimportovaných css knihoven, JQuerry,
xml a ikonu. Je tam hodně udělané funkcí přes JavaScript, aby stránka správně zobrazovala. Je

tam i Ajax.


## 2 Technologie

### 2.1 HTML

Hypertext Markup Language je v informatice název značkovacího jazyka používaného pro torbu
webových stránek, které jsou propojeny s hypertextovými odkazy. Vznikl v roce 1990 v Cernu, kde také
zprovoznili v roce 1991 svůj první web na světě.

### 2.2 CSS

Kaskádové styly (CSS) je v informatice jazyk pro popis způsobu zobrazení elementů na stránkách
napsaných v jazycích HTML, XHTML nebo XML. Jeho výhodami jsou rozsáhlejší stylování, rozsáhlejší
možnosti formátování, dá se kombinovat s Javascriptem nebo jednodušší údržba webové prezentace.
První verze vyšla. 17. prosince 1996.

### 2.3 MySQL....................................................................................................................................

MySQL je otevřený systém řízení báze dat uplatňující relační databázový model, vytvořený švédskou
firmou MySQL AB. Je multiplatformní databáze. Komunikace s ní probíhá pomocí jazyka SQL, což
znamená standardizovaný strukturovaný dotazovací jazyk, který je používán pro práci s daty v relačních
databázích.


### 2.4 PHP

PHP (Hypertext Preprocessor) je populární univerzální skriptovací jazyk, který je vhodný pro
programování dynamických internetových stránek a webových aplikací. Vznikl 8. června 1995. Jeho
výhodami jsou rozsáhly soubor funkcí, multiplatformost nebo podpora mnoha databázových systému
a hostingů. Jeho nevýhodou je nekonzistentní pojmenování funkcí nebo nejednotné pořadí parametrů.

### 2.5 JAVASCRIPT

JavaScript je multiplatformní, objektově orientovaný a událostmi řízený skriptovací jazyk. Nejčastěji se
používá na webových stránkách, kde je často vkládaný jako součást HTML. Vznikl v roce 1995. Jeho
výhodou je menší zatěžování serveru a jeho nevýhodou je, že neumí přistupovat k souborům (kromě
cookies).

### 2.6 BOOTSTRAP

Bootstrap je svobodná a otevřená sada nástrojů kaskádových stylů pro tvorbu webu a webových
aplikací. Obsahuje návrhářské šablony založené na HTML a CSS, sloužící pro úpravu typografie,
formulářů, tlačítek, navigace a dalších komponent rozhraní, stejně jako další volitelná rozšíření
programovacího jazyka JavaScriptu.


## 3 Praktická část

### 3.1 Návrhy

_Obrázek 6 ERD Návrh_

**Návrh ERD** – Databáze ve, které se uchovávají účty, novinky a zakázky. Každý účet je má propojené své
id s zakázkou a novinkou.


### 3.2 Produktizace

_Obrázek 7 Slider kód_

**Slider** – Automatický slider obrázků v JavaScriptu. V seznamu mám třídy obrázků a num je číslo obrázku.
For cyklus, který prochází seznam obrázků a každému dá, aby byl posunutý o 100% doleva. První funkce
přepne na další obrázek aktuální obrázek pošle o -100% doleva, tím ho schová pryč z rámu a ostatní
zbývající obrázky posune také o 100% doleva a tím se nám ukáže další obrázek z prava. Do obou funkcí
vstupuje proměnná num. Druhá funkce funguje stejně, ale naopak, takže posouvá obrázky doprava.
Potom obě funkce mají ještě event listenery udělané na třídu buttonu, to je, že při kliknutí zjistí na


jakém slidu jsou a potom buďto přičte num číslo o 1 a nebo, když je na konci, tak zase číslo dá nazpátek,
že dá num číslo na 0. Druhý event listener naopak. Na konci je ještě setInterval(), který po pár
sekundách automaticky přepne na další obrázek.

_Obrázek 8 kód registrace_


**PHP registrace** – Do tady toho kódu vstupuje celkem 10 proměnných z registračního formuláře, které
přenese, aby se dali použít v sql jazyku. Následuje kontrola asi více než 10 chyb. Od správného hesla a
jestli jsou v textech správné znaky až po kontrolu, jestli už se v databázi daný email nebo přezdívka
nenachází. Jestli se najde nějaká chyba, tak se přes header na stránce vypíše chyba uživateli. Pokud se
žádná chyba nenajde, tak uživatele zapíše do databáze se zašifrovaným heslem, tím ho zaregistrovala.
Poté se uživateli objeví správa, že se úspěšně zaregistroval a pošle ho to na stránku s přihlášením.

_Obrázek 9 Přepínání jazyků_

**Přepínání jazyků** – Jazyky se přepínají pomocí sessionu, pokud není nastavený session, tak se mi nastaví
defaultní jazyk. Pokud si uživatel zvolí jazyk, tak pomocí sessionu, kterého jazyka proměnná tam zrovna,
je tak ji nastaví přes pomocí switche.


_Obrázek 10 Načítání novinek_

**Načítání novinek** – Načítání seznamu novinek přes JavaScript pomocí fetch API a response handleru
z php souboru, kde se připojí do databáze a potom dál pracuji se seznamem v JavaScriptu, kde si
vytvořím elementy pro komentáře, potom k nim přiřadím classy a pak je přidám do divu pro komentáře.
U datumů mám udělané, aby se mi předváděli z databázového formátu do normálního formátu. U
komentáře je i tlačítko na vymazání, který se ukáže jenom adminovi a dá se s nim smazat vymazat


konkrétní novinka podle jejího id a pomocí JQuerry a Ajaxu. Když vše proběhne v pořádku, tak se potom
jenom znovu načte stránka, kde je upravená databáze.

### 3.3 Popis pro uživatele

_Obrázek 11 Hlavní stránka_

**Hlavní stránka** – Zde je hlavní stránka, která se načte hned při vyhledání webu a je zde vidět

název, popis a automatický slider s obrázky.

_Obrázek 12 Spodní část_

**Spodní část hlavní stránky** – Zde je video z dílny a poté tlačítko s odkazem na formulář o
vyplnění žádosti.


_Obrázek 13 Formulář na zakázku_

**Formulář na vyplnění a odeslání zakázky** – Zde je formulář, kde si zákazník vyplní informace

o zakázce a potom je odešle.

_Obrázek 14 Část se stroji_

**Část stránky se stroji.** – Zde je galerie našich strojů, kde se i jednotlivé obrázky dají zobrazit.


_Obrázek 15 Správa účtu_

**Správa účtu** – Přihlášený uživatel má přístup ke své správě účtu, kde se mu ukážou jeho

informace.

_Obrázek 16 Správa objednávek_

**Správa objednávek** – Admin má přístup ke správě objednávek, kde si jednotlivé objednávky
může prohlížet a mazat si je.


_Obrázek 17 Novinky_

**Novinky** – Část stránky, kde se návštěvníkům ukazují novinky. Pravomoc přidávat novinky a

mazat je má jenom admin. Obyčejnému uživateli se formulář na přidání a tlačítko vymazat

nezobrazí.

_Obrázek 18 Responzivita_

**Responzivita** – Zde je responzivita udělaná pro android a menší zařízení s responzivním menu.

Dole je vyskakovací okno pro souhlas s cookies.


## Závěr

Na projektu jsem pracoval skoro každý den. Nejdříve jsem udělal headery s odkazy, article a footer
s dalšími informacemi přes flexbox, aby to mělo rovnost a bylo vidět i při zmenšení. Flexbox jsem
uplatnil skoro na všechno. Stránku jsem nastyloval v kaskádních stylech (CSS). Hlavní styl rozhraní,
který jsem uplatnil na všechny stránky, jsem dal do jednoho css souboru, a když jsem něco dělal přímo
v nějaké části stránky, tak jsem to styloval přímo tam. Druhy písma mám nastavené přes css.

Nalevo nahoře je logo stránky. V headeru jsou tlačítka s odkazy na několik dalších částí stránky:
úvod, poslat žádost, ceník s materiály, novinky, naše stroje a kontakty. Přidal jsem pozadí s klíči.
V úvodu mám nadpis Strojní Dílna Evangel-ik kovoobrábění, pod nadpisem je stručný popis toho, co se
v dílně dělá, potom mám automatický slider obrázku udělaný přes JavaScript i s ikonami šipek, pomocí
kterých se dají obrázky přesouvat doleva nebo doprava. Pod sliderem mám 6 barevných boxů přes grid,
ve kterých je napsáno co všechno děláme, pak video, kde se soustruží a pod videem button na odeslání
žádosti o zakázku. V poslat žádost je formulář, ve kterém se vyplní potřebné informace o zakázce,
kterou by chtěl zákazník udělat. Potom mám ceník, kde jsou vypsané všechny materiály, se kterými se
v dílně pracuje. V části naše stroje jsou názvy a obrázky strojů, které se dají zvětšit pomocí knihovny
zoom.js v JavaScriptu. Kontakty jsem udělal, kde jsou základní údaje email, telefon, čas, kdy je otevřeno
a kus mapy s polohou naší firmy v iframu.

Udělal jsem databázi na účty a novinky. Potom tam mám registraci v php, kde se vyplní 10 různých
údajů, nejdříve se zkontroluje jestli jsou všechny údaje v pořádku a když ne, tak vyšle header a vypíše
to uživateli na stránku červeně chybu. Kontroluje se třeba, jestli se už v databázi email nebo uživatelské
jméno nenachází a když je všechno v pořádku, tak se uživatel zapíše do databází a je zaregistrovaný.
Potom tam je stránka s přihlášením přes php, kde se uživatel přihlásí pomocí email nebo přezdívky a
hesla, zkontrolují se chyby a když je všechno v pořádku, tak se projde databáze a když se tam uživatel
nachází, tak se vytvoří cookies se sessiony k danému uživateli s emailem, s jménem a s tím jestli je to
splněno. Když je uživatel přihlášený, tak se na stránce vlevo nahoře vypíše jeho přezdívka a vedle odkaz
je k odhlášení, na který když se klikne, tak se zničí sessiony a text zmizí.

Mám udělaný cookies vyskakovací okno, že když se poprvé uživatel připojí na stránku, tak mu
vyskočí tabulka se souhlasem s cookies. Pokud uživatel souhlasí s cookies, tak si stránka prohlédne jeho
cookies, vytvoří se na nějaký čas cookie o tom, že uživatel souhlasil nebo nesouhlasil s cookies. Cookies
pak můžou sloužit k zadávání údajů. Udělal jsem responzivitu a rozhraní pro android, aby to bylo možné
číst a vidět i na menších zařízeních. Na menších zařízeních je responzivní menu, které se dá otevřít a
zavřít pomocí JavaScriptu. Dále mám udělané přidávání novinek, kde se seznam načte pomocí fetch
API, že na stránce se ukazují novinky a pokud jsem admin, tak můžu na stránku přidat nějakou novinku
nebo jí vymazat. Mám odesílání žádosti, že pokud si někdo ve firmě chce požádat o udělání něčeho,
tak se to odešle na email šéfovi a ještě se ty žádosti zapisují do databáze. Mám také udělané, že se mi
v JavaScriptu nahoře zvýrazňuje název části stránky, na které zrovna jsem.

Mám udělanou správu účtů, kde jsem ke stylování použil bootstrap. Na správě účtů to uživateli
z databáze vypíše informace o jeho účtu. A dá se tam třeba změnit heslo. Změna hesla funguje pomocí
JQuerry a Ajaxu a při zadávání hesla se ukazuje hlášení s animací, které buďto napíše chybu a nebo, že
vše proběhlo v pořádku a přepne se stránka. Potom admin tam má přístup ke zprávě zakázek, kde je
vypsaný od nejnovější zakázky seznam všech zakázek pomocí JQuerry a php, které si lidé objednali, ze
kterých si admin může i libovolně mazat zakázky pomocí Ajaxu a Jquerry. A pomocí JQuerry v


JavaScriptu se také nahoře ukazuje hlášení s animací, jestli se daná zakázka smazala nebo červeně, když
třeba při mazání nastala chyba při připojení k serveru.

Nakonec jsem si ještě zřídil webhosting strojnidilnaevangelik.cz, kam jsem webovky dal a testuju
je tam.

Musím říct, že jsem celkově se svou webovkou spokojený. V tomto projektu jsem se naučil, jak se
dělá webová stránka, spoustu nových možností v programování webu a také i designu webu.


## Použitá literatura

_1. cs.wikipedia.org: Hypertext Markup Language_ [online]. 1990 [cit. 202 3 - 01 - 14 ]. Dostupné z:
https://cs.wikipedia.org/wiki/Hypertext_Markup_Language
_2. cs.wikipedia.org: Kaskádové styly (CSS)_ [online]. 1996 - 12 - 17 [cit. 202 3 - 01 - 14 ]. Dostupné z:
https://cs.wikipedia.org/wiki/Kask%C3%A1dov%C3%A9_styly
_3. cs.wikipedia.org: MySQL_ [online]. 1995 - 05 - 23 [cit. 202 3 - 03 - 09 ]. Dostupné z:
https://cs.wikipedia.org/wiki/MySQL
_4. cs.wikipedia.org: PHP_ [online]. 1995 - 06 - 08 [cit. 202 3 - 01 - 14 ]. Dostupné z:
https://cs.wikipedia.org/wiki/PHP
_5. php.net: PHP_ [online]. 1995 - 06 - 08 [cit. 202 3 - 01 - 14 ]. Dostupné z:
https://www.php.net
_6. cs.wikipedia.org: JavaScript_ [online]. 1995 [cit. 202 3 - 01 - 14 ]. Dostupné z:
https://cs.wikipedia.org/wiki/JavaScript
_7. cs.wikipedia.org: Bootstrap_ [online]. 2002 - 11 - 22 [cit. 202 3 - 03 - 09 ]. Dostupné z:
https://cs.wikipedia.org/wiki/Bootstrap

