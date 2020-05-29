---
title: "Kurs C++ online - podsumowanie maja"
subtitle: ""
date: 2020-05-29T12:02:55+02:00
lastmod: 2020-05-29T12:02:55+02:00
draft: false
author: ""
authorLink: ""
description: ""
summary: ""
url: "/post/kurs-cpp-online-podsumowanie-maja"

tags: ["c++", "kurs", "online", "programowanie"]
categories: ["Post", "Kurs C++ online", "Raport"]
keywords: ["kurs online podsumowanie maja"]
hiddenFromHomePage: false
hiddenFromSearch: false

featuredImage: "featured.png"
featuredImagePreview: "/post/kurs-cpp-online-podsumowanie-maja/featured.png"

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

Mija maj i zarazem pierwszy etap naszego kursu C++ online. Postanowiłem napisać małe podsumowanie, jak wyglądał on z mojej perspektywy.

<!--more-->

## Platforma kursu

Platforma, na której uczestniczy mają dostęp do wszystkich lekcji posiadała w momencie rozpoczęcia minimalną wymaganą funkcjonalność (osoby znające temat agile nazwą to MVP - Minimum Viable Product).

* lekcje
* quizy
* śledzenie postępów
* grywalizacja
  * punkty
  * osiągnięcia (jeszcze nie skonfigurowane)
  * poziomy
  * nagrody (tylko wstępnie skonfigurowane)
  * ranking
* integracja z GitHubem
  * Pull Requesty
  * Code Review
  * Issues

W międzyczasie starałem się dodawać nowe funkcjonalności i ulepszać platformę. Szybko okazało się, że nie mam aż tyle czasu. Co 100 par oczu to nie jedna. Uczestnicy kursu bardzo skrupulatnie wyłapują wszystkie błędy i jak na model open-source przystało zgłaszają je jako Issue na GitHubie. Samo zarządzanie Issues oddelegowałem i zajmuje się nim Paweł, jeden z kursantów. To on przypisuje zgłoszeniom odpowiednie priorytety i kategorie. Jeśli coś wymaga mojej uwagi lub działania to dowiem się o tym od niego :) Jeśli nie wymaga, to błąd mogą naprawić sami uczestnicy kursu zgłaszając odpowiedni Pull Request. Jestem bardzo dumny z ich postawy oraz wdzięczny za okazaną pomoc. Sam nie byłbym w stanie dobrze tego ogarniać.

Przy aż tylu zaangażowanych osobach udaje nam się także wykrywać błędy w samych silnikach platformy, które oczywiście zgłaszamy do ich twórców :)

### Dalsze prace nad platformą

* konfiguracja osiągnięć (czerwiec)
* konfiguracja nagród (czerwiec)
* zautomatyzowane przyznawanie punktów za prace domowe po Code Review jednego z trenerów (czerwiec)
* zautomatyzowane przyznawanie punktów za prace domowe po określonej liczbie zatwierdzeniach przez innych uczestników (lipiec)

## Zmiana harmonogramu kursu

Staram się reagować szybko na potrzeby uczestników. Wspólnie podejmowaliśmy decyzje, że dla nich nauka będzie bardziej owocna, jeśli pozamieniamy miejscami tematykę naszych spotkań. Wstępnie zaproponowany przeze mnie układ lekcji w maju był taki:

| Data       | Tematyka                                                                                             |
| ---------- | ---------------------------------------------------------------------------------------------------- |
| 11.05 (pn) | Intro: organizacja kursu, zaproszenie na platformę, formalności, Visual Studio Code, repl.it, GitHub |
| 14.05 (cz) | Podstawy #1: typy wbudowane i `auto`, funkcje, instrukcje warunkowe, pętle, tablice                  |
| 18.05 (pn) | Podstawy #2: `std::string`, `std::vector<T>`, `std::map<K, V>`, range based `for` loop               |
| 21.05 (cz) | Podstawy #3: zasięg zmiennych, referencja i wskaźnik, `enum` i `enum class`                          |
| 25.05 (pn) | Narzędzia #1: linux - linia komend, vim                                                              |
| 28.05 (cz) | Narzędzia #2: git, GitHub                                                                            |

