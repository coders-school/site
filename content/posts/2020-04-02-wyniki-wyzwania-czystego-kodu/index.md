---
title: "Wyniki wyzwania czystego kodu"
date: 2020-04-02T22:40:05+02:00
lastmod: 2020-04-02T22:40:05+02:00
draft: false
description: "Omówienie wyników wyzwania czystego kodu - artykuł i wideo. Zobacz zwycięskie rozwiązania."
summary: "Dzisiaj 2 kwietnia i tak jak obiecałem publikuję wyniki wyzwania czystego kodu, w którym można było wygrać zniżki na kurs C++ online. Wyzwanie polegało na implementacji szyfru podstawieniowego, a cała trudność polegała na tym, że użycie pętli było karane. Należało używać algorytmów STL."
url: "/post/wyniki-wyzwania-czystego-kodu/"
aliases: ["/post/wyniki-wyzwania-czystego-kodu/", "/hugo/wyniki-wyzwania-czystego-kodu", /wyniki-wyzwania-czystego-kodu/]

tags: ["wyzwanie", "challenge", "czysty kod", "c++", "online"]
categories: ["Post", "Wyzwanie"]
hiddenFromHomePage: false

featuredImage: "featured.png"
featuredImagePreview: "/post/wyniki-wyzwania-czystego-kodu/featured.png"

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

Dzisiaj 2 kwietnia i tak jak obiecałem publikuję wyniki wyzwania czystego kodu.
Jeśli chcesz sobie przypomnieć o co dokładnie chodziło to [zobacz stronę wyzwania](https://www.surveypage.com/wyzwanie).

{{< youtube fpIgX9HsvhI >}}

## Statystyki

1. Osoby zapisane na wyzwanie - 130
2. Osoby, które przysłały rozwiązanie - 36
3. Dobrze przetestowane rozwiązania - 24
4. Rozwiązania bez pętli - 12
5. Rozwiązania, które zaliczyły testy - 9
6. Rozwiązania bez pętli, które zaliczyły testy - 6

## Jak oceniałem?

1. Policzyłem pętle w każdym nadesłanym kodzie. Najlepsze rozwiązania miały oczywiście 0 pętli, a najwięcej było 7 pętli.
2. Napisałem testy jednostkowe, które stanowiły taką ramę do określania, w których przypadkach program działa poprawnie. Ale faktem jest, że niektórzy tak bardzo zmienili interfejs, że nie mogłem tych testów dopasować do każdego nadesłanego rozwiązania. Jeśli widziałem, że było ono czysto napisane, tzn. używało STLa i nie było pętli to pisałem adaptery, które spowodują, że będzie można uruchomić testy.
3. W 24 na 36 rozwiązań udało mi się odpalić moje UT. Z tych 24 rozwiązań tylko 4 przeszły wszystkie testy, które napisałem. Był jednak 1 test, którego zdecydowałem się nie brać pod uwagę. Dotyczył on tego czy znak nowej linii '\n' jest również podmieniany. Pomyślałem sobie, że szyfrogram fajnie porównywać z oryginalnym tekstem, jeśli znaki nowych linii nie są podmieniane. Znak nowej linii nie jest znakiem drukowalnym ASCII. Niektóre implementacje go nie podmieniały, co wydało mi się fajne, ale tak naprawdę to, że program ma się tak zachowywać w żaden sposób nie wynikało z wymagań. Nie brałem więc pod uwagę tego jednego testu. A więc o nagrodę główną i dodatkowe walczyły te rozwiązania, które miały zaliczone 26/27 asercji w testach i co więcej nie implementowały szyfru rotacyjnego (np. Cezara) tylko faktycznie podstawieniowy. Tak, tutaj nie każdy dobrze zrozumiał jak ma wyglądać szyfr podstawieniowy. Było to w sumie 9 osób. Z czego do walki o na nagrodę główną jaką jest 100% zniżki kwalifikowało się 6 rozwiązań, bo tyle z nich nie miało żadnej pętli.
4. O główną wygraną walczyły 3 rozwiązania. Była to tak zaciekła walka, że nawet się zastanawiałem, czy nie podzielić nagrody głównej między nie, czyli każdemu dać po 33%? :) To oczywiście żart. Ale co zadecydowało o zwycięstwie? Formatowanie kodu i magiczne wartości.
   * Jeśli w kodzie były używane gołe numery (32, 95 czy 127), które pewnie wiecie co oznaczają, to był za to minus.
   * Jeśli formatowanie było niejednolite, czyli np. gdzieś operacja dodawania była zapisana `a+b`, podczas gdy w innych miejscach ta osoba stawiała spacje pomiędzy operatorami, to też był minus.
   * Wcięcia - jedna osoba miała niejednolite wcięcia, np. brak 1 spacji lub nadmiarowa spacja.

