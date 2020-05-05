---
title: "Poradnik nauki programowania, czyli jak się uczyć C++ i innych języków"
date: 2020-01-14T17:09:59+00:00
lastmod: 2020-03-25T14:55:07+00:00
draft: false
author: "Łukasz Ziobroń"
authorLink: ""
description: ""
summary: ""
url: "/poradnik/"

tags: ["nauka", "mity", "c++", "poradnik"]
categories: ["Artykuł", "Warto wiedzieć"]
hiddenFromHomePage: false

featuredImage: "featured-poradnik.jpg"
featuredImagePreview: "poradnik/images/featured-poradnik.jpg"

toc:
  enable: true
math:
  enable: false
lightgallery: false
share:
  enable: true
comment:
  enable: true
license: ""
---

{{< image src="/poradnik/images/featured-poradnik.jpg" >}}

**Zastanawiasz się nad karierą programisty? Myślisz czego trzeba się nauczyć i jakie są wymagania na stanowisko juniorskie? Chcesz uczyć się skutecznie i osiągnąć dobre rezultaty w niedługim czasie? Jesteś w dobrym miejscu!**

## Poradnik nauki programowania

Nazywam się Łukasz Ziobroń i oddaję w Twoje ręce ten oto poradnik nauki programowania. Nauczam programowania od ponad 5 lat. Od ponad 8 lat programuję zawodowo, a jeśli doliczymy do tego projekty hobbystyczne to będzie już… 18 lat. Jestem założycielem Coders School i autorem programów nauczania, które stosuję w przekazywaniu wiedzy o języku C++. W swoim życiu przeszkoliłem już ponad 700 osób, trochę udzielałem się we wrocławskich społecznościach związanych z językiem C++. Skuteczne przekazywanie wiedzy jest moją pasją i nieustannie kształcę się w tym chcąc jeszcze skuteczniej uczyć programowania.

Stworzyłem ten poradnik, aby pomóc Ci w skutecznym uczeniu się C++ lub też dowolnego języka programowania. Jego lektura nie jest ograniczona tylko dla potencjalnych programistów C++. Przeczytać go może każdy, kto chce zostać programistą, a fragmenty dotyczące samego C++ może pominąć. Ten poradnik ma na celu podpowiedzenie Ci, czego i w jaki sposób się uczyć, jeśli chcesz w przyszłości pracować jako programista C++. Będzie on zawsze otwarty i darmowy. Zamierzam go w przyszłości aktualizować, wraz z tym, jak będzie się zmieniał język C++ oraz programistyczny rynek. Myślę, że 60 minut powinno Ci wystarczyć na dokładne przeczytanie całego tego artykułu. Poradnik nauki programowania opisuje tajniki branży programistycznej i trochę demaskuje niektóre związane z nią mity. Mówi o tym, jak można wejść do tej branży i się nie zajechać. Porównuje bootcampy z innymi formami nauczania. Zaczynamy!

## Chcę programować

### Prehistoria

Dawniej programowanie było wiedzą tajemną. Jeśli ktoś chciał się go nauczyć, to trzeba było mieć jakieś materiały. Podkreślę słowo jakieś, bo jakiekolwiek materiały były trudno dostępne. Toteż większość programistów wywodziła się z uczelni. Uczelnie zawsze wiodły prym w liczbie źródeł i jakości przekazywanej wiedzy. Odkąd upowszechnił się internet czasy zaczęły się zmieniać. Obecnie mamy raczej zalew materiałów na każdy właściwie temat, także na temat programowania. Podobno od przybytku głowa nie boli, ale jednak strasznie trudno znaleźć coś, co nam podpasuje i dzięki czemu zmotywowani usiądziemy do nauki i szybko zauważymy pierwsze efekty. 

Jeśli jesteś programistą pomyśl jak kiedyś wyglądało programowanie bez StackOverflow, gdzie w ciągu kilku sekund znajdujesz odpowiedź na Twoje pytanie. Ja jeszcze pamiętam te czasy, gdy w liceum zabrałem się za pisanie własnego silnika CMS na moją stronę o StarCrafcie – [Starcraft Area][scarea-pl]. Strona stoi do dziś, ale z racji tego, że nie znałem dobrych praktyk to kod tego silnika jest wydajny jak maluch na gaz. Przejrzystość kodu jest z kolei podobna do przejrzystości wody w Gangesie.

Dużo ludzi wyznaje zasadę *Done is better than perfect*. Ja również zaliczam się do tych ludzi, przez co troszkę walczę ze swoim perfekcjonizmem, ale do słynnego motto dodaję jeszcze coś od siebie. *Screwed up is worse than done*. Pełna wersja po polsku to *Zrobione jest lepsze od doskonałego. Spierniczone jest gorsze od zrobionego*. W związku z tym jeśli mam coś zrobić, a będzie to słabe, to nawet się za to nie zabieram.

### Umowa z programistą, czyli jak wygląda rekrutacja w branży IT?

Uczyć się każdy potrafi. Wystarczą przecież studia i już można programować. Albo jakiś bootcamp. W szczególności jeśli już pracuje się poza branżą IT, ale ma się pieniądze. Stąd też prosta droga do zbijania kokosów. Czy aby na pewno? Dzisiejszy rynek pracy bardzo szybko weryfikuje te założenia. Okazuje się, że odpowiedzi zazwyczaj brzmią nie i nie. Zatem o co chodzi z tym tytułowym uczeniem się C++ albo nawet ogólniej z uczeniem się programowania?

Niewątpliwie obecnie jest moda na programowanie. Ba, nawet nie moda, ale przymus. Kursy programowania typu bootcamp rosną jak przysłowiowe grzyby po deszczu, a pracodawcy sami organizują własne akademie i kursiki dla osób, które chciałyby zostać programistami. Zatem wygląda na to, że faktycznie niedobór pracowników jest ogromny. Chodzą plotki, że nawet siłą zmusza się ludzi do podpisywania kontraktów albo robione są łapanki na ulicy i złapani są od razu wcielani do korporacji — obejrzyj [poniższy][rekrutacja-w-it] film 🙂 W dzisiejszych czasach, gdy socjal jest łatwo dostępny, programiści żyją jak pączki w maśle, a nikomu nie chce się pracować, trzeba się uciekać do naprawdę podłych sztuczek.

{{< youtube oyuH4Nm_md0 >}}

Każdy na pewno ma kolegę programistę, który już po roku zarabiał [wykopowe 15k][programista-15k]. A programiści to ogólnie przychodzą do pracy tylko wypić kawę, posiedzieć przed Facebookiem i „piniąszki” się zgadzają. Więc o co tutaj chodzi? Dlaczego Ci ludzie z łapanek tak bardzo nie chcą mieć takiego fajnego życia?

Poczytaj co ludzie piszą na wykopie odnośnie programowania. [Mirek][mirek-nie-ma-pracy] żali się, że po bootcampie nie ma pracy, a [tutaj][ile-zarabiaja-programisci] inny dziwi się ile zarabiają programiści.

O tym, jaka jest prawda na pewno wiedzą sami programiści, ale to też nie wszyscy. Dopiero tacy programiści, którzy są już na rynku przez parę lat i zmieniali sami pracę (często kilkukrotnie), wiedzą jak to wygląda. Osoby spoza branży, które chciałyby wejść do tego programistycznego raju, tylko się dziwią. Jak tak można? Gdzie te braki, gdzie te łapanki? Dlaczego mi się to w ogóle nie udaje, chociaż na studiach było dużo programowania?

### Każdy może NIE być programistą, czyli daruj sobie ten pomysł

Gdy zadasz pytanie *Czy każdy może zostać programistą?* w dowolnej szkole programowania to pewnie w większości powiedzą, że każdy, ale niektórym będzie potrzeba więcej czasu, a innym mniej. Zasadniczo jest to prawda, ale ja mam trochę bardziej radykalne poglądy w tej kwestii. Według mnie nie każdy nadaje się na programistę. W niektórych przypadkach po prostu nie warto zaczynać, bo to będzie „orka na ugorze”, jak to mawiał mój nauczyciel matematyki z liceum, którego chciałem serdecznie pozdrowić. Nie warto marnować czasu swojego i trenera, jeśli nie masz ku temu predyspozycji. Napiszę nawet więcej. Nie chodzi tylko o predyspozycje.

W swojej karierze nauczyłem programowania już wiele osób. Na moich kursach weryfikuję, kto do mnie przychodzi i na jakim jest poziomie. Nigdy nie zaczynam kursów z poziomu zero. Po naukę podstaw odsyłam do darmowych materiałów z internetu. Dopiero jak ktoś może się pochwalić jakąś aplikacją, to możemy porozmawiać o dalszym kształceniu. Współpracując z różnymi osobami, mogę podać jedną cechę, która jest cechą odróżniającą osoby, którym uda się skutecznie przejść przez kurs od tych, którym się to nie uda. Ta cecha to… motywacja. Tak. Taka wewnętrzna. Jeśli ktoś po prostu chce programować, bo to lubi, to będzie poświęcał na to czas. Jeśli natomiast ktoś jest zmotywowany w inny sposób, np. poprzez pieniądze, bo programiści dużo zarabiają, to doskonale wiem, że takie osoby, nawet jeśli uda im się przejść przez kurs to ciężko będzie im znaleźć pracę.

Jeśli jakaś szkoła, czy kurs mówią Ci, że po tym pieniądze posypią się z nieba, to po prostu Cię okłamują. To czy pieniądze będą, czy nie, nie zależy od kursu, ale od Ciebie. Oczywiście, dobrze zaprojektowany i przygotowany kurs łatwiej przeprowadzi Cię przez tę drogę, ale jeśli masz motywację i słaby kurs czy też słabe materiały to rezultat będzie lepszy niż zapisanie się na niesamowicie dobry kurs, ale bez Twojej wewnętrznej motywacji, bez pasji. W skrócie — jeśli lubisz programowanie to super. Jeśli nie lubisz — nawet nie zaczynaj. To niczego w Twoim życiu nie zmieni. Jeśli nie wiesz, bo nigdy tego nie robiłeś/-aś — zacznij od darmowych kursów z internetu i się przekonaj.

### C++ najlepszy, czyli nie pytaj o polecenie języka na start

Programowanie programowaniu nierówne. Język językowi nierówny. Na początku wiele osób staje przed wyborem języka programowania. Wybierają długo, szukają, radzą się znajomych programistów, zasypują fora i grupy internetowe pytaniami. A prawda jest taka, że każdy programista będzie głównie polecał język, w którym sam pisze.

