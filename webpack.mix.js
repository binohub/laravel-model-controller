const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Impara!
 |--------------------------------------------------------------------------
 |  crea il tuo project
        composer create-project --prefer-dist laravel/laravel:^7.0 .
 |  installiamo il necessario
        npm install, npm run watch
        composer install, php artisan serve
 |  importa il database, dopodichè assicurati di configurare il file.env
 |  qualora dovessi utilizzare i link all'interno di css è buona norma inserire nel webpack.mix .options
        .options({ processCssUrls: false});
 |  procediamo con la creazione del model e del controller (app->http->controllers)
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
 |
 |
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({ processCssUrls: false});
