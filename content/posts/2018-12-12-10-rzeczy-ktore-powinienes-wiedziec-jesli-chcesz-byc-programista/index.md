---
title: "10 rzeczy, które powinieneś wiedzieć, jeśli chcesz być programistą"
date: 2018-12-12T01:02:05+00:00
draft: false
author: Łukasz Ziobroń
authorLink: ""
description: ""
summary: ""
url: /post/10-rzeczy-ktore-powinienes-wiedziec-jesli-chcesz-byc-programista/

tags: ["nauka", "programowanie", "mity", "10 rzeczy ..."]
categories: ["Post", "Warto wiedzieć"]
hiddenFromHomePage: false

featuredImage: "featured.jpg"
featuredImagePreview: "/post/10-rzeczy-ktore-powinienes-wiedziec-jesli-chcesz-byc-programista/featured.jpg"

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

Wokół zawodu programisty narosło wiele mitów, które są powielane przez osoby, nie mające żadnego pojęcia o programowaniu. W tym artykule znajdziesz 10 rzeczy, które powinieneś wiedzieć, jeśli chcesz być programistą. Jeśli nigdy nie pracowałeś jako programista, to zakładam, że większości z tych rzeczy nie jesteś świadomy.

<!--more-->

## 1. Uczelnie nie przygotują Cię do zawodu programisty

Wykładowcy na uczelniach słabo zarabiają na samym nauczaniu. Najbardziej opłacalne dla nich są granty z projektów badawczych. Ogrom prowadzących ma materiały z programowania nie aktualizowane od kilku do nawet kilkunastu lat. A języki i świat programowania zmieniają się niesamowicie szybko. Prowadzącym zwyczajnie finansowo nie opłaca się aktualizować swoich materiałów. Poza tym nie są praktykami. Nie piszą wcale tak dużo kodu, jeśli ich jedynym pracodawcą jest uczelnia.

Uczelnie są jak najbardziej w porządku, ale dają one dość płytką wiedzę z bardzo wielu tematów. Przydaje się to bardzo, aby rozszerzać swoje horyzonty i eksplorować dostępne możliwości, ale nie jest niezbędne, aby zostać programistą.

## 2. Znajomość samego języka programowania nie wystarczy

