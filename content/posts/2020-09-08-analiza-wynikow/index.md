---
title: "Smutne wyniki testu C++ dwa lata później"
subtitle: ""
date: 2020-10-02T12:00:00+02:00
lastmod: 2020-10-02T12:00:00+02:00
draft: false
author: "Mateusz Stacewicz"
authorLink: "https://www.linkedin.com/in/mateusz-stacewicz-329159154/"
description: ""
summary: ""
url: "/post/analiza-wyników-testu-cpp"

tags: ["c++", "test", "wyniki"]
categories: ["Post", "Raport"]
keywords: ["test c++", "wyniki testu c++", "c++ trudny"]
hiddenFromHomePage: false
hiddenFromSearch: false

featuredImage: "featured.png"
featuredImagePreview: "/post/analiza-wyników-testu-cpp/featured.png"

toc:
  enable: false
math:
  enable: false
lightgallery: false
share:
  enable: true
comment:
  enable: true
license: ""
---

Na naszej stronie dostępny jest test, w którym możesz sprawdzić swoją wiedzę z C++. Rozwiązać go może każdy, niezależnie od poziomu wiedzy i umiejętności. Test składa się z ośmiu zamkniętych pytań o zróżnicowanym poziomie trudności. Pytania dotyczą wiedzy w zakresie znajomości C++. Odpowiedzi można udzielać wielokrotnie, a sam test jest anonimowy. Możesz więc potraktować go jako sprawdzenie swojej wiedzy i umiejętności, które powinno Ci zająć około 10 minut.

## Omówienie i porównanie wyników ogólnych

W dniu sporządzania tego wpisu (22.08.2020) test rozwiązano 1110 razy. Przypuszczalnie większość osób, które podjęły się rozwiązania testu, to osoby zainteresowane programowaniem, które chcą rozpocząć jego naukę, są w jej trakcie albo pracują już w branży IT.
Poniżej przedstawiam wyniki na dzień sporządzania wpisu:

{{<figure src="featured.png" title="Wykres 1. Rozkład wyników testu z dnia 22.08.2020 (ilość odpowiedzi – 1110).">}}

Jak widać na zaprezentowanym wykresie, najczęściej uzyskiwany wynik przez ankietowanych to zaledwie dwa punkty. Następnym w kolejności uzyskiwanym wynikiem jest otrzymanie tylko jednego punktu.
Jest to bardzo niepokojące, zwłaszcza, jeśli zauważy się, że 85 razy uzyskaliście 0 punktów w porównaniu z wynikami 7 i 8 punktów, które łącznie zostały przez was uzyskane 83-krotnie.
Na 50% pytań poprawnie odpowiedzieliście 165 razy. 676 (czyli prawie 60,9% wyników) odpowiedzi było poniżej połowy możliwej do zdobycia punktacji, natomiast zaledwie 269 (czyli około 24,2%) udzielonych odpowiedzi miało punktację wyższą niż połowa skali.
Pocieszającym może być fakt poprawy wyników w porównaniu z danymi sprzed 2 lat, jednak trzeba zauważyć, że poprawa jest niewielka. Wynik uśredniony podniósł się o zaledwie 0,2 punktu, zgodnie z wykresem poniżej:

{{<figure src="img/stare_wyniki.png" title="Wykres 2. Rozkład wyników testu z dnia 12.07.2018 (ilość odpowiedzi – 136).">}}

## Najtrudniejsze z pytań

Największy problem sprawiły pytania o numerach 8, 6 i 4. Ilość odpowiedzi poprawnych na pytania 8 i 6 była mniejsza niż ilość odpowiedzi błędnych. Dopiero w przypadku trzeciego miejsca tego niechlubnego podium sytuacja odwróciła się i poprawne odpowiedzi wyszły na prowadzenie, choć prawdę powiedziawszy z bardzo niewielką przewagą nad najczęściej udzielaną, błędną odpowiedzią.
Najgorzej z całej trójki wypadło pytanie numer 8. Tutaj zaledwie nieco ponad 1/5 odpowiedzi została udzielona poprawnie. Widać więc, że największy problem w teście stanowi obsługa wyjątków w języku C++.

