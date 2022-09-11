const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Impara!
 |--------------------------------------------------------------------------
 |controllare il video in guide sull'attivazione delle estensioni da abilitare nel php per evitare di incorrere in problematiche varie.
 |crea progetto laravel 7
      composer create-project --prefer-dist laravel/laravel:^7.0 .
 |installa l'essenziale
      npm install | npm bootstrap | npm run watch
      composer install | php artisan serve
 |importa il database e dopodichè assicurati di gestire le credenziali nel file .env
 |qualora dovessi utilizzare i link all'interno di css è buona norma implementare il .options sul webpack.mix.js
      .options({ processCssUrls: false});
 |crea un model (app->http->providers) ed un controller (app->http->controllers)
       php artisan make:controller NomeController  
       php artisan make:Model NomeModelController
 |  il controller è un file php che verrà chiamato dalle rotte e ha il compito di rispondere ad una rotta, recuperare e manipolare i dati, restituire una risposta all'utente sotto forma di view o altro
 |  connettiamo la rotta al controller e recuperiamo il metodo
       Route::get('/', "NomeDelController@MetodoController");
 | l'orm è un modo per connettersi al database, eloquent è l'orm di laravel 
 | anche il model deve essere in pascal case e singolare
 | una volta creato il Model con il controller possiamo agire sui dati direttamente!
       $movies = Movie::all();
 |
 |front end crea una cartella partials con footer e header un main layout 
 |
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({ processCssUrls: false});