Musisz znać też podstawowe biblioteki i/lub frameworki. Każdy język ma swoje własne najczęściej używane biblioteki. W przypadku C++ taką biblioteką jest [STL](http://cppreference.com/). Dodatkowo mamy inne, które niekoniecznie już są wykorzystywane wszędzie, jak np. [Boost](https://www.boost.org/) oraz [Qt](https://www.qt.io/developers/). W przypadku Javy będzie to [Spring](https://spring.io/) i [Hibernate](http://hibernate.org/). Świadomy programista nie tylko zna biblioteki i algorytmy w nich zaimplementowane, ale również potrafi ocenić ich złożoność obliczeniową.

## 3. Musisz znać system kontroli wersji

Obecnie standardem jest [git](https://git-scm.com/). Kodu nie wysyła się mailem, co niestety robią często studenci współpracując w grupach. I nie trzyma się kilku wersji na dysku z dopiskami przy nazwie katalogu "nowe", "nowsze", "new", "newer", "newest", "the newest" lub "1", "2", "3"... Za trudno się w tym wszystkim połapać. *Która to wersja ostatnio dobrze działała?* *Już tak sobie nabruździłem, że nie wiem jak wrócić do stanu, aby cokolwiek działało*. Te wszystkie problemy rozwiązują systemy kontroli wersji.

## 4. Wysokie stawki mają tylko prawdziwi specjaliści

Ale średniacy zarabiają i tak dużo powyżej średniej krajowej. Czy wiesz ile możesz zarobić jako junior? Jest wiele mitów odnośnie stawek juniorów. Niektórzy mówią, że pracują jak wszyscy za minimalną krajową. Inni, że już na starcie mogą wyciągnąć 10k. A jaka jest prawda? Jak zawsze prawda leży po środku i stawki w głównej mierze zależą od umiejętności. Znajdziesz juniorów pracujących za grosze oraz takich dużo zarabiających. Ale Ci dobrze zarabiający tworzyli własne projekty, sami dużo się uczyli i po prostu są lepsi od tych juniorów, którzy tylko ukończyli studia.

## 5. Firmy niechętnie rekrutują osoby bez doświadczenia

Mówi się, że na polskim rynku brakuje 50 tysięcy specjalistów. 50 tysięcy specjalistów, nie 50 tysięcy byle kogo. A jak zdobyć doświadczenie skoro żadna firma nie chce Cię zatrudnić? Standardowy problem jajka i kury, ale z bardzo prostym rozwiązaniem. Nikt nie mówi, że doświadczenie zdobywa się tylko pracując na etacie. Własne projekty to również jest doświadczenie. Ważne, żeby zrobić coś więcej niż tylko każą na uczelniach. Dzięki temu będziesz mieć coś do pokazania na rozmowie rekrutacyjnej.

## 6. Formatowanie kodu jest niesamowicie ważne

Potrafię bezbłędnie powiedzieć czy dany kod napisał student, czy specjalista. Uczelnie z reguły nie przykładają żadnej wagi do poprawnego formatowania kodu. Wyjątkiem może być tutaj język Python, w którym sama składnia języka wymusza jego formatowanie. Dbanie o tzw. Clean Code jest domeną doświadczonych i szanujących się programistów. Ile razy zdarzyło Ci się usiąść nad kodem, który napisałeś tydzień temu i stwierdziłeś, że go nie rozumiesz? Są pewne wytyczne pisania dobrego kodu, które w jednym zdaniu można opisać tak: *kod jest dobry, jeśli potrafi go zrozumieć Twoja babcia*. Niestety na uczelniach Ci o tym nie powiedzą.

## 7. Znajomość testowania oprogramowania jest kluczowa

Wystarczą zwykle testy jednostkowe. Program bez testów nie działa poprawnie. To założenie jest zawsze prawdziwe. Bo w jaki sposób udowodnisz, że program działa? Czy uważasz że jesteś w stanie przewidzieć wszystkie sytuacje w kodzie i uodpornić się na nie? Ja nie jestem. Tym bardziej jeśli program ma być rozwijany i często trzeba go modyfikować. Jeśli nie masz porządnego zestawu testów automatycznych, to nigdy nie możesz mieć pewności, że nie zepsułeś czegoś co wcześniej działało. Dlatego kluczowe jest pisanie testów do swoich programów. Naucz się najpopularniejszego frameworka do testów jednostkowych w Twoim języku. Dla C++ najpopularniejsze obecnie są [Google Test](https://github.com/abseil/googletest/blob/master/googletest/docs/primer.md) oraz [Catch](https://github.com/catchorg/Catch2/blob/master/docs/tutorial.md).

## 8. W miarę upływu czasu zauważysz, że wybrany język programowania nie jest ważny

Ważna jest bardzo dobra znajomość inżynierii oprogramowania, czyli zasad pisania kodu i wytwarzania oprogramowania uniwersalnych i niezależnych od wybranego języka, takich jak SOLID. Oczywiście sam język trzeba znać i wiedzieć na co pozwala i jakie są dobre praktyki. Ale język to tylko narzędzie i zapewne w swojej karierze zdarzy Ci się programować w kilku różnych językach. Mając dobrze opanowaną inżynierię oprogramowania bez problemu przestawisz się na inny język.

## 9. Potrzebujesz naprawdę dużo czasu, aby dobrze opanować programowanie

Nie wystarczy, że napiszesz *Hello World* w danym języku i już go sobie wpiszesz do CV. Nauka programowania naprawdę jest czasochłonna i wymaga regularności. To tak samo jak z nauką języków obcych. Nie można się ich nauczyć przez tydzień. Dlatego jeśli nie dysponujesz przynajmniej 1 godziną dziennie, którą możesz poświęcić na programowanie, to nie ma sensu nawet zaczynać. Serio.

## 10. Nauka programowania wymaga dużo praktyki

Samo czytanie książek o programowaniu nie spowoduje, że poznasz programowanie. Samo obejrzenie kursu online również. Musisz po prostu pisać programy. W ten sposób zyskujesz doświadczenie. Nie bez powodu w poprzednim punkcie napisałem, że przydałaby się ta 1 godzina dziennie na programowanie.

## Podsumowanie

To koniec mojej listy, ale te 10 punktów nie wyczerpuje tematu. Na pewno nie chcę nikogo zniechęcić do zostania programistą. W końcu prowadząc [kursy programowania][1] dla osób mniej doświadczonych ode mnie, zarabiam 🙂 Jeśli po lekturze tej listy nadal chcesz być programistą, to bardzo się cieszę. Najważniejsze jest to, aby ta decyzja była świadoma. Jeśli Twoją jedyną motywacją są duże zarobki, to wiem, że nie uda Ci się zostać programistą, bo braknie Ci motywacji. Tutaj niestety trzeba poświęcić dużo czasu. Ale dla większości osób, które już zaczną, często przeradza się to w pasję, dzięki której mają to co najważniejsze **motywację**.

Polecam Ci też lekturę wpisu [Od zera do developera](http://www.samouczekprogramisty.pl/od-zera-do-developera-czyli-jak-zostac-programista/) z bloga Samouczek Programisty. Porusza on tę samą tematykę co ten artykuł.

 [1]: https://coders.school/kursy/