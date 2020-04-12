---
title: Pytania rekrutacyjne 05.2018
author: Łukasz Ziobroń
type: page
date: 2018-05-20T22:36:46+00:00

---
Pytania rekrutacyjne C++ &#8211; paczka majowa. W tym miesiącu na tapecie mamy STL, czyli bibliotekę standardową języka C++.

##### 

##### 1. Zaznacz prawdziwe stwierdzenia:

  1. Agregowanie kontenerów STL może spowodować problemy z wyrównaniem pamięci
  2. <span style="color: #000000;">Dziedziczenie po kontenerach STL jest niebezpiecznie, ponieważ ich destruktory nie są wirtualne.</span>
  3. <span style="color: #000000;">Właściwym sposobem rozszerzania interfejsów kontenerów STL jest ich agregacja i przepisanie ich interfejsu.</span>
  4. Kontenery STL powinny być rozszerzane poprzez dziedziczenie po nich

&nbsp;

##### 2. Zaznacz prawdziwe stwierdzenia:

  1. <span style="color: #000000;">W std::deque elementy mogą być dodawane zarówno na koniec, jak i na początek kontenera używając push_front i push_back</span>
  2. <span style="color: #000000;">std::set wspiera dostęp do dowolnego elementu (random access)</span>
  3. <span style="color: #000000;">std::vector wspiera dostęp do dowolnego elementu (random access)</span>
  4. <span style="color: #000000;">std::deque wspiera dostęp do dowolnego elementu (random access)</span>
  5. <span style="color: #000000;">std::multimap pozwala przechowywać wiele wartości dla każdego klucza</span>
  6. W std::set elementy mogą się powtarzać
  7. W std::map klucze muszą być unikatowe

&nbsp;

##### 3. Jaka będzie zawartość wektorów v1 i v2?

<table>
  <tr>
    <td class="code">
      <pre>std::vector&lt;int&gt; v1(10, 1);
std::vector&lt;int&gt; v2{10, 1};</pre>
    </td>
  </tr>
</table>

  1. v1 = {10}, v2 = {10, 1}
  2. v1 = {10, 1}, v2 = {10, 1}
  3. v1 = {10, 10, 10, 10, 10, 10, 10, 10, 10, 10}, v2 = {1, 1, 1, 1, 1, 1, 1, 1, 1, 1}
  4. v1 = {10, 1}, v2 = {10, 10, 10, 10, 10, 10, 10, 10, 10, 10}
  5. v1 = {1, 1, 1, 1, 1, 1, 1, 1, 1, 1}, v2 = {10, 1}
  6. Program się nie kompiluje.

&nbsp;

##### 4. Jaka będzie zawartość wektora v po wykonaniu poniższego kodu?

<table>
  <tr>
    <td class="code">
      <pre>std::vector&lt;<strong>int</strong>&gt; v {2, 3, 4};
for(auto e : v)
    e *= e + v.front();</pre>
    </td>
  </tr>
</table>

  1. <span style="color: #000000;">{8, 33, 48}</span>
  2. <span style="color: #000000;">{8, 15, 24}</span>
  3. <span style="color: #000000;">{6, 11, 18}</span>
  4. <span style="color: #000000;">{8, 17, 24}</span>
  5. <span style="color: #000000;">{2, 3, 4}</span>

&nbsp;

Prawidłowe odpowiedzi do pytań rekrutacyjnych są przesyłane cyklicznie wszystkim osobom, które zasubskrybowały listę mailingową Pytania rekrutacyjne. Chcesz poznać prawidłowe odpowiedzi? [Zapisz się tutaj][1].

 [1]: https://coders.school/sprawdz-sie/