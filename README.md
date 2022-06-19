<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Used: `php 7.4, Apache2, mysql5`

1. Как развернуть:

Используйте `git clone https://github.com/Imunely/yii2-app-advanced.git` чтобы клонировать проект

2. Настройка веб-сервера:

Document_root смотрит на `your_folder/yii2-app-advanced/api/web`

В папке `\api\modules` находятся версии api в нумерации `v1, v2, ..., vn`

- Чтобы получить доступ к api используйте url `http://api.local/api/v1/userls`
- Чтобы получить доступ к документации api, используйте url `http://api.local/doc`
- <img width="645" alt="image" src="https://user-images.githubusercontent.com/93548805/174398981-61e5e11d-488a-4076-be83-29a586dbc652.png">
- <img width="646" alt="image" src="https://user-images.githubusercontent.com/93548805/174399175-01758db1-8d19-4430-9581-9c103e4acf6a.png">


3. Выполнение миграции: `php yii migrate yiiUsr`

<br>