Dlaczego więc C++ jest najlepszy? ( ͡° ͜ʖ ͡°)

Odpowiedź: bo jest jednym z najtrudniejszych języków programowania. Zacząć jest dość łatwo, ale poziom mistrzowski osiąga się bardzo długo. Często też w ogóle się go nie osiąga, bo znając C++ znacznie łatwiej przerzucić się na inne języki programowania, w szczególności na C# lub Javę. Programistyczny rynek jest bardzo otwarty na takich inżynierów oprogramowania, którzy mają C++ w swoim doświadczeniu. Dlatego mistrzów C++ nie ma wielu.

Według użytkowników serwisu [Jaxenter C++][serwis-jaxenter] znajduje się na podium, jeśli chodzi o języki najtrudniejsze do nauczenia się, co prezentuje poniższy wykres, zaczerpnięty z tego serwisu.

{{< image src="/poradnik/images/poradnik-hardest-languages.png" title="Najtrudniejsze języki programowania">}}

Polecam też zajrzeć pod [to][porownanie-jezykow] repozytorium na GitHubie, gdzie porównane jest uczenie się różnych języków programowania. Obrazek z C++ zamieszczam też poniżej.

{{< image src="/poradnik/images/poradnik-cpp.png" title="Krzywa uczenia się C++">}}

Chociaż według mnie najbardziej trafna krzywa uczenia się C++ wygląda tak:

{{< image src="/poradnik/images/poradnik-cpp2.jpg" title="Rzeczywista krzywa uczenia się C++">}}

Krzywą tą zaprezentował mój kolega Sławek na jeden ze spotkań wrocławskiej grupy C++. [Tutaj][krzywa-uczenia-cpp] link do jego prezentacji o boost::python.

Język C++ jest stosunkowo mało popularny jeśli chodzi o wybór kursów czy bootcampów w tym języku. Ale w sumie to jest plus. Mniej kursów, więc mniejsza konkurencja, więc łatwiej się wbić w branże. I tak i nie. Trzeba jednak przyswoić dużo wiedzy, a to już jest wyzwanie dla wytrwałych. Pisząc w C++ będziesz się ścierać z problemami, których nie ma w innych językach programowania. Jeśli nie zniechęca Cię to, to czytaj dalej 🙂

### Nowoczesny C++

W nauce C++ najgorszy jest fakt, że w internecie znajdziesz mnóstwo, naprawdę mnóstwo i jeszcze raz podkreślę — mnóstwo przestarzałych materiałów i informacji na temat C++. Jeśli widzisz jakieś artykuły, pytania, czy cokolwiek związanego z C++ koniecznie musisz sprawdzić datę tej publikacji. Często okazuje się, że jest wiele mitów, które powielane są z pokolenia na pokolenie (takiego programistycznego pokolenia, czyli gdy różnica wieku to jakieś 3-5 lat ;)), tylko dlatego, że artykuł jest stary lub ktoś nie zna aktualnego C++. Od roku 2011 C++ zmienił się bardzo. I zmienia się ciągle. Właściwie to każdy język programowania się zmienia, ale C++ miał wyraźne zahamowanie w latach 2003-2011, kiedy to oficjalnie nic się z tym językiem nie działo (działo się, ale bardziej za kulisami). Inne języki poszły wtedy bardzo do przodu, a C++ jaki był, każdy widział. I niestety bardzo odbiło się to na poziomie jego nauczania. Nauczyciele akademiccy poznali tego C++, a tak naprawdę uczyli **C z klasami**,  a nie C++ i niestety uczą go nadal. Ja nazywam to językiem C+ (czyt. ce plus).

### IDE w roli generatora ciągów losowych znaków, czyli dlaczego vim jest dobry?

Jeszcze jedną pułapką może być przerabianie kolejnego kursu w **IDE, czyli środowisku programistycznym**, z którego rzadko się korzysta w projektach komercyjnych. Takie środowiska to np. Code::Blocks, DevC++ lub Borland C++ Builder. Owszem możesz w nich pisać ciekawe programy i od nich nie zależy w ogóle ich treść, ale nowsze i lepsze środowiska lepiej wspierają programistę i pozwalają na pisanie kodu zgodnego z najnowszymi standardami.

{{< admonition info "Integrated Development Environment" true >}}
**Integrated Development Environment** (IDE) to po prostu taki edytor tekstu, w którym piszemy kod. Kod można pisać nawet w Notatniku, ale IDE zazwyczaj pomaga poprzez podkreślanie błędów czy proponowanie uzupełnień nazw.
{{< /admonition >}}

Dlatego wymienionych przeze mnie środowisk raczej komercyjnie się nie używa. To co sobie zainstalować, skoro prawie każdy kurs w internecie pokazuje właśnie te środowiska? Jeśli interesuje Cię coś nowoczesnego, to sprawdź:

* CLion (płatny, ale studenci mają darmowe licencje)
* Visual Studio Code
* Visual Studio
* QtCreator
* XCode (Mac)

QtCreator jest IDE stosowanym wyłącznie pod C i C++ i jest łatwy w obsłudze, ale jednak jest rzadziej używany. Statystycznie najczęściej używany jest CLion. A tak naprawdę to polecam edytor vim. W swoim kursie uczę podstaw **Vima**, bo każdy programista, którego IDE jest w konsoli, zyskuje +5 szacunku w oczach innych programistów, którym nie udało się go ogarnąć. A poza tym wygląda on czadersko. I nie trzeba w ogóle używać w nim myszki.    

{{< admonition info "Vim" true >}}
**Vim** jest dla świeżych osób chyba najgorszym i najbardziej nieintuicyjnym edytorem tekstu. Jego nie intuicyjność doczekała się nawet bardzo popularnego dowcipu: Jak wygenerować losowy ciąg znaków? Posadzić nowicjusza przed vimem i kazać mu wyjść z programu. Ale spokojnie, gdy człowiek przyzwyczai się do vima, to może pracować niesamowicie efektywnie i już nic nie będzie dla niego zaskoczeniem. No, chyba że Emacs, ale nie będę rozwijał tematu 🙂
{{< /admonition >}}

{{< image src="/poradnik/images/poradnik-vim1.png" title="Vim w wypiasonej wersji wyświetlającej drzewo katalogów (plugin NERDTree)">}}

{{< image src="/poradnik/images/poradnik-vim2.png" title="Vim w wersji podstawowej">}}

Wielu ludzi powie — zapomniałeś o Eclipsie i NetBeans. Celowo zapomniałem. To moja osobista opinia, ale uważam, że IDE powinno być szybkie i lekkie. Często, gdy ma się bardzo duży projekt, to niektóre środowiska mogą bardzo długo się ładować. A te dwa raczej właśnie takie są. Wiem, że CLion też nie jest najszybszy, bo również jest napisany w Javie ;), ale i tak jest szybszy od tych dwóch i ma wiele dodatkowych funkcji, które działają z automatu bez żadnych konfiguracji. NetBeansa używałem tylko trochę na studiach (dawno temu), a Eclipsa 3 lata temu. Być może w nowszych wersjach są szybsze albo osoby, które chcą się sprzeczać, nie pracowały w naprawdę dużych projektach 🙂

## Nauka programowania

### Naucz się C++ w 21 dni

Ten artykuł to poradnik nauki programowania. No to jak najszybciej nauczyć się programować, w szczególności w C++? Jeśli dobrze poszperacie, to znajdziecie nawet książki dedykowane do szybkiego nauczenia się tego języka:

{{< image src="/poradnik/images/poradnik-book1.png" title="Sams Teach Yourself C++ in 21 days" target="https://www.amazon.com/Sams-Teach-Yourself-Days-5th/dp/0672327112">}}

Jak ktoś ma jeszcze mniej czasu, to może nawet nabyć inną książkę tego samego autora:

{{< image src="/poradnik/images/poradnik-book2.png" title="Sams Teach Yourself C++ in 24 hours" target="https://www.amazon.com/Hours-Sams-Teach-Yourself-6th/dp/0672337460">}}

A jak poszukacie jeszcze dokładniej, to natraficie na to.

{{< image src="/poradnik/images/poradnik-teach-yourself-cpp.png" title="Teach yourself C++ in 21 days">}}

I ten humorystyczny komiks jest bardzo prawdziwy. Niesamowite jest to, że ktoś daje się nabrać, że nauczy się programowania w miesiąc i pójdzie szukać pracy. Być może na studia do zaliczenia egzaminu to wystarczy, ale szybko wtedy zapomnisz o wszystkim. Nauka programowania wymaga czasu. Ile? Jeśli jesteś nowicjuszem i masz całe dni na naukę, bo nie pracujesz lub nie masz innych przykrych obowiązków, to pół roku może wystarczyć, aby ogarnąć bardzo mocne podstawy. Możesz uczyć się samodzielnie na podstawie materiałów z internetu, ale musisz wiedzieć, które materiały są wartościowe. Jeśli nauczysz się C++ z przestarzałych materiałów, to tak jak pisałem, stracisz swój czas, a roboty na pewno nie znajdziesz. A skąd wziąć wartościowe materiały? Jeśli nie masz znajomych, którzy mogliby Ci coś polecić, to możesz się uczyć ode mnie. **Udostępniam trochę materiałów za darmo**. Później dam ci do nich linki. Konkretnie to wystarczy, że zapiszesz się na [newsletter][newsletter], ale czytaj dalej 😉

Nawet jeśli już masz skąd się uczyć, to jeszcze warto wiedzieć jak się uczyć, aby nauka była szybka i skuteczna. Ponieważ materiału do nauki są po prostu całe tony, to lepiej mieć jakieś sposoby, aby je dobrze przyswajać i co ważniejsze, skutecznie zapamiętywać. Trochę czasu upłynie zanim przebijesz się przez jakąś grubą książkę, a w tym czasie możesz zapomnieć o tym, co było na jej początku, jeśli nie było to regularnie powtarzane.

Wiadomo, że każdy może mieć własne techniki uczenia się, ale ja mam własne techniki nauczania. Andragogika to moje hobby, więc tutaj mogę napisać bardzo dużo.

{{< admonition info "Andragogika" true >}}
**Andragogika** to nauczanie dorosłych, w przeciwieństwie do pedagogiki, która jest nauczaniem dzieci.
{{< /admonition >}}

