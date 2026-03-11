# Wytyczne i Dobre Praktyki – Kod Projektu Czatu

Cześć! Przejrzałem Twój kod i muszę przyznać, że robisz świetne postępy w nauce programowania. Masz bardzo dobre wyczucie struktury i widać, że rozumiesz, jak poszczególne elementy (HTML, CSS, JS, PHP) ze sobą współpracują. 

Poniżej przygotowałem dla Ciebie krótkie podsumowanie tego, co już robisz świetnie, oraz kilka wskazówek, które pomogą Ci wejść na jeszcze wyższy poziom profesjonalizmu.

### 🌟 Co robisz bardzo dobrze (Złote Gwiazdki)

2.  **Organizacja plików**: Podział na logiczne części (osobny plik konfiguracyjny, osobne pliki dla logiki rejestracji, logowania i czatu) sprawia, że projekt jest czytelny i łatwiejszy w utrzymaniu.
3.  **Nowoczesny CSS**: Wykorzystanie Flexboxa (`display: flex`) w pliku `styless.css` to standard w nowoczesnym web developmencie. Dzięki temu Twój układ jest elastyczny.


#### Zmiany które wdrożyłem podczas przygotowywania do obsługi z SQLITE
1.  **Użycie PDO w PHP**: To świetna decyzja! Używanie `prepare` i `execute` z parametrami (`?`) skutecznie chroni Twój kod przed atakami typu SQL Injection. To jedna z najważniejszych zasad bezpieczeństwa.
4.  **Obsługa błędów w PHP**: Dodanie `ini_set('display_errors', 1)` w fazie deweloperskiej (w `config.php`) bardzo ułatwia szukanie błędów.

### 🚀 Co można poprawić (Kroki do Mistrzostwa)

1.  **Bezpieczeństwo haseł (Priorytet!)**:
    -   *Obecnie*: Przechowujesz hasła w bazie danych jako zwykły tekst.
    -   *Wyzwanie*: Użyj funkcji `password_hash()` przy rejestracji i `password_verify()` przy logowaniu. Dzięki temu, nawet jeśli baza danych wycieknie, hasła użytkowników pozostaną bezpieczne.
2.  **Walidacja danych**:
    -   Warto dodać sprawdzenie, czy hasło nie jest za krótkie lub czy nazwa użytkownika nie zawiera dziwnych znaków. Nigdy nie ufaj danym, które przychodzą od użytkownika!
3.  **Nowoczesny JavaScript (Fetch API)**:
    -   Używasz `XMLHttpRequest`, co jest poprawne, ale dzisiaj standardem jest `fetch()`. Jest on prostszy w zapisie i oparty na tzw. "Promises", co sprawia, że kod jest czystszy.
4.  **Zabezpieczenie przed XSS**:
    -   Przy wyświetlaniu wiadomości na czacie (np. w `get-chat.php`), używaj funkcji `htmlspecialchars()`. Zapobiegnie to sytuacji, w której ktoś wyśle złośliwy skrypt JavaScript jako treść wiadomości.

### 🛠️ Polecane Narzędzia (Twój nowy warsztat)

Aby pracować szybciej i pisać jeszcze ładniejszy kod, warto zainteresować się tymi narzędziami:

-   **php-cs-fixer**: Rozszerzenie do edytora (np. VS Code lub PhpStorm), które samo dba o równe wcięcia i średniki. Ty piszesz, on formatuje.
-   **PHP CodeSniffer** lub **phpStan**: Narzędzie, które podpowie Ci, czy Twój kod PHP trzyma się światowych standardów (np. PSR-12).
-   **Postman / Insomnia**: Świetne aplikacje do testowania Twoich skryptów PHP (backendu) bez konieczności ciągłego odświeżania strony w przeglądarce.
-   **Git**: Jeśli jeszcze nie używasz, zacznij tworzyć "migawki" swojego kodu. To Twoja siatka bezpieczeństwa, gdybyś coś przypadkiem zepsuł.

### 💡 Podsumowanie

Twój kod jest solidnym fundamentem. Skup się teraz na **bezpieczeństwie** (hashowanie haseł i XSS) – to najważniejszy krok dla każdego młodego programisty. 

Trzymam kciuki za dalszy rozwój! Masz do tego dryg. 🚀