Możecie na podstawie tego dojsć do wniosku, że o wygranej zadecydowały detale. I tak. Dokładnie tak było.

Czy normalnie w pracy niepostawienie gdzieś spacji może spowodować odrzucenie rozwiązania? To zależy od osoby oceniającej. Raczej nie, ale też warto mieć automatyczne formattery, które odwalą taką mechaniczną robotę za nas. Dlaczego formatowanie kodu jest takie ważne? Uwierzcie, że kod pisze się tylko raz, ale czyta się go wiele razy. Czytają go różne osoby, nie tylko autor. Doświadczeni programiści nie patrzą na kod znak po znaku, tylko wzrokowo wychwytują pewne wzorce. Widzą jakieś poszczególne elementy i po prostu parsują kod wzrokiem. Często zaburzenie formatowania powoduje parsing error w mózgu i wtedy włącza się tryb dokładnego przyglądania, aby zrozumieć o co w kodzie chodzi. Dlatego dobrze napisany kod, czyta się jak poezję. A przy źle napisanym kodzie, trzeba się zmóżdżać, aby go ogarnąć.

Możecie mi jeszcze zarzucić, że nie brałem pod uwagę wydajności rozwiązań. Wiem, że dla doświadczonych programistów to jest bardzo ważne. Właściwie to powinno być ważne dla każdego programisty. Ale doświadczony programista, nawet nie myśląc za bardzo, od razu tworzy zoptymalizowane rozwiązania. Chociażby przekazuje zmienne przez `const&` jeśli chce unikać zbędnych kopii. Albo wykorzystuje RVO. Albo stosuje `constexpr`. To jednak nie było zawarte jako kryteria oceny i gdybym patrzył pod tym kątem na rozwiązania, to pewnie wygrałoby inne. Ale przed nami jeszcze sprzedaż kursu. Tam też zorganizuję kolejne wyzwanie. I być może już wam uwzględnię optymalizacje :)

Tak naprawdę w tym wyzwaniu nie było kodu, który jednocześnie byłby najwydajniejszy i najśliczniejszy.

## Najczęściej popełniane błędy lub rzeczy, które można było usprawnić

Kolejność losowa. Pierwszy błąd wcale nie oznacza, że występował on najczęściej.

