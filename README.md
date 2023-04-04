<div align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
<h1><strong style="color: #EF3B2D;">9 + BOOTSTRAP TEMPLATE</strong></h1></div>

# Laravel Backoffice CRUD

> Archivio brani musicali

![Screenshot](./public/img/Screenshot_home.png)

## Tecnologie e Librerie

-   Html
-   Css
-   Sass
-   Bootstrap
-   Php
-   Laravel
-   MySql
-   FakerPHP

## Descrizione

Realizzazione di un progetto Laravel 9 per gestire un archivio di brani musicali lato Back Office, utilizzando tutte le operazioni **CRUD**.
Il tema dell'applicazione è realizzato in _dark mode_.

Ogni brano dovrà avere:

-   title
-   album
-   author
-   editor
-   length
-   poster

## Milestone 1

Tramite gli appositi comandi `artisan` creare un _model_ con relativa _migration_ e un _resource_ controller.

## Milestone 2

Iniziate a definire le prime operazioni CRUD con le relative view:
`index()`, che mostra la lista degli elementi del DB (con relativa paginazione).

![Screenshot](./public/img/Screenshot_final_list.png)

`show()`, che mostra il dettaglio del singolo elemento.

![Screenshot](./public/img/Screenshot_detail_2.png)

## Milestone 3

Aggiunta delle rotte `create` e `store` con annesso form per l'aggiunta ed il salvataggio di nuovi brani.

![Screenshot](./public/img/Screenshot_form_2.png)

## Milestone 4

Aggiunta delle rotte `update`, `edit` e `destroy` con annesso form per la modifica ed il salvataggio dei nuovi dati, completando così il ciclo completo delle operazioni CRUD.

Form visualizzato dall' `edit`

![Screenshot](./public/img/Screenshot_edit.png)

## Bonus 1

Creazione del `Seeder` per la tabella songs utilizzando Faker.

## Bonus 2

Validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.

![Screenshot](./public/img/Screenshot_bonus_error.png)

![Screenshot](./public/img/Screenshot_validation_edit.png)

## Bonus 3

Chiedere conferma di eliminazione record via Modal di BS5.

_DA COMPLETARE_...
