# About Laravel+Vuejs+Docker+Docker compose

This project `laravel+Vuejs` is based on `docker and docker-compose`

# <span style="color:#007bff"> Table of content </span>

-   [Prerequisites](#Prerequisites)
-   [Technologies](#Technologies)
-   [Setup Environment](#Setup-Environment)
-   [License](#License)
-   [Contribute]

## Prerequisites

---

Make sure you have insalled the following prerequisites in your development or production machine.

-   `Docker` - [Download & install Docker](https://docs.docker.com/get-docker/) make sure that the latest docker version has been installed on your machine.

### Technologies

---

List of technologies which are used in this project.

-   PHP : Version 7.3
-   Laravel: Version 8.x
-   MySQL: Version 8
-   Node: Version 14.15.0

### Setup Environment for Development:

-   Copy `.env.example` to `.env`.
-   Build `docker-compose build`.
-   Run `docker-compose up -d` for development purpose.
-   Open favourite browser and type `http://localhost`. If you wan to run on different port, you can change the `HTTP_PORT` from `.env` file.
-   Generate key `docker exec bakend-end php artisan key:generate`
-   If you want to install a npm package then run `docker exec front-end npm install <Package_Name>`.
-   If you want to install compose package then run `docker exec back-end compose install <PACKAGE_NAME>`.

### Setup Environment for Production:

-   Copy `.env.example` to `.env`.
-   Change the necessary staff in `.env` file.
-   Run `docker-compose -f docker-compose.production.yml up` for production.
-   Open favourite browser and type `http://localhost`. If you wan to run on different port, you can change the `HTTP_PORT` from `.env` file.
-   If you want to install a npm package then run `docker exec front-end npm install <Package_Name>`.
-   If you want to install compose package then run `docker exec back-end compose install <PACKAGE_NAME>`.

## Contribute

Contribution are alwasy welcome! Please read the [contribution guidelines](contributing.md) first.

-   Fork this project to your personal account.
-   Create your feature branch `git checkout -b feature/foo`.
-   Commit your changes `git commit -am 'Add some foo`.
-   Push to the branch `git push origin feature/foo`.
-   Create a new Pull Request.

## License

The theme is available as open source under the terms of the [MIT License](LICENSE.txt).
