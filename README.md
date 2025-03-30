# Videogames Backoffice Application

Questa è un'applicazione **back office** realizzata con **Laravel** che permette, tramite autorizzazione, di inserire nuovi videogames con informazioni come descrizione, data di rilascio, genere e piattaforma. Il sistema include anche un'**API** che fornisce i dati sui videogames all'applicazione **frontend** (disponibile [qui](https://github.com/Gabriele-Viola/videogames-frontEnd)).

## Tecnologie utilizzate

- **Laravel**: Framework PHP utilizzato per la creazione del backend, gestione dell'autenticazione, CRUD e API.
- **Bootstrap**: Utilizzato per progettare un'interfaccia utente responsive e facilmente utilizzabile per la gestione dei videogames.
- **API**: L'applicazione espone un'API che consente al frontend di recuperare i dati dei videogames in modo dinamico.

## Funzionalità principali

- **Autenticazione**: L'accesso al back office è protetto tramite un sistema di login, che garantisce che solo gli utenti autorizzati possano aggiungere o modificare i videogames.
- **Gestione CRUD**: Gli utenti autenticati possono creare, leggere, aggiornare e cancellare videogames, inserendo informazioni come descrizione, data di rilascio, genere e piattaforma.
- **API per il frontend**: L'applicazione espone degli endpoint API che permettono al frontend di recuperare i videogames e visualizzarli agli utenti. I dati gestiti nel backoffice vengono utilizzati nel frontend tramite questi endpoint.



