# git clone

    $ git clone https://gitlab-ee.gogotdi.com/docker/laravel.git

# 修改 docker-composer.yml

    container_name: <你的專案名稱>

> 更改容器名稱，取一個自己能辨認的名字即可

# .env

    $ cp .env.example .env
    修改DB_PORT = 你的docker db port
    修改DB_DATABASE = 你的資料庫
    
    資料庫可以直接到docker pull latest MySQL，記得輸入參數 MYSQL_ROOT_PASSWORD = "你的密碼"

# 建立映像檔(image)和容器(container)

    $ docker-compose up -d

# 進入容器(container)

    預設：
    $ docker exec -it php bash
    若有改容器名稱：
    $ docker exec -it 你的專案名稱 bash

# 指令

    $ php artisan key:generate
    $ php artisan migrate

##

# 開啟專案

    "你輸入的port號:8000"
    網址輸入：localhost:你輸入的port號

##

# 其他指令

-   產生 key：php artisan key:generate
-   資料庫遷移：php artisan migrate
-   npm安裝套件：npm install
-   安裝 vite：npm install vite --save-dev
-   創建 vite：touch vite.config.js
-   跑react編譯(開發)：npm run dev
-   實際產出編譯：npm run build
