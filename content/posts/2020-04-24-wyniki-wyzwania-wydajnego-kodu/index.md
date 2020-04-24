---
title: "Wyniki wyzwania wydajnego kodu"
date: 2020-04-24T08:29:21+02:00
lastmod: 2020-04-24T08:29:21+02:00
draft: false
author: "Łukasz Ziobroń"
authorLink: ""
description: "Omówienie wyników wyzwania wydajnego kodu w C++, którym był konwerter liczb z rzymskich na arabskie i odwrotnie. Zobacz zwycięskie rozwiązania i przeczytaj o najczęściej popełnianych błędach lub obejrzyj to w formie wideo."
summary: "Omówienie wyników wyzwania wydajnego kodu w C++, którym był konwerter liczb z rzymskich na arabskie i odwrotnie. Zobacz zwycięskie rozwiązania i przeczytaj o najczęściej popełnianych błędach lub obejrzyj to w formie wideo."
license: ""
url: "/post/wyniki-wyzwania-wydajnego-kodu"

tags: ["c++", "wyzwanie", "wydajny kod", "challenge", "online"]
categories: ["Post", "Wyzwanie"]
keywords: []
hiddenFromHomePage: false

featuredImage: "featured.png"
featuredImagePreview: "/post/wyniki-wyzwania-wydajnego-kodu/featured.png"

toc: true
autoCollapseToc: true
math: false
lightgallery: true
linkToMarkdown: true
share:
  enable: true
comment: true
---

Jeśli wolisz obejrzeć wideo o wynikach wyzwania, to od 1h30m możesz obejrzeć omówienie wyników. A jeśli wolisz czytać, to scrolluj :)

{{< youtube 08uqblwKqw4 >}}

## Zadanie

Implementacja konwersji z liczb arabskich na rzymskie i odwrotnie. Przeczytaj opis zadania na [stronie wyzwania][wyzwanie-wydajnego-kodu]

## Cel

* Sprawdzenie programistycznej intuicji - czy uznacie, że wyjątki są odpowiednie do obsługi błędów, jeśli chodzi o wydajność.
* Sprawdzenie czy próbujecie stosować przedwczesne optymalizacje. Przedwczesną optymalizacją jest każda, którą dokonacie przed jakiemkolwiek pomiarem czasu działania kodu.
* Sprawdzenie, czy szybkość działania programu może iść w parze z czystym kodem.

Ja, już znając wyniki mogę powiedzieć, że to wyzwanie nie spełniło do końca swoich założeń. To miało być wyzwanie wydajnego kodu, ale bardziej to było wyzwanie poprawnego kodu. Większy nacisk był na obsługę błędów, bo dużo rozwiązań, które przysłaliście nie działało poprawnie. Te rozwiązania niestety musiałem odrzucić. Zgodnie z tym co napisałem na [stronie wyzwania][wyzwanie-wydajnego-kodu]:

<br>

> Nagroda gwarantowana zostanie przyznana każdemu, kto przyśle poprawnie działające rozwiązanie, tzn. spełniające przynajmniej pierwsze kryterium.
> 1. Poprawne działanie. Jeśli twoje funkcje nie będą zwracały prawidłowych rezultatów, to twoje rozwiązanie będzie odrzucone.

Przez prawidłowe rezultaty rozumiemy, że funkcje poprawnie zadziałają dla liczb od 1 do 3999, a w przypadku niepoprawnych danych wejściowych, takich jak -1, 0, "", "VIV", "IXI", "sth" zgłoszą błąd albo rzucając wyjątkiem albo zwracając specjalne wartości. W przypadku funkcji `fromRoman()` liczby mniejsze od 1, a w przypadku funkcji `toRoman()` pusty string lub string zawierący napis "error", "Error" lub "ERROR" czy jakiekolwiek jego odmiany, które później już dopisywałem ręcznie, gdy testy nie przechodziły. Zobaczysz poniżej listę tych stringów. Ważne żeby wartością zwracaną nie była żadna z tych, które można uzyskać w przypadku poprawnej konwersji. Niestety tych wariantów było tak dużo, że bardzo mnie to spowalniało przy sprawdzaniu.

Mam trzy wnioski.

1. Zdecydowana większość osób (do 80%) nie testuje swoich rozwiązań. W związku z tym wynikają poniższe statystyki. Chyba muszę nauczyć was testowania. Może następne wyzwanie będzie wyzwaniem z testowaniem kodu? Zobaczymy.

2. To wyzwanie było za trudne. Wydawało mi się, że to taki akademicki przykład z taką kowersją. Mamy dość ograniczony zbiór wartości i tak naprawdę najwydajniejszym rozwiązaniem było zrobienie LUT (LookUp Table). Spisanie wszystkich wartości od 1 do 3999 w obu formatach i wyszukiwanie w nich. Oczywiście pisanie z palca może być czasochłonne, więc cały trik polega na tym jak wygenerować takie coś. Takie rozwiązania mają złożoność stałą. Ale to jeszcze nie ten etap. Aczkolwiek po podaniu tej podpowiedzi zastanawiałem się czy nie zrobić z niej kolejnego wyzwania... ale jednak nie. Jeszcze nie :) Może kiedyś.

3. Przedczesne optymalizacje.<br>

   <blockquote cite="Donald Knuth">Premature optimisation is the root of all evil</blockquote>

   Część z was chyba za bardzo skupiła się na optymalizowaniu rozwiązań, które nie działały. Albo z powodu braku testów przestały działać i testy tego nie wykryły. **Jeśli coś nie działa, to nie ważne jak szybko to nie działa**. Najpierw musi działać poprawnie, aby było co optymalizować. Można wtedy taką w pełni poprawną pierwszą wersję wykorzystać jako benchmark, czyli taką implementację do odniesienia. Potem po dokonaniu zmian sprawdzamy, czy faktycznie program działa szybciej. O samym benchmarkowaniu i optymalizowaniu też można wiele powiedzieć. Lub napisać.

## Statystyki

* Liczba zgłoszonych osób - 140
* Liczba przysłanych rozwiązań - 40
* Liczba rozwiązań korzystających w wyjątków - 9
* Liczba rozwiązań korzystających z kodów powrotu - 31
* Liczba poprawnych rozwiązań - ... 8

## Ciekawostka

Informację o tym wyzwaniu wrzucałem też na [wykop.pl][wykop]. Mirek @TomaszA2 podesłał ciekawe rozwiązanie konwersji z liczb arabskich na rzymskie w stylu code-golf. Wyzwania code-golf polegają na zrealizowaniu danej funkcjonalności przy jak najmniejszej liczbie użytych znaków. Innymi słowy - im krótszy kod tym lepiej.

```js
function rome(N,s,b,a,o){
  for(s=b='',a=5;N;b++,a^=7)
    for(o=N%a,N=N/a^0;o--;)
      s='IVXLCDM'.charAt(o>2?b+N-(N&=~1)+(o=1):b)+s;
  return s
}
```

Rozwiązanie jest w JavaScript i pochodzi z magazynu [Paged Out #1, str. 33](https://pagedout.institute/download/PagedOut_001_beta1.pdf). Spróbujcie zrozumieć ten kod bez czytania opisu algorytmu :)

## Co jest szybsze - wyjątki czy kody powrotu?

Wszystko wytłumaczyłem na poniższym wideo.

{{< youtube quF1Jex0YL8 >}}

## Co to jest biblioteka nagłówkowa?

Spodziewałem się, że to dla początkujących może nie być do końca jasne, dlatego dalej w opisie widzieliście, że chodzi mi o implementację 2 funkcji. Ale konkretnie z punktu widzenia sposobu, jak pisze się biblioteki to mamy ich 2 rodzaje. Biblioteki nagłówkowe oraz kompilowane. Kompilowane z kolei dzielą się jeszcze na statyczne i dynamiczne, ale w punktu widzenia implementacji to nie ma między nimi żadnej różnicy. Różnica jest w sposobie linkowania się z nimi. Ale my nie o nich, bo mieliście zrobić bibliotekę nagłówkową. A biblioteka nagłówkowa, to nic innego jak treść tych funkcji wrzucona do pliku nagłówkowego, czyli hpp. Oczywiście samo rozszerzenie pliku jest umowne, niektórzy stosują hxx, niektórzy h. Ja mam konwencję, że dla C++ stosuję rozszerzenia cpp i hpp. Dla języka C z kolei c i h. Mam nadzieję, że jest to jasne. Chodziło więc o to, aby implementacja tych 2 funkcji była w pliku nagłówkowym. Jeśli ktoś wrzucił to do pliku c/cpp - przymykałem oko i sam sobie kopiowałem ją do nagłówka. Do pliku c/cpp wrzucamy implementacje, gdy robimy biblioteki kompilowane, czyli te wspomniane przeze mnie statyczne lub dynamiczne.

### Kiedy robi się biblioteki nagłówkowe, a kiedy kompilowane?

Nic nie stoi na przeszkodzie aby zawsze robić biblioteki nagłówkowe, ale mają one swoje wady. Wydłużają one na pewno czas kompilacji, powodują, że ten sam kod będzie kompilowany po kilka razy w różnych jednostkach kompilacji, a czasami może dość do naruszenia ODR, czyli One Definition Rule. Nie będę się nad tym teraz rozwodził. Plusem bibliotek nagłówkowych jest sposób ich użycia. Wystarczy dać #include „plik.hpp” i tylko zapewnić, że ten plik jest w odpowiedniej ścieżce. Jeśli nie jest, to trzeba jeszcze przy budowaniu projektu dostarczyć kompilatorowi ścieżkę do niego za pomocą flagi -I.
Jeśli chodzi o biblioteki kompilowalne, to ich minusem jest sposób użycia. Wymagają one również posiadania części nagłówkowej, czyli takiego samego pliku hpp (lub zestawu plików) jak przy bibliotece nagłówkowej. Tam jednak są tylko sygnatury funkcji. Ich implementacja jest w plikach źródłowych i taką bibliotekę trzeba najpierw skompilować, a potem się z nią zlinkować. Polska nazwa na linkowane to podobno konsolidacja, chociaż ja tutaj wolę angielskie linkowanie. A od sposobu linkowanie zależy, czy będzie ona dołączona statycznie czy dynamicznie. Musiałbym zrobić cały odcinek poświęcony bibliotekom lub kompilacji, aby o tym dokładnie opowiedzieć. Jeśli tego chcecie to dajcie mi znać, najlepiej w komentarzach. Ale myślę, że na chwilę obecną taka wiedza powinna wam wystarczyć :) Dodam tylko, że jeśli biblioteka zawiera funkcje szablonowe, to ich implementacje muszą być w plikach nagłówkowych.

