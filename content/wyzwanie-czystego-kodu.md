---
title: "Wyzwanie czystego kodu"
date: 2020-03-18T19:25:03+00:00
lastmod: 2020-03-18T19:25:04+00:00
draft: false
description: ""
show_in_homepage: true
show_description: false
license: ''
url: '/wyzwanie-stl/'
aliases: ["/wyzwanie-stl/", "/wyzwanie-czystego-kodu/"]

tags: ["wyzwanie", "challenge", "czysty kod", "c++", "online", "stl"]
categories: ["Wyzwanie"]

featured_image: ''
featured_image_preview: ''

comment: true
toc: true
autoCollapseToc: true
math: false
---

Za Tobą już quiz z C++, a to Twoje zadanie. Napisz aplikację, która szyfruje i deszyfruje tekst używając szyfru podstawieniowego. Szyfr podstawieniowy to po prostu podmiana liter tekstu na inne litery. Najprostszym przykładem jest [szyfr Cezara](2), w którym każdy znak jest przesunięty o 3 pozycje. 

## Przykład szyfru Cezara

`ALA MA KOTA` → `DOD PD LRWD` (dla alfabetu łacińskiego, nie polskiego)

Twoim zadaniem jednak nie jest implementacja szyfru Cezara, ale po prostu szyfru podstawieniowego. W tym celu najpierw musisz zapisać gdzieś informacje, który znak przez jaki będzie zastąpiony. Ta informacja będzie kluczem, służącym do szyfrowania i/lub deszyfrowania. Np:

* `a` → `g`
* `b` → `c`
* `c` → `z`
* `d` → `r`

... i tak dalej. Po zaszyfrowaniu takim kluczem ciągu `abcd` otrzymamy `gczr`. Aby odszyfrować szyfrogram `gczr` musimy zastosować operację odwrotną, czyli sprawdzić jaki znak został podmieniony na każdy kolejny z szyfrogramu. 

## Wymagania obowiązkowe

1. Losowe generowanie klucza (innego przy każdym uruchomieniu)
2. Szyfrowanie ciągu wejściowego (obojętnie czy jest to argument programu argv, cin, plik, czy string) i wypisanie rezultatu na ekranie (cout)
3. Deszyfrowanie zaszyfrowanego wyżej ciągu i wypisanie rezultatu na ekranie (cout)

## Wymagania dodatkowe, czyli kryteria oceny

1. Obsługa wszystkich znaków drukowanych (cyfry, przecinki, kropki, wykrzykniki, małe i duże litery, spacje)
2. Użycie jak najmniejszej liczby pętli (idealnie bez jakichkolwiek pętli for, do, while, for_each)
3. Używanie algorytmów STL
4. Elegancki i czysty kod (jednolite formatowanie, konwencje nazewnicze)
5. Krótki kod

## Szkielet kodu

1. Zacznij uzupełniając poniższy program.
2. Cały program może składać się tylko z jednego pliku .cpp, ale jeśli potrzebujesz ich więcej, to śmiało.

```cpp
#include <string> 
#include <iostream> 
#include <cassert>

// TODO: Your implementation goes here

int main() {
    // Feel free change below code if needed.

    std::string message = "Hello, Coders School!";
    auto key = generateKey();
    auto cypher = encrypt(message, key);
    auto result = decrypt(cypher, key);

    std::cout << "Message: " << message << '\n';
    std::cout << "Cypher: " << cypher << '\n';
    std::cout << "Result: " << result << '\n';

    assert(message == result);
    return 0;
}
```

## Przysyłanie rozwiązań

Aby przesłać mi rozwiązanie musisz mieć pewność, że spełnia ono wszystkie wymagania obowiązkowe. Im więcej wymagań dodatkowych zostanie spełnione, tym lepsza będzie ocena Twojego rozwiązania. Rozwiązanie prześlij na adres email [lukasz@coders.school](2). Tytuł maila: "Wyzwanie czystego kodu". Treść:
* Link do repozytorium na GitHubie lub
* Link do Gista lub
* Plik źródłowy w załączniku (nie wysyłaj skompilowanego programu!)

Wyniki wyzwania opublikuję na WWW i Facebooku Coders School 2 kwietnia. Ze zwycięzcami skontaktuję się mailowo. Zwycięskie rozwiązania zostaną opublikowane, aby wszystkie osoby biorące udział w wyzwaniu mogły porównać swój kod ze zwycięskim.

 [1]: https://pl.wikipedia.org/wiki/Szyfr_Cezara
 [2]: mailto:lukasz@coders.school