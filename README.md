<div id="top"></div>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
<!-- [![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
 -->


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="#">
    <img src="https://github.com/DafiNMaulana/ujikom-hotel-part-2/blob/main/public/sona/img/logo.png" alt="Logo" width="200" height="80">
  </a>

  <h3 align="center">Hotel Booking Simple App</h3>

  <p align="center">
    Laravel hotel booking simple booking app
<!--     <br />
    <a href="https://github.com/othneildrew/Best-README-Template"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/othneildrew/Best-README-Template">View Demo</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Report Bug</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Request Feature</a> -->
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
<!--         <li><a href="#prerequisites">Prerequisites</a></li> -->
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#sources">Sources</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

<img src="https://github.com/DafiNMaulana/Best-README-Template/blob/main/images/Screenshot%20(13).png" alt="projects screenshot">
<img src="https://github.com/DafiNMaulana/Best-README-Template/blob/main/images/Screenshot%20(14).png" alt="projects screenshot">
<img src="https://github.com/DafiNMaulana/Best-README-Template/blob/main/images/Screenshot%20(15).png" alt="projects screenshot">

``First of all I want to apologize if my English is bad because I am here speaking with the help of a google translator``

This project is my first project which is also an assignment from my school, I built this website by watching lots of video tutorials due to limited knowledge.

Apart from that, I hope this project can inspire those of you who want to make simple applications like mine.

Maybe in this application there are still many errors and shortcomings, therefore I hope that those of you who are looking at this project can revise or maybe fix this application error So that it can be even better

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [Laravel](https://laravel.com/)
* [Sona](https://themewagon.com/themes/free-bootstrap-4-html5-responsive-hotel-website-template-sona/)
* [Stisla](https://demo.getstisla.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

<!-- This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
* npm
  ```sh
  npm install npm@latest -g
  ```
 -->
### Installation

<!-- _Below is an example of how you can instruct your audience on installing and setting up your app. This template doesn't rely on any external dependencies or services._ -->

1. Install web server, in this case you can use `Xampp` or `laragon`
2. Clone the repo
    ```
    https://github.com/DafiNMaulana/ujikom-hotel-part-2.git
    ```
3. if your php version is 8.0.11 you have to edit the `composer.json` make it like this if you dont do this You probably won't be able to go to the next step, but if your php version is 7^ you can skip this step
    ```
    "require": {
            "php": "^8.0.11",
            "fideloper/proxy": "^4.2",
            "fruitcake/laravel-cors": "^1.0",
            "guzzlehttp/guzzle": "^6.3",
            "laravel/framework": "^7.0",
            "laravel/tinker": "^2.0",
            "realrashid/sweet-alert": "^5.0"
        },
    ```
 4. duplicate the `.env.example` and rename to `.env`
 5. Configure the `.env` file like this
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=hotel_antierror
    DB_USERNAME=root
    DB_PASSWORD=
    ```
 6. on terminal run the `composer update `
 7. Run the apache and mysql in `Xampp` or `laragon`
 8. In your phpmyadmin make a database named `hotel_antierror`
 9. Then run the `php artisan migrate --seed` in your terminal
 10. The last, you have to run `php artisan key:generate` in your terminal To be able to run `php artisan serve`

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

1. on terminal run `php artisan serve`
    - user page
        ```
        localhost:8000
        or
        localhost:8000/home
        ```
    - admin page
        ```
        localhost:8000/admin
        or
        localhost:8000/admin/login
        ```
        1. Admin account 
            ```
            username : admin
            password : 123123
            ```
        2. Receptionist
            ```
            username : putriAngraini
            password : 123123
            ```
<!-- ROADMAP -->
## Sources

This Readme.md is made by [Best-README-Template](https://github.com/othneildrew/Best-README-Template)
<br>

<div align="center">
    <a href="https://github.com/othneildrew/Best-README-Template">
        <img src="https://github.com/othneildrew/Best-README-Template/blob/master/images/logo.png" alt="Logo" width="80" height="80">
     </a>
 </div>

<!-- ROADMAP -->
<!-- ## Roadmap

- [x] Add Changelog
- [x] Add back to top links
- [ ] Add Additional Templates w/ Examples
- [ ] Add "components" document to easily copy & paste sections of the readme
- [ ] Multi-language Support
    - [ ] Chinese
    - [ ] Spanish

See the [open issues](https://github.com/othneildrew/Best-README-Template/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#top">back to top</a>)</p> -->



<!-- CONTRIBUTING -->
<!-- ## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p> -->



<!-- LICENSE -->
<!-- ## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p> -->



<!-- CONTACT -->
<!-- ## Contact

Your Name - [@your_twitter](https://twitter.com/your_username) - email@example.com

Project Link: [https://github.com/your_username/repo_name](https://github.com/your_username/repo_name)

<p align="right">(<a href="#top">back to top</a>)</p> -->



<!-- ACKNOWLEDGMENTS -->
<!-- ## Acknowledgments

Use this space to list resources you find helpful and would like to give credit to. I've included a few of my favorites to kick things off!

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)
* [React Icons](https://react-icons.github.io/react-icons/search)

<p align="right">(<a href="#top">back to top</a>)</p> -->



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
<!-- [contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png -->