### Przykłady bibliotek

Dam wam przykłady 2 bibliotek C++. Pierwsza z nich to [GTest](https://github.com/google/googletest). Najpopularniejsza obecnie biblioteka, czy też framework do pisania testów jednostkowych. Jest to biblioteka kompilowana. Aby używać GTesta w waszych projektach musicie go ściągnąć, skompilować (lub po prostu ściągacie już skompilowaną wersję na waszą architekturę) oraz linkujecie się z nią. Kto używał, na pewno wie o co chodzi. Należy do opcji kompilacji dodać -lgtest lub w CMakeLists.txt dopisać target_link_libraries(appname gtest).
Drugi przykład to biblioteka [Catch2](https://github.com/catchorg/Catch2). Jest to druga najpopularniejsza obecnie biblioteka do testowania. Ona jest przykładem biblioteki nagłówkowej. Wystarczy tylko, że ściągniecie sobie plik catch.hpp i zaincludujecie go w pliku i już w tym pliku możecie pisać testy. Nic więcej. Jeśli oglądaliście moje wideo z omówienia pierwszego wyzwania to pod jego koniec pokazywałem jak wyglądała moja praca z pisaniem testów do tego wyzwania. WIdeo wrzucam poniżej. W 35 minucie widzicie kopiowanie pliku nagłówkowego i dołączanie go do projektu.

{{< youtube "fpIgX9HsvhI?t=2102" >}}

## Najczęściej popełniane błędy

{{< admonition type=info title="Jedno ważne zastrzeżenie" details=false >}}
Jeśli ktoś z uczestników poczuje się atakowany lub krytykowany to proszę o wybaczenie. Specjalnie nie podaję tutaj, czyich rozwiązań dotyczą dane uwagi, aby nie zarzucać niczego konkretnym osobom, tylko skomentować kod który napisały. A sposób pisania kodu zawsze ewoluuje i każdy może się poprawić. Robię więc to wszystko w dobrej wierze. A najłatwiej się nauczyć na konkretach, więc poniżej omawiam te rzeczy, które zauważyłem w waszym kodzie. Tak samo podczas kursu wybieram niektóre rozwiązania, z których później robię listę najczęściej popełnianych błędów. No to jedziemy :)
{{< /admonition >}}

### Błędy i uwagi ogólne

#### Nie przeczytanie polecenia

[Treść zadania][wyzwanie-wydajnego-kodu] mówiła, aby funkcje nazywały się `toRoman()` i `fromRoman()`. Biblioteki mają to do siebie, że jeśli sygnatury funkcji się nie zgadzają to nijak się jej nie zintegruje do większego systemu. To było jednym z wymagań i jego nie spełnienie powodowało odrzucenie rozwiązania. Ja nie ograniczyłem się do pełnych sygnatur, podałem jedynie nazwy funkcji oraz sposób, w jaki będę tych funkcji używał. To dawało pewną dowolność. Chciałem zobaczyć kto z was np. zastosuje taką optymalizację, aby przekazać `std::string` przez `const &`. Przykład użycia funkcji również widniał na stonie wyzwania. Jeśli funkcja zamiast zwracać wartość wypisywała ją na ekran, to niestety nie spełniała wymagań.

#### Błędna implementacja

Rozwiązanie miało być odporne na błędy, ale nie każdy dobrze przetestował swoje implementacje. Naliczyłem aż 19 takich, które poprawnie dekodowało niepoprawne ciągi, co nie powinno mieć miejsca. Te ciągi to np.

* IVI = 5 lub 7
* IXI = 10 lub 12
* IMI = 1000 lub 1002
* itp.

#### Język C zamiast C++

Oczywiście nic nie mam do C, ale to było wyzwanie w C++. Niektórzy jawnie napisali mi, że napisali to w C, bo lepiej znają ten język. Oczywiście nie odrzucałem takich rozwiązań, dopóki kompilowały się za pomocą kompilatora do języka C++. Niektórzy być może jednak nie widzą za dużych różnic pomiędzy C a C++. I tutaj być może wstyd się przyznać, ale ja też po studiach nie wiedziałem jaka jest różnica. Co gorsza jeszcze na 5 roku studiów na kierunku informatyka pamiętam, że robiłem czat na programowaniu sieciowym i nie miałem pojęcia dlaczego kompilator mówi mi, że typ bool nie istnieje. Okazało się, że pisałem w C++, a kompilowałem kompilatorem C, na dodatek w standardzie ANSI C. Ale myślę, że to wina edukacji na studiach. Ale jak widzicie ja pomimo takich braków wiedzy jakoś zostałem programistą. Teraz niestety jest ciężej wbić się na rynek pracy. A typ bool nie jest jedyną różnicą między C i C++. Języki te mają taką samą składnię, ale głównymi różnicami są:

* wsparcie dla obiektowości w C++ i jej brak w C
* używanie strumieni (np. `cout` i `cin`) jako domyślnego wejścia i wyjścia w C++, a funkcji `printf` i `scanf` w C,
* brak pisania `void` w sygranturach funkcji, jeśli nie przyjmują parametrów w C++. W C pusta lista argumentów oznacza zupełnie dowolne argumenty, więc wpisuje się `void`, jeśli funkcja nie przyjmuje parametrów
* używanie `char*` w C jako łańcucha znaków, a `std::string` w C++
* i jeszcze masa innych rzeczy, ale to również temat na inny odcinek. Chcecie takiego omówienia różnic między językami? Dajcie znać w komentarzach. Jednocześnie zastrzegam, że nie jestem profesjonalnym programistą języka C i po prostu go nie znam. W szczególności nie znam dobrze nowych standardów, jak C11 i C18, ale wiem gdzie szukać informacji, gdy będą mi potrzebne :) I nie będzie to w pierwszej kolejności StackOverflow, ale cppreference.com :)

Oczywiście będąc programistą C++ czasem będziecie się natykać na takie wstawki z języka C w kodzie. Czasem są one robione nieświadomie. A często też w ogłoszeniach o pracę widzicie o zgrozo C / C++. Uciekajcie od takich ofert. Ja się póki co spotkałem, że są to oferty dla języka C, ale z racji że coraz ciężej o takich programistów, to dodają tam C++, bo programista C++ będzie rozumiał C. Jest to zasadniczo prawdą, ale nie do końca. Trzeba być takim świadomym programistą C++, który dobrze zna zarządzanie zasobami, aby dobrze czuć się w C. Ja przykładowo nie chciałbym pisać w C, bo wiem jak dużo ciekawych rzeczy daje mi C++ i bez nich czuł bym się jak bez jednej ręki. Ale to tylko moja opinia i wiem, że część ludzi będzie mieć odwrotnie, bo dla nich C może być bardziej intuicyjny niż C++. Ja jednak mocno obstaje przy paradygmacie programowania obiektowego, które ciągle jest najpopularniejsze. Programowanie funkcyjne też jest fajne i kolejne standardy C++ wprowadzają coraz więcej takich elementów do języka, więc jeśli tylko jest się na bieżąco, to można być naprawdę uniwersalnym wielodogmatowym programistą C++, któremu będzie bardzo łatwo nauczyć się praktycznie dowolnego innego języka :D No może poza JavaScriptem. Bo próbowałem :P Ale zostawmy JS, okazji do hejtowania go będzie mnóstwo ;)

#### Własna interpretacja wymagań