Ale po kolei. Co, jeśli pracujesz albo nie masz za dużo czasu na naukę? Wtedy czas nauki musi się wydłużyć. Po około rocznej nauce samodzielnej i pisaniu własnych projektów pewnie przyjdzie czas na rozejrzenie się po rynku pracy. A jeśli już masz jakieś podstawy, bo przykładowo na uczelni był jakiś kurs programowania, to może też wystarczy tylko pół roku.

Gdyby mieć przy sobie na własność programistę czy trenera, który zna ten język i powie czego się uczyć i co robić to nauka programowania byłaby łatwiejsza. Niestety nie każdy tak może. Nawet zaryzykuję, że takich osób jest baaardzo niewiele.

### Czy można uczyć się szybciej?

Można, ale na pewno nie samemu. Tutaj masz 3 popularne opcje do wyboru.

* Znajmy programista, który zechce Cię uczyć
* Kurs stacjonarny
* Kurs online

### IT arystokracja, czyli znajomy programista

Znajomy programista, który zechce Cię uczyć. Raczej takiego nie znajdziesz. To jest bardzo czasochłonne, jak już pisałem, a i nie każdy potrafi uczyć. Zresztą, po co inni programiści mieliby Cię czegoś uczyć? Nie chodzi tutaj o kształcenie sobie konkurencji. Na rynku są braki, więc to nie jest problemem. Chodzi o to, że nawet jeśli takiemu programiście zapłacisz za poświęcony czas, to pewnie są dla niego to groszowe sprawy. W tym czasie zarobiłby kilkukrotnie więcej programując, więc bardziej opłaca mu się robić nadgodziny w pracy niż siedzieć z Tobą. Jeśli masz taką osobę, to korzystaj, póki nie stwierdzi, że woli harować dla swojego pracodawcy, a nie dla Ciebie.

### Odwrócona klasa, czyli mój kurs stacjonarny

A więc druga opcja — zapisanie się na kurs. Na razie weźmy pod uwagę kursy stacjonarne. Ja w szczególności dobrze znam kursy stacjonarne języka C++ we Wrocławiu. Bardzo dobrze wiem, jak wygląda rynek kursów oraz pracy w tym mieście. O innych miastach też dużo wiem, ale z racji tego, że mieszkam we Wrocławiu, to najłatwiej mi się do niego odnosić. Z takich kursów właściwie natkniesz się na kilkudniowe szkolenia dla firm lub bootcampy, czyli bardzo intensywne kursy gdzie codziennie, zazwyczaj po 8 godzin musisz siedzieć, słuchać i programować. Po miesiącu, dwóch czy sześciu wychodzisz jako programista. Really? No nie do końca tak to wygląda. Teraz trochę skrytykuję bootcampy, ale zanim zacznę, to powiem, że mam do tego prawo. Nie z racji, że ich nie prowadzę, ale z racji, że je kiedyś prowadziłem i podjąłem bardzo świadomą decyzję, aby przestać. A to wszystko na podstawie doświadczeń uczestników oraz własnych przemyśleń.

**Cena bootcampów** często jest niesamowicie wysoka. Potrafią one kosztować po **10 tysięcy złotych** oraz więcej. Są też tańsze. Ale być może zdziwi Cię to, że nie cena jest tutaj najgorsza. Najgorszy jest ogrom pracy i czasu, który trzeba poświęcić. Prowadziłem już zajęcia w tym stylu. Od uczestników ciągle słychać narzekania, że to zbyt intensywne, że jest taki ogrom wiedzy, że nawet nie ma kiedy jej przetrawić. Już kolejnego dnia trzeba się uczyć nowych rzeczy, więc te poprzednie nieutrwalone szybko wylatują z głowy. Po takich opiniach stwierdziłem, że ja u siebie nie będę organizował zajęć w tym stylu. Prowadziłem i zamierzam jeszcze prowadzić kursy stacjonarne, ale nie w formie bootcampów. U mnie zajęcia odbywają się 1 lub 2 razy w tygodniu (zazwyczaj do 7 godzin tygodniowo) i w trybie flipped classroom.

**Flipped classroom to odwrócony model szkolny**. A model szkolny, który wszyscy doskonale znają, to zaprezentowanie teorii na zajęciach, pokazowe zrobienie prostych zadań w klasie, które uczniowie tylko przepiszą, a zrozumieją, gdy trzeba będzie się nauczyć, czyli na sprawdzian lub w ogóle. Do tego jest jeszcze trudniejsza praca domowa. W odwróconej klasie to teoria jest najpierw przyswajana przez uczniów przed zajęciami, często z wykonaniem prostego zadania. Taka praca własna przed wspólnymi zajęciami nosi nazwę **pre-worku**. Na zajęciach zajmujemy się już głównie praktyką oraz tłumaczeniem tego, co trudno było zrozumieć. Dzięki temu na zajęciach rozwiązujemy najczęściej spotykane problemami i krzewimy dobre praktyki. Potem jako praca domowa (post-work) zazwyczaj przerabiane są zadania grupowe robione zdalnie (chyba że kursantom uda się wspólnie spotkać także poza zajęciami, co także się zdarzało). Chodzi o to, aby pojedynczej osobie trudniej było na czymś utknąć. W grupie zawsze można coś skonsultować albo dowiedzieć się, czy też douczyć od współuczących. Ten element ludzki dodatkowo angażuje w kurs.

### Praca grupowa

Niesamowite jest, jak szkoły potrafią zepsuć myślenie ludzi o pracy grupowej. Panuje przecież przekonanie, że praca grupowa jest bezsensowna, bo tylko jedna lub dwie osoby odwalą zadanie, a reszta nic nie robiąc, otrzyma dobre stopnie. Ubolewam nad tym, że ten *pruski dryl* tak skutecznie zrył Ci myślenie o współpracy grupowej.

{{< admonition info "Pruski dryl" true >}}
Nasz system nauczania wywodzi się z systemu pruskiego. Był on nastawiony na wykształcenie idealnych pracowników, którzy nie będą kwestionować rozkazów szefostwa. Można powiedzieć, że ten cel jest całkiem nieźle osiągany. Mamy olbrzymią wiedzę ogólną, z której pewnie 90% w ogóle w życiu nam się nie przyda. Po co mam wiedzieć jaka jest budowa ameby czy pantofelka, jeśli moja praca nie ma nic wspólnego z biologią albo dokładniej jakimiś prostymi organizmami? Samo określnenie "pruski dryl" zapożyczyłem od Radka Kotarskiego z jego książki "Włam się do mózgu", którą sedrecznie polecam, a autora bardzo gorąco pozdrawiam 🙂
{{< /admonition >}}

Programiści w większości przypadków pracują w grupach i umiejętność **pracy grupowej** jest kluczowa. Także jej uczę na swoich kursach stacjonarnych, gdzie w praktyce stosujemy metody zwinne (agile). Poza tym używamy gita jako systemu kontroli wersji. To proste narzędzie mówi, kto dostarczył którą linijkę kodu i jak ten kod zmieniał się w czasie. Dzięki temu „łatwo widać” (terminu „łatwo widać” nauczyłem się na studiach na PWr. Niektórzy profesorowie stosowali go chyba dlatego, że tak śmiesznie brzmiał), kto coś dostarcza, a kto nie. Oczywiście nie jest to wyznacznikiem pracy wykonanej przez daną osobę. Doskonale mogą to potwierdzić programiści, którzy przez miesiąc szukają błędu w programie, a jego poprawienie to tylko zmiana jednej linijki kodu.

W formie szkoleń stacjonarnych nauka programowania może trwać około 3 miesiące, jeśli tylko masz już jakieś podstawy. Trener zawsze podpowie, czego trzeba się uczyć, ale co najważniejsze - powie czego nie trzeba się uczyć i przeprowadzi Cię przez ten grząski teren. Musisz wiedzieć, że jedyną osobą odpowiedzialną za przyswojenie wiedzy jesteś Ty. Nawet najlepszy trener nie zmusi kamienia do przesunięcia się o parę metrów. Może on za to przenieść kamień, ale nie to ma być skutkiem takiej nauki. Na rozmowie kwalifikacyjnej to nie trener będzie nosił kamienie. Trener nie ma za Ciebie przerobić wszystkiego. On jest tylko pilotem, nawigatorem, przewodnikiem. On ma mapę, ale teren musisz pokonywać samodzielnie lub w grupie. Dobry trener nie weźmie Cię na plecy i nie wniesie Cię na górkę, bo wie, że to Ty musisz orientować się w tym terenie. Słaby trener mógłby to zrobić.

## Kursy programowania online

W poradniku nauki programowania kursy online zasłużyły sobie tutaj na oddzielny rozdział. Będę chciał opisać tutaj dość dużo zagadnień, w szczególności mój pogląd i moje podejście do tego, jak powinny one wyglądać.

### Ścieżki ninja, czyli kurs C++ online w Coders School

I ostatnia forma, czyli kursy online. Jest bardzo dużo kursów na znanych platformach jak **Udemy**, gdzie kursy programowania można sobie kupić **już za 40 zł**. Pytanie tylko, czy faktycznie te kursy realizujesz. Wiedza w większości z nich na pewno jest przydatna i trafnie dobrana. Pytanie tylko, czy **taka nauka w trybie online Ci odpowiada?** Czy jest ona w ogóle skuteczna? To już zależy od predyspozycji danej osoby. Taką naukę można znacznie uskutecznić i uprzyjemnić. Opowiem Ci o moim kursie online, który właśnie zacząłem tworzyć.

Tworzę program, którego celem jest zmaksymalizowanie liczby uczestników, którzy go ukończą. Będzie więc on musiał być nie tylko interesujący, ale wciągający. Tak jak niektóre gry komputerowe :) Oprócz tego kurs musi być skuteczny. W moim odczuciu oznacza to, że liczba osób, która dzięki temu kursowi zrealizuje swoje plany, powinna być jak najwyższa. Wśród planów będę oczekiwał takich jak znalezienie pracy jako programista C++, pogłębienie swojej wiedzy, wymiatanie na studiach, sprawdzenie swojej aktualnej wiedzy albo po prostu nauka dla samej zabawy lub też sprawdzenie, czy ten kurs jest faktycznie taki dobry, jak opisuję :)
Ciężko mi będzie oczywiście zmierzyć, ile osób faktycznie zrealizuje swoje cele, ale mogę łatwo zmierzyć, ile osób ukończy ten kurs lub też, które jego etapy będą miały największy odsetek opuszczania kursu. **Kurs C++ online w Coders School** oparty będzie na zasadach *grywalizacji*.

