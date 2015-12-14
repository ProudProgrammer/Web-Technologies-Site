<?php
	header("Content-type: text/html;charset=UTF-8");
	$link = isset($_GET["link"])?$_GET["link"]:1;
	switch($link) {
		case 1:
			elsoMenu();
			break;
		case 2:
			masodikMmenu();
			break;
		case 3:
			harmadikMenu();
			break;
		case 4:
			negyedikMenu();
			break;
		case 5:
			otodikMenu();
			break;
		case 6:
			hatodikMenu();
			break;
		case 7:
			hetedikMenu();
			break;
	}
		
	function elsoMenu() {
		?>
		<h2>Főoldal</h2>
		<p>
			Jelen weblap Notepad++ szerkesztővel készült folyamatosan tesztelve Mozilla Firefox 3.x, 4.x, Google Chrome és Windows Interner Explorer 8.x böngészőkkel. A W3C XHTML és CSS validátorai az oldalt hibamentesnek találták, továbbá a Mozilla Firefox beépülő Firebug és Web Developer kiegészítői sem jeleztek hibát.
		</p>
		<p>
			Az oldalon nem találhatók látványos grafikai elemek mert nem a dizájn volt a cél hanem a <strong>funkció</strong> és a <strong>szabványok</strong> betartása.
		</p>
		<p>
			A tartalom a Wikipedia oldalairól származik.
		</p>
		<p>
			Felhasznált beillesztett idegen kód található az oldal stíluslapjában. Ez az Eric Meyer féle CSS Reset (minek feltalálni újra a spanyol viaszt).
		</p>
		<p>
			Az oldal nem táblázat alapú. A szabványos DIV elemekből épül fel. Formázás kizárólag CSS-en keresztül.
		</p>
		<p>
			<img src="Firefox.png" width="64px" height="64px" />
			<img src="Chrome.png" width="64px" height="64px" />
			<img src="IE.png" width="64px" height="64px" />
		</p>
		<?php
	}
	
	function masodikMmenu() {
		?>
		<h2>HTML</h2>
		<p>
			A HTML (angolul: HyperText Markup Language=hiperszöveges jelölőnyelv) egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a W3C (World Wide Web Consortium) támogatásával. Az aktuális változata a 4.01, mely az SGML általános jelölőnyelv egy konkrét alkalmazása (azaz minden 4.01-es HTML dokumentum egyben az SGML dokumentumszabványnak is meg kell, hogy feleljen). Ezt tervek szerint lassan kiszorította volna az XHTML (ami a szintén SGML alapú XML leíró nyelven alapul), de az is lehetséges, hogy a HTML 5 veszi át a helyét.
		</p>
		<h3>Használata</h3>
		<p>
			HTML általában szöveges állományokban található meg olyan számítógépeken, melyek az internethez kapcsolódnak. Ezek az állományok tartalmazzák azokat a szimbólumokat, amelyek a megjelenítő programnak leírják, hogyan is kell megjeleníteni illetve feldolgozni az adott állomány tartalmát. Megjelenítő program lehet egy webböngésző (angolul: web browser), aural böngésző (olyan, amelyik a felhasználónak felolvassa a megjelenítendő szöveget), braille olvasó, amely konvertálja a szöveget braille "formátumba", levelező program (mint például: Mozilla Thunderbird, Microsoft Outlook, Eudora stb.), valamint egyéb eszközök, például mobiltelefon.
		</p>
		<h3>Szimbólumok, tartalom</h3>
		<p>
			Négyfajta szimbólum (leíró elem) található meg a HTML-ben:
		</p>
		<p>
		<ol>
			<li>
				strukturális elemek, amelyek leírják az adott szöveg "célját" például Téma 1 mint első szintű címsor (alcím).
			</li>
			<li>
				prezentációs szimbólumok, amelyek leírják, hogy az adott szöveg hogyan nézzen ki: például <b>vastag</b> vastag kinézetet eredményez. (Ez a forma azonban ma már elavultnak számít, helyette a CSS használata javasolt, ugyanis a legújabb irányelv szerint szét kell választani a tartalmat (amit a HTML kódol) és a formát (amit CSS-ben szokás kódolni), és ezáltal mindenki számára elérhetővé tehetőek a weblapok: felolvasó gépeknek, amit a gyengén látók használnak, szöveges böngészőknek, és nyomtatóbarát verziót is könnyebb készíteni.)
			</li>
			<li>
				hiperszöveg (hypertext) elemek, amelyek segítségével kapcsolat létesíthető a dokumentum egyes elemei és más dokumentumok között (például a <a href="http://hu.wikipedia.org/">Wikipedia</a> a Wikipedia szót mint egy kapcsolatot (angol szóval: link) a megadott URL-hez jeleníti meg)
			</li>
			<li>
				eszköz elemek, amelyek segítségével gombok, listák, beviteli mezők hozhatók létre.
			</li>
		</ol>
		</p>
		<h3>XHTML</h3>
		<p>
		<ol>
			<li>
				Mindent kisbetűvel kell írni! (kivéve a DOCTYPE elemet)
			</li>
			<li>
				Minden elemet le kell zárni! Az üres elemeket önmagukban egy szóközzel és egy / jellel
			</li>
			<li>
				Az elemeket csak egymásba ágyazva lehet használni!
			</li>
			<li>
				A jellemzőket idézőjelek közé írjuk!
			</li>
			<li>
				A jellemzőknek legyen értéke!
			</li>
		</ol>
		</p>
		<p>
			Az XHTML a HTML megfogalmazása XML-ben (a HTML SGML-ben van definiálva). Gyakorlatilag nincs jelentős eltérés a két nyelv között, csak a formai követelmények lettek szigorúbbak:
		</p>
		<h3>HTML5</h3>
		<p>
			A HTML5 a következő, jelentősen átdolgozott változata a HTML-nek (Hypertext Markup Language), a web fő jelölőnyelvének. Egyik fő tervezési célja, hogy a webes alkalmazásokhoz ne legyen szükség pluginek (pl. Adobe Flash, Microsoft Silverlight, Sun JavaFX) telepítésére. A specifikáció a HTML4 és az XHTML1 új verzióját jelenti, a hozzájuk tartozó DOM2 HTML API-val együtt. A HTML5 specifikációban leírt formátumba történő migráció HTML4-ről, vagy XHTML1-ről a legtöbb esetben egyszerű, mivel a visszamenőleges kompatibilitás biztosított. A specifikáció a közeljövőben támogatni fogja a Web Forms 2.0 specifikációt is.
		</p>
		<?php
	}
	
	function harmadikMenu() {
		?>
		<h2>CSS</h2>
		<p>
			A CSS (angolul Cascading Style Sheets) a számítástechnikában egy stílusleíró nyelv, mely a HTML vagy XHTML típusú strukturált dokumentumok megjelenését írja le. Ezen kívül használható bármilyen XML alapú dokumentum stílusának leírására is, mint például az SVG, XUL stb. A CSS specifikációját a World Wide Web Consortium felügyeli.
		</p>
		<h3>Áttekintés</h3>
		<p>
			A CSS-t a weblapok szerkesztői és olvasói egyaránt használhatják, hogy átállítsák vele a lapok színét, betűtípusait, elrendezését, és más megjelenéshez kapcsolódó elemeit. A tervezése során a legfontosabb szempont az volt, hogy elkülönítsék a dokumentumok struktúráját (melyet HTML vagy egy hasonló leíró nyelvben lehet megadni) a dokumentum megjelenésétől (melyet CSS-sel lehet megadni). Az ilyen elkülönítésnek több haszna is van, egyrészt növeli a weblapok használhatóságát, rugalmasságát és a megjelenés kezelhetőségét, másrészt csökkenti a dokumentum tartalmi struktúrájának komplexitását. A CSS ugyancsak alkalmas arra, hogy a dokumentum stílusát a megjelenítési módszer függvényében adja meg, így elkülöníthető a dokumentum formája a képernyőn, nyomtatási lapon, hangos böngészőben (mely beszédszintetizátor segítségével olvassa fel a weblapok szövegét), vagy braille készüléken megjelenítve. A CSS használható XML fájlok megjelenítésére is, így a strukturált dokumentumokhoz teljes körű stílust lehet megadni, befolyásolva az elrendezését, színét, betűtípusait az erre alkalmas kliensekben vagy webböngészőkben.
		</p>
		<h3>A CSS története</h3>
		<p>
			A stíluslapok már a HTML kezdete, 1990 óta jelen vannak valamilyen formában. A böngészők a stílus módosítására létrehozták saját leíró nyelvüket, melyet a webes dokumentumok megjelenésének módosítására lehetett használni. Eredetileg a stíluslapokat a felhasználók használták, mivel a HTML korai verziói még csak kevés prezentációs attribútumot tartalmaztak, így gyakran bízták a felhasználóra, hogy a webes dokumentumok hogyan jelenjenek meg. A webfejlesztők igényei folyamatosan növekedtek a stilisztikai lehetőségek irányába, így a HTML nyelvbe egyre több ilyen elem került. Ilyen lehetőségek mellett a stíluslapok kevésbé voltak fontosak, és egyetlen külső stílusleíró nyelv sem lett széleskörűen elfogadva a CSS megjelenése előtt. A CSS eredetileg Håkon Wium Lie ötlete volt 1994-ben. Bert Bos időközben egy Argo nevű böngészőn dolgozott, mely saját stíluslapokat használt; végül ők ketten döntöttek a CSS kifejlesztése mellett. Ekkor már több stílusleíró nyelv is létezett, de a CSS volt az első, ami a kapcsolás ötletét használta fel, vagyis a dokumentum stílusa több különböző stíluslapból tevődhetett össze. Ezáltal lehetőség nyílt arra, hogy a felhasználó által megadott stílus bizonyos esetekben felülírja a szerző stílusát, míg a többi esetben örökli azt. A stíluslapok ilyen kapcsolása mind a szerző, mind a felhasználó számára rugalmas vezérlést biztosított, mivel megengedte a vegyes stilisztikai beállításokat. Håkon ajánlata a "Mosaic és a Web" konferecián került bemutatásra Chicagoban, először 1994-ben, majd később 1995-ben. Ebben az időben alakult meg a Word Wide Web Consortium is, mely később fellépett a CSS érdekében, és megalapított egy bizottságot a részletes kidolgozására. Håkon és Bert volt az elsődleges technikai vezetője a projektnek, melyhez további tagok csatlakoztak, többek között Thomas Reardon a Microsoft-tól. 1996 decemberében a CSS level 1 ajánlata hivatalosan is megjelent. 1997 elején a CSS egy Chris Lilley vezette csoporthoz került a W3C-nél. A csoport azokkal a problémákkal foglalkozott, melyeket a CSS Level 1 kihagyott. A CSS Level 2, mint hivatalos ajánlat, 1998 májusában jelent meg. A CSS Level 3 még jelenleg is fejlesztés alatt áll.
		</p>
		<h3>Problémák a megvalósításban</h3>
		<p>
			Bár a CSS1 specifikációja már 1996-ban elkészült, több mint három évbe telt, mire egy böngészőben megjelent a teljes megvalósítása. Az Internet Explorer 5.0 Macintosh 2000 márciusában megjelent változata volt az első olyan böngésző, mely több, mint 99%-ban támogatta a CSS1 szabványt, megelőzve ezzel az Operát is, mely már 15 hónappal azelőtt bevezette a CSS1 támogatását. A többi böngésző hamarosan követte az Internet Explorert, sőt többen már a CSS2 bizonyos elemeit is támogatták. Ennek ellenére 2004-ben még egyetlen böngésző sem támogatta teljes mértékben a CSS2-t. A legrosszabb támogatással például az aural és pages tulajdonságok rendelkeznek. Még azok a böngészők is, melyek teljes megvalósítással rendelkeztek, tele voltak következetlenségekkel, hibákkal és trükkökkel. A fejlesztők sokszor körülírásokat és megkerülő módszereket kellett használjanak, hogy az eredmény minden böngészőben és platformon hasonló legyen. A legismertebb ilyen CSS hiba az Internet Explorer doboz modellje: a dobozok szélességét a program 5.x, illetve ennél alacsonyabb verziószámú változatai hibásan kezelik, ezért a más böngészőkben helyesen megjelenő elemek szélessége az Internet Explorer ezen verzióiban túl keskeny lesz. A hibát el lehet kerülni, de csak a funkcionalitás rovására. Ez csak egy a CSS több száz hibája közül az Internet Explorer, Netscape, Mozilla és Opera megvalósításaiban, melyek csökkentik a dokumentumok olvashatóságát. A CSS hibák burjánzása megnehezítette a webfejlesztők dolgát, hogy hasonló megjelenést érjenek el minden platformon. Jelenleg erős verseny folyik a Mozilla Gecko, az Opera Presto, és a Safari, valamint a Konqueror KHTML motorja között – mindhárom vezető pozíciót szerzett a CSS különböző területein. Az Internet Explorer 2005-ben még a legrosszabb CSS megvalósítással rendelkezett, a W3C ajánlásait figyelembe véve. 2006-ban az Internet Explorer 6 még mindig csak kb. 70%-os CSS2 támogatottsággal fut. Ezek a problémák arra késztették a W3C szakembereit, hogy felülbírálják a CSS2 szabványt. Így megalkották a CSS2.1 változatát, mely nagyjából a CSS2 jelenleg már működő részeit tartalmazza. A CSS2-nek azokat a részeit, melyeket egyetlen böngésző sem valósított meg sikeresen, kitörölték, vagy a jelenlegi megvalósításoknak megfelelően átírták. A CSS2.1 még nem végleges javaslat.
		</p>
		<h3>A CSS használata</h3>
		<p>
			A CSS elsődleges célja, hogy szétválassza a dokumentumok megjelenését a tartalomtól. A CSS előtt a HTML dokumentumok csaknem minden megjelenéshez kapcsolódó része a HTML kódon belül volt; a betűtípusok, színek, háttér stílusok, elrendezések, dobozok, keretek és méretek külön meg voltak adva, gyakran ismétlődően, a HTML kód közepén. A CSS használatával a webfejlesztők ezeket az információkat áthelyezhetik a stíluslapra, mely így egy sokkal egyszerűbb, kevésbé redundáns HTML kódot eredményez. A HTML dokumentumok kisebbek lesznek, és mivel a webböngészők gyakran tárolják a CSS stíluslapokat a gyorsítótárban, ezért a hálózati forgalom is jelentősen csökkenhet. Például a h2 HTML elem megadja, hogy a benne foglalt szöveg második szintű címsor. Ez kisebb jelentőségű, mint a h1 címsor, viszont nagyobb, mint a h3 címsor. A h2 ezen tulajdonsága strukturális. Szokás szerint a címsorok csökkenő méretben vannak megjelenítve, így a h1 a legnagyobb, mivel ez jelzi, hogy fontosabb a többi címsornál. A címsorok ezen kívül a nagyobb nyomaték kedvéért többnyire félkövér betűtípussal rendelkeznek. Így a h2 elem általában félkövér betűtípussal, a h3-nál nagyobb, de a h1-nél kisebb betűmérettel jelenik meg. A h2 elem ezen tulajdonsága prezentációs. A CSS előtt a webfejleszetők, ha módosítani akarták a h2 elemek színét, betűtípusát, méretét, vagy más jellemzőit, akkor a HTML font elemét kellett használniuk a címsor minden egyes használatakor.
		</p>
		<?php
	}
	
	function negyedikMenu() {
		?>
		<h2>JavaScript</h2>
		<p>
			A JavaScript programozási nyelv egy objektumalapú szkriptnyelv, amelyet weblapokon elterjedten használnak. Eredetileg Brendan Eich, a Netscape Communications mérnöke fejlesztette ki; neve először Mocha, majd LiveScript volt, később „JavaScript” nevet kapott, és szintaxisa közelebb került a Sun Microsystems Java programozási nyelvéhez. A JavaScriptet először 1997–99 között szabványosította az ECMA „ECMAScript” néven. A jelenleg is érvényes szabvány az ECMA-262 Edition 3 (1999. december), ami a JavaScript 1.5-nek felel meg. Ez a szabvány egyben ISO szabvány is.
		</p>
		<h3>Szerkesztés, előállítás</h3>
		<p>
			A JavaScript kód vagy a html fájlban vagy külön (jellemzően .js kiterjesztésű) szövegfájlban van. Ezek a fájlok tetszőleges szövegszerkesztő (nem dokumentumszerkesztő) programmal szerkeszthetőek.
		</p>
		<h3>Futási környezete</h3>
		<p>
			A JavaScript esetében a futási környezet jellemzően egy webböngésző (JavaScript-motorja). Windowsos környezetben futtatható a wscript.exe segítségével, vagy Linuxos környezetben nodejs-szel futtatható.
		</p>
		<h3>Inkompatibilitások</h3>
		<p>
			Bár a nyelvet szabványosították, mégis részben különbözően implementálják a JavaScriptet a különböző böngészők.
		</p>
		<h3>Adattípusok</h3>
		<p>
			Három elsődleges elemi adattípus létezik:
		</p>
		<ol>
			<li>String</li>
			<li>Number</li>
			<li>Boolean</li>
		</ol>
		<p>
			Speciális típusok:
		</p>
		<ol>
			<li>Null</li>
			<li>Undefined</li>
		</ol>
		<p>
			Két összetett típus:
		</p>
		<ol>
			<li>Object</li>
			<li>Array</li>
		</ol>
		<p>
			Pár fontosabb objektum:
		</p>
		<ol>
			<li>Date</li>
			<li>RegExp</li>
			<li>Function</li>
			<li>Math</li>
		</ol>
		<p>
			A string típusú adatokat 'aposztróf' vagy "idézőjel" pár közé írjuk. Mindkét megoldás lehetséges, így az éppen nem használt jeleket is tartalmazhatja a szöveg.
			<br />var a = "I'm sorry.";
			<br />var b = 'Idézőjel: (")';
			<br />var c = " \" ' ";
		</p>
		<p>
			Az első példában az aposztróf, a másodikban az idézőjel tagja a string adatnak, míg a harmadik példában mind a kettő. A harmadik példában a Backslash karakter miatt nincs speciális jelentése az idézőjelnek. Számszerű értékek lehetnek egész (decimális, hexadecimális, oktális), vagy tizedes számok. Léteznek különleges értékek is, mint az előzőekben említett NaN (not a number azaz: NemSzám) érték, amit akkor használ a nyelv, ha értelmezhetetlen a matematikai művelet eredménye, például 0/0. Lehet még pozitív, vagy negatív végtelen, vagy szintén pozitív/negatív 0 érték. A JavaScript különbséget tesz a két 0 között.
		</p>
		<h3>Változók</h3>
		<p>
			A JavaScript nyelvben minden változót deklarálni kell. Ezt a var kulcsszóval tudjuk megtenni. Lehet csoportos deklaráció is, amikor vesszővel elválasztva több változót megadunk, és akár értéket is rendelhetünk hozzájuk. Arra is van lehetőség, hogy a var kulcsszót elhagyjuk, viszont ilyenkor az értékadás kötelező, és a változó globálisan elérhető lesz, míg a var-al deklarált változók csak az aktuális scope-ben láthatóak.
			<br />var str;
			<br />var int1, int2, int3;
			<br />var a=[],b,c=d=0;
			<br />var i = 1;
			<br />j = null;
			<br />A fentiekben többféle deklarációra látunk példát. Fontos megjegyeznünk, hogy az első és második esetben a változó típusa undefined lesz. A negyedik esetben pedig a j változó null értéket kap. A különbség a két fogalom között az, hogy a null úgy viselkedik, mint egy 0 szám érték, a definiálatlan típus pedig egy speciális érték: NaN (Not a Number). A két érték összehasonlítása egyenlőséget mutat minden esetben. Az ötödik sorban látható, hogy a deklarációt lehet vegyesen is használni: a egy üres tömb(Array), b értéke undefined, c és d pedig 0. A JavaScript nyelv case-sensitive, ami annyit tesz, hogy nem mindegy, hogy kis- vagy nagybetűt használunk. Figyeljünk erre oda, főként ha ezen tekintetben eltérő szabályú keretbe helyezzük a JScript kódrészletet, például asp-be! Az utolsó példa egy globális változó, tehát mindenhonnan elérhető. Használata mellőzendő, mivel könnyen okozhat nehezen felderíthető hibákat.
		</p>
		<?php
	}
	
	function otodikMenu() {
		?>
		<h2>CGI (protokoll)</h2>
		<p>
			CGI (azaz Common Gateway Interface) az NCSA (National Center for Supercomputing Applications) által kifejlesztett protokollszabvány, amely (például Perl, PHP vagy C nyelvű) alkalmazások információs szerverekhez – a gyakorlatban túlnyomóan webszerverekhez (például Apache vagy IIS) – való kapcsolódását teszi lehetővé. Ha a kliens kérése futtatható fájlra mutat, akkor a szerver futtatja azt és a kimenetet adja vissza a kliensnek. Jelenlegi érvényes verziója a CGI/1.1.
		</p>
		<h3>Hátrányai</h3>
		<p>
			Minden kliens kérés hatására egy új folyamat (processz) indul a szerveren. Az operációs rendszereken azonban egy folyamat indítása általában idő- és tárigényesebb mint maga az output generálása, így ha sok CGI kérés érkezik, akkor a szerver könnyen túlterhelődhet. Ezt kikerülendő egyes webszerverek lehetővé teszik a kód futtatását a szerveren belül új folyamat indítása nélkül, mint például az Apache a modulok rendszerével. A PHP és az Apache szerver illesztésekor választhatunk a CGI mód, vagy az Apache modulként való kapcsolódás között.
		</p>
		<h3>Alternatívái</h3>
		<p>
			A dinamikus tartalomgenerálásban alternatívái például a Microsoft által kifejlesztett Active Server Pages és a Sun-féle JavaServer Pages.
		</p>
		<?php
	}
	
	function hatodikMenu() {
		?>
		<h2>Ajax</h2>
		<p>
			Az Ajax (Asynchronous JavaScript and XML) interaktív webalkalmazások létrehozására szolgáló webfejlesztési technika. A weblap kis mennyiségű adatot cserél a szerverrel a háttérben, így a lapot nem kell újratölteni minden egyes alkalommal, amikor a felhasználó módosít valamit. Ez növeli a honlap interaktivitását, sebességét és használhatóságát.
		</p>
		<p>
			Az Ajax a következő technikák kombinációja:
		</p>
		<ol>
			<li>XHTML (vagy HTML) és CSS a tartalom leírására és formázására.</li>
			<li>DOM kliens oldali script nyelvekkel kezelve a dinamikus megjelenítés és a már megjelenített információ együttműködésének kialakítására.</li>
			<li>MLHttpRequest objektum az adatok aszinkron kezelésére a kliens és a webszerver között. Néhány Ajax keretrendszer esetén és bizonyos helyzetekben IFrame-et használnak XMLHttpRequest objektum helyett.</li>
			<li>XML formátumot használnak legtöbbször az adattovábbításra a kliens és a szerver között, bár más formátumok is megfelelnek a célnak, mint a formázott HTML vagy a sima szöveg.</li>
		</ol>
		<p>
			Mint a DHTML, a LAMP vagy az SPA, az Ajax sem egy technológia önmagában, hanem egy kifejezés közösen használt technológiákra.
		</p>
		<h3>Történelem</h3>
		<p>
			A kifejezést először Jesse James Garrett használta 2005. februári cikkében, melynek címe Ajax: A New Approach to Web Applications. Garett a zuhany alatt gondolkodott a fogalmon, amikor rájött, hogy egy rövid kifejezésre van szükség, amin keresztül be tudja mutatni az ajánlott technológiákat egy megrendelőnek. Későbbi előadásokon Garett kijelentette, hogy az Ajax nem betűszó. Bár az Ajax kifejezés 2005-ben született meg, az ajax megszületését lehetővé tevő technológia egy évtizeddel előtte jött létre a Microsoft Remote Scripting kezdeményezése kapcsán. A tartalom aszinkron betöltésének lehetősége, azaz egy már megnyitott oldal tartalmának frissítése az oldal újratöltése nélkül, ellenben már az IFRAME elemtípus (1996, Internet Explorer 3) és a LAYER elemtípus (1997 Netscape 4) idejére vezethető vissza. Mindkét elemtípusnak van egy src attribútuma, ami bármely létező URL-t képes fogadni. Egy JavaScriptet tartalmazó lap betöltésével, ami manipulálja a szülő lapot, ajax-szerű hatások érhetőek el. A Microsoft Remote Scripting kezdeményezése egy elegánsabb megoldást nyújtott a problémára. Egy Java applet kérte le az adatokat, amivel a kliens oldal JavaScripten keresztül tudott kommunikálni. Ez a megoldás az Internet Explorer 4 és a Netscape Navigator 4 esetében volt használható. Később a Microsoft létrehozta az XMLHttpRequest objektumot az Internet Explorer 5-ben, és ezt a lehetőséget először az Outlook Web Access használta ki a Microsoft Exchange Server 2000 verzióban. A Microsoft böngészőjének aszinkron képességeit kihasználva a General Interface 2001-ben kiadta a JavaScript alkalmazás keretrendszerét. Ez olyan megjelenítést, felhasználói élményt és teljesítményt biztosított a honlapoknak, ami eddig csak az asztali alkalmazások esetén volt elérhető. Támogatta a HTTP-alapú adatszolgáltatásokat is, követve az egyre dominánsabbá váló utat az XML és a XML Webszolgáltatások felé. A webfejlesztő közösségek, eleinte a microsoft.public.scripting.remote hírcsoport majd később a bloggerek, gyorsan kifejlesztettek több technikát a különböző böngészőktől független, konzisztens eredmény biztosítására. 2002-ben a közösség kérésére létrehozták a Microsoft Remote Scriptinget, ami lecserélte a Java appletet az XMLHttpRequestre. Mivel az XMLHttpRequestet ma már a legtöbb fontosabb böngésző támogatja, az alternatív technikákat már ritkábban használják. Elsősorban ott alkalmazzák őket, ahol a széles körű kompatibilitás, a kis méret, illetve több oldal hozzáférése fontos.
		</p>
		<h3>Ajax-ot használó fejlesztőkörnyezetek</h3>
		<p>
			Az Ajax használhatóságát és népszerűségét tükrözi, hogy egyes webalkalmazást készítő fejlesztőkörnyezetek már beépített elemként tartalmazzák, és erősen támaszkodnak rá. Néhány ezek közül:
		</p>
		<ol>
			<li>Ruby on Rails – Ruby-s webalkalmazásfejlesztő-környezet</li>
			<li>TurboGears – Python-os párja</li>
			<li>Morfik – Free Pascal-os webalkalmazásfejlesztő-környezet</li>
			<li>Echo2 – Java-s fejlesztőkörnyezet</li>
			<li>Google Web Toolkit – Java-s fejlesztőkörnyezet a Google-től</li>
		</ol>
		<h3>Az Ajax használatának előnyei</h3>
		<h3>Felhasználói felület</h3>
		<p>
			A legnyilvánvalóbb ok az Ajax használatára a felhasználói élmény fokozása. Az Ajax-ot használó oldalak viselkedése sokkal inkább hasonlít a desktop-os alkalmazásokhoz, mint a tipikus weboldalakhoz. Amikor egy linkre kattintás hatására a teljes weboldal újratöltődik, az sokszor időigényes művelet. Az Ajax-ot használó oldalak e helyett képesek rá, hogy csak az oldal szükséges részét frissítsék, így gyorsabb reagálást biztosítanak a felhasználói interakciókra. Néhányan úgy gondolják, hogy az Ajax lesz az a feltörekvő technológia, amelynek segítségével a jövőben a webes alkalmazások minden eddiginél interaktívabbá és így széles körben is sokkal népszerűbbé válhatnak.
		</p>
		<h3>Letöltési sebesség és szerverterhelés</h3>
		<p>
			Mivel az Ajax-ot használó oldalak a szervertől az adatokat HTML formázás nélkül kapják, ezért ez által a szerver terhelése és így a válaszideje is csökken. A kisebb mennyiségű adat pedig gyorsabban jut el a hálózaton a szervertől a kliensig. Tehát az Ajax-szal nagymértékben csökkenthető a szerver terhelése és növelhető az oldalak letöltési sebessége. A szervertől kapott adatokból a HTML kód a böngészőben jön létre javascript segítségével, ami jól optimalizált programkód esetén legtöbbször gyorsabb – de legalább is nem lassabb – mintha az erősen leterhelt szerver hozná azt létre. Ennek oka, hogy ma már a kliens oldalon a felhasználók viszonylag gyors személyi számítógépekkel rendelkeznek, amelyek terhelése általában lényegesen alacsonyabb, mint a szerveré. Ráadásul, ha valamelyik kliens gép a lassúsága vagy leterheltsége miatt mégis lassabban hozza létre a HTML kódot, az nem érinti a párhuzamosan jelenlévő többi klienst, ami annál nagyobb előny minél nagyobb a párhuzamosan jelenlevő kliensek száma. (Ha a HTML kód a szerveren generálódik, akkor ez pont fordítva van: annál jobban lassul az oldalgenerálás, minél több klienstől érkezik kérés egyszerre.) Tehát minél nagyobb egy oldal látogatottsága annál nagyobb előnyt jelent a kliens oldali HTML generálás. Mindezen jótékony hatásokat tovább erősíti, hogy az Ajax segítségével sokszor jól megvalósítható, hogy mindig csak az éppen szükséges minimális mennyiségű adat töltődjön le a szerverről (ld. „load on demand” technika). Jó példa erre, amikor egy nagyméretű sokszintű menünél először csak a főkategóriák töltődnek le, majd egy adott főmenüre kattintva csak ennek az egy főmenünek az almenüi. Ennek köszönhetően mindig csak a feltétlen szükséges minimális mennyiségű adattal kell dolgozni. Összefoglalva az Ajax és az itt leírt módszerek együttes használatával szignifikáns oldal letöltési sebesség növekedés és szerverterhelés csökkentés érhető el. A gyorsulás általában egyenes arányban áll a webes alkalmazás funkcionális összetettségével és alkalmazáslogikájának bonyolultságával.
		</p>
		<h3>A tartalom a funkció és a forma elkülönítése</h3>
		<p>
			Egy másik előnye az Ajax használatának, hogy lehetővé teszi az adatokat szolgáltató- és az adatok megjelenítését végző programkód teljes elkülönítését. Bár erre az Ajax használata nélkül is léteznek megoldások. Az Ajax segítségével történő elkülönítés legkézenfekvőbb formái az alábbiak. Elkülönülnek a nyers adatok és tartalmak – amelyek általában XML vagy hasonló stuktúrába vannak ágyazva – amelyek egy szerver oldali adatbázisból származnak.
		</p>
		<?php
	}
	
	function hetedikMenu() {
		?>
		<h2>Vendégkönyv</h2>
		<form name="hozzaszolas">
			<table>
				<tr>
					<td>Név:</td>
					<td><input type="text" name="nev" size="20" maxlength="20" /></td>
				</tr>
				<tr>
					<td>Hozzászólás:</td>
					<td><textarea name="szoveg" rows="4" cols="57"></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="button" name="elkuld" value="Elküld" />
					<input type="reset" />
					</td>
				</tr>
			</table>
		</form>
		<div id="bejegyzesek"></div>
		<script>
			$(":button[name='elkuld']").bind("click",function() {
				if($(":text[name='nev']").val() == "")
					alert("Add meg a neved!");
				else if($("textarea[name='szoveg']").val() == "")
					alert("Írj valami üzenetet!");
				else {
					$.ajax({
						type: "POST",
						url:  "post.php",
						data: "nev="+$(":text[name='nev']").val()+"&szoveg="+$("textarea[name='szoveg']").val(),
						success: function(msg) {
							$("#bejegyzesek").html(msg);
						}
					});
				}
			});
		</script>
		<?php	
	}
?>