To jest zawsze i wszędzie. Niektórzy z was zakładali, że warto obsługiwać nawet mnożniki po 1000, które zapisuje się dwoma pionowymi kreskami. W wymaganiach nic o tym nie było :) Wiem, że chcieliście dobrze, bo pewnie stwierdziliście, że im więcej obsługujecie tym lepiej. Ale ja tego nie chciałem. Pewnie spędziliście nad tym dużo czasu i to na darmo. W wymaganiach była obsługa błędów, więc jeśli np rzucaliście wyjątkiem gdy liczba była większa niż 3999 to było ok i dokładnie o to mi chodziło.
To ujawnia taką ciekawostkę naszej programistycznej natury. A może w sumie efekt edukacji szkolnej. Zamiast zapytać wolimy sami coś zrobić i przedstawić jako gotowe. Część osób pytała mnie o to. Nie chciałem wprost odpowiadać jaki jest górny limit, ale mówiłem, że taki jak maksymalna liczba rzymska. Nie chciałem z jednej strony ułatwiać zadania tym, którzy mimo wszystko napisali, ale wasze zachowanie jest godne pochwały. Jeśli wymagania nie są jasne albo widzicie kilka możliwości ich interpretacji to najlepsze co możecie zrobić to zapytać, a nie samemu wybierać dogodną dla siebie wersję. W końcu za wasze programy będą płacili wam klienci i to oni wiedzą czego chcą. Chociaż najczęściej nie wiedzą. Ale za to doskonale wiedzą, czego nie chcą :)
Żeby nie było - nie odrzucałem rozwiązań, w których można było przekonwertować liczby większe niż 3999 na system rzymski, o ile miały zrobioną jakąś obsługę błędów i nie pozwalały np na konwersję zera, którego nie ma w systemie rzymskim.

#### Brak odpowiednich #include

Jeśli używacie `std::string` to trzeba zrobić `#include <string>` w danym pliku. Jeśli program wam się kompilował, to zapewne dlatego, że w pliku cpp zrobiliście coś takiego:

```cpp
#include <string>
#include "roman.hpp"
```

`"roman.hpp"` to założona przeze mnie nazwa biblioteki. Gdybyście to napisali tak jak poniżej, to program przestałby się kompilować.

```cpp
#include "roman.hpp"
#include <string>
```

Dyrektywa `#include` to zwykłe tekstowe wstawienie zawartości danego pliku w to miejsce. Kolejność ma znaczenie. Nie wykluczałem rozwiązań, które miały z tym problem.

#### Drabinka `if`-ów

Zaimplementowanie rozwiązania, w którym jest dużo ifów lub switcha z case'ami wydaje się pierwszym właściwym wyborem. Jasne, że to będzie działać. Tylko algorytm zajmie dużo miejsca. Późniejsze jego modyfikacje wymagają znalezienia odpowiedniego miejsca, gdzie należy coś wstawić. Chociaż z założenia akurat ten kod raczej nie będzie modyfikowany w przyszłości. Ale ogólnie drabinka ifów to antywzorzec. Jednym z kryteriów oceny była jak najmniejsza liczba ifów, ale ostatecznie w ogóle nie brałem go pod uwagę.

Ifów można się pozbyć na kilka sposobów. Jeden z nich, raczej nieadekwatny do tego zadania to [wzorzec strategii (Strategy Pattern)](https://refactoring.guru/design-patterns/strategy). Ale tutaj mamy do zaimplementowania tylko 2 proste funkcje i nie było sensu bawić się w polimorfizm. Inne rozwiązanie to użycie kontenerów asocjacyjnych - `std::map<K, V>` lub `std::unordered_map<K, V>`. Można też użyć np. `std::vector<std::pair<K, V>>`. Nie rozpisuję się tutaj na ten temat, bo wystarczy, że zerkniecie na zwycięskie rozwiązania. Te posiadające LookUp Table, to właśnie te właściwe.

#### Porównania liczb signed i unsigned

Używajcie dodatkowych flag kompilacji takich jak `-Wall -Wextra -Wconversion -pedantic -Werror`. Dzięki temu kompilator nie pozwoli wam na porównywanie liczb ze znakiem i takich bez znaku. Takie porównania mogą czasami wprowadzać błędy dla odpowiednio dużych liczb, które mogą być traktowane jak liczby ujemne. Takie oto ostrzeżenie kompilatora clang świadczy o wspomnianych przeze mnie konwersjach i pojawiło się ono w większości nadesłanych rozwiązań.

```
comparison of integers of different signs: 'int' and 'std::__1::basic_string<char, std::__1::char_traits<char>, std::__1::allocator<char> >::size_type' (aka 'unsigned long')
      [-Wsign-compare]
```

### Problemy z biblioteką nagłówkową

#### Funkcja `main()` w pliku nagłówkowym

Biblioteka tym różni się od binarki (lub aplikacji), że nie ma funkcji `main()`. Biblioteka dostarcza szereg funkcji, które można używać w innych aplikacjach lub innych bibliotekach. Jeśli biblioteka ma funkcję `main()` to nie jest biblioteką, tylko binarką, którą można uruchomić.

#### Brak header guarda

Strażnik nagłówka (header guard) przybiera 2 postaci:

```cpp
#pragma once
// ...
```

```cpp
#ifndef NAZWA
#define NAZWA
// ...
#endif // NAZWA
```

Preferujemy `#pragma once`. Wszystkie nowoczesne kompilatory ją obsługują. I jest mniej pisania. Jego brak w plikach nagłówkowych jest błędem. Kod może się kompilować u Ciebie pomimo jego braku, gdy masz tylko jeden `#include` związany w tym plikiem. Nie wykluczałem rozwiązań nie posiadających strażnika nagłówka.

#### Rozwiązania w pliku cpp

Było kilka rozwiązań, w których implementacja znalazła się w plikach cpp, a pliki hpp zawierały jedynie sygnatury funkcji. Nie odrzucałem takich rozwiązań, po prostu skopiowałem implementacje do plików nagłówkowych.

### Obsługa błędów

#### Używanie nieadekwatnych wyjątków

To tylko drobna uwaga. Może się wydawać, że typ wyjątku, który wybierzemy nie ma za dużego znaczenia, ale warto przykładać do niego wagę. Używanie `std::overflow_error` gdy podamy za małą wartość nie będzie właściwe. Można oczywiście użyć ogólnych wyjątków, takich jak `std::runtime_error`, ale najlepszym rozwiązaniem jest napisanie własnych, odpowiednio nazwanych wyjątków, które dziedziczą po najbliższej mu klasie z wyjątków standardowych. Wtedy chcąc obsłużyć błędy z tej biblioteki możemy łapać te konkretne wyjątki bez potykania się o taki problem, że przechwycimy jakiś wyjątek, którego nie powinniśmy przechwycić w danym miejscu. Dobre praktyki odnośnie wyjątków... ehh. Temat na kolejny odcinek. Chyba już 3 jeśli dobrze liczę.

#### Rzucanie nie-wyjątkami

* `throw -1`
* `throw 'e'`

Złe praktyki. Co prawda rzucać można wszystkim, ale mało kto się spodziewa, że musi w `catch` złapać `int`. Przyjmuje się, że `catch (std::exception &)` jest takim uniwersalnym catch, łąpiącym każdy możliwy wyjątek. `int` się tam nie złapie. Istnieje jeszcze oczywiście `catch (...)`, ale to nie jest zbyt dobrą praktyka, jeśli się nie wie co się robi. Istotą wyjątków jest to, że to właśnie one są stworzone do rzucania nimi, bo dają jednolity interfejs, np. funkcję `what()`, która daje opis zdarzenia. Każdy wyjątek powinien dziedziczyć po `std::exception`. Bezpośrednio lub pośrednio poprzez inne klasy, które dostarcza nam biblioteka standardowa w nagłówku `<stdexcept>`

#### Łapanie swoich wyjątków w funkcjach `toRomam()` i `fromRoman()`

Podciągam to pod powyższy temat. Obsługa błędów przez wyjątki wymaga przemyślenia miejsc w których będą one łapane. Jeśli używaliście wyjątków do zaznaczenia, że użytkownik robi coś niepoprawnego, jak np. próbuje skonwertować liczbę ujemną, to rzucenie wyjątku jest ok. Ale natychmiastowe złapanie go i zwrócenie błędu jako `string` czy `int` przez return już nie. Poniższy kod, pomimo tego, że używa wyjątków, to zwraca kody błędów.

```cpp
try {
    if (!(arabic_num > 0 && arabic_num < 4000)) throw - 1;
}
catch (...) {
    std::cout << "Range numer has to be 1-3999" << std::endl;
    return "ERORR";
}
```

Wyjątek powinien wylecieć poza funkcję. Należy on do interfejsu tej funkcji i osoba używająca tej funkcji powinna sama go obsłużyć. Wyjątki robi się po to, aby uprościć interfejsy. Jeśli mamy pewność, że `string` zwracany przez funkcję `toRoman()` zawsze będzie poprawną liczbą rzymską, to nie trzeba potem pisać dodatkowej logiki, która go sprawdzi. Wyjątków nie podciągamy pod taką logikę, bo może ona być zrobiona w zupełnie innym miejscu. Po prostu gwarantujecie, że będzie poprawny jeśli funkcja nie rzuci wyjątku. A jeśli rzuci, to użytkownik tej biblioteki na pewno się o tym dowie. No chyba że ignoruje wyjątki w taki sposób:

```cpp
catch (...) {
  // do nothing :)
}
```

#### Obsługa błędów przez wypisywanie

Mamy dedykowany strumień `std::cerr`, który jest standardowym wyjściem błędów i możemy go użyć w celu wypisywania błędów. Problem z nim będzie jednak taki, że po zakończeniu programu możemy stracić te informacje, jeśli sesja terminala zostanie zakończona. Zazwyczaj też nie chcemy, aby klientowi wyświetlił się jakiś błąd poczas konwersji i pójść dalej nie dając mu możliwości zareagowania na ten błąd. Jeśli używasz `std::cout` do wypisywania błędów to może być jeszcze gorzej, bo czasem po prostu przekierowuje się standardowe wyjście programu do `/dev/null`, aby nic nie wypisywał. Użycie `std::cerr` w obsłudze wyjątków w bloku `catch` w celu ich wypisania jest ok. Ale użycie `std::cerr` tak po prostu w algorytmnie jest mniej ok, bo łatwiej zignorować taki błąd. Nie można zignorować nieobsłużonego wyjątku, bo to ubija nasz program i użytkownik (czyli programista, który używa naszej biblioteki) od razu to zauważy.

#### Strumienie do obsługi błędów - wydajność

Strumienie słyną z tego, że są wolne. Andrei Alexandrescu, autorytet i pisarz książek o C++ powiedział:<br>

<blockquote cite="Andrei Alexandrescu">Jeśli chcesz stracic swój ekspercki autorytet, to użyj słów 'strumienie' i 'wydajność' w jednym zdaniu.</blockquote>

To parafraza jego angielskich słów. Wypisywanie błędów na ekran było w tym przypadku niepotrzebne, bo cholernie spowalniało wasze programy. Widać to na wynikach. Dla testu `toAndFromRomanWholeSet` chyba bez problemu wskażecie, które 2 rozwiązania wypisywały coś na ekran :)