{{< admonition info "Grywalizacja" true >}}
**Grywalizacja**
Grywalizacja to wszczepienie elementów rywalizacji oraz grupowych przygód zaczerpniętych z gier komputerowych, w szczególności z gatunku MMORPG do innych dziedzin. Więcej info w książce Pawła Tkaczyka "Grywalizacja".
{{< /admonition >}}

Nauka będzie trochę przypominała grę. Będziesz zdobywać punkty za wykonane zadania. Dzięki tym punktom będziesz odblokowywać kolejne lekcje. Za wykonywanie zadań dodatkowych będziesz dostawać monety, za które kupisz kolejne moduły kursu, zamiast płacić za nie prawdziwymi pieniędzmi. To jest bardzo motywujący czynnik, który, jeśli jesteś maniakiem ćpania wiedzy, spowoduje, że zaoszczędzisz parę złotych. W tym kursie będziemy uczyć się wszystkiego w takich warunkach, w jakich normalnie pracują programiści. Kod trzeba będzie ściągać ze zdalnych repozytoriów, a po wykonaniu zadania trzeba będzie tworzyć *Pull Requesty*. Zadania będą sprawdzane automatycznie poprzez automaty *Continuous Integration*, które będą kompilować kod i puszczać na nim testy.

{{< admonition info "Pull Request" true >}}
**Pull Request** (PR) lub Merge Request (MR) - zgłoszenie gotowości kodu do przeglądu i złączenia go z oficjalną wersją. Jest to model pracy nad kodem, w którym szybko otrzymasz informację zwrotną na temat wykonanego przez Ciebie zadania.
{{< /admonition >}}

{{< admonition info "Continuous Integration" true >}}
**Continuous Integration** (CI) to automatyczne zadania, które są wykonywane po zgłoszeniu Pull Requesta lub commita. Można je dowolnie konfigurować. W ogólności każdy kod, który zostanie zgłoszony zostanie skompilowany oraz przetestowany. Jeśli coś pójdzie nie tak, to dostaniesz o tym powiadomienie. Dzięki temu można uniknąć klasycznego *Hmm..., u mnie działa...*
{{< /admonition >}}

W **wersji premium** (która będzie dostępna w przedsprzedaży w cenie zwykłego kursu) kod będzie przeglądany także przez trenera albo nawet kilku recenzentów. Kod będziecie mogli także przeglądać i recenzować sobie nawzajem. To wielka zaleta pracy w grupie. Przekonasz się, jak wiele można się nauczyć od innych, patrząc zarówno na te dobre, jak i na złe wzorce. Porównanie wielu różnych rozwiązań będzie dodatkowo dawać Ci intuicję, które rozwiązania są lepsze i dlaczego. Ta intuicja to coś, co potocznie nazywa się doświadczeniem. Być może podczas tego kursu uda Ci się zebrać 2 lata doświadczenia w 3 miesiące? :D

Oficjalnymi recenzentami kodu będą osoby, które programują zawodowo od paru lat. Poinformują Cię one, czy Twój kod spełnia wszelkie standardy, czy też czegoś mu brakuje. *Na pewno okaże się, że wiele rzeczy można zrobić lepiej.*

{{< admonition info "Mała dygresja" true >}}
Ze swojej pierwszej pracy jako programista najbardziej zapamiętałem moje pierwsze poważne, samodzielne zadanie. Miałem do napisania mały kawałek kodu. W 30 liniach, które dostarczyłem, kolega, który zrobił mi przegląd kodu, wypunktował 40 rzeczy, które można zrobić lepiej. Mógłbym się tym załamać, ale wtedy stwierdziłem „wow, też chce być taki jak on”. Pozdrowienia dla Bartosza 🙂
{{< /admonition >}}

Jeśli to wszystko brzmi jak magia, to nie musisz mi dziękować, za uświadomienie Cię ilu rzeczy nie wiesz. Na kursie poprowadzę Cię za rączkę przez wszystko. Musisz znać tylko podstawy programowania w C++. Całą otoczkę oraz inżynierię programowania i dobre praktyki nabędziesz podczas kursu.

### Platforma do kursu online

Największym problemem tego kursu jest to, że będę musiał stworzyć do niego całą platformę, która będzie go obsługiwała. Nie ma obecnie gotowych rozwiązań, które umożliwiałyby stworzenie tego kursu w takiej formie, chyba że wykorzystam jakieś platformy do gier online. Będę tutaj zdecydowanie potrzebował pomocy programistycznej przy tworzeniu samej platformy. Na pewno zajmie to bardzo dużo czasu, ale będzie ona rozwijana zgodnie z zasadami **agile**. Podstawową działającą platformę mam nadzieję udostępnić już pod koniec 2020 roku. Prawdopodobnie sama platforma także będzie pewnym przełomem w dziedzinie nauczania online.

{{< admonition info "Agile" true >}}
Metodyki zwinne (**agile**) zakładają, że produkty tworzy się przyrostowo, udostępniając najpierw tylko najważniejszą, kluczową funkcjonalność, a potem dodając kolejne funkcjonalności. Przeciwieństwem tego modelu jest zrobienie całości od razu, a potem poprawianie zgodnie z oczekiwaniami klientów. Praktyka pokazuje, że projekty w metodologiach agile realizowane są szybciej i więcej z nich kończy się sukcesem.
{{< /admonition >}}

Od razu uprzedzając pytania — tak, w kursie planuję mikropłatności, czyli wykupywanie dodatkowych modułów. Cały kurs będzie można zrealizować bez nich. Będą one tylko dodatkiem dla osób, które jeszcze bardziej chcą pogłębić swoją wiedzę. Wszystkie te dodatkowe moduły będzie można dostać za darmo, jeśli w kursie będzie wykonywało się zadania dodatkowe. Dzięki temu nagrodą za dodatkową naukę jest jeszcze więcej materiałów, które nie będą dostępne dla wszystkich 🙂

### Ten NPC daje dużo golda i XP za questa ze smokiem, czyli kiedy nauka wygląda jak gra

Oprócz przeglądów kodu w wersji premium dostępny będzie **czat ze mną** lub innymi recenzentami na **Discordzie**. Będzie można zapytać mnie o wszystko związane z programowaniem. W samym kursie nauczę Cię różnych rzeczy. Na pewno nie będę chciał uczyć czegoś niepotrzebnego, a w C++ jest parę takich rzeczy, które są zaszłościami historycznymi. W języku są one dostępne z powodu zapewnienia wstecznej kompatybilności np. z językiem C. Kurs oprócz tego, że będzie podzielony na moduły, to będzie też podzielony na poziomy trudności, aby chronić Cię przed zetknięciem się już na samym początku z rzeczami bardzo trudnymi, które mogłyby Cię zdemotywować.

W naszej nomenklaturze grywalizacyjnej nie pozwolimy Ci od razu startować solo na bossa 50 lvl, gdy ty masz dopiero lvl 10. Po kilku próbach jego nieudanego ubicia wyłączysz grę. Niektórzy bossowie będą dostępni tylko w trybie grupowym (party). Oznacza to, że będziesz musiał/-ła **dołączyć do naszego projektu open-source** i dorzucić tam trochę kodu od siebie. Pojedynczo Ci się nie uda, bo nie będziesz znać wszystkich założeń. Dopiero gdy razem w grupie zaplanujecie pracę, uda się stworzyć kod spełniający wszystkie wymagania, a boss zostanie pokonany. Będziecie wtedy świętować zwycięstwo i dostaniecie dużo punktów XP oraz złota :)

W kursie będziesz mieć mapę świata, czyli modułów kursu. NPC będą dawać Ci questy, czyli zadania do wykonania. Aby dowiedzieć się, jak wykonać zadanie, NPC będzie musiał wprowadzić Cię w fabułę, więc czasem wysłuchasz jego bajania o złych wskaźnikach, przez które ta kraina jest zaśmiecona wyciekającymi zasobami, a kiedy indziej posłuchasz o trójkącie bermudzkim, w którym czai się **niezdefiniowane zachowanie**. Fabuła nie jest liniowa, więc zadania możesz wykonywać w dowolnej kolejności, ale niektóre z nich są ze sobą powiązane. Po wykonaniu określonych zadań odblokujesz sobie przejścia do innych miast (modułów).

A odpowiadając na pytanie, jak uczyć się C++, to najlepiej właśnie metodą grywalizacji, którą przedstawiłem powyżej. Rywalizując z innymi graczami oraz samym sobą, zdobywając punkty, wykonując zadania, dostając nagrody. Najwięcej punktów zdobędziesz pomagając innym i ucząc się wspólnie w całej grupie, a więc budując **społeczność ceplusplusowych ninja**.

## Skrzynka z narzędziami, czyli moje metody uczenia

A jak się uczyć programowania? Poniżej opisuję moje skromne metody, które z powodzeniem stosuję w nauczaniu stacjonarnym. Większość z nich przeniosę też do kursu online. Także te, które wydają się niemożliwe.

