---
title: Wyzwanie STL
author: Łukasz Ziobroń
type: page
date: 2020-03-18T19:25:03+00:00

---
## Wyzwanie czystego kodu

        Za Tobą już quiz z C++, a to Twoje zadanie. Napisz aplikację, która szyfruje i deszyfruje tekst używając szyfru podstawieniowego.&nbsp;Szyfr podstawieniowy to po prostu podmiana liter tekstu na inne litery. Najprostszym przykładem jest <a style="font-size: 1rem;" href="https://pl.wikipedia.org/wiki/Szyfr_Cezara">szyfr Cezara</a>, w którym każdy znak jest przesunięty o 3 pozycje.&nbsp;
    

Przykład szyfru Cezara:

<p style="padding-left: 40px;">
  ALA MA KOTA -> DOD PD LRWD (dla alfabetu łacińskiego, nie polskiego)
</p>

Twoim zadaniem jednak nie jest implementacja szyfru Cezara, ale po prostu szyfru podstawieniowego. W tym celu najpierw musisz zapisać gdzieś informacje, który znak przez jaki będzie zastąpiony. Ta informacja będzie kluczem, służącym do szyfrowania i/lub deszyfrowania. Np:

<li style="list-style-type: none;">
  <ul>
    <li style="list-style-type: none;">
      <ul>
        <li>
          ‚a’ -> ‚g’,
        </li>
        <li>
          ‚b’ -> ‚c’,
        </li>
        <li>
          ‚c’ -> ‚z’,
        </li>
        <li>
          ‚d’ -> ‚r’,
        </li>
        <li>
          itd.
        </li>
      </ul>
    </li>
  </ul>
</li>

Po zaszyfrowaniu takim kluczem ciągu ‚abcd’ otrzymamy ‚gczr’. Aby odszyfrować szyfrogram ‚gczr’ musimy zastosować operację odwrotną, czyli sprawdzić jaki znak został podmieniony na każdy kolejny z szyfrogramu.&nbsp;

<li style="list-style-type: none;">
  &nbsp;
</li>

            <h3>Wymagania obowiązkowe</h3>      
        <ul><li style="list-style-type: none;"><ul><li>losowe generowanie klucza (innego przy każdym uruchomieniu)</li><li>szyfrowanie ciągu wejściowego (obojętnie czy jest to argument programu argv, cin, plik, czy string) i wypisanie rezultatu na ekranie (cout)</li><li>deszyfrowanie zaszyfrowanego wyżej ciągu i wypisanie rezultatu na ekranie (cout)</li></ul></li></ul>     
            <h3>Wymagania dodatkowe, czyli kryteria oceny</h3>      
        <ul><li style="list-style-type: none;"><ol><li>obsługa wszystkich znaków drukowanych (cyfry, przecinki, kropki, wykrzykniki, małe i duże litery, spacje)</li><li>użycie jak najmniejszej liczby pętli (idealnie bez jakichkolwiek pętli for, do, while, for_each)</li><li>używanie <a href="https://en.cppreference.com/w/cpp/algorithm">algorytmów STL</a></li><li>elegancki i czysty kod (jednolite formatowanie, konwencje nazewnicze)</li><li>krótki kod</li></ol></li></ul>        
            <h3>Szkielet kodu</h3>      
        <ul><li style="list-style-type: none;"><ol><li>Zacznij uzupełniając poniższy program.</li><li>Cały program może składać się tylko z jednego pliku .cpp, ale jeśli potrzebujesz ich więcej, to śmiało.</li></ol></li></ul><pre>#include &lt;string&gt; <br />#include &lt;iostream&gt; <br />#include &lt;cassert&gt;<br /><br />// TODO: Your implementation goes here<br /><br />int main() {<br />    // Feel free change below code if needed.<br /><br />    std::string message = "Hello, Coders School!";<br />    auto key = generateKey();<br />    auto cypher = encrypt(message, key);<br />    auto result = decrypt(cypher, key);<br /><br />    std::cout &lt;&lt; "Message: " &lt;&lt; message &lt;&lt; 'n';<br />    std::cout &lt;&lt; "Cypher: " &lt;&lt; cypher &lt;&lt; 'n';<br />    std::cout &lt;&lt; "Result: " &lt;&lt; result &lt;&lt; 'n';<br /><br />    assert(message == result);<br />    return 0;<br />}</pre>      
            <h3>Przysyłanie rozwiązań</h3>      
        <ul><li style="list-style-type: none;">Aby przesłać mi rozwiązanie musisz mieć pewność, że spełnia ono wszystkie wymagania obowiązkowe. Im więcej wymagań dodatkowych zostanie spełnione, tym lepsza będzie ocena Twojego rozwiązania. Rozwiązanie prześlij na adres email <a href="mailto:lukasz@coders.school">lukasz@coders.school</a>. Tytuł maila: Wyzwanie czystego kodu. Treść:<ul><li>link do repozytorium na GitHubie lub</li><li>link do Gista lub</li><li>plik źródłowy w załączniku</li></ul></li></ul><p>Nie wysyłaj skompilowanego programu!
    

Wyniki wyzwania opublikuję na WWW i Facebooku Coders School 2 kwietnia. Ze zwycięzcami skontaktuję się mailowo. Zwycięskie rozwiązania zostaną opublikowane, aby wszystkie osoby biorące udział w wyzwaniu mogły porównać swój kod ze zwycięskim.

            <h3>Powodzenia!</h3>