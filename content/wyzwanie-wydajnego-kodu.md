---
title: "Wyzwanie wydajnego kodu"
date: 2020-04-12T20:41:39+02:00
lastmod: 2020-04-12T20:41:39+02:00
draft: false
author: "Łukasz Ziobroń"
authorLink: ""
description: "Napisz bibliotekę nagłówkową do konwersji liczb z arabskich na rzymskie i odwrotnie. Im wydajniejszy kod tym lepiej. Optymalizuj co się da. Możesz wygrać 99% zniżki na profesjonalny kurs C++ online."
summary: ""
license: ""
url: ""

tags: ["wyzwanie", "challenge", "wydajny kod", "c++", "online"]
categories: ["Wyzwanie"]
hiddenFromHomePage: false

toc: true
autoCollapseToc: true
math: false
lightgallery: true
linkToMarkdown: true
share:
  enable: true
comment: true
---

## Zadanie

Oto twoje zadanie. Napisz bibliotekę nagłówkową (header-only) do konwersji liczb z arabskich na rzymskie i odwrotnie.

Do zaimplementowania masz dokładnie 2 funkcje, które muszą nazywać się `toRoman()` (konwersja z arabskich na rzymskie) oraz `fromRoman()` (konwersja z rzymskich na arabskie)

<!--more-->

W bibliotece możesz mieć więcej funkcji pomocniczych, jeśli tak Ci będzie wygodniej. Biblioteka powinna składać się tylko z jednego pliku nagłówkowego hpp. Oczywiście do jej przetestowania utwórz sobie plik cpp, w którym ją zaincludujesz, ale nie musisz go przesyłać.

Przykład użycia tych funkcji:

```cpp
auto roman = toRoman(42);
std::cout << roman << '\n';    // "XLII"
auto arabic = fromRoman(roman);
std::cout << arabic << '\n';   // 42
```

## Kryteria oceny

1. **Poprawne działanie**. Jeśli twoje funkcje nie będą zwracały prawidłowych rezultatów, to twoje rozwiązanie będzie odrzucone.
2. **Obsługa błędów**. Przykładowo, co się stanie, gdy podamy nieprawidłową wartość do funkcji, taką jak za duża liczba?
3. **Złożoność algorytmów i optymalizacje**. Im program będzie szybszy tym lepiej.
4. **Jak najmniejsza liczba instrukcji warunkowych**. Im mniej `if`, `switch/case` oraz `goto` tym lepiej
5. **Jak najmniejsza liczba pętli**. Im mniej gołych `for`, `do`, `while` lub `goto` tym lepiej. Używaj algorytmów STL.

Kryteria w kolejności od najważniejszego do najmniej ważnego. Przykładowo jeśli kilka rozwiązań działa poprawnie i obsługuje błędy, to o przyznaniu głównej nagrody zadecyduje złożoność algorytmów i optymalizacje. Jeśli będą one podobne dla kilku rozwiązań to będę patrzył na liczbę instrukcji warunkowych, itd.

## Termin

Rozwiązania można przysyłać do wtorku, 21.04.2020 do godziny 23:59.

## Nagrody

### Nagroda główna - 1 x 99% zniżki na kurs C++ online (1282,05 PLN zniżki)

### Nagrody dodatkowe - 5 x 50% zniżki na kurs C++ online (647,50 PLN zniżki)

### Nagrody gwarantowane - 10% zniżki na kurs C++ online (129,50 PLN zniżki)

Nagorda gwarantowana zostanie przyznana każdemu, kto przyśle poprawnie działające rozwiązanie, tzn. spełniające przynajmniej pierwsze kryterium.

## Regulamin

1. Zniżka obowiązuje tylko na obecną edycję kursu C++ online. Aby ją wykorzystać należy kupić kurs w kwietniu 2020. Domyślnie przewidziana jest płatność w ratach.

### § 1 Kwestie RODO

1. Przesyłając rozwiązanie zgadzasz się na opublikowanie Twojego imienia i nazwiska na stronie [https://coders.school](https://coders.school)
2. Nie opublikuję nigdzie Twojego adresu email.

### § 2 [Wyzwanie czystego kodu - WCK](/wyzwanie-stl/)

1. Zwycięzca główny (100% zniżki) oraz zwycięzcy dodatkowi WCK mogą wziąć udział w tym wyzwaniu, ale tylko dla sportu, bo nie dostaną żadnej zniżki w tym wyzwaniu, a ich rozwiązania nie będą brane pod uwagę :)
2. Zwycięzcy z nagrodą gwarantowaną (10% zniżki) WCK mogą wziąć udział w tym wyzwaniu. W przypadku wygrania nagrody o większej wartości obowiązywać będzie tylko ta bardziej wartościowa nagroda. W przypadku ponownego wygrania nagrody gwarantowanej (10% zniżki) nie będą się one sumować. Wygraną będzie po prostu 10% zniżki.

## Przysyłanie rozwiązań

Rozwiązanie prześlij emailem:

* adres: wyzwanie@coders.school
* tytuł: Wyzwanie wydajnego kodu
* treść:
  * plik nagłówkowy (jako treść maila lub w załączniku) lub
  * link do repo na GitHubie lub
  * link do Gist

## Publikacja wyników

Wyniki wyzwania postaram się opublikować najpóźniej do piątku, 24.04.2020 na stronie WWW Coders School.

Informacje o ich opublikowaniu prześlę wszystkim uczestnikom na maila. Napiszę też posta na [fanpage'u Coders School na Facebooku](https://facebook.com/szkola.coders.school) oraz na [profilu na LinkedIn](https://www.linkedin.com/company/coders-school/)

Tak samo jak poprzednio zamierzam też nagrać wideo, w którym omówię wszystkie szczegóły oceny rozwiązań oraz dam trochę wskazówek, na co warto zwracać uwagę :)

### Podejmujesz wyzwanie? :)