* **Samodzielne rozwiązywanie zadań**. Komentarz chyba jest zbędny, ale parę słów napiszę. Zadania, które rozwiązujesz samodzielnie, służą do natychmiastowego zastosowania poznanej wiedzy. Aby coś utrwalić, na pewno nie wystarczy Ci samo przeczytanie czy nawet wielokrotne powtarzanie teorii. Taka czysto teoretyczna wiedza szybko uleci Ci z głowy. Dopiero jak coś zakodzisz, to możesz liczyć na to, że wiedza zostanie z Tobą na dłużej.
* **Zadania z trenerem**. Tutaj zadania rozwiązujesz pod nadzorem trenera. Trener nie przedstawia od razu gotowego rozwiązania, ale podsuwa pomysły w czasie implementacji oraz odwodzi Cię od gorszych rozwiązań. Jednocześnie tłumaczy, dlaczego jedne rozwiązania będą lepsze od innych
* **Zadania w parach**. Moja ulubiona forma. W końcu co dwie głowy to nie jedna. Istotą techniki zwanej Pair Programming jest to, że używacie tylko jednego laptopa i kod piszecie na zmianę w zależności od weny, interwałów czasowych lub podziału na podzadania. Podczas zajęć lubię mieszać pary, aby nie pracować ciągle z tą samą osobą, ale poznać jak inne osoby programują. Ten typ aktywności również można przenieść do świata online. Wystarczy prosta aplikacja przeglądarkowa, najlepiej pozwalająca też używać mikrofonów, aby się porozumiewać. Wspólne edytowanie kodu źródłowego może wyglądać tak jak wspólne edytowanie dokumentów w Google Docs.
* **Coding Dojo**. Wariacja powyższej formy. Zamiast 2 osób, jest was więcej. Najczęściej w cyklach zmieniacie się i pracujecie wspólnie nad kodem. Ta forma lepiej sprawdza się do dłuższych i trochę poważniejszych zadań. Dalej dysponujecie jednym komputerem.
* **Zadania grupowe**. To samo co Coding Dojo, ale każdy z was pracuje na swoim komputerze. Jest to trudne do zrealizowania na samych zajęciach, bo wymaga odpowiedniego podzielenia się pracą. Idealnie za to nadaje się do zadań domowych.
* **Przeglądy kodu (Code Review)**. Możesz przeglądać kod innych osób i komentować go. Często prowadzi to do bardzo ciekawych dyskusji i wniosków. Tak samo inne osoby mogą skomentować Twój kod. W kulturze open source nie możesz wstydzić się pokazywać swojego kodu. Dużo osób zaczynających przygodę z programowaniem ma z tym problem, ale to wina szkoły, która piętnowała złe rozwiązania poprzez stawianie jedynek. To, że ktoś dopiero się uczy, powinno być zrozumiałe dla każdego. Błądzić jest rzeczą ludzką i im szybciej pokażesz światu swoje błędy, to tym szybciej nauczysz się pisać lepiej.
* **CI (Continuous Integration)**. Dzięki temu ustrojstwu parę sprawdzeń kodu wykonuje się automatycznie. Przede wszystkim automat może sprawdzić, czy Twój kod się kompiluje, czy przechodzą wszystkie wymagane testy. Wykonywana może być także statyczna analiza kodu, która powie, jak możesz ten kod usprawnić. Opcjonalnie można też wykonać dynamiczną analizę kodu na konkretnym scenariuszu.
* **Testy**. Za pomocą testów sprawdzasz swoją wiedzę. Ja bardzo lubię pre-testy, które wypełniasz zanim w ogóle nauczysz się tematu. Większość testów u mnie istnieje tylko po to, aby się sprawdzić. Można do nich podchodzić wielokrotnie i nie ma za nie żadnych dodatkowych punktów. Ale jest też kilka testów, za które możesz zdobyć punkty.
* **[Cppreference.com](https://en.cppreference.com/w/)**- dokumentacja C++. Pierwsze źródło do sprawdzenia jak co działa. Umiejętność pracy z dokumentacją jest kluczowa. Dopiero po sprawdzeniu tutaj powinno się przeglądać StackOverflow.
* **StackOverflow**. Drugie bardzo ważne źródło informacji o programowaniu. Najstarsze dinozaury pamiętają jeszcze mezozoiczną erę programowania bez użycia tego serwisu. Zazwyczaj do poszerzania wiedzy używało się wtedy książek lub jakichś pełnych manuali dla danego języka.
* **TDD, czyli Test Driven Development**. Pozycja obowiązkowa, pomimo tego, że wieszczono już śmierć tej techniki programowania. Polega ona na tym, że zanim jeszcze napiszesz kod, to musisz napisać testy, ale w dość specyficzny sposób. Najpierw piszesz najprostszy możliwy scenariusz jednego testu. Potem dopisujesz implementację, która spowoduje, że ten test przejdzie. Potem kolejny test i kolejna implementacja. I tak sobie nadbudowujesz kawałek po kawałku. Nie należy zapominać o częstej *refaktoryzacji kodu*.
* **Warsztaty refaktoryzacji**. Długi blok zajęć, na którym wspólnie, często w formie Coding Dojo ulepszamy kod, bez zmiany jego zachowania.
* **Narzędzia typu valgrind i sanitizery**. Narzędzia te to tak zwane dynamiczne analizatory kodu. Pozwolą Ci na wykrywanie błędów, których kompilator nie jest w stanie wykryć. Te błędy to np. wycieki pamięci, niezdefiniowane zachowanie, wyścigi.

{{< admonition info "Refaktoryzacja kodu" true >}}
**Refaktoryzacja kodu** to zmiana kodu źródłowego, najczęściej w celu poprawienia jego czytelności, zastosowania odpowiednich wzorców lub umożliwienia szybszego rozszerzania tego kodu w przyszłości. Podczas zmiany kodu nie wolno zmienić jego funkcjonalności. Kod przed refaktoryzacją powinien dawać dokładnie takie same rezultaty jak po refaktoryzacji. Z tego powodu brak testów jednostkowych wyklucza możliwość użycia tej techniki, bo nie będzie można łatwo zweryfikować czy kod ciągle daje takie same rezultaty.
{{< /admonition >}}

### Moja metodologia

#### Pre-work

Wspomniałem, że na swoich zajęciach stosuję „odwróconą klasę”, czyli flipped classroom. Oznacza to, że do każdych zajęć uczeń powinien sam się przygotować w ramach tzw. pre-worku. Przykłady takich pre-worków to:

* Poczytaj o C++11 na Wikipedii
* Zainstaluj valgrinda i sprawdź, czy użycie go daje rezultat taki jak w instrukcji
* Napisz test jednostkowy we frameworku Catch, który sprawdzi, czy w wektorze są wrzucone do niego wcześniej liczby

Jeśli ktoś jest ambitny i ma czas, to wykona pewnie więcej, bo rolą pre-worku jest przygotowanie zarówno ucznia, jak i wszystkich narzędzi, które będą nam potrzebne do danej lekcji. Dzięki temu na samych lekcjach nie tracimy czasu na konfigurowanie narzędzi i rozwiązywanie podstawowych problemów. Im więcej ktoś wykona pracy przed właściwą lekcją, tym lepiej zostanie ona przyswojona.

#### Pre-test

Na początku lekcji stosuję też pre-testy. Jest to coś na kształt popularnej na niektórych studiach wejściówki, z tym że te testy nie są na ocenę, ani nie wykluczają z uczestnictwa w zajęciach. Taki pre-test odpowiednio nakierowuje ucznia na tematy, które będą poruszane na tej lekcji. W czasie jej trwania zostaną udzielone odpowiedzi na wszystkie pytania z testu. Pre-testy uczeń sprawdza sam sobie. Na koniec lekcji uczniowie grupowo mogą spróbować rozwiązać ten sam pre-test, a ja potwierdzam im czy ich odpowiedzi są poprawne. Czyli od razu starają się zastosować poznaną wiedzę do wypełnienia testu. To wzmacnia zapamiętywanie materiału.

#### Post-test

Analogicznie jest też post-test, ale nie jest on robiony na zajęciach. Post-test nie powinien być robiony tego samego dnia, w którym odbywa się lekcja. Jego rolą jest przypomnienie sobie raz jeszcze materiału z lekcji, a więc jest to forma powtórki. Odbywa się ona w innym miejscu niż lekcja, a wiedza użyta jest w innym kontekście niż na samej lekcji. Jeśli ktoś czytał „Włam się do mózgu” to będzie wiedział, po co stosuję takie zabiegi 🙂 Takie testy można wypełniać ile razy się chce w ramach ćwiczenia i powtarzania materiału. Również nie są one oceniane. Rolą powtarzania z użyciem post-testów jest organizacja wiedzy w mózgu i przenoszenie jej z pamięci krótkotrwałej do pamięci długotrwałej, a więc wspieranie procesów zapamiętywania. Wykuwanie wszystkiego na blachę to najgorsza rzecz, jaką można robić. Trzeba stosować poznaną wiedzę i zasady, których się nauczyło. Nie warto stosować zasady 3Z znanej ze szkoły, czyli zakuć, zdać, zapomnieć.

#### Post-work

Post-work to praktyczne ćwiczenia i zadania, które również mają utrwalić wiedzę i umiejętności zdobyte na lekcji, ale również te zdobyte poza oficjalną lekcją. Jest to rozwinięcie tego, co robiliśmy na lekcji oraz eksplorowanie nowych obszarów zastosowań dla poznanych rzeczy.

#### Punktowanie zamiast oceniania

W Coders School w ogóle nie stosuję ocen znanych ze szkół. Jestem zdania, że złe oceny za bardzo demotywują i każdy ma z nimi złe skojarzenia. To nie tylko moje zdanie, ale i rezultaty badań, których tutaj nie podlinkuję, bo nie pamiętam źródeł. Na pewno są one przytaczane w książce Grywalizacja. U mnie można jedynie zbierać punkty i im więcej ich uzbierasz, tym lepiej. Zdobyte punkty można później wymieniać na nagrody rzeczowe, takie jak różne gadżety komputerowe czy też książki programistyczne. Wraz z rosnącą liczbą punktów XP rośnie też nasz level, a co za tym idzie szacunek innych uczestników kursu. Wiedzą oni, do kogo mogą się zwrócić po pomoc. Dlaczego w szkole kujon miałby chcieć pomagać słabszym osobom? Przecież nic z tego nie ma. A u nas pomagający również ma z tego pożytek, bo za samo pomaganie zdobywa jeszcze więcej punktów 🙂 Typowa sytuacja win-win.

Dążę do maksymalnego uproszczenia procesu, aby uczenie bardzo przypominało gry komputerowe, przy których spędzamy wiele godzin. Trzeba natomiast wyeliminować negatywne doświadczenia, takie jak jedynki za brak pracy domowej, które dodatkowo demotywują. Gdy już się dostało za coś ocenę (a właściwie za czegoś brak) to po co to ponownie robić? Drugi raz jedynki za ten sam brak pracy domowej chyba się nie dostanie? Takie podejście nic dobrego nie wnosi do procesu nauczania. Dlatego u nas prace domowe (post-worki) można wykonać w dowolnej chwili trwania kursu. Dostarczanie post-worków przed określonym terminem jest za to dodatkowo premiowane.

### Świetna atmosfera

Coś, na co dopiero uczestnicy zwrócili mi uwagę, jest moja umiejętność wytworzenia dobrej i przyjaznej atmosfery i to zarówno podczas bezpośrednich spotkań, jak i podczas rozmów na czacie. Nie byłem tego świadomy, ale faktycznie coś w tym jest. Daję ludziom przestrzeń do zadawania każdych pytań, niektórych nawet kilkukrotnie. Nigdy nie zbywam, że jakieś pytanie jest zbyt podstawowe. Jeśli ktoś czegoś nie wie, to albo trochę brakowało mu podstaw, albo jeśli było to przerabiane na kursie, to pewnie nieskutecznie to wytłumaczyłem. Ponieważ dotychczas nagrywałem swoje lekcje, to niektórym osobom zdarzyło się też wytknąć mi nieścisłości, bo na spokojnie w domu mogli obejrzeć sobie nagranie i skonfrontować je z tym, co mówią „internety” na ten temat albo jak to zastosować w praktyce w swoim projekcie. Nic się nie uchowało i nie zamiotło pod dywan, co miało na pewno niezwykle pozytywny wpływ na całą atmosferę. Nie jestem alfą i omegą i niektórych rzeczy mogę po prostu nie wiedzieć lub mogę nie wyjaśnić jakiegoś przypadku. Dzięki takim wytknięciom mojej niewiedzy, uczestnicy nie czują się aż tak niezręcznie ze swoją niewiedzą. A ja zawsze mam okazję dodatkowo nauczyć się jeszcze więcej.

Osoby z grup projektowych, które formowały się w czasie trwania mojego kursu, często spotykały się razem także poza zajęciami. Pod pretekstem planowania prac przy projekcie udawało się wypić niejedno piwo. Były też oficjalne wyjścia na piwo po zajęciach. I taką integrację każdy rozumiał. Nie było potem osób, które bałyby się pytać, bo przecież tam sami swoi. Podczas kursu online oczywiście takie spotkania bezpośrednie nie będą możliwe, ale dalej będę próbował wytwarzać dobrą atmosferę na czacie, wrzucając co jakiś czas programistyczne heheszki lub rozmawiając na kanale offtop na przeróżne tematy.

## Co jest wymagane na junior developera C++?

To pytanie dostaję dość często i bardzo trudno jest na nie jednoznacznie odpowiedzieć. Wymagania na stanowisko „młodszy programista C++” tak naprawdę będą się różnić w zależności od pracodawcy i jego branży. Ktoś może chcieć już znajomości niskopoziomowych szczegółów (szczególnie branża Embedded), a ktoś może zapytać nawet o wielowątkowość. Niemniej jednak jakiś ogólny zbiór koniecznych umiejętności można wyodrębnić. Podzieliłem te rzeczy na 3 kategorie: obowiązkowe, mile widziane i niepotrzebne. Każda taka lista będzie jednak trochę subiektywna i to, co wg mnie jest niepotrzebne, to ktoś może sobie jednak mimo to zażyczyć. Mam nadzieję, że będą to jednak nieliczne wyjątki. Kolejna ważna uwaga jest taka, że to się zmienia w czasie. To, co kiedyś było wiedzą typowo seniorską, już zaczyna być wymagane u juniorów. Przyczyną tego stanu jest przesyt juniorów lub też osób, które chciałyby się wbić do programistycznej branży. Ponieważ jest ich bardzo dużo, a wiele z tych osób nie reprezentuje godnego poziomu, to niektóre z firm w ogóle rezygnują z rekrutacji juniorów lub bardzo mocno ją ograniczają. Nawet jeśli ktoś musi zrekrutować wielu juniorów, to często pierwszym etapem selekcji będą jakieś testy lub zadania online, które mają przesiać kandydatów. No więc tak:

### Obowiązkowo

* Git
* Komendy Linuxa (wymagane w 80-90% ogłoszeń o pracę, tylko te pod Windows mogą ich nie wymagać)
* Podstawowa obsługa kompilatora z linii komend
* System budowania Cmake 
* Używanie dokumentacji języka C++ (cppreference.org)
* Znajomość składni języka (*Czy ten kod się skompiluje?*)

{{< admonition info "Czy ten kod się skompiluje?" true >}}
Osobiście twierdzę, że pytania typu czy kod się skompiluje są bezsensowne. Sama wiedza na ten temat oczywiście będzie wynikać z doświadczenia, ale po to jest kompilator, aby on za nas to skompilował i nam powiedział dlaczego coś mu nie pasuje. Kompilatory ciągle się zmieniają i czasami jak ktoś ma przestarzałą bazę takich pytań to odpowiedź może brzmieć: zależy od kompilatora lub jego wersji. Lepiej brzmi pytanie dlaczego dany kod się nie skompiluje lub po prostu jakie widzisz problemy z danym kodem.
{{< /admonition >}}

* Stosowanie przejrzystego formatowania kodu
* Stosowanie konwencji nazewniczych
* Umiejętność pisania prostych algorytmów
* Podejście rekurencyjne i iteracyjne
* Słowa kluczowe: inline, static, explicit, volatile, const, friend i wiele innych
* Znajomość rodzajów przekazywania parametrów (wartość, wskaźnik, referencja)
* Umiejętność używania wskaźników
* Klasy i obiekty, pola i metody, konstruktory, destruktory
* Konwersje typów, static_cast
* Kolejność wywołań konstruktorów i destruktorów w dziedziczeniu i kompozycji
* Programowanie obiektowe: dziedziczenie, polimorfizm, funkcje wirtualne, funkcje czysto wirtualne, klasy abstrakcyjne, interfejsy, problem diamentowy
* Znajomość zagadnień złożoności obliczeniowej
* Znajomość kontenerów STL i złożoności obliczeniowej ich operacji
* Znajomość (powierzchowna) algorytmów STL
* Zarządzanie pamięcią:
    * używanie wskaźników
    * stos vs sterta
    * dynamiczna alokacja i dealokacja pamięci
    * wycieki pamięci i ich wykrywanie
    * używanie smart pointerów
    * RAII
    * podstawowe użycie valgrinda
* Testowanie: testy jednostkowe (zazwyczaj w Google Test lub Catch2), TDD
* Nowoczesny C++:
    * lambdy
    * auto
    * using
    * default
    * delete
    * final
    * override
    * nullptr
    * scoped enum
    * jednolita inicjalizacja
* Szablony: używanie klas i funkcji szablonowych

### Mile widziane (poziom mida)

* Umiejętność implementacji różnych operatorów
* Narzędzia GNU binutils (używane głównie w Embedded)
* Dobra znajomość popularnych algorytmów (sortujące, grafowe)
* Dobra znajomość podstawowych struktur danych (drzewa binarne, tablice haszujące, listy)
* Debugowanie (najlepiej w gdb)
* Wiedza o tym, gdzie może występować niezdefiniowane zachowanie
* Testowanie:
    * testy w stylu Given, When, Then (Arrange, Act, Assert)
    * wstrzykiwanie zależności
    * dummy, stub, mock
* Wyjątki – poprawne używanie i pisanie własnych wyjątków, znajomość zasad zwijania stosu i kolejności niszczenia obiektów, znajomość zasad łapania wyjątków
* Drobne optymalizacje: const correctness, przekazywanie przez referencje, rozmieszczenie danych w pamięci
* Wiszące referencje i wskaźniki, rozpoznawanie problemów z czasem życia obiektów
* Szablony: pisanie własnych klas i funkcji szablonowych, specjalizacje szablonów, mechanizm dedukcji typów, mechanizm overload resolution
* Zarządzanie pamięcią: używanie weak_ptr, znajomość wydajności smart pointerów i ich problemów
* Nowoczesny C++
    * semantyka przenoszenia
    * referencje rvalue i lvalue
    * constexpr
    * noexcept
    * structured bindings
* RTTI, dynamic_cast
* Rule of 0, 3, 5
* Znajomość kilku popularniejszych wzorców projektowych
* Znajomość zasad czystego kodu
* Znajomość zasad SOLID
* Podstawy wielowątkowości: wątek, mutex, async
* Nowości w C++20
* Znajomość podstawowych diagramów UML
* Znajomość metodologii zwinnych (np. scrum)

### Niepotrzebne (poziom seniora)

Niepotrzebne, to nie znaczy niepotrzebne w ogóle, ale na juniora. W późniejszym etapie kariery szanujący się programista powinien zadbać o douczenie się tych kwestii. Większość programistów niestety nie dochodzi do tego poziomu lub zwyczajnie wychodzą z założenia, że jeśli kilka lat przeżyli bez tego to i resztę życia też mogą tego nie znać.

* Szablony: type_traits, SFINAE, enable_if, tag dispatch, CRTP, szablony wariadyczne
* Wielowątkowość: blokady, zakleszczenia, future, promise, atomic, zmienne warunku, call_once
* Uniwersalne referencje (forwarding reference), std::forward
* Optymalizacje: Copy elision, RVO, pamięć cache, cache locality, false sharing
* Benchmarking
* Zaawansowane debugowanie (np. aplikacji wielowątkowych)
* Dobra znajomość wzorców projektowych
* Dobra znajomość idiomów języka C++: RAII, PIMPL, Small Object Optimisation, Type erasure, PIMPL, …
* Znajomość zasad GRASP 
* Znajomość biblioteki Boost

Musisz wziąć pod uwagę, że te listy to wersje adekwatne do C++17. W C++20 dojdzie do tych list jeszcze trochę nowych rzeczy. Póki co znajomość tych nowości umieściłem w części „mile widziane”.

Oczywiście nie sposób wypisać absolutnie wszystkiego. Stwierdzam nawet, że ta lista jest nieskończona, bo wiele z tych tematów można rozbijać na bardzo drobne kawałeczki i każdy z nich tłumaczyć na jeszcze większym poziomie zagłębienia. Mam jednak nadzieję, że ta lista będzie dla Ciebie dobrym drogowskazem, który wskaże Ci elementy, których musisz się nauczyć, aby łatwo było Ci przejść rozmowę rekrutacyjną na stanowisko Junior C++ developera.

Jeśli natomiast jesteś już midem lub seniorem i nawet znasz prawie wszystko, co umieściłem na tej liście, to dalej jest nieskończona liczba rzeczy, której można się uczyć. Wystarczy, że wymienię tutaj bazy danych i język SQL, bazy NoSQL, architekturę oprogramowania, znajomość protokołów sieciowych.

## Minusy bootcampów

Co jest minusem bootcampów? Mogę wymienić kilka rzeczy, które są wadami, ale tylko z mojego punktu widzenia. Dla innych osób te wady mogą być nawet zaletami. Zaznaczę jednak, że prowadziłem też zajęcia w trybie bootcamp i zebrałem odpowiednio dużo informacji zwrotnych od uczestników. Na ich podstawie wyciągnąłem wnioski i stwierdziłem, że w celu poprawy efektów nauki nie będę prowadził zajęć w tym trybie. Przejdźmy do tych minusów. Najpierw je wymienię, a później opiszę dokładniej.

1. Intensywność
2. Harmonogram
3. Rozpoczynanie od podstaw

### Intensywność i harmonogram

Pierwszy z punktów to intensywność. Jest on powiązany z kolejnym punktem — harmonogramem. Opiszę je więc razem. Zajęcia na bootcampach często odbywają się od poniedziałku do piątku i często po 8 godzin dziennie. Taki tryb pracy wymusza wyłącznie przyswajanie wiedzy w czasie zajęć z trenerem w sali. Nie stosuje się raczej prac domowych, bo po 8 godzinach nikt nie ma na nie czasu oraz głowy. Jedyne, o czym człowiek myśli po powrocie do domu to odpalić TV albo Facebooka, odmóżdżyć się, wypić piwko i pójść spać.

Na pewno znajdziecie też bootcampy, które oferują trochę inne rozłożenie zajęć, np. poniedziałek-czwartek po 8h albo poniedziałek-piątek po 4h wieczorami albo sobota i niedziela po 10h. Ale to oczywiście są wariacje dla osób, które mają inne stałe zajęcia. Także nie oszukujmy się, ale poza taką intensywną nauką w klasie nie macie na nic czasu. Według wszelkich badań nie wpływa to pozytywnie na efekty uczenia. Oczywiście wśród ludzi są różne jednostki i niektórym taki tryb będzie odpowiadał. Dla innych osób taki kurs nie będzie taki straszny z racji tego, że ktoś już wcześniej liznął trochę tej wiedzy. Taki kurs tylko ją bardziej ugruntowuje i porządkuje. Ideą takiego podejścia jest jednak sztywne ograniczenie czasowe dla uczestnika. Jeśli kurs jest reklamowany w taki sposób, że np. w pół roku zostaniesz programistą, to w te pół roku często upychane jest 2 lata wiedzy ze studiów.

Ja jestem zwolennikiem wolniejszej i trwalszej nauki. Jeśli proces nauczania rozbije się na mniejsze kawałki i dużo z tych zadań przerzuci się do wykonania samodzielnie (głównie realizowanie zadań domowych, ale też czytanie artykułów i projekty grupowe) to z racji tego, że zmienia się miejsce przyswajania wiedzy oraz kontekst zastosowań to *wiedza skuteczniej wpada do głowy*.

{{< admonition info "Skuteczne przyswajanie wiedzy" true >}}
Poczytaj o metodzie zmiany miejsca, metodzie tancerki i wielu innych ciekawych metodach nauki w książce „Włam się do mózgu”. W swoich kursach stacjonarnych świadomie stosuję prawie wszystkie z nich.
{{< /admonition >}}

Z racji intensywności i napiętego grafiku projekty jakie tworzy się w ramach bootcampów często rozpoczyna się na sam koniec, już po zakończeniu części edukacyjnej. Wtedy człowiek, który ma do wykonania projekt, rozsiada się, spogląda na treść, spogląda na notatki i… nie wie jak go zacząć. Serio. Dużo ludzi ma problemy z jakimkolwiek ruszeniem z miejsca. Dlatego też u mnie pierwszy projekt jest stosunkowo wcześnie, czyli już na pierwszej oficjalnej lekcji po wstępnym wyrównaniu wiedzy. Tak, pierwsze 3 lekcje u mnie mają bardziej za zadanie wyrównać wiedzę pomiędzy uczestnikami, bo zakładam, że każdy już ma jakieś podstawy. Dzięki takiemu szybkiemu zanurzeniu w pierwszy projekt uczestnicy natychmiastowo otrzymują informacje zwrotne na temat swoich programów. 

Dla osób, które nie potrafią ruszyć z miejsca przewidziane są podpowiedzi w formie listy kontrolnej. Jeśli ktoś nie umie bez niej zacząć, to z taką listą oraz z możliwością bezpośredniego kontaktu ze mną poprzez czat jest dużo łatwiej. Poza tym bardzo szybko rozpoczyna się u mnie etap projektów grupowych, bo już na drugiej lekcji, to co stworzyło się samemu, należy dalej rozwinąć w parach. Na podstawie pierwszych wersji dwóch różnych osób oraz moich komentarzy można poprawić istniejące rozwiązanie (lub napisać nowe) i rozwijać je dalej. Równie szybko wprowadzane są większe grupy projektowe, ale tutaj już z pełną świadomością problemów, które na nie czekają. Nigdy nie zapobiegam problemom, pozwalam ludziom przekonać się na własnej skórze jak ciężka może być praca grupowa i dopiero po przeprowadzonej retrospektywie, wyciąga się wnioski, które mają być zastosowane w dalszej współpracy. Uczenie się na błędach jest bardzo skuteczne, pod warunkiem, że są to błędy własne. Uczenie się na cudzych błędach, wbrew powszechnej opinii nie daje aż tak spektakularnych rezultatów.

{{< admonition info "Retrospektywa" true >}}
**Retrospektywa**, potocznie retro, to jeden z rytuałów metodologii scrum. Wg mnie najważniejszy. Pozwala on na dialog całego zespołu i stwierdzenia, co we współpracy kuleje, co należy poprawić i w jaki sposób. Również pochwala się dobre praktyki, które były stosowane ostatnio.
{{< /admonition >}}

### Podstawy programowania

Zostało nam jeszcze rozpoczynanie od podstaw. Dlaczego pomijam ten etap? Mam kilka powodów. Najbardziej przyziemny jest taki, że sam wybieram sobie klientów i gdybym miał tłumaczyć komuś kto zupełnie się nie nadaje na programistę jak działa instrukcja "if"‚ lub pętla "for" to trochę by mnie to denerwowało, delikatnie mówiąc. Męczyłbym się podczas takich zajęć. I nie twierdzę tutaj, że osoby, które nie potrafią tego pojąć są ułomne albo, że nie zrobiłbym sobie selekcji kandydatów na podstawie ich predyspozycji. Na pewno bym zrobił. Z doświadczenia natomiast wiem, że taka selekcja nie jest w pełni skuteczna. O niektórych rzeczach dowiem się dopiero w praktyce czyli podczas zajęć oraz sprawdzając zadania domowe.

Takiej wstępnej selekcji służą u mnie lekcje wstępne, których zadaniem jest wyrównanie wiedzy. Po nich potrafię z ponad 90% prawdopodobieństwem powiedzieć, kto nie ukończy mojego kursu (z różnych przyczyn). Jeśli zauważę, że ktoś sobie za bardzo nie radzi, to bardzo wcześnie oferuję dodatkowe wsparcie i pomoc oraz angażuję inne osoby z grupy do jak najwcześniejszej pracy zespołowej razem z tą osobą (na początku, gdy nikt się nie zna z innymi to nie jest to łatwe). Gdy po zakończeniu lekcji wstępnych nie widzę poprawy to bez ogródek podczas rozmowy twarzą w twarz (lub w bezpośredniej komunikacji, jeśli nie uda się tak porozmawiać) daję jasno do zrozumienia, że tej osobie będzie ciężko w dalszej części kursu.Każdy ma możliwość bezproblemowej rezygnacji po tych lekcjach wstępnych. Później zaczynają się projekty grupowe i rezygnacja w trakcie również jest możliwa, ale tutaj trzeba uważać, aby wycofanie się jakiejś osoby nie zepsuło projektu reszcie. Po dokształceniu się każdy jest mile widziany na kolejnej edycji kursu.

Podstaw nie uczę także dlatego, że to trwa bardzo długo. Najwięcej czasu trzeba poświęcić każdemu uczestnikowi z osobna. Najpierw jest to rozwiązywanie podstawowych problemów z aplikacjami (kompilatory, IDE), później zrozumienie podstaw języka. Mógłbym takie rzeczy robić, ale nie lubię naciągać ludzi na pieniądze. Takich rzeczy można zupełnie za darmo nauczyć się w internecie. Polecałem już [kursy pana Zelenta][kurs-pana-zelenta] i wspomnę o nich tutaj jeszcze raz. Zresztą każdy przed moim kursem ma pre-work w postaci przerobienia tych kursów i odświeżenia swojej wiedzy. 

Na koniec chciałbym dodać, że w kursie online będzie jakieś szersze wprowadzenie do podstaw. Mogę sobie na to pozwolić, bo zrobię to jednorazowo. Poza tym podlinkuję dużo innych już gotowych i dobrych materiałów dla juniorów.

## Pytania od publiczności

### Szkoła programowania w CV

Pytanie, które czasami dostaję jest *"Czy lepiej pisać, czy nie pisać szkoły programowania w CV?"* W mediach społecznościowych niektórzy mówią, że podobno pracodawcy unikają takich osób. No cóż, skoro jest zalew juniorów o podobnych, ale nie wystarczających kompetencjach to możliwe, że unikają. A jeśli unikają to dlatego, że mieli złe doświadczenia w ich rekrutowaniu. Być może chodzi o za małą wiedzę, może o złą postawę - *"Jestem po kursie za miliony monet i praca mi się należy jak 500+ dla singli"* A może jeszcze coś innego. Ja nie mogę potwierdzić czy faktycznie są jakieś firmy, które unikają takich pracowników. Chciałbym za to zauważyć, że tak być może jest w innych językach programowania niż C++. Dlaczego nie w C++? Bo nie ma zbyt wielu kursów tego języka. Jeśli ktoś go kończy, to raczej jest to mała grupa osób. Nie ma więc tego zalewu juniorów jak w przypadku technologii front-endowych. Ja nie wstydzę się tego, jakich absolwentów wypuszczam. Nie każdy też dostaje u mnie certyfikat. Trzeba na niego zasłużyć. Ale też nie zamykam bram dla osób, które certyfikatu nie dostaną. Jeśli podniosą oni swoją wiedzę, to mogą po specjalnej rozmowie kwalifikacyjnej ze mną dostać certyfikat w przypadku jej pomyślnego ukończenia.

Podobnie jest z wieloma firmami, które znam. Dawniej myślałem, że jeśli nie pójdzie mi na rozmowie rekrutacyjnej, to ta firma już będzie do końca mojego życia spalona. Jest to bardzo mylne myślenie i często można już po pół roku lub roku jeszcze raz startować do tej samej firmy, w której się nie udało. Będzie się bogatszym wtedy o pewne doświadczenia i zapewne przez ten okres człowiek zdąży się douczyć.

### Upragniony certyfikat, czyli co zrobić, gdy zabraknie papieru toaletowego?

Muszę też wspomnieć o bardzo ważnej rzeczy. Jeśli ktoś myśli, że certyfikat z dowolnej szkoły programowania otwiera przed nim drzwi do kariery w IT to jest w dużym błędzie. To, co otwiera te drzwi to profesjonalna wiedza, a częściej oczywiście doświadczenie. Sam certyfikat to tylko papierek, który raczej nie znaczy wiele w branży IT. Są oczywiście certyfikaty Microsoftu, które są honorowane w technologiach .NET albo certyfikaty Oracle dla Javy, ale dla C++ nie ma oficjalnych jednostek, które takie certyfikaty wydają (czyt. właścicielem tego języka nie jest jedna firma). Pracodawcy, zamiast patrzeć na certyfikat po prostu sprawdzą Twoją wiedzę oraz umiejętności miękkie, jeśli takich będą wymagać.

### Brakujące doświadczenie

Jeśli masz wiedzę, ale nie masz doświadczenia, to na kursie możesz jakieś zdobyć. Podczas realizowania projektów wewnętrznych w szkołach lub dowolnych projektów open-sourcowych, które zestawione są w podobny sposób do projektów komercyjnych, już nabija Ci się doświadczenie i powinno się je wpisywać do CV. Pamiętaj, że doświadczenie != zatrudnienie. Możesz więc mieć rok doświadczenia, nie mając żadnego zatrudnienia, kontrybuując jedynie do projektów open-sorce. Na moim własnym przykładzie mogę stwierdzić, że popełniłem przy wielu rekrutacjach duże błędy, nie podając informacji w CV, że spędziłem prawie 10 lat na prowadzeniu i tworzeniu własnej strony internetowej w pierwszym dziesięcioleciu XXI wieku. Samo prowadzenie to nie było wyłącznie pisanie treści, chociaż to oczywiście też, ale zaprogramowanie własnego silnika CMS dla tego serwisu, używającego baz danych. 10 lat doświadczenia jak na człowieka, który dopiero co skończył studia? Nie do pomyślenia. Ale jednak możliwe. Szkoda tylko, że wtedy o tym nie wiedziałem i nie wykorzystałem tego odpowiednio.

### Czy po kursie online mogę uzyskać certyfikat?

Jeśli bardzo chcesz mieć taki papierek, to owszem, możesz go uzyskać. Po ukończeniu kursu online musisz się ze mną skontaktować mailowo i napisać, że chcesz certyfikat. Będziemy musieli się umówić na około 3-godzinne spotkanie (prawdopodobnie we Wrocławiu), podczas którego sprawdzę Twoją wiedzę na symulacji rozmowy rekrutacyjnej. Spotkanie takie jest dodatkowo płatne, ale na razie nie podaję szczegółów, bo rozpiszę je, gdy zakończymy kurs i faktycznie ktoś będzie się do mnie z takimi prośbami zgłaszać. Być może uda mi się zautomatyzować proces wystawiania takich zaświadczeń o ukończeniu kursu online :)

