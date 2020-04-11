---
title: Wielowątkowość w C++ w lutym i marcu 2020
date: 2020-01-08T13:47:02+00:00
author: Łukasz Ziobroń
url: /post/wielowatkowosc-2020/
categories: ["Post", "Wielowątkowość w C++"]
tags: ["c++", "mini kurs", "wielowątkowość", "wrocław"]
summary: "Już niedługo w Coders School odbędzie się kurs wielowątkowość w języku C++. Znajdziesz tu informacje o terminach spotkań, tematyce, trenerze, przygotowaniu, kosztach oraz zapisach."

featuredImage: "featured.png"
featuredImagePreview: "/post/wielowatkowosc-2020/featured.png"

toc: true
autoCollapseToc: true
math: false
lightgallery: true
linkToMarkdown: true
share:
  enable: true
comment: true

---
Wszystkiego dobrego w Nowym Roku 🙂 Już niedługo w Coders School odbędzie się kurs wielowątkowość w języku C++. Oto detale:

## Terminy spotkań

* 16 lutego (niedziela) 10:00-15:00
* 23 lutego (niedziela) 10:00-15:00
* 1 marca (niedziela) 10:00-15:00
* 8 marca (niedziela) 10:00-15:00

## Tematyka

* wielowątkowość &#8211; teoria zrównoleglania
* wątki (std::thread)
* współdzielenie danych (mutex, locks)
* zmienne warunku (conditione_variable)
* zmienne atomowe (atomic)
* model pamięci (memory model)
* jednokrotne wywołania (call_once)
* komunikacja jednokierunkowa (future, promise)
* zadania asynchroniczne (async, packaged_task)
* problemy współbieżności
* współbieżne wzorce projektowe
* testowanie programów współbieżnych

Powyższa tematyka pokrywa CAŁĄ część o wielowątkowości w bibliotece standardowej C++17. Opowiemy sobie też o rzeczach, które wejdą w C++20. Będzie dużo prac domowych oraz projekt grupowy, który będzie rozwijany podczas kursu 🙂

## Co daje kurs?

Kurs da Ci wiedzę z zakresu wielowątkowości, to znaczy z tego jak zachowują się programy, które mogą wykorzystywać wiele procesorów i rdzeni, aby przyspieszyć obliczenia. Dowiesz się i przekonasz o wielu problemach, które na 100% przydarzą Ci się podczas normalnej pracy z takimi aplikacjami, takimi jak synchronizacja danych, czy&#8230; spowolnienie programu podczas jego wykonania na wielu rdzeniach. Samo zagadnienie przetwarzania wieloprocesorowego oraz problemów synchronizacji jest uniwersalne dla każdego języka programowania. Twory takie jak wątki, mutexy czy zmienne warunku również są uniwersalne dla wielu języków programowanie. Po kursie oczywiście dostaniesz certyfikat jego ukończenia, jeśli uda Ci się zdobyć wymaganą liczbę punktów za zadania 🙂

## Trener

<img width="300" height="199" src="https://coders.school/wp-content/uploads/2019/12/3_edycja-300x199.jpg" alt="Trener Łukasz Ziobroń" srcset="https://coders.school/wp-content/uploads/2019/12/3_edycja-300x199.jpg 300w, https://coders.school/wp-content/uploads/2019/12/3_edycja-1024x681.jpg 1024w, https://coders.school/wp-content/uploads/2019/12/3_edycja-768x511.jpg 768w, https://coders.school/wp-content/uploads/2019/12/3_edycja-750x500.jpg 750w, https://coders.school/wp-content/uploads/2019/12/3_edycja.jpg 1104w" sizes="100vw" />

Co najmniej 90% kursu poprowadzę ja (Łukasz Ziobroń) 🙂

Jest możliwe, że 10% poprowadzi nowy trener, którego przestawię w późniejszym czasie. Ja będę obecny na każdej lekcji.

## Przygotowanie

Aby uczestniczyć w tym kursie musisz mieć podstawową wiedzę o funkcjach lambda oraz zagadnieniach z C++11 (auto, using, pętla for po kolekcji, jednolita inicjalizacja, default, delete, override, semantyka przenoszenia). Wiedza o tym, czym jest RAII również się przyda.

Bardzo polecam, aby pracować na Linuxie (lub na Macu). Linuxa możesz mieć zainstalowanego na laptopie natywnie, jako maszynę wirtualną w VirtualBoxie lub poprzez WSL w WIndows10. Oczywiście pod samym Windowsem też pisze się wielowątkowy kod, ale nie ma dobrych i darmowych narzędzi do testowania wielowątkowości pod Windowsem. Być może Visual Studio coś takiego posiada, ale ja zupełnie nie jestem w temacie. A sam Visual Studio w odróżnieniu od Visual Studio Code jest płatny.

Zainstaluj sobie następujące programy:

* kompilator: g++ lub clang++
* IDE: Visual Studio Code lub vim 🙂
* valgrind
* gdb

Jako bonus podrzucam też linka do fajnej gierki online &#8211; [The Deadlock Empire][1]. Przechodząc kolejne jej poziomy będziesz uzyskiwać wiedzę z kolejnych mechanizmów wielowątkowości. Miłej zabawy 🙂

## Koszty

Cały kurs Wielowątkowość w C++ kosztuje 1099 zł. Kolejne edycje wielowątkowości będą droższe, więc jeśli się wahasz to taniej może już nie być.

## Zapisy

Zapisy na kurs przyjmuję poprzez formularz, który pojawi się po kliknięciu poniższego przycisku. Po zapisaniu się otrzymasz email ze szczegółami organizacyjnymi oraz z informacją o płatności.

{{< button "#" "Kliknij tutaj, aby otworzyć formularz zapisowy (nieaktywne)" >}}

&nbsp;

## Rezygnacja

W razie rezygnacji przed kursem zwracam 100% opłaty, więc gdyby coś Ci wyskoczyło to tylko daj znać, a zrobię zwrot. Zamierzam też dać damowy bonus wszystkim osobom zapisanym na kurs. Tego bonusu nie musisz w żaden sposób zwracać, bo będzie on w formie elektronicznej 🙂

W przypadku późniejszej rezygnacji dostaniesz zwrot proporcjonalny do liczy zajęć, które odbyły się do momentu rezygnacji, czyli za zrezygnowanie w połowie otrzymasz zwrot połowy kosztów.

## Miejsce zajęć

Miejsce zostanie ustalone dopiero po zakończeniu zapisów, ponieważ muszę znać liczbę osób, które się zapiszą. Jeśli chętnych będzie dużo, to możliwe że powstaną nawet 2 grupy.

Jeśli masz jakiekolwiek pytania to zawsze możesz napisać mi maila albo wysłać wiadomość poprzez <a style="color: #cf802a;" href="/o-nas/#kontakt/">formularz kontaktowy</a> 🙂

 [1]: https://deadlockempire.github.io