{{<figure src="img/pyt8a.png" title="Wykres 3.1. Rozkład procentowy odpowiedzi na pytanie 8. Kolorem pomarańczowym oznaczono poprawną odpowiedź.">}}

Drugie miejsce w klasyfikacji najtrudniejszych pytań zajmuje pytanie szóste, które dotyczyło wskaźników. Z tym pytaniem poradzono sobie poprawnie zaledwie w 22% przypadków. Ponadto w tym przypadku poprawna odpowiedź jest dopiero na trzecim miejscu, za dwiema, najczęściej wybieranymi i błędnymi odpowiedziami.

{{<figure src="img/pyt6a.png" title="Wykres 3.2. Rozkład procentowy odpowiedzi na pytanie 6. Kolorem pomarańczowym oznaczono poprawną odpowiedź.">}}

Brązowy medal w tej konkurencji zajmuje pytanie czwarte, którego treść dotyczyła typów zmiennych. Optymizmem napawa fakt, że w tym pytaniu najczęściej wybieraną odpowiedzią była odpowiedź poprawna, jednak niemal 2/3 odpowiedzi było odpowiedziami błędnymi.

{{<figure src="img/pyt4a.png" title="Wykres 3.3. Rozkład procentowy odpowiedzi na pytanie 4. Kolorem pomarańczowym oznaczono poprawną odpowiedź">}}

## Podsumowanie

Gdy tak przyglądałem się wynikom, analizowałem je i porównywałem doszedłem do następujących wniosków:

* Ci z was, którzy podjęli się rozwiązania testu, mają zauważalne braki w wiedzy i umiejętnościach związanych z językiem C++ i programowaniem. Świadczą o tym liczne, błędne odpowiedzi.
* Wydaje mi się, że nie popełnię błędu, zakładając, że znaczna część osób, które podjęły się testu, to absolwenci/studenci kierunków informatycznych lub pokrewnych. Utwierdza mnie to w przekonaniu, że uczelnie nie przekazują wystarczającej wiedzy i umiejętności. W efekcie Ci z was, którzy skończyli takie uczelnie, mimo posiadania dyplomu nie posiadają umiejętności koniecznych na rynku pracy, przez co możecie mieć znaczące problemy podczas szukania ofert pracy w branży IT i aplikowania na wymarzone stanowiska.
* Zauważyłem też, że pojawiły się problemy z pytaniami zarówno praktycznymi jak i przekrojowymi. Zastanawiam się, czy winy za taki stan rzeczy nie ponoszą, głównie ograniczenia się do rodzimych źródeł i treści pisanych w języku polskim, brak skutecznych metod nauki, czy korzystanie z niezaktualizowanych materiałów, albo nieefektywnych kursów stacjonarnych czy online.

## Posłowie

Trudnym jest uczyć się czegoś, co jest w ciągłym rozwoju. Czegoś, co w każdej chwili może zmienić swój standard na inny. Nie zawsze są to diametralne zmiany, jednak zdarzają się i takie. Niestety, ale tak właśnie wygląda nauka w branży IT. Jest to nieustająca pogoń za zdobywaniem nowej wiedzy i umiejętności i choć z pozoru może brzmieć to jak zadanie dla Syzyfa, to nie do końca tak jest.
Ciągły rozwój branży IT, a w efekcie również języków takich jak C++ wymusza na programistach ciągły rozwój swoich umiejętności i zdobywania nowej wiedzy, co z kolei prowadzi do kolejnego rozwoju branży i koło się zamyka. Programista nigdy nie przestaje się uczyć.
W dzisiejszych czasach łatwo o dostęp do różnych materiałów i poradników dotyczących C++, jednak trzeba również umiejętnie je wybierać, aby nie trafić na takie, które odepchną nas od pisania kodu. Poza tym warto nie ograniczać się tylko do informacji w polskim języku, ale, a może nawet w szczególności, skupiać się na źródłach anglojęzycznych.
W tym miejscu pragnę odesłać Cię do przygotowanego przez nas [poradnika nauki programowania](https://coders.school/poradnik/), oraz do [materiałów](https://coders.school/resources/), które pomogą Ci w nauce C++. Zapraszam Cię również do skorzystania z oferty naszych kursów dotyczących C++, które pomogą Ci rozwinąć i zaktualizować Twoją wiedzę.