### Nie od zera? Jak to?

Jeszcze jedna ważna informacja. Ten kurs nie będzie dla osób zupełnie początkujących. Musisz znać przynajmniej podstawy programowania w dowolnym języku, a najlepiej także podstawy programowania obiektowego. Jeśli nie znasz aż takich podstaw C++ to na pewno znajdziesz w Internecie darmowe kursy online, które cię tego nauczą. Ja polecam trochę przestarzały, ale ciekawie wytłumaczony i przede wszystkim darmowy [kurs C++ pana Mirosława Zelenta][kurs-pana-zelenta] oraz [kurs obiektowego C++][kurs-obiektowy-pana-zelenta] tego samego autora. Nie jest on zbyt aktualny, ale jednak pozwoli nauczyć się podstaw, które będą przydatne w naszym kursie. Oprócz tego nauczysz się paru nieprzydatnych rzeczy, ale jeśli i tak oczekujesz na mój kurs, to tego czasu trochę będziesz mieć. Wykorzystaj ten okres oczekiwania na zrealizowanie tychże dwóch kursów. Być może w przyszłości sam udostępnię lekcje od zera, ale na razie wolę odsyłać do sprawdzonych gotowych rozwiązań :)

### Pomorze ktoś? Niestety, Mazowsze

Kurs C++ online będzie rozwijany w trybie ciągłym, gdyż on sam jest dużym projektem programistycznym. Prawdopodobnie nie będę pracował nad nim sam. W przyszłości zapewne uformuje się jakiś zespół, który wspólnie ze mną będzie dodawał nowe rzeczy do świata ceplusplusowych ninja. Jeśli chcesz dostawać informacje o tym, jak idzie rozwijanie tego kursu i jako jedna z pierwszych osób dostawać do przetestowania jego fragmenty to (zapisz się proszę na tę listę)[mailing jakiś pewnie w MailChimpie]. Na pewno też powiadomię Cię, gdy wystartuje przedsprzedaż kursu. Otrzymasz także zniżkę na moje przyszłe kursy na Udemy, gdy te się pojawią :) Cena kursu na pewno będzie rosła w czasie. Im więcej nowych modułów będzie do niego dorzucanych, to tym więcej będzie on kosztował. Im wcześniej go kupisz, tym mniej zapłacisz. Na pewno nigdy nie będzie tak tanio, jak w przedsprzedaży.

