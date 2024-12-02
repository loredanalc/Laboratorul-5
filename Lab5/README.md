# Soluții integrate pentru autentificare în Laravel

## 1. Ce soluții integrate pentru autentificare oferă Laravel?

Laravel oferă mai multe opțiuni pentru autentificare:

- **Laravel Breeze**: O soluție simplă pentru autentificare, înregistrare și resetarea parolei, folosind Blade și Tailwind CSS.
  
- **Laravel Jetstream**: Oferă funcționalități avansate precum autentificare cu două factori și managementul echipelor.

- **Laravel Fortify**: O soluție pentru autentificare pe API, fără UI, ideală pentru aplicații cu frontend separat.

## 2. Ce metode de autentificare a utilizatorilor cunoașteți?

- **Autentificare bazată pe sesiune**: Utilizatorii se autentifică folosind un formular, iar sesiunea este salvată pe server.

- **Autentificare API (Token-based)**: Folosită pentru aplicațiile cu frontend separat (ex. mobile), utilizând un token pentru autentificare.

- **Autentificare cu două factori (2FA)**: Adaugă un cod suplimentar pentru autentificare, pentru securitate sporită.

- **Autentificare socială**: Permite utilizatorilor să se autentifice folosind conturi externe (Facebook, Google etc.) prin **Laravel Socialite**.

## 3. Care este diferența dintre autentificare și autorizare?

- **Autentificare**: Verifică dacă un utilizator este cine pretinde că este (ex. prin nume de utilizator și parolă).
  
- **Autorizare**: Determină ce acțiuni poate face un utilizator autentificat (ex. accesul la anumite pagini sau resurse).

## 4. Cum se asigură protecția împotriva atacurilor CSRF în Laravel?

Laravel protejează automat aplicațiile împotriva atacurilor CSRF:

- Folosește un **token CSRF** în formularele HTML, care trebuie să fie validat atunci când un formular este trimis.

- Pentru a adăuga tokenul în formulare, folosește directiva `@csrf` în Blade:
  ```blade
  <form method="POST" action="/route">
      @csrf
      <!-- câmpuri de formular -->
  </form>