1. Złe zrozumienie zadania, czyli implementacja Szyfru rotacyjnego (takiego jak szyfr Cezara) zamiast podstawieniowego. Szyfr rotacyjny to szczególny przypadek podstawieniowego. W [wymaganiach do wyzwania](https://coders.school/wyzwanie-stl/) było dokładnie wyszczególnione, że to nie ma być szyfr Cezara. Podałem nawet przykład, gdzie znaki są mapowane na szyfrogramy bez jakiejś regularności.
2. 32 zamiast ' ' i 126 zamiast '~'. Często na rozmowach rekrutacyjnych macie coś zrobić ze znakami, np skonwertować cyfrę z char na int. Nie musicie znać kodu ASCII tego znaku. Wystarczy, że po prostu napiszecie ten znak. A konwersję o której mówię najłatwiej zrobić odejmując '0' -> `'9' - '0' = 9`
3. Własne struktury trzymające 2 wartości zamiast `std::pair<T, U>`
4. Styl języka C zamiast C++. `typedef struct { /* ... */ } Name;` zamiast `struct Name { /* ... */ };`
5. Zwracanie argumentu przyjętego przez kopię. Lepiej przyjąć agrument przez const&, kopię stworzyć lokalnie wewnątrz funkcji i ją zwrócić. Dzięki temu zadziała RVO (Return Value Optimisation).
6. Brak `const &` przy parametrach, aby unikać zbędnych kopii.
7. Użycie `std::random_shuffle()`, które jest oznaczone jako deprecated (przestarzałe) w C++14, a usunięte w C++17.
8. Stosowanie `char*` zamiast `std::string`.
9. Stosowanie wskaźników. Naprawdę nie były potrzebne w tym wyzwaniu.
10. Wpisywanie ciągu ascii z palca zamiast wygenerowania za pomocą `std::generate` / `std::iota`. No chyba że robicie `constexpr` i zależało wam na szybkości. Ale od C++20 nawet `std::iota` będzie `constexpr`.
11. Brak dodatkowych sprawdzeń kompilatora `-Wall -pedantic -Wextra -Werror -Wconversion`
12. Porównania pomiędzy liczbami unsigned i signed. Zastosowanie powyższych flag kompilacji powodowało, że kompilator się o to upominał.
13. Używanie `static` wewnątrz funkcji. Ogólnie to nie jest zła praktyka, jeśli się wie co się robi. Ale w niektórych przypadkach `static` powodowało, że funkcje nadawały się do wywołania tylko raz, bo drugie ich wywołanie korzystało z wartości, dla których poprzednie wywołanie tej funkcji się skończyło. Z teog powodu niektóre testy nie przechodziły.
14. C-style cast `(int)variable` zamiast `static_cast<int>(variable)`
15. Zła praktyka

    ```cpp
    if (sth) {
    } else {
       // ...
    }
    ```

    Dobra praktyka

    ```cpp
    if (!sth) {
       // ...
    }
    ```

16. Wstawianie kodu od razu do `main()` zamiast użycia sugerowanych nazw funkcji. Potem aby to trzetestować to musiałem je i tak wyciągać do funkcji.
17. Zakaz używania pętli część osób skojarzyła z rekurencją. Ja natomiast nie wiem czemu o niej zapomniałem. Rozwiązania rekurencyjne jak najbardziej w takim przypadku były uwzględniane. Zazwyczaj nie powodowały one, że kod był czystszy niż w przypadku używania gotowych algorytmów STL, bo o to chodziło w tym zadaniu. Poza tym rekurencja ma swoje wady. Cześć algorytmów jest oczywiście łatwiej zapisać rekurencyjnie, jak np. merge sort, ale mamy tutaj większe ograniczenia. Szybciej zużywamy pamięć stosu i łatwo go przepełnić. Gdybyśmy mieli zaszyfrować jakieś bardzo długie teksty, to rozwiązania rekurencyjne odpadają. Poza tym kompilator może zoptymalizować kod bez rekurencji, czyli wykorzystujący klasyczne pętle, ale ukryte w gotowych algorytmach STL.
18. Stosowanie `goto` w celu uniknięcia pętli. Chociaż brawo za pomysłowość, bo mi to nie przyszło do głowy. Już jestem tak nauczony, że `goto` się nie używa i już.
19. Brak losowości przy generowaniu klucza. Część osób używała `std::random_shuffle()`, który został usunięty w C++17, ale wtedy kompilowałem kod w C++14, aby zadziałał. Część niestety stosowała klasyczne `rand()`, ale to nie jest właściwe rozwiązanie. Trzeba było wtedy dodatkowo pamiętać o inicjalizacji `srand(time)`. Bez tego nie ma żadnej losowości i to moje testy ładnie wykrywały. Najlepiej było użyć `std::shuffle()` dostarczając jakiś generator, np. `std::mt19937` z nagłówka `<random>`
20. Używanie funkcji, które rzucają wyjątki, jak np. `map::at()`. Samo użycie takich rzeczy czy wyjątków w ogóle nie jest złą decyzją, ale problemem jest brak ich obsługi. Moje testy pozwalały na wykrycie takich rzeczy. Gdy ktoś np. nie obsługiwał pełnego zestawu drukowalnych znaków ascii, to często miałem nieobsłużone wyjątki. To obniżało ocenę rozwiązania.
21. Zbędne komentarze. Komentarze odnośnie tego co kod robi, wbrew tego co was uczą na uczelniach nie są mile widziane. Jakieś docstringi, które komentują interfejs - ok, nie zwracałem na nie uwagi i ich obecność w żaden sposób nie podnosiła wyniku. Dokumentacja nie była wymagana. Ale pisanie w komentarzu, co się w danej linijce dzieje jest przesadą. Kod powinien być samodokumentujący się. Zamiast zmiennej `a` napiszcie właściwą nazwę, np. `key` albo `counter`. Koniecznie po angielsku. Na szczęście nie otrzymałem chyba żadnego rozwiązania, które miałoby polskie nazwy zmiennych. Standard w branży programistycznej jest taki, że ma być po angielsku. Co do samych komentarzy jeszcze to jest taka fajna zasada czystego kodu, która mówi, że jeśli masz ochotę dać gdzieś komentarz, bo kod jest nieczytelny, to wydziel go do funkcji, a tę funkcję nazwij tak jak chciałeś to skomentować. I po problemie z pisaniem komentarzy. Komentarze są złe jeszcze z jednego powodu - gniją. Jak później kod się zmienia, to rzadko kto pamięta też zaktualizować komentarze, więc są one nieaktualne. Czasami zdarzają się sytuacje, że kod ani nie robi tego co powinien, a komentarz opisuje jeszcze coś innego.
22. Magiczne liczby. Dlaczego przy szyfrze Cezara, jak klucz jest `% 16`? albo `% 10`? Skąd taki wybór? To są magiczne liczy, które nie wiem czy mają jakieś znaczenie w kodzie. Też się powinno czegoś takiego unikać.
23. Nazwy zmiennych lub funkcji z numerkami. `encrypt1`, `encrypt2`. Jak się domyślć po nazwie czym się różnią? Trzeba zajrzeć w listę argumentów, a często to nie wystarczy i trzeba przeanalizować implementację. To nie jest czysty kod.
24. Dodatkowe menu lub obsługa wszystkich rodzajów podawania napisów. W wymaganiach było, że ma być dowolnie podany napis. Nie trzeba było pisać obsługi wczytywania napisów z pliku, z linii komend oraz z cin. Wystarczyło jedno.

Zastrzeżenie - nie było rozwiązania, które by w 100% nie miało żadnego z powyższych zastrzeżeń. W każdym można było coś usprawnić, a przynajmniej ja widziałem takie możliwości.

## Hall of Fame

### Zwycięskie rozwiązanie - 100% zniżki na kurs C++ online

#### Autor: Krzysztof Szytko

```cpp
const short ASCII_BEGIN = 32; //Include (Space)
const short ASCII_END = 127;  //Exclude (DEL)

std::string generateKey() {
    std::vector<char> vKey(ASCII_END - ASCII_BEGIN);
    std::iota(vKey.begin(), vKey.end(), ASCII_BEGIN);
    std::shuffle(vKey.begin(), vKey.end(), std::mt19937{ std::random_device{}() });
    return std::string{ vKey.begin(), vKey.end() };
}

std::string encrypt(std::string m, std::string key) {
    std::transform(m.begin(), m.end(), m.begin(), 
        [&key](char c) {
            return (c >= ASCII_BEGIN && c < ASCII_END) ? key[c - ASCII_BEGIN] : c; });
    return m;
}

std::string decrypt(std::string m, std::string key) {
    std::transform(m.begin(), m.end(), m.begin(),
        [&key](char c) {
            return (c >= ASCII_BEGIN && c < ASCII_END) ? key.find(c) + ASCII_BEGIN : c; });
    return m;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* 0 pętli
* Można było użyć `' '` zamiast `32`. Trochę trudniej napisać znak DEL :D
* Argumenty można było przekazać przez `const&`
* Agrument `std::string m` mógł się nazywać `std::string message`
* `vKey` mogło być od razu typu `std::string`. Nie trzeba by było kopiować zawartości vectora do stringa.

{{< /admonition >}}

### Wyróżnione rozwiązania - 50% zniżki na kurs C++ online

#### Marcin Duś

```cpp
const std::pair<int, int> allowedChars{32,127};

std::string encrypt(std::string message, const std::vector<int>& key) {
   std::transform(message.begin(), message.end(), message.begin(),
                   [=](unsigned char c) { return key[static_cast<int>(c)-allowedChars.first]; });
    return message;
}

std::string decrypt(std::string message, std::vector<int> key) {
    std::transform(message.begin(), message.end(), message.begin(),
                   [=](unsigned char c) {
                        return std::distance(key.begin(), std::find(key.begin(), key.end(), static_cast<int>(c))) + allowedChars.first;
                   });
    return message;
}

std::vector<int> generateKey() {
    std::vector<int> key(allowedChars.second-allowedChars.first);
    std::generate(key.begin(), key.end(), [n = allowedChars.first] () mutable { return n++; });
    unsigned seed = std::chrono::system_clock::now().time_since_epoch().count();
    std::shuffle(key.begin(), key.end(),  std::default_random_engine(seed));
    return key;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Rozwiązanie bardzo podobne do zwycięskiego
* 0 pętli
* Formatowanie - niejednolite wcięcia
* Formatowanie - niejednolite spacje przy operatorach
* Optymalizacja - argumenty można było przyjąć przez `const &`, a zwracać zmienną lokalną, aby zadziałało RVO
* Optymalizacja - lambdy mogą przechwytywać przez referencję
* Zamiast pary `allowedChars` można było użyć odpowiednio nazwanych stałych `constexpr`

{{< /admonition >}}

#### Grzegorz Choiński

```cpp
const char firstAsciiPrintableChar = ' ';
const int amountOfPrintableAsciiChars = 95;

std::vector<char> generateKey() {
    std::vector<char> key(amountOfPrintableAsciiChars);
    std::generate(key.begin(), key.end(), 
        [n = firstAsciiPrintableChar]() mutable { 
            return n++; 
        });

    std::random_device rd;
    std::mt19937 g(rd());

    std::shuffle(key.begin(), key.end(), g);

    return key;
}

std::string encrypt(std::string message, std::vector<char> key) {
    std::transform(message.begin(), message.end(), message.begin(), 
        [key = key](char c) -> char {
            return key[c - firstAsciiPrintableChar]; 
        });
    return message;
}

std::string decrypt(std::string cypher, std::vector<char> key) {
    std::transform(cypher.begin(), cypher.end(), cypher.begin(), [key = key](char c)-> char {
        int index = std::distance(key.begin(), std::find(key.begin(), key.end(), c));
        return index+firstAsciiPrintableChar;
        });
    return cypher;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Rozwiązanie bardzo podobne do zwycięskiego
* 0 pętli
* Formatowanie - niejednolicie używane spacje przy operatorach + oraz ->
* Niepotrzebna kalka nazwy `key = key` na liście przechwytującej
* Optymalizacja - lambdy mogą przechwytywać przez referencję
* Optymalizacja - argumenty można było przyjąć przez `const &`, a zwracać zmienną lokalną, aby zadziałało RVO

{{< /admonition >}}

#### Wojciech Razik

```cpp
using KeyType = std::array<char, 127>;

template <std::size_t max>
constexpr auto make_array() {
  return []<std::size_t... Vals>(std::index_sequence<Vals...>) {
    return std::array<char, max>{Vals...};
  }
  (std::make_index_sequence<max>{});
}

constexpr KeyType sortedChars = make_array<127>();

std::map<char, char> generateLookup(const KeyType& source, const KeyType& destination) {
  std::map<char, char> lookup_table;

  std::transform(source.begin(), source.end(), destination.begin(),
                 std::inserter(lookup_table, lookup_table.end()), [](char lhs, char rhs) {
                   return std::pair{lhs, rhs};
                 });
  return lookup_table;
}

std::string transform(std::string message, std::map<char, char> lookup_table) {
  std::transform(message.begin(), message.end(), message.begin(), [&lookup_table](char c) {
    if (lookup_table.contains(c)) {
      return lookup_table[c];
    }
    return c;
  });
  return message;
}

std::string encrypt(const std::string& message, const KeyType& key) {
  return transform(message, generateLookup(sortedChars, key));
}

std::string decrypt(const std::string& message, const KeyType& key) {
  return transform(message, generateLookup(key, sortedChars));
}

KeyType generateKey() {
  std::random_device rd;
  std::mt19937 g(rd());

  auto to_shuffle = sortedChars;
  std::shuffle(to_shuffle.begin(), to_shuffle.end(), g);
  return to_shuffle;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Ładne zastosowanie C++20
* 0 pętli
* `make_array()` pomimo działania w czasie kompilacji, nie jest tak czytelne jak `std::iota`. Szablonowa lambda z szablonem wariadycznym powoduje, że trzeba się chwilę zagłębić w ten kod, aby go zrozumieć
* `generateLookup()` jest wywoływane każdorazowo przy wywołaniu `encrypt()` lub `decypt()`, pomimo iż jego wynik działania za każdym razem będzie ten sam, gdy używamy tego samego klucza
* Można użyć `std::back_inserter(lookup_table)` zamiast `std::inserter(lookup_table, lookup_table.end())`
* Parametry są przekazywane przez `const &`, chociaż nie wszędzie.

{{< /admonition >}}

#### Andrzej Rafalski

```cpp
std::vector<char> generateKey(){
    std::vector<char> key(95);

    std::iota(key.begin(), key.end(), 32);
    std::random_shuffle(key.begin(), key.end(), [](int i){ return std::rand()%i; });

    return key;
}

std::string encrypt(std::string message, const std::vector<char> &key){
    auto letterEncrypt = [key](char arg){char encrypted_letter = key[arg-32]; return encrypted_letter;};
    std::transform(message.begin(), message.end(), message.begin(), letterEncrypt);

    return message;
}

std::string decrypt(std::string cypher, const std::vector<char> &key){
    auto letterDecrypt = [key](char arg){
        auto it_to_letter = std::find(key.begin(), key.end(), arg);
        char decrypted_letter = std::distance(key.begin(), it_to_letter) + 32;
        return decrypted_letter;};
    std::transform(cypher.begin(), cypher.end(), cypher.begin(), letterDecrypt);

    return cypher;
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* Użyte `rand()` zamiast gotowego generatora liczb losowych
* Użyte `std::random_shuffle`, które jest usunięte w C++17
* Magiczne wartości 32 i 95 w kodzie
* Parametry można przekazywać przez `const &`

{{< /admonition >}}

#### Karol Dudzic

```cpp
constexpr auto FIRST_ASCII_CHAR{' '};
constexpr auto LAST_ASCII_CHAR{'~'};
constexpr auto ASII_CHARS_NUMBER{LAST_ASCII_CHAR - FIRST_ASCII_CHAR + 1};

std::string ascii()
{
    auto visibleChars = std::string(ASII_CHARS_NUMBER, ' ');
    std::generate(visibleChars.begin(), visibleChars.end(),
        [n = FIRST_ASCII_CHAR] () mutable { return n++; });
    return visibleChars;
}

std::string generateKey()
{
    static auto rd = std::random_device{};
    static auto g = std::mt19937(rd()) ;
    static auto key = std::string{ascii()};
    std::shuffle(key.begin(), key.end(), g);
    return key;
}

std::string encrypt(const std::string& message, const std::string& key)
{
    const auto encode = [&key](const char symbol)
    {
        return (FIRST_ASCII_CHAR <= symbol and symbol <= LAST_ASCII_CHAR)
               ? key[symbol - FIRST_ASCII_CHAR]
               : symbol;
    };
    auto result = std::string{};
    std::transform(message.begin(), message.end(),
        std::inserter(result, result.begin()), encode);
    return result;
}

std::string oppositeKey(const std::string& key)
{
    auto result = std::string(key.size(), ' ');
    const auto reverseSymbol = [&result, n = FIRST_ASCII_CHAR] (const char symbol) mutable
    {
        return result[symbol - FIRST_ASCII_CHAR] = n++;
    };
    std::for_each(key.begin(), key.end(), reverseSymbol);
    return result;
}

std::string decrypt(const std::string& cypher, const std::string& key)
{
    const auto decryptingKey = oppositeKey(key);
    return encrypt(cypher, decryptingKey);
}
```

{{< admonition type=note title="Moje komentarze" details=false >}}

* 1 pętla `std::for_each`
* Można użyć `std::front_inserter(result)` zamiast `std::inserter(result, result.begin())`
* Argumenty przekazywane przez `const &`
* Zwracanie zmiennych lokalnych -> RVO

{{< /admonition >}}

### Pozostali finaliści - 10% zniżki na kurs C++ online

* Wiktor B.
* Mint B.
* Jakub C.
* Dominik B.
* Artur J.
* Kacper K.
* Kamil K.
* Kacper K.
* Krzysztof K.
* Konrad K.
* Sebus K.
* Mateusz K.
* Paweł L.
* Mariusz L.
* Radosław M.
* Sylwia M.
* Rafał M.
* Mateusz K.
* Maurycy N.
* Marcin N.
* Szymon O.
* Rafał R.
* Mateusz S.
* Mike T.
* Mateusz U.
* Jan W.
* Jakub W.
* Łukasz W.
* Radosław Z.
* Jan Z.

## Testy jednostkowe

{{< gist ziobron 9e6c862abf2a97bbe66ef6ab8c51e591 >}}

Ślicznie dziękuję wszystkim wam za udział w wyzwaniu. Wszystkim zwycięzcom gratuluję :)

PS. W kwietniu szykuje się kolejne wyzwanie. Jeśli nie chcesz go przegapić, to zapisz się na [newsletter](https://coders.school/#newsletter)