Jeśli taka narracja kursu wzięta żywcem z gier online do Ciebie przemawia — cieszę się niezmiernie :) Daj mi proszę o tym znać pisząc mi [maila][mail-ziobron]. To wiele dla mnie znaczy, bo wtedy wiem, że nie robię tego na darmo, tylko że są osoby, które z niecierpliwością oczekują, aż przedstawię światu moją pracę.

Tak jak wspomniałem wcześniej, moim celem nie jest zdobycie maksymalnej liczby klientów i sprzedanie im produktu. Nie chciałbym nikomu wciskać czegoś, co nie będzie mu potrzebne i nie będzie mieć z tego dobrego użytku. Zamiast tego chcę zrobić coś naprawdę dobrej jakości, czego jeszcze nigdy nie było w polskim Internecie. Kurs będzie dostępny w języku polskim. Jeśli się przyjmie, to później zostanie dorobiona jego wersja angielska. Jeśli uważasz, że możesz mnie wesprzeć np. oferując swoje usługi programistyczne podczas tworzenia platformy do kursu lub testując ten kurs, to koniecznie napisz mi [maila][mail-ziobron].

Jeśli jesteś programistą C++ i masz inne spojrzenie na opisane przeze mnie rzeczy, to daj znać w komentarzu. Chętnie podyskutuję. A jeśli wiesz, że ktoś z twoich znajomych uczy się lub będzie się uczyć C++, to proszę, wyślij mu ten artykuł.