| benchmark                   |
| --------------------------- | -------------------- | ---------------------------- | -------------------- | -------------------- | --------------------------- | --------------------------- | ----------------------------- | ----------------------------- |
| toAndFromRomanWholeSet_mean | 536&nbsp;945&nbsp;ns | 76&nbsp;623&nbsp;753&nbsp;ns | 586&nbsp;206&nbsp;ns | 983&nbsp;589&nbsp;ns | 4&nbsp;110&nbsp;901&nbsp;ns | 5&nbsp;082&nbsp;754&nbsp;ns | 125&nbsp;607&nbsp;624&nbsp;ns | 182&nbsp;572&nbsp;943&nbsp;ns |

#### Obsługa błędów przez zwracanie magicznych wartości

Jest to jeden ze sposobów na obsługę błędów. Jeśli błędy są sklasyfikowane i odpowiednio nazwane w postaci stałych lub enumów, tak jak poniżej, to super. Ale nie widziałem wielu takich rozwiązań. Gołe numery w kodzie to po prostu "magiczne wartości".

```cpp
enum class Error {
  InvalidInput = -1,
  TooBigNumber = -2,
  NegativeNumber = -3
}
```

Obsługa błędów przez zwracanie specjalnych wartości ma znacznie też więcej wad niż zalet.

* Zwracana specjalna wartość jest poprawną wartością swojego typu. Jeśli zwrócisz `-1` to można go używać do dalszych obliczeń, a to może powodować dalsze błędy, które co gorsza mogą pozostać długo niewykryte.
* Jak zwrócić wartość z konstruktora lub operatorów, które mają ściśle zdefiniowane sygnatury?
* Jak przekazać różne kody błędów? Zwracać różne magiczne wartości czy użyć `errno` znanego z C?
* Magiczne wartości muszą być opisane w dokumentacji funkcji i najlepiej także, aby były zdefiniowane jako odpowiednie stałe lub enumy. Wtedy można mówić o tzw. return codes, kodach powrotu funkcji.

Ogólnie to kody powrotu funkcji wraz z `errno` to obsługa błędów w stylu języka C. W C++ preferowane są wyjątki. A jak się mają one do wydajności? Ano... [wyjątki przyspieszają programy](#co-jest-szybsze---wyjątki-czy-kody-powrotu), jak już mówiłem.

### Optymalizacje

Ponieważ jest to wyzwanie wydajnego kodu, to powinniśmy optymalizować szybkość działania naszego kodu. Jeśli ktoś jest doświadczony to zaraz powie, że "hej, przecież optymalizuje się pod konkretne przypadki". Oczywiście. A w przypadku tak prostych konwerterów nie ma zbyt wielu przypadków użycia. Możemy wstępnie rozróżnić dwa - konwersja poprawnej liczby lub konwersja niepoprawnej liczby. Oczywiście optymalizujemy przypadek konwersji poprawnej liczby. Nie zakładamy, że ktoś będzie tej biblioteki używał głównie w taki sposób, aby wykrywała liczby, które się nie konwertują. Do tego wolelibyśmy mieć całkiem inny zestaw funkcji.

#### Konkatenacja `std::string`

`operator+` na std::string nie jest demonem szybkości. Jeśli więc używaliście go do łączenia stringów, to wydajność programu mogła na tym ucierpieć. Pytanie dlaczego to nie jest szybkie? Odeślę was do [StackOverflow][stackoverflow]. Tutaj tylko wspomnę, że lepiej używać `operator+=`. O stringach i dobrych praktykach z nimi związanymi też można dużo powiedzieć. Czwarty temat na nowy odcinek.

#### Kolejność sprawdzeń

Jeśli w `if` jest kilka warunków i są one połączone operatorem `||` to warto zadbać, aby jako pierwszy wystąpił warunek, który będzie częściej spełniony. Dzięki temu drugi warunek nie będzie w ogóle sprawdzony.

```cpp
if (oftenTrue || rarelyTrue) { /* ... *. }
```

Jest lepsze niż

```cpp
if (rarelyTrue || oftenTrue) { /* ... */ }
```

Taka optymalizacja wynika z zasad logiki. Aby cały warunek, który składa się z 2 lub więcej podwarunków połączonych instrukcją or był prawdziwy, wystarczy że tylko jeden podwarunek będzie prawdziwy. Standard języka C++ definiuje, że takie sprawdzania zawsze odbywają się od lewej do prawej. Oczywiście trzeba trochę wiedzieć jakie są możliwe scenariusze i znać prawdopodobieństwo z jakim dane warunki są prawdziwe. Nie zawsze jest to możliwe, ale warto wtedy dokonać pomiarów, na konkretnych scenariuszach, aby się tego dowiedzieć.

#### Przekazywanie przez `const &` w celu unikania zbędnych kopii

Zawsze powinniśmy z automatu przekazywać obiekty przez `const &`, z wyjątkiem typów prostych:

* całkowitoliczbowych (`int` i rodzina)
* zmiennoprzecinkowych (`float` i rodzina)
* znakowych (`char` i rodzina)

Te typy mają mały rozmiar, zazwyczaj do 8 bajtów, czyli tyle ile rozmiar wskaźnika w architekturze x64. Przekazanie ich przez kopię będzie równie wydajne.

Wszystkie inne typy, w szczególności `std::string` czy kontenery warto przekazywać przez `const &`.

Jest jeszcze coś takiego `std::string_view` lub `std::span` w C++20, które stanowią widoki na zakresy danych. Używa się ich, aby przekazać dane bez ich kopiowanie i ich stosowanie również jest szybkie.

## ETAP 1: Sprawdzanie poprawności

Do sprawdzenia poprawności napisałem poniższe testy we frameworku Catch.

* Input: 40 rozwiązań
* Output: 8 poprawnych rozwiązań

```cpp
#define CATCH_CONFIG_MAIN
#include "catch.hpp"
#include <string>
// include your header file here

constexpr int minRoman = 1;

SCENARIO("Proper Roman values", "[toRoman]") {
    GIVEN("A generated number and expected roman output") {
        auto pair = GENERATE(std::make_pair(1, "I"),
                             std::make_pair(2, "II"),
                             std::make_pair(3, "III"),
                             std::make_pair(4, "IV"),
                             std::make_pair(5, "V"),
                             std::make_pair(6, "VI"),
                             std::make_pair(7, "VII"),
                             std::make_pair(8, "VIII"),
                             std::make_pair(9, "IX"),
                             std::make_pair(10, "X"),
                             std::make_pair(190, "CXC"),
                             std::make_pair(300, "CCC"),
                             std::make_pair(649, "DCXLIX"),
                             std::make_pair(900, "CM"),
                             std::make_pair(950, "CML"),
                             std::make_pair(1000, "M"),
                             std::make_pair(1050, "ML"),
                             std::make_pair(1100, "MC"),
                             std::make_pair(1410, "MCDX"),
                             std::make_pair(1500, "MD"),
                             std::make_pair(1900, "MCM"),
                             std::make_pair(3000, "MMM"),
                             std::make_pair(3888, "MMMDCCCLXXXVIII"),
                             std::make_pair(3999, "MMMCMXCIX"));

        WHEN("toRoman is called for " << pair.first) {
            auto result = toRoman(pair.first);

            THEN("The result is a corresponding Roman number " << pair.second) {
                CHECK(result == pair.second);
            }
        }
    }
}

SCENARIO("Conversion to Roman and to Arabic", "[toRoman][fromRoman]") {
    GIVEN("All numbers from range 1 to 3999") {
        auto number = GENERATE(range(1, 3999));

        WHEN("toRoman and fromRoman are called for " << number) {
            auto result = fromRoman(toRoman(number));

            THEN("result is equal to number") {
                CHECK(result == number);
            }
        }
    }
}

SCENARIO("Exceptions - incorrect Roman values", "[fromRoman][exceptions][!mayfail]") {
    GIVEN("Incorrect value") {
        auto value = GENERATE("incorrect", "",
                              "IL", "IC", "ID", "IM",
                              "VX", "VC", "VD", "VM",
                              "XD", "XM",
                              "LD", "LM",
                              "IIII", "XXXX", "CCCC", // "MMMM" intentionally commented out - it could be allowed in some solutions
                              "VV", "LL", "DD",
                              "MIM", "MVM", "MXM", "MLM",        "MDM",
                              "DID", "DVD", "DXD", "DLD", "DCD", "DDD", "DMD",
                              "CIC", "CVC",        "CLC",        "CDC", "CMC",
                              "LIL", "LVL", "LXL", "LLL", "LCL", "LDL", "LML",
                                     "XVX",        "XLX", "XCX", "XDX", "XMX",
                              "VIV", "VVV", "VXV", "VLV", "VCV", "VDV", "VMV",
                                     "IVI", "IXI", "ILI", "ICI", "IDI", "IMI"
                              );   // and some more

        WHEN("fromRoman is called - exception version for " << value) {

            THEN("Exception is thrown") {
                CHECK_THROWS(fromRoman(value));
            }
        }
    }
}

SCENARIO("Exceptions - numbers out of range", "[toRoman][exceptions][!mayfail]") {
    GIVEN("An inproper number to convert") {
        auto number = GENERATE(-1, 0, 5000, 100000000);

        WHEN("toRoman is called - exception version for " << number) {

            THEN("Exception is thrown") {
                CHECK_THROWS(toRoman(number));
            }
        }
    }
}

SCENARIO("Return codes - incorrect Roman values", "[fromRoman][retcodes][!mayfail]") {
    GIVEN("Incorrect value") {
        auto value = GENERATE("incorrect", "",
                              "IL", "IC", "ID", "IM",
                              "VX", "VC", "VD", "VM",
                              "XD", "XM",
                              "LD", "LM",
                              "IIII", "XXXX", "CCCC", // "MMMM" intentionally commented out - it could be allowed in some solutions
                              "VV", "LL", "DD",
                              "MIM", "MVM", "MXM", "MLM",        "MDM",
                              "DID", "DVD", "DXD", "DLD", "DCD", "DDD", "DMD",
                              "CIC", "CVC",        "CLC",        "CDC", "CMC",
                              "LIL", "LVL", "LXL", "LLL", "LCL", "LDL", "LML",
                                     "XVX",        "XLX", "XCX", "XDX", "XMX",
                              "VIV", "VVV", "VXV", "VLV", "VCV", "VDV", "VMV",
                                     "IVI", "IXI", "ILI", "ICI", "IDI", "IMI"
                              );   // and some more

        WHEN("fromRoman is called - return code version for " << value) {
            auto result = fromRoman(value);

            THEN("Error code is not in a proper Roman range") {
                CHECK(result < minRoman);
            }
        }
    }
}

SCENARIO("Return codes - numbers out of range", "[toRoman][retcodes][!mayfail]") {
    GIVEN("A few inproper numbers to convert") {
        auto number = GENERATE(-1, 0, 5000, 100000000);

        WHEN("toRoman is called - return code version") {
            auto result = toRoman(number);

            THEN("Returned value is an empty string or containes [eE]rror") {
                using namespace Catch;
                CHECK_THAT(result, Contains("error") ||
                                   Contains("Error") ||
                                   Contains("ERROR") ||
                                   Contains("ERORR") ||
                                   Contains("Range") ||
                                   Contains("range") ||
                                   Contains("blad") ||
                                   Contains("large") ||
                                   Contains("non-positive") ||
                                   Contains("Incorrect") ||
                                   Contains("0") ||
                                   Equals(""));
            }
        }
    }
}
```

Na końcu można zauważyć, że dodawałem coraz więcej ciekawych napisów świadczących o błędach :) Tutaj widać problem z używaniem kodów powrotu. Trzeba się konkretnie umówić na jakieś wartości i je sprawdzać. Wyjątki znacznie łatwiej przetestować. Też oczywiście trzeba się zadeklarować jakiego typu to będzie wyjątek, ale można go w ogólności podpiąć pod jakiś inny w hierachi dziedziczenia i można go z łatwością przechwycić.
Do etapu 2 zakwalifikowało się 8 rozwiązań.

