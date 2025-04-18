Symfony with Doctrine and PostgreSQL
========================

This POC is just a Symfony minimalist app with Doctrine and PostgreSQL.
It uses a Docker container for PostgreSQL Database.

Requirements
------------

* PHP 8.2.0 or higher;
* PDO-SQLite PHP extension enabled;
* and the [usual Symfony application requirements][1].
* [Download Symfony CLI][2]
* [Docker Desktop][3]

Installation
------------

Clone this repository:

```console
https://github.com/ProofOfConceptFactory/poc-symfony-doctrine-postgresql
```

Go on the project root folder:

```console
cd poc-symfony-doctrine-postgresql/
```

Install PHP dependencies:

```console
composer install
```

Run docker container for PostgreSQL:

```console
docker-compose up -d
```

Create database:

```console
symfony console doctrine:database:create
```

Run database migrations:

```console
symfony console doctrine:migrations:migrate --no-interaction
```

Insert data with symfony command:

```console
symfony console doctrine:query:sql "INSERT INTO dummy (id, name) VALUES (1, 'Foo'), (2, 'Bar'), (3, 'Baz');"
```

Select data with symfony command:

```console
symfony console doctrine:query:sql "SELECT * FROM dummy;"
```

Usage
-----

Start the web server:

```bash
symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).


Tests
-----

Create database in test env:

```console
symfony console doctrine:database:create --env=test
```

Run database migrations in test env:

```console
symfony console doctrine:migrations:migrate --no-interaction --env=test
```

Insert data with symfony command in test env:

```console
symfony console doctrine:query:sql "INSERT INTO dummy (id, name) VALUES (1, 'Foo'), (2, 'Bar'), (3, 'Baz');" --env=test
```

Select data with symfony command in test env:

```console
symfony console doctrine:query:sql "SELECT * FROM dummy;" --env=test
```

Execute this command to run tests:

```console
symfony run bin/phpunit
```

[1]: https://symfony.com/doc/current/setup.html#technical-requirements
[2]: https://symfony.com/download
[3]: https://www.docker.com/products/docker-desktop/
