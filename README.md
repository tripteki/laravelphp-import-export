<h1 align="center">Import Export</h1>

This package provides wrapper of Import Export for Lumen and Laravel.

Getting Started
---

Installation :

```
$ composer require tripteki/laravelphp-import-export
```

How to use it :

- Read the instruction [here](https://docs.laravel-excel.com) and [here](https://github.com/barryvdh/laravel-dompdf).

- Put `Tripteki\ImportExport\Providers\ImportExportServiceProvider` to service provider configuration list.

- Put `Tripteki\ImportExport\Providers\ImportExportServiceProvider::ignoreConfig()` into `register` provider, then publish config file into your project's directory with running (optionally) :

```
php artisan vendor:publish --tag=tripteki-laravelphp-import-export
```

Author
---

- Spatie ([@spatie](https://spatie.be))
- Trip Teknologi ([@tripteki](https://linkedin.com/company/tripteki))
- Hasby Maulana ([@hsbmaulana](https://linkedin.com/in/hsbmaulana))