## ETAP 2: Mierzenie wydajności

Napisałem 5 scenariuszy testowych z wykorzystaniem [Google Benchmark][benchmark].

* toRomanSingleNumber - konwersja 42 na liczbę rzymską
* fromRomanSingleNumber - konwersja XLII na liczbę arabską
* toAndFromRomanWholeSet - konwersja każdej liczby od 1 do 3999 na rzymską i z powrotem. Najważniejszy benchmark.
* toRomanInproperValuesSet - konwersja 6 niepoprawnych liczb arabskich na rzymskie
* fromRomanInproperValuesSet - konwersja 62 niepoprawnych liczb rzymskich na arabskie

```cpp
#include <array>
#include <string>
#include <benchmark/benchmark.h>
// your include goes here

static void toRomanSingleNumber(benchmark::State& state) {
    auto number = 42;
    for (auto _ : state) {
        auto result = toRoman(number);
        benchmark::DoNotOptimize(result);
    }
}
BENCHMARK(toRomanSingleNumber);

static void fromRomanSingleNumber(benchmark::State& state) {
    auto roman = "XLII";
    for (auto _ : state) {
        auto result = fromRoman(roman);
        benchmark::DoNotOptimize(result);
    }
}
BENCHMARK(fromRomanSingleNumber);

// main benchmark function
static void toAndFromRomanWholeSet(benchmark::State& state) {
    for (auto _ : state) {
        for (int i = 1; i < 4000; ++i) {
            auto result = fromRoman(toRoman(i));
            benchmark::DoNotOptimize(result);
        }
    }
}
BENCHMARK(toAndFromRomanWholeSet);

static void toRomanInproperValuesSet(benchmark::State& state) {
    std::array<int, 6> values = {-300, -1, 0, 5000, 12345, 100000000};
    for (auto _ : state) {
        for (const auto & value : values) try {
            auto result = toRoman(value);
            benchmark::DoNotOptimize(result);
        } catch (...) {
            // silently ignore
        }
    }
}
BENCHMARK(toRomanInproperValuesSet);

static void fromRomanInproperValuesSet(benchmark::State & state) {
    std::array<std::string, 62> values = {
        "incorrect", "",
        "IL", "IC", "ID", "IM", "VX", "VC", "VD", "VM",
        "XD", "XM", "LD", "LM", "VV", "LL", "DD",
        "IIII", "XXXX", "CCCC",
        "MIM", "MVM", "MXM", "MLM",        "MDM",
        "DID", "DVD", "DXD", "DLD", "DCD", "DDD", "DMD",
        "CIC", "CVC",        "CLC",        "CDC", "CMC",
        "LIL", "LVL", "LXL", "LLL", "LCL", "LDL", "LML",
                "XVX",        "XLX", "XCX", "XDX", "XMX",
        "VIV", "VVV", "VXV", "VLV", "VCV", "VDV", "VMV",
               "IVI", "IXI", "ILI", "ICI", "IDI", "IMI"};

    for (auto _ : state) {
        for (const auto & value : values) try {
            auto result = fromRoman(value);
            benchmark::DoNotOptimize(result);
        } catch (...) {
            // silently ignore
        }
    }
}
BENCHMARK(fromRomanInproperValuesSet);

BENCHMARK_MAIN();
```

### Metodologia pomiarów

Ostatecznym wynikiem na podstawie którego wyłoniłem zwycięskie rozwiązanie była suma czasów wszystkich scenariuszy. Można z tego wywnioskować, że najważniejszy był scenariusz poprawnej obsługi wszystkich liczb. Niepoprawnych konwersji było 68, a poprawnych 4001.

Każdą bibliotekę zaincludowałem w miejsce oznaczone komentarzem `// your include goes here`. Kod skompilowałem za pomocą zaklęcia:

```
g++ PerformanceTests.cpp -std=c++17 -lbenchmark -lpthread -o benchmark_name -Wall -Wextra -pedantic -O3
```

Kompilacja odbyła się na systemie macOS Catalina 10.15.4 kompilatorem Apple clang:

```
ziobron@MBP:~/$ uname -a
Darwin MBP 19.4.0 Darwin Kernel Version 19.4.0: Wed Mar  4 22:28:40 PST 2020; root:xnu-6153.101.6~15/RELEASE_X86_64 x86_64

ziobron@MBP:~/$ g++ --version
Configured with: --prefix=/Library/Developer/CommandLineTools/usr --with-gxx-include-dir=/Library/Developer/CommandLineTools/SDKs/MacOSX.sdk/usr/include/c++/4.2.1
Apple clang version 11.0.0 (clang-1100.0.33.16)
Target: x86_64-apple-darwin19.4.0
Thread model: posix
InstalledDir: /Library/Developer/CommandLineTools/usr/bin
```

Oraz na Linuxie Ubuntu z kompilatorem g++ działającego w dockerze na ww systemie:

```
root@cd653f15f1c5:/# uname -a
Linux cd653f15f1c5 4.19.76-linuxkit #1 SMP Thu Oct 17 19:31:58 UTC 2019 x86_64 x86_64 x86_64 GNU/Linux

root@cd653f15f1c5:/# g++ --version
g++ (Ubuntu 7.4.0-1ubuntu1~18.04.1) 7.4.0
Copyright (C) 2017 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
```

Informacje z Google benchmark

```teminal
Run on (8 X 1400 MHz CPU s)
CPU Caches:
  L1 Data 32 KiB (x4)
  L1 Instruction 32 KiB (x4)
  L2 Unified 256 KiB (x4)
  L3 Unified 6144 KiB (x1)
```

Odpalenie benchmarka

```bash
./benchmark_name --benchmark_repetitions=10 --benchmark_report_aggregates_only=true --benchmark_out_format=console --benchmark_out=name.txt
```