## Podsumowanie

Dziękuję, że dotarłeś/-aś ze mną do samego końca. Raz jeszcze zachęcam Cię do zapisania się na newsletter, aby otrzymywać raporty z pola bitwy.

Jak widzisz, tematyka naszego poradnika jest dość spora. Dotyka ona nie tylko zagadnień związanych z tym, czego się uczyć, ale też dużo podpowiada o tym, jak się uczyć. Moje formy uczenia są wybrane w taki sposób, aby treść możliwie najłatwiej sama pchała się do głowy i nie chciała potem stamtąd wypływać.

Skoro udało Ci się doczytać ten artykuł prawie do końca, to pewnie jesteś osobą, która jest zdecydowana na poszerzanie swojej wiedzy z języka C++. Jeśli cała ta ścieżka jest dopiero przed Tobą, to wiedz, że będzie Cię czekać dużo ciężkiej pracy. Nie wystarczy poczytanie książek czy internetu, aby nauczyć się programowania. Trzeba bardzo dużo praktykować. Jeśli nie znajdziesz na to czasu, to nawet nie zaczynaj. Tutaj potrzebny jest czas. Ale może nawet nie tak dużo, jak myślisz. Ważniejsza jest regularność. Lepiej spędzać na nauce 1 godzinę dziennie codziennie niż 10 godzin tylko w weekendy. Wiem doskonale co piszę. Przeładowywanie mózgu informacjami i komasowanie sesji zdobywania wiedzy powoduje pogorszenie efektów nauki niż ich rozłożenie w czasie na mniejsze kawałki. Poza tym im wcześniej coś zaczniesz, to potem łatwiej korygować kurs, gdyby się okazało, że za daleko odpływasz w niewłaściwą stronę. Gdy na stałe będziesz obcować z kompilatorem to zaczniesz go bardzo dobrze rozumieć :)

<!-- {{< button "http://coders.school/poradnik/%23elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjI0ODMiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D" "Jeśli udało Ci się doczytać ten artykuł do końca, to kliknij tutaj proszę" >}} -->

Celem tego artykułu było pokazanie Ci, jak wielką wagę przykładam nie tylko do samej tematyki zdobywanej wiedzy, ale warunków, w których jest ona zdobywana. Jeśli chcesz otrzymywać informacje na temat rozwoju kursu C++ online, ofertach jego sprzedaży oraz informacje o kursach stacjonarnych oraz od czasu do czasu jakieś darmowe materiały do nauki to najlepsze co możesz dla mnie zrobić to:

1. [Zapisać się na newsletter][newsletter]

2. Wysłać linka do tego artykułu do kogoś, komu się on przyda

3. Podzielić się tym artykułem przez media społecznościowe klikając jedną z poniższych ikonek

Tymczasem żegnam się i życzę sukcesów w nauce programowania￼.

[scarea-pl]: http://scarea.pl
[rekrutacja-w-it]: https://www.youtube.com/watch?v=oyuH4Nm_md0
[programista-15k]: https://www.wykop.pl/tag/programista15k/
[mirek-nie-ma-pracy]: https://www.wykop.pl/wpis/46132657/anonimowemirkowyznania-skonczylem-bootcamp-i-zosta/
[ile-zarabiaja-programisci]: https://www.wykop.pl/wpis/46130795/dlaczego-programisci-az-tyle-zarabiaja-ostatnio-si/
[serwis-jaxenter]: https://jaxenter.com/most-difficult-programming-languages-152590.html
[porownanie-jezykow]: https://github.com/Dobiasd/articles/blob/master/programming_language_learning_curves.md
[krzywa-uczenia-cpp]: https://www.slideshare.net/szborows/boostpython-domesticating-the-snake
[newsletter]: #newsletter
[kurs-pana-zelenta]: https://miroslawzelent.pl/kurs-c++/
[kurs-obiektowy-pana-zelenta]: https://miroslawzelent.pl/kurs-obiektowy-c++/
[mail-ziobron]: mailto:lukasz@coders.school
