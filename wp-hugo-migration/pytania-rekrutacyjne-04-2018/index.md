---
title: Pytania rekrutacyjne 04.2018
author: Łukasz Ziobroń
type: page
date: 2018-03-30T23:35:23+00:00

---
Oto kwietniowa paczka pytań rekrutacyjnych z C++. W tym miesiącu na tapecie mamy Nowoczesny C++, czyli standardy C++11, C++14, C++17.

Niestety żadna uczelnia nie uczy o tych standardach, a przecież C++11 istnieje już 7 lat i jego znajomość jest wymagana przez ogromną większość pracodawców (na pewno wszystkich z Wrocławia).

&nbsp;

##### 1. Wskaż poprawne przypisania dla poniższego kodu:

<table>
  <tr>
    <td class="code">
      <pre>enum class Colors {
    RED,
    BLUE,
    GREEN
};</pre>
    </td>
  </tr>
</table>

  1. const auto & e = RED;
  2. const auto e = RED;
  3. <span style="color: #00ff00;">auto e = Colors::RED;</span>
  4. <span style="color: #00ff00;">const auto e = Colors::RED;</span>

Zakresowy typ wyliczeniowy, czyli enum class powoduje, że nazwy w nim zdefiniowane nie wyciekają poza jego zakres. Aby więc zainicjalizować zmienną odpowiednią wartością, musimy się do niej odnieść poprzez nazwę zakresu, czyli w tym przypadku Colors::

&nbsp;

##### 2. Która z metod zdefiniowanych w strukturze B nie skompiluje się?

<table>
  <tr>
    <td class="code">
      <pre>struct A {
    virtual void foo() = 0;
    void dd() {}
};

struct B : A {
    void foo() override {}
    void bar() override {}
    void dd() override {}
};</pre>
    </td>
  </tr>
</table>

  1. foo()
  2. <span style="color: #00ff00;">bar()</span>
  3. <span style="color: #00ff00;">dd()</span>
  4. wszystkie się skompilują

Tylko funkcje wirtualne mogą być oznaczone poprzez override. Funkcja dd() nie jest wirtualna w klasie bazowej, a funkcja bar() nie jest zdefiniowana w klasie bazowej.

&nbsp;

##### 3. Poniższy kod ma za zadanie policzyć liczbę elementów parzystych w wektorze v. Co należy wstawić na listę przechwytująca funkcji lamba zamiast [XXX], aby ten kod działał zgodnie z założeniami?

<table>
  <tr>
    <td class="code">
      <pre>int even_count = 0;
std::vector&lt;int &gt; v {1, 3, 4, 3, 6, 3, 7, 6};
std::for_each(v.begin(), v.end(), [XXX](int n) {
    if (n % 2 == 0)
        ++even_count;
});
cout &lt;&lt; "There are " &lt;&lt; even_count &lt;&lt; " even numbers in the vector." &lt;&lt; endl;</pre>
    </td>
  </tr>
</table>

  1. <span style="color: #00ff00;">[&even_count]</span>
  2. [even_count]
  3. <span style="color: #00ff00;">[&]</span>
  4. [=]
  5. []
  6. <span style="color: #00ff00;">[=, &even_count] </span>

Musimy przechwycić zmienną even\_count przez referencję, aby można ją było modyfikować, więc każdy rodzaj listy przechwytującej, na którym even\_count będzie przechwycone przez referencję będzie poprawny.

&nbsp;

##### 4. Jakie słowa kluczowe można wstawić w poniższym kodzie w miejsce oznaczone \___\____, aby się on kompilował?

<table>
  <tr>
    <td class="code">
      <pre>struct C {
    C() _______ ;
    C(const C& c);
    void doSth(int a);
    void doSth(double b);
    virtual void doSthElse();
};

struct D : C {
    void doSthElse();
};</pre>
    </td>
  </tr>
</table>

  1. <span style="color: #00ff00;"> = default</span>
  2. <span style="color: #00ff00;"> = delete</span>
  3.  final
  4.  override
  5. <span style="color: #00ff00;"> noexcept</span>
  6.  = 0

Konstruktor domyślny może być oznaczony jako = default. Każda funkcja może być oznaczona jako = delete, a więc także konstruktor domyślny. Każdą funkcję można również oznaczyć jako noexcept, jeśli gwarantujemy że nie wyjdzie z niej żaden wyjątek. Oznaczanie kontruktora jako final nie ma żadnego sensu i nie jest poprawne, bo konstruktory nie są dziedziczone. Override podobnie nie zadziała, bo konstruktorów nigdy nie nadpisujemy w klasach pochodnych. Konstruktor nie może być również abstrakcyjny, bo nie może być wirtualny.