Każdy test powtarzany był 10 krotnie. Dbałem o to, aby Load factor (ogólny współczynnik obciążenia procesora) był zbliżony przy wszystkich testach.

## WYNIKI

Jednostki to ns. Wyciąłem je z tabeli w celu polepszenia przejrzystości.

### MacOS + Apple Clang

| Benchmark                       |   (1) kk |     (6) mk |   (2) rk |   (3) bk |    (4) ap |    (5) jw |      (7) wb |      (8) wz |
| :------------------------------ | -------: | ---------: | -------: | -------: | --------: | --------: | ----------: | ----------: |
| toRomanSingleNumber_mean        |     36.8 |       36.0 |     30.1 |     66.9 |      21.6 |     307.0 |        80.6 |     12649.0 |
| fromRomanSingleNumber_mean      |     15.3 |    15267.0 |     50.3 |     77.0 |     922.0 |     321.0 |     27591.0 |     26751.0 |
| toAndFromRomanWholeSet_mean     | 536945.0 | 76623753.0 | 586206.0 | 983589.0 | 4110901.0 | 5082754.0 | 125607624.0 | 182572943.0 |
| toRomanInproperValuesSet_mean   |   7467.0 |       10.6 |   9082.0 |     15.7 |      17.3 |      17.9 |        85.5 |    114492.0 |
| fromRomanInproperValuesSet_mean |  69132.0 |  1508503.0 |  90003.0 |   4959.0 |   56887.0 |   13501.0 |   3779486.0 |   8003141.0 |
| SUM                             | 613596.1 | 78147569.6 | 685371.4 | 988707.6 | 4168748.9 | 5096900.9 | 129414867.1 | 190729976.0 |

### Ubuntu Linux + g++

| Benchmark                       |   (1) kk |    (6) mk |    (2) rk |    (3) bk |    (5) ap |    (4) jw |     (7) wb |      (8) wz |
| :------------------------------ | -------: | --------: | --------: | --------: | --------: | --------: | ---------: | ----------: |
| toRomanSingleNumber_mean        |     22.5 |      60.3 |      32.1 |      99.8 |      33.8 |      90.0 |      758.0 |    196568.0 |
| fromRomanSingleNumber_mean      |     16.6 |    1116.0 |      53.4 |     241.0 |     461.0 |     107.0 |    11755.0 |     11562.0 |
| toAndFromRomanWholeSet_mean     | 503402.0 | 5679183.0 |  885560.0 | 1569131.0 | 2355031.0 | 1956939.0 | 51080422.0 | 836642820.0 |
| toRomanInproperValuesSet_mean   |  17468.0 |     258.0 |   18929.0 |      13.2 |      27.6 |      28.8 |      869.0 |   1846684.0 |
| fromRomanInproperValuesSet_mean | 185070.0 |  296740.0 |  135653.0 |   13927.0 |   28505.0 |    3752.0 |   864931.0 |   1310478.0 |
| SUM                             | 705979.1 | 5977357.3 | 1040227.5 | 1583412.0 | 2384058.4 | 1960916.8 | 51958735.0 | 840008112.0 |

Nie zastosowałem kolejnych kryteriów oceny (punkty 4 i 5), które mówiły o jak najmniejszej liczbie ifów oraz pętli w kodzie.

## Zwycięzcy

### Zwycięskie rozwiązanie - 99% zniżki na kurs C++ online

#### Kacper Kaleta

```cpp
/** Notes from roman number principles that I've figured out:
    _________________________________________________________________________________________________ General:
    [rule 1] For these set: {M, D, C, L, X, V, I}
        - Maximum value that can be built is 3999. (MMMCMXCIX)
          Next value 4000 would need extra letter. (Mv) => (V = 5, v = 5000)
        - Maximum length of the roman stringValue is 15.
          (MMMDCCCLXXXVIII) = 3888

    [rule 2] Numbers in the romanValue are arranged in the descending order.
        The only exception is subtraction.
        This allows to go through the ConversionList, going only forward.
    _________________________________________________________________________________________________ Subtraction:
    [rule 3] Cannot subtract by {500, 50, 5} => {D, L, V}.
        - Examples: DM != 500, LC != 50

    [rule 4]
        - From X you can only subtract I, example: IX = 9       Wrong: VX != 5
        - From C you can only subtract X, example: XC = 90      Wrong: IC != 99, Good: 99 = XCIX
        - From M you can only subtract C, example: MCM = 1900   Wrong: XM != 990, Good: 990 = CMXC

    [rule 5]
        - After subtracting: IX, it will never appear: V
        - After subtracting: XC, it will never appear: L
        - After subtracting: CM, it will never appear: D
    _________________________________________________________________________________________________ Letters Quantity:
    [rule 6] There can never be more than ONE of {D, L, V}.
        - Examples: DDD != 1500, LL != 100

    [rule 7] There cannot be more than FOUR of {M, C, X}.
        - Examples: XXXIX = 39, MMMCM = 3900

    [rule 8] There cannot be more than three of {M, C, X} IN A ROW.
    _________________________________________________________________________________________________ Other:
    [9] Subtracting the same expression several times:
        - Examples: MMIXIXIXIX or MMIVIVIVIV or XLXLVII

    [10] Wrong value after subtraction, like IVI or ILI
        - It's basically [rule 4] and [rule 5] violation

    [11] Post Subrtation errors: {VIV, IVI, IXI}
**/
#pragma once

#include<string>
#include<forward_list>


//_____________________________________________________________________________________
typedef std::forward_list<std::pair<char,int>> ConversionList;

class ValueTooLow_Exception{};
class ValueTooHigh_Exception{};

class TooManyInRow_Exception{};
class BadValue_Exception{};

class BadSubtraction_Exception{};
class BadValueAfterSubtraction_Exception{};


//_____________________________________________________________________________________
ConversionList conversionList {
    {'M',1000},
    {'D',500},
    {'C',100},
    {'L',50},
    {'X',10},
    {'V',5},
    {'I',1}
};
const int c_maxInRow = 3;
const int c_minValue = 1;
const int c_maxValue = 3999;


//_____________________________________________________________________________________
ConversionList::iterator GiveIteratorOnCharacter(const char, ConversionList::iterator);

bool CheckForFiveish(int);   // if value == 5 or 50 or 500


//_____________________________________________________________________________________
std::string toRoman(int value){
    if (value < c_minValue)
        throw ValueTooLow_Exception();

    if (value > c_maxValue)
        throw ValueTooHigh_Exception();

    auto head = conversionList.begin();
    auto tail = head;
    float floatcalc;    // non-integer result of calculation
    int intcalc;        // integer result of calculation
    std::string result = "";

    while(value > 0){
        floatcalc = static_cast<float>(value) / static_cast<float>((*head).second);
        intcalc = value / (*head).second;

        if (floatcalc < 1){
            if (floatcalc >= 0.9f && !CheckForFiveish((*head).second)){
                // Subtraction: A => Works for NOT-fiveish scenerios: IX, XC, CM    {X, C, M}
                tail = head;
                std::advance(head, 2);

                result += (*head).first;
                value += (*head).second;
                result += (*tail).first;
                value -= (*tail).second;

                ++tail;
            }
            else{
                tail = head;
                ++head;
            }
        }
        else if (intcalc > 3){
            // Subtraction: B => Works for fiveish scenerios: IV, XL, CD    {V, L, D}
            result += (*head).first;
            value += (*head).second;
            result += (*tail).first;
            value -= (*tail).second;
        }
        else{
            result.append(intcalc, (*head).first);
            value -= ((*head).second * intcalc);
        }
    }
    return result;
}



int fromRoman(std::string value){
    const unsigned int strLength = value.length();
    int counter_theSame = 0, lastFiveSeen = 0, lastSubtraction = 0;
    int resultValue = 0;
    int indexValue;
    int nextValue;

    ConversionList::iterator clScope;
    //auto clScope = conversionList.begin();
    // CLSCOPE - Narrows the scope of conversionList browsing
    // *cl - Conversion List Scope

    ConversionList::iterator scout;
    //auto scout = GiveIteratorOnCharacter(value[0], clScope);
    // SCOUT - Goes ahead, checks what to do.
    // Moves only between clScope and conversionList.end();

    clScope = conversionList.begin();
    scout = GiveIteratorOnCharacter(value[0], clScope);
    indexValue = (*scout).second;

    if(CheckForFiveish(indexValue))
        lastFiveSeen = indexValue;

    for (unsigned int index = 1; index < strLength; ++index){
        scout = GiveIteratorOnCharacter(value[index], clScope);
        nextValue = (*scout).second;

        if (nextValue == lastFiveSeen)
            throw TooManyInRow_Exception();

        if (indexValue == nextValue){
            if (CheckForFiveish(nextValue))
                throw TooManyInRow_Exception();

            if ((counter_theSame+1) < c_maxInRow)    ++counter_theSame;
            else                                    throw TooManyInRow_Exception(); // More than 3 equal letters in a row

            clScope = scout;
        }
        else{
            counter_theSame = 0; // Because nextValue is different from this one.

            if (indexValue < nextValue){ // Subtraction scenario:
                if (indexValue < (nextValue / 10))      // [rule 4]
                    throw BadSubtraction_Exception();

                if(CheckForFiveish(indexValue))
                    throw BadSubtraction_Exception();   // [rule 3] Cannot subtract by {D, L, V}.

                lastSubtraction = indexValue;
                indexValue = -indexValue;

                clScope = scout;
                ++clScope;

                if(CheckForFiveish((*clScope).second))  // [rule 10] Post substraction errors
                    ++clScope;
            }
            else if (nextValue == lastSubtraction)      // [rule 11] Post substraction errors
                throw BadValueAfterSubtraction_Exception();
        }
        resultValue += indexValue;
        indexValue = nextValue;
    }
    return resultValue + indexValue;
}

/// Searches the conversionList for given CHARACTER.
/// Starts from ITER position to conversionList end().
ConversionList::iterator GiveIteratorOnCharacter(const char character, ConversionList::iterator iter){
    while(iter != conversionList.end()){
        if ((*iter).first == character)
            return iter;
        else
            ++iter;
    }
    // Value is not within the given range of the ConversionList. (or it's not there at all)
    throw BadValue_Exception();
}

bool CheckForFiveish(int value){
    if (value == 5)     // V
        return true;

    if (value == 50)    // L
        return true;

    if (value == 500)   // D
        return true;

    return false;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Rozwiązanie zupełnie nietypowe, bo opiera się na pewnych własnościach odejmowania liczb rzymskich
* Trudne do zrozumienie
* Mało czytelne, ale to nie było wyzwanie czystego kodu ;)
* Są wyjątki do obsługi błędów
* `fromRoman()` może przyjmować stringa przez `const &`
* zamiast `std::forward_list` można użyć `std::array`

{{< /admonition >}}

### Wyróżnione rozwiązania - 50% zniżki na kurs C++ online

#### Robert Kumanek

```cpp
// https://github.com/Rosein/converter_roman_arabic