Ostatecznie wyglądało to tak:

| Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | Tematyka                                         |
| ---------- | ------------------------------------------------------------------------------------------------------ |
| 11.05 (pn) | Intro: organizacja kursu, zaproszenie na platformę, formalności, Visual Studio Code, repl.it, GitHub   |
| 14.05 (cz) | Podstawy #1: typy wbudowane i `auto`, funkcje, instrukcje warunkowe, pętle, tablice                    |
| 18.05 (pn) | Narzędzia #1: linux - linia komend, git                                                                |
| 21.05 (pn) | Podstawy #2: `std::string`, `std::vector<T>`, `std::list<T>`, `std::map<K, V>`, range based `for` loop |
| 25.05 (cz) | Narzędzia #2: git - konflikty, GitHub, vim, kompilacja                                                 |
| 28.05 (cz) | Podstawy #3: zasięg zmiennych, referencja i wskaźnik, `enum` i `enum class`                            |

Uczestnikom wygodniej było jednocześnie poznawać narzędzia - głównie oswajać się z linuxem i gitem mogąc od razu praktykować pisanie w C++. Kolejność kolejnych lekcji też będzie zmieniona :)

## Discord

Serwer Coders School na Discordzie jest bardzo aktywnie użytkowany. Uczestnicy stanowią świetną społeczność, która pomaga sobie nawzajem w większym stopniu niż przypuszczałem. Wspólna nauka w grupie i wspólne rozwiązywanie problemów jest bardzo motywujące. To tak samo jak chodzenie na siłownię. Samemu jest mniejsza motywacja niż chodząc z kimś razem. Dzięki uczestnikom powstało kilka nowych kanałów do rozmów, w tym kanały "integracyjne" :) Dzięki możliwości stosowania języka Markdown Discord świetnie się sprawdza przy wklejaniu kodu. Zawsze jest on fajnie sformatowany i pokolorowany.

## YouTube

Na kanał [Coders School na YT](http://youtube.com/c/CodersSchool) 2 razy w tygodniu trafia nowe nagranie naszych zajęć online. Nie są one publicznie dostępne, aby kursanci mogli czuć się bardzo swobodnie i mogli zadawać na czacie pytania o wszystko. Podoba mi się panujący tam klimat. Podczas lekcji jest bardzo dużo pytań, które świetnie uzupełniają to, co jako trenerzy przygotowaliśmy. Nie zamierzamy zmieniać tej platformy, choćby po to, aby umożliwić komunikację głosową z uczestnikami. Przy tylu osobach ciężko by było nad wszystkimi zapanować :) Od razu mamy też dostępne nagranie tej lekcji bez dodatkowej pracy.

## Prace domowe i przegląd kodu

W chwili w której to piszę uczestnicy zgłosili w sumie 271 Pull Requestów na GitHubie z dostarczeniem prac domowych. Szał. A jeszcze bardziej zaskoczyli mnie tym, jak wiele osób robi sobie nawzajem przegląd kodu i sugeruje ulepszenia swoich rozwiązań. Aż tak pozytywnej synergii się nie spodziewałem. Jest znacznie większy przepływ wiedzy pomiędzy uczestnikami niż zakładałem 🙂

## Słowo na koniec

Bardzo chciałbym nagrać jeszcze publiczne wideo z moim osobistym podziękowaniem dla wszystkich osób, które mi kibicowały i wspierały mnie osobiście lub moją szkołę Coders School. Mam nadzieję, że wkrótce uda mi się coś nagrać. Na razie moim największym ograniczeniem jest czas. Poza prowadzeniem zajęć, ciągłym szlifowaniem materiałów i ulepszeniami platformy do kursu mam też prywatne życie i nie mogę niestety się sklonować ;) Wszystko zajmuje jednak więcej czasu niż się planowało, czyli standardowo 🙂

Jeśli chcesz mi pomóc w mojej pracy - odezwij się do mnie na Discordzie lub na lukasz@coders.school 🙂

{{< author "/images/lukasz.jpeg" "Łukasz Ziobroń" "https://linkedin.com/in/lukaszziobron/" >}}
