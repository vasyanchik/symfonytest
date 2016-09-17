Test news project
====

How to install:

1. download this git repo: `git clone git@github.com:vasyanchik/symfonytest.git`

2. install dependencies through composer: `composer install` it will ask you for database and mailer parameters, but you could change them later in /app/config/parameters.yml

3. load test sql data in database from file /dump.sql

4. run application: `php app/console server:run`