#include <algorithm>
#include <iostream>
#include <vector>
#include <string>
#include <stdexcept>

int fromRoman( std::string roman );
std::string toRoman( int arabic );
int extractFromRomanDigit( char romanDigit );

std::vector<std::vector<std::string>> extractRomanFromNthDigit {
   { { "" }, { "I" }, { "II" }, { "III" }, { "IV" }, { "V" }, { "VI" }, { "VII" }, { "VIII" }, { "IX" } },
   { { "" }, { "X" }, { "XX" }, { "XXX" }, { "XL" }, { "L" }, { "LX" }, { "LXX" }, { "LXXX" }, { "XC" } },
   { { "" }, { "C" }, { "CC" }, { "CCC" }, { "CD" }, { "D" }, { "DC" }, { "DCC" }, { "DCCC" }, { "CM" } },
   { { "" }, { "M" }, { "MM" }, { "MMM" } }
};

constexpr int MAX_ROMAN_NUMERAL { 3999 };
constexpr int MIN_ROMAN_NUMERAL { 1 };

std::string toRoman( int arabic )
{
    if( arabic > MAX_ROMAN_NUMERAL || MIN_ROMAN_NUMERAL > arabic )
        throw std::logic_error( "Invalid input" );
    return  extractRomanFromNthDigit [ 3 ] [ arabic        / 1000 ] +
            extractRomanFromNthDigit [ 2 ] [ arabic % 1000 / 100  ] +
            extractRomanFromNthDigit [ 1 ] [ arabic % 100  / 10   ] +
            extractRomanFromNthDigit [ 0 ] [ arabic % 10          ];
}

int extractFromRomanDigit( char romanDigit )
{
  switch( romanDigit )
  {
    case 'M': return 1000;
    case 'D': return 500;
    case 'C': return 100;
    case 'L': return 50;
    case 'X': return 10;
    case 'V': return 5;
    case 'I': return 1;
    default:
        throw std::logic_error( "Invalid input");
  }
}


int fromRoman( std::string roman )
{
    int arabic {};
    int cur {};

    for( unsigned int i = 0, roman_size = roman.size(); i < roman_size; ++i )
    {
        cur = extractFromRomanDigit( roman [ i ] );
        if( i + 1 < roman_size )
            arabic += ( cur >= extractFromRomanDigit( roman [ i + 1 ] ) ? cur : -cur );
        else
            arabic += cur;
    }

    if( roman != toRoman( arabic ) || roman.size() == 0 )
        throw std::logic_error( "Invalidate input" );

    return arabic;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Numer 2 pod względem szybkości działania
* Są wyjątki do obsługi błędów
* Bardzo czytelne, czysty kod ;)
* Brak strażnika nagłówka
* Używa LUT (LookUp Table) - stała złożoność
* Sprawdzanie poprawości `fromRoman()` za pomocą `toRoman()`
* `fromRoman()` może przyjmować stringa przez `const &`

{{< /admonition >}}

#### Bartek Kurosz

```cpp
#ifndef WYZWANIE_WYDAJNEGO_KODU_ROMAN_ARAB_CONVERTER_H
#define WYZWANIE_WYDAJNEGO_KODU_ROMAN_ARAB_CONVERTER_H

#include <string>
#include <string_view>
#include <vector>
#include <map>
#include <functional>
#include <cstdint>

using Int = int_fast16_t;

// to Roman
inline std::map<Int, std::string> basicTokens{
        {1,    "I"},
        {5,    "V"},
        {10,   "X"},
        {50,   "L"},
        {100,  "C"},
        {500,  "D"},
        {1000, "M"},
};

inline std::string two(const std::string &token) { return token + token; }

inline std::string three(const std::string &token) { return token + token + token; }

inline const std::map<Int, std::function<std::string(Int)>> digitToToken{
        {1, [](auto multiplier) { return basicTokens[multiplier]; }},
        {2, [](auto multiplier) { return two(basicTokens[multiplier]); }},
        {3, [](auto multiplier) { return three(basicTokens[multiplier]); }},
        {4, [](auto multiplier) { return basicTokens[multiplier] + basicTokens[multiplier * 5]; }},
        {5, [](auto multiplier) { return basicTokens[multiplier * 5]; }},
        {6, [](auto multiplier) { return basicTokens[multiplier * 5] + basicTokens[multiplier]; }},
        {7, [](auto multiplier) { return basicTokens[multiplier * 5] + two(basicTokens[multiplier]); }},
        {8, [](auto multiplier) { return basicTokens[multiplier * 5] + three(basicTokens[multiplier]); }},
        {9, [](auto multiplier) { return basicTokens[multiplier] + basicTokens[multiplier * 10]; }}
};

inline constexpr Int determineMaxMultiplier(Int input) {
    return input >= 1000 ? 1000 : (input >= 100 ? 100 : (input >= 10 ? 10 : 1));
}

inline constexpr Int extractNumber(Int input, Int multiplier) {
    return input - (input % multiplier);
}

inline std::string translateDigitToToken(Int number, Int multiplier) {
    return digitToToken.at(number / multiplier)(multiplier);
}

inline constexpr int minRomanNumber{1};
inline constexpr int maxRomanNumber{3999};

inline std::string toRoman(int in) {
    if (in < minRomanNumber or in > maxRomanNumber) return {};
    auto input{static_cast<Int>(in)};
    std::string result{};
    Int maxMultiplier{determineMaxMultiplier(input)};
    for (auto multiplier{maxMultiplier}; input > 0; multiplier /= 10) {
        auto number{extractNumber(input, multiplier)};
        if (number) {
            result += translateDigitToToken(number, multiplier);
            input -= number;
        }
    }
    return result;
}

// from Roman
struct Token {
    std::string_view text;
    Int number;
};

using Tokens = std::vector<Token>;
const inline std::array<Tokens, 4> translationTable{
        Tokens{
                {"MMM", 3000},
                {"MM",  2000},
                {"M",   1000}
        },
        Tokens{
                {"CM",   900},
                {"DCCC", 800},
                {"DCC",  700},
                {"DC",   600},
                {"D",    500},
                {"CD",   400},
                {"CCC",  300},
                {"CC",   200},
                {"C",    100}
        },
        Tokens{
                {"XC",   90},
                {"LXXX", 80},
                {"LXX",  70},
                {"LX",   60},
                {"L",    50},
                {"XL",   40},
                {"XXX",  30},
                {"XX",   20},
                {"X",    10}
        },
        Tokens{
                {"IX",   9},
                {"VIII", 8},
                {"VII",  7},
                {"VI",   6},
                {"V",    5},
                {"IV",   4},
                {"III",  3},
                {"II",   2},
                {"I",    1}
        }
};

struct string_view_extended {
    std::string_view data;

    [[nodiscard]] constexpr bool startsWith(const Token token) const {
        return data.substr(0, token.text.size()) == token.text;
    }

    constexpr void cutFromFront(const Token token) {
        data = data.substr(token.text.size(), data.size());
    }

    [[nodiscard]] constexpr bool empty() noexcept {
        return data.empty();
    }
};

inline constexpr std::string_view longestRomanNumber{"MMMDCCCLXXXVIII"};
inline constexpr int ERROR_WRONG_INPUT{-1};

inline int fromRoman(const std::string_view in) {
    if (in.empty()) return 0;
    if (in.length() > longestRomanNumber.length()) return ERROR_WRONG_INPUT;

    string_view_extended input{in};
    Int result{0};
    for (const auto &tokens : translationTable) {
        for (const auto &token : tokens)
            if (input.startsWith(token)) {
                result += token.number;
                input.cutFromFront(token);
                break;
            }
    }
    return input.empty() ? static_cast<int>(result) : ERROR_WRONG_INPUT;
}

#endif //WYZWANIE_WYDAJNEGO_KODU_ROMAN_ARAB_CONVERTER_H
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Brak `#include <array>`
* Numer 3 pod względem szybkości działania
* Używa inline variables z C++17
* Używa `constexpr`
* Używa LUT (LookUp Table) - liniowa stała
* Brak strażnika nagłówka
* `fromRoman()` przyjmuje napis przez `std::string_view`

