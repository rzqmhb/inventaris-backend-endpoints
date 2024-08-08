<a id="readme-top"></a>
<div align="center">
    <h3 align="center">Inventaris Backend Endpoint</h3>
    <p align="center">
        Aplikasi yang menyediakan endpoint API backend untuk sistem pencatatan inventaris.
    </p>
</div>


<br>
<details>
    <summary>Table of Contents</summary>
    <ol>
        <li>
            <a href="#about-the-project" style="color: black;">About The Project</a>
            <ul>
                <li><a href="#built-with" style="color: black;">Built With</a></li>
            </ul>
        </li>
        <li><a href="#installation" style="color: black;">Installation</a></li>
        <li><a href="#how-to-use" style="color: black;">How to Use</a></li>
    </ol>
</details>


## About The Project

Project ini merupakan tahapan Technical Test dari proses seleksi Magang Backend Developer di Inagata Technosmith.

### Built With

* ![Laravel]
* ![MySQL]

<p align="right">(<a href="#readme-top" style="color: black;">back to top</a>)</p>


## Installation

1. Jalankan command ini pada terminal yang dapat mejalankan perintah git di direktori yang Anda inginkan untuk melakukan clone repository.<br>
   ```git clone https://github.com/rzqmhb/inventaris-backend-endpoints.git```
   <br>

2. Kemudian jalankan command ini.<br>
   ```cd PoolingRequestSystem```
   <br>

3. Instal dependency yang diperlukan oleh sistem menggunakan.<br>
   ```composer install```
   <br>

4. Buat sebuah copy dari file .env.example dengan command.<br>
   ```cp .env.example .env```
   <br>

5. Isilah file .env dengan informasi yang sesuai dengan database yang Anda miliki.
6. Buat aplication key menggunakan command.<br>
   ```php artisan key:generate```
   <br>

7. Jalankan aplikasi menggunakan command.<br>
   ```php artisan serve```
   <br>


## How To Use

### Penjelasan Endpoint

#### Auth Endpoint

1. /api/login<br>
   
   * Method: POST
   * Body: 
    {
&nbsp;&nbsp;    "email": {{email user}},
&nbsp;&nbsp;    "password": {{password user}}
    }
   <br>

2. /api/logout<br>
   
   * Method: POST
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
    <br>

#### User Endpoint

1. /api/user/profile<br>
   
   * Method: GET
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
   <br>

2. /api/user/update<br>
   * Method: POST
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
   * Body: (isi minimal satu field)
    {
&nbsp;&nbsp;    "name": {{nama user}},
&nbsp;&nbsp;    "email": {{email user}},
&nbsp;&nbsp;    "password": {{password user}}
    }
   <br>

#### Inventaris Endpoint

1. /api/inventaris/all <br>
    
   * Method: GET
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
<br>

2. /api/inventaris/get/{id} <br>
    
   * Method: GET
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
   * URL Parameter: ID item
<br>

3. /api/inventaris/add <br>
    
   * Method: POST
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
   * Body: (isi minimal satu field)
    {
&nbsp;&nbsp;    "name": {{nama user}},
&nbsp;&nbsp;    "email": {{email user}},
&nbsp;&nbsp;    "password": {{password user}}
    }
<br>

4. /api/inventaris/update/{id} <br>
    
   * Method: POST
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
   * URL Parameter: ID item
   * Body: (isi minimal satu field)
    {
&nbsp;&nbsp;    "name": {{nama item}},
&nbsp;&nbsp;    "type": {{tipe inventaris}},
&nbsp;&nbsp;    "quantity": {{kuantitas item}}
    }
<br>

5. /api/inventaris/delete/{id} <br>
    
   * Method: POST
   * Header:
&nbsp;&nbsp;    - Key: Authorization
&nbsp;&nbsp;    - Value: Bearer {{token autentikasi}}
   * URL Parameter: ID item
<br>


### Email dan Password Akun

1. Email: user1@domain.com
   Password: user1oweo
   <br>
2. Email: user2@domain.com
   Password: user2oweo
   <br>
3. Email: user3@domain.com
   Password: user3oweo
   <br>

<p align="right">(<a href="#readme-top" style="color: black;">back to top</a>)</p>


[Laravel]: https://badgen.net/badge/Laravel/v11.19.0?icon=https://cdn.worldvectorlogo.com/logos/laravel-2.svg
[MySQL]: https://badgen.net/badge/MySQL/v8.2.4?icon=https://cdn.worldvectorlogo.com/logos/mysql-3.svg
