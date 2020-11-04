# Laravel 8 用戶代理分析器

引入 jenssegers 的 agent 套件來擴增分析用戶代理來判斷來源裝置，在考慮透過用戶代理字串，去偵測使用裝置時，先從認清為什麼要這麼做開始：你正針對某瀏覽器的特定錯誤奮戰著？你正試圖檢查某個特定功能是否存在？你希望給不同的瀏覽器不同的 HTML？

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/device/info` 來進行用戶代理分析。

----

## 畫面截圖
![](https://i.imgur.com/HbVBTJw.png)
> 辨別瀏覽器、行動裝置或是機器人等資訊