{{< /admonition >}}

#### Aleksandra Postawka

```cpp
#ifndef __roman_arab__
#define __roman_arab__


#include <iostream>
#include <string>
#include <map>


using namespace std;

const unsigned int tabNum[] = { 1000, 500, 100, 50, 10, 5, 1 };
const unsigned char tabRom[] = { 'M', 'D', 'C', 'L', 'X', 'V', 'I' };
const unsigned int auxTabNum[] = { 900, 400, 90, 40, 9, 4, 4000 };
const string auxTabRom[] = { "CM", "CD", "XC", "XL", "IX", "IV", "" };



//for incorrect input the empty string is returned
string toRoman(unsigned int num)
{
    string result = "";
    unsigned int i;


    if (num == 0 || num > 3999)//Roman NaN
        return "";

    for (i = 0; i < 7; ++i)
    {
        while (num >= tabNum[i])
        {
            num -= tabNum[i];
            result.push_back(tabRom[i]);
        }

        if (num >= auxTabNum[i])
        {
            num -= auxTabNum[i];
            result.append(auxTabRom[i]);
            //i += 1;
        }

        if (num == 0)
            return result;
    }
    return result;
}

bool checkCorrectness_1(string txt)
{
    char act;

    if (txt.length() == 0) return false;

    for (unsigned int i = 0; i < txt.length(); ++i)
    {
        act = txt[i];
        if (act != 'M' && act != 'C' && act != 'X' && act != 'I' &&
            act != 'D' && act != 'L' && act != 'V')
            return false;
    }
    return true;
}


// incorrect input is signalized by -1
int fromRoman(string txt)
{
    int num = 0, digit, prevDigit, maxDigit, maxIndex;
    std::map<char, int> romToArabTab;
    romToArabTab['M'] = 1000;
    romToArabTab['D'] = 500;
    romToArabTab['C'] = 100;
    romToArabTab['L'] = 50;
    romToArabTab['X'] = 10;
    romToArabTab['V'] = 5;
    romToArabTab['I'] = 1;

    //check characters
    if (!checkCorrectness_1(txt)) return -1; //Roman NaN

    maxIndex = txt.length() - 1;
    maxDigit = romToArabTab[txt[maxIndex]];

    num = maxDigit;
    prevDigit = num;
    for (int i = maxIndex - 1; i >= 0; --i)
    {
        digit = romToArabTab[txt[i]];

        if (digit < maxDigit)
            num -= digit;
        else
        {
            num += digit;
            maxDigit = digit;
        }
        prevDigit = digit;
    }

    //check syntax
    if (num > 3999 || txt != toRoman(num))
        return -1;
    return num;
}



#endif
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Numer 4 (macOS) i 5 (Linux) pod względem szybkości działania
* Używa kodów powrotu
* `string` można było przekazywać przez `const &`
* `std::map` można zainicjalizować przy stworzeniu i zrobić statyczną

{{< /admonition >}}

#### Jakub Wińczuk

```cpp
#include <string>

/* returns empty string if got wrong input value */
std::string toRoman(unsigned int number){
    if(number >= 4000)
        return "";

    std::string roman;
    int index = 0;
    int temp;
    bool add_middle = false;
    std::string characters = "IVXLCDMMM";
    int length = characters.length();
    while(number && index + 2 < length){
        temp = number % 10;

        while (temp){
            if(temp <= 3){
                roman = characters[index] + roman;
                --temp;
                continue;
            }
            else if(temp == 4){
                roman = characters[index + 1] + roman;
                roman = characters[index] + roman;
                break;
            }
            else if(temp == 9){
                roman = characters[index + 2] + roman;
                roman = characters[index] + roman;
                break;
            }
            else if(temp >= 5){
                add_middle = true;
                temp -= 5;
            }   
        }
        if(add_middle){
           roman = characters[index + 1] + roman;
           add_middle = false;
        }

        number /= 10;
        index += 2;
    }

    return roman;
}

/* returns 0 if got wrong input value */
int fromRoman(const std::string & roman){

    int value = 0;
    int last = 0;
    int add;
    int length = roman.length();
    for(int i = length - 1; i >= 0; --i){
        
        if(roman[i] == 'I')
            add = 1;
        else if(roman[i] == 'V')
            add = 5;
        else if(roman[i] == 'X')
            add = 10;
        else if(roman[i] == 'L')
            add = 50;
        else if(roman[i] == 'C')
            add = 100;
        else if(roman[i] == 'D')
            add = 500;
        else if(roman[i] == 'M')
            add = 1000;
        else
            return 0;
      
        if(last > add)
            add = -add;

        value += add;
        last = add;
    }
    if(toRoman(value) == roman)
        return value;
    else
        return 0;
}


```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Numer 5 (macOS) i 4 (Linux) pod względem szybkości działania
* Używa kodów powrotu
* Brak strażnika nagłówka
* `string` jest przekazywany przez `const &`
* Są drabinki `else if`, można zamienić na mapę

{{< /admonition >}}

#### Marcin Komorek

```cpp
#include <string>
#include <vector>
#include <map>
#include <regex>
/*************************************************************
    The library provides conversions in the range of 1-3999
 ************************************************************/

std::vector<std::pair<const unsigned int, const char*>> romanVector
{
    {1000, "M"}, {900,"CM"}, {500,"D"}, {400, "CD"},
    {100, "C"}, {90, "XC"}, {50, "L"}, {40, "XL"},
    {10, "X"}, {9, "IX"}, {5, "V"}, {4, "IV"}, {1, "I"}
};

std::string toRoman(int value)
{
    if(value <= 0)
        return "non-positive number!";
    if(value > 3999)
        return "to large value!";

    std::string result;
    for(auto const &pair : romanVector)
    {
        while(value >= pair.first)
        {
            result += pair.second;
            value -= pair.first;
        }
    }
    return result;
}

std::regex romanNumerals("^(?=[MDCLXVI])M*(C[MD]|D?C{0,3})(X[CL]|L?X{0,3})(I[XV]|V?I{0,3})$");

void checkRomanInput(const std::string &value)
{
    std::smatch matchingBehavior;
    if(!(std::regex_search(value, matchingBehavior, romanNumerals)))
        throw -1;
}

std::map<const char, const int> romanMap 
{
    {'M', 1000},
    {'D', 500},
    {'C', 100},
    {'L', 50},
    {'X', 10},
    {'V', 5},
    {'I', 1},
};

int fromRoman(const std::string &value)
{
    try
    {
        checkRomanInput(value);
    }
    catch(const int& error)
    {
        return -1;
    }

    int result = 0;
    for(int i=0; i<value.size()-1; ++i)
    {
        if(romanMap[value[i]] < romanMap[value[i+1]])
            result -= romanMap[value[i]];
        else   
            result += romanMap[value[i]];
    }
    result += romanMap[value[value.size()-1]];
    return result;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Numer 6 pod względem szybkości działania
* Używa kodów powrotu
* Brak strażnika nagłówka
* `std::vector<std::pair<const unsigned int, const char*>>` można zmienić na `std::array<std::pair<const unsigned int, const char*>>`
* `string` jest przekazywany przez `const &`
* Jest użyty regex do sprawdzania poprawności
* Wyjątki są łapane w funkcji `fromRoman()`, lepiej gdyby mogły wylecieć poza funkcję

{{< /admonition >}}

### Pozostali finaliści - 10% zniżki na kurs C++ online

* Wiola B.
* Wiktor Z.

Wszystkim bardzo dziękuję za udział w wyzwaniu, a zwycięzcom serdecznie gratuluję!

## Wnioski

1. Dokładnie czytaj opis zadania
2. Dokładnie testuj swoje rozwiązanie

Jeśli uczestniczyliście kiedyś w rekrutacji, gdzie pierwszym etapem jest napisanie kawałka kodu, który później ma być sprawdzany automatycznie to większość rozwiązań odpada właśnie z tych 2 powodów. Aby dowieść poprawności działania kodu powinien on mieć testy jednostkowe.

## Sprzedaż kursu C++ online

Przy okazji omówienia tego wyzwania otwieram sprzedaż kursu C++ online. Osoby, które wygrały zniżki dostaną maile z odpowiednimi linkami ze zniżkami najpóźniej 25.04.
Sprzedaż trwa tylko do czwartku 30 kwietnia 2020 i są 32 miejsca w cenie 1295 PLN.
Moim założeniem było, aby zebrać 64 osoby, a trochę osób już zapisało się w przedsprzedaży, więc tylko tyle nam zostało do okrągłych 64 :)
Po wykorzystaniu limitu zastrzegam sobie prawo do zwiększenia liczby miejsc oraz ceny kursu.

---

Na koniec mam małą prośbę. Powiedz mi, czy lubisz te wyzwania i czy chcesz, aby były one organizowane cyklicznie. Napisz mi to w komentarzu poniżej lub w mailu.

[wyzwanie-wydajnego-kodu]: /wyzwanie-wydajnego-kodu
[wykop]: https://www.wykop.pl/wpis/48736977/hej-mireczki-organizuje-wyzwanie-programistyczne-w/172440973/#comment-172440973
[stackoverflow]: https://stackoverflow.com/questions/611263/efficient-string-concatenation-in-c
[benchmark]: https://github.com/google/benchmark
