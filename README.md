<a name="readme-top"></a>

<br />
<div align="center">
  <h3 align="center">PlayerScores</h3>
</div>

<!-- ABOUT THE PROJECT -->

## About The Project

The PlayerScores application returns the list of players and their respective scores, which can be sorted by date or score. There is also the possibility of inserting a new score, as well as deleting and detailing the information of a score.
Implemented in PHP using Lighthouse, a framework for GraphQL from Laravel, UI tool for Graphql - Graphiql, unit tests with PHPUnit, Docker and MySQL database.

To use GraphQL in PHP without using a framework, I suggest this link: [https://github.com/webonyx/graphql-php](https://github.com/webonyx/graphql-php)

I chose PHP/Laravel for this implementation because I'm already studying the implementation of GraphQL in C# .Net, my current stack, so I can continue the implementation of this application in future studies.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

-   [![Laravel][laravel.com]][laravel-url]
-   [![Lighthouse][lighthouse.com]][lighthouse-url]
-   [![PhpUnit][phpunit.com]][phpunit-url]
-   [![Docker][docker.com]][docker-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

Instructions on setting up the project locally:

### Installation

1. Clone the repo

    ```sh
    git clone https://github.com/Isabellelimaa/PlayerScores.git
    ```

2. Open the project in your VSCode

3. Run on your terminal - Build the app image

    ```sh
    docker-compose build app
    ```

4. To run the application

    ```sh
    docker-compose up
    ```

5. Run composer install to install the application dependencies

    ```sh
    docker-compose exec app rm -rf vendor composer.lock
    docker-compose exec app composer install
    ```

6. Run to seed the database

    ```sh
    docker exec playerscores-app php artisan db:seed -n
    ```

After that, you can visit `/graphiql` to try it.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Isabelle Lima - [Linkedin](https://www.linkedin.com/in/isabellelimaa/)

Project Link: [https://github.com/Isabellelimaa/PlayerScores](https://github.com/Isabellelimaa/PlayerScores)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->

[phpunit.com]: https://img.shields.io/badge/PHPUnit-3d9cd7?style=for-the-badge&logo=php&logoColor=white
[phpunit-url]: https://phpunit.readthedocs.io/en/10.0/
[laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[laravel-url]: https://laravel.com
[lighthouse.com]: https://img.shields.io/badge/Lighthouse-a74ff4?style=for-the-badge&logo=lighthouse&logoColor=white
[lighthouse-url]: https://lighthouse-php.com
[docker.com]: https://img.shields.io/badge/Docker-0073ec?style=for-the-badge&logo=docker&logoColor=white
[docker-url]: https://www.docker.com
