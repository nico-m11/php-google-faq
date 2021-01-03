<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Domande Frequenti - Privacy e termini</title>
    <!-- link to font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome 5.15.1 (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style type="text/css">
      * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Roboto', sans-serif;
      }
      .logo-avatar {
        display: flex;
        justify-content: space-between;
        margin: 25px;
      }
      .avatar > span {
        position: relative;
        float: left;
        margin-right: 15px;
        bottom: 20px;
        font-size: 20px;
      }
      .nav-bar, ul, li {
        display: inline-flex;
        padding-right: 15px;
        padding-left: 8px;
        color: #5f6389;
        font-weight: bold;
      }
       li:hover {
        color: #3367d6;
        border-bottom: 2.5px solid #3367d6;
      }
      .nav-bar {
        border-bottom: 1.5px solid gray;
        width: 100%;
      }
      .container {
        margin: 25px 200px;
      }
      .container > h2 {
        margin-top: 25px;
        color: #3c405a;
      }
      .container > p {
        padding: 5px;
        font-size: 17px;
        margin-top: 25px;
      }
      footer {
        background-color: #f5f5f5;
      }
      footer > span {
        margin-left: 200px;
      }
      .container-footer {
        display: flex;
        justify-content: space-between;
        margin-top: 25px;
        margin: 15px 200px;
        height: 80px;
      }
      .privacy, span {
        padding: 10px;
        font-size: 12px;
        color: #8d9ed8;
        margin-top: 15px;
      }
      .lingua {
        margin-top: 15px;
      }
    </style>
  </head>
  <body>
    <!-- logo - avatar -->
    <div class="logo-avatar">
      <div class="logo">
        <img src="img/logo.png" alt="">
      </div>
      <div class="account">
        <div class="avatar">
          <span><i class="fa fa-th" aria-hidden="true"></i></span>
          <img src="img/avatar.png" alt="">
        </div>
      </div>
    </div>
    <div class="nav-bar">
      <ul>
        <li>Introduzione</li>
        <li>Norme sulla Privacy</li>
        <li>Termini di servizio</li>
        <li>Tecnologie</li>
        <li>Domande Frequenti</li>
      </ul>
    </div>
    <main>
      <div class="container">
        <?php
        $array = [
            [
            'domanda' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
            'risposta' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
                            Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
                            Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
                            Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
                            Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
            ],
            [
              'domanda' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
              'risposta' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

                              Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.

                              Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.

                              Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
            ],
            [
              'domanda' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
              'risposta' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la  protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
            ],
            [
              'domanda' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
              'risposta' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini   di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
            ],
        ];
        foreach ($array as $keys) {
          //var_dump($keys);
          echo '<h2>' . $keys['domanda'] . '</h2>';
          echo '<p>' . $keys['risposta'] . '</p>';
        };
        ?>
      </div>
      </main>
        <footer>
          <div class="container-footer">
            <div class="privacy">
              <span>Google</span>
              <span>Tutto su Google</span>
              <span>Privacy</spna>
                <span>Termini</span>
              </div>
              <div class="lingua">
                <i class="fas fa-globe-europe"></i>
                <select name="lingua">
                  <option value="">Italiano</option>
                  <option value="">English</option>
                  <option value="">Francese</option>
                  <option value="">Spagnolo</option>
                  <option value="">Russo</option>
                </select>
              </div>
            </div>
            <span>Created By Nicola Melito <i class="fas fa-skull"></i></span>
          </footer>
  </body>
</html>
