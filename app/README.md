<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
.
├── api
│   ├── config
│   ├── modules
│   │   └── v1
│   │       ├── controllers
│   │       └── models
│   │           ├── db
│   │           └── other
│   ├── runtime
│   │   ├── cache
│   │   ├── debug
│   │   └── logs
│   └── web
│       ├── assets
│       └── css
├── backend
│   ├── assets
│   ├── config
│   ├── controllers
│   ├── models
│   ├── runtime
│   │   └── debug
│   ├── tests
│   │   ├── _data
│   │   ├── _output
│   │   ├── _support
│   │   ├── functional
│   │   └── unit
│   ├── views
│   │   ├── layouts
│   │   └── site
│   └── web
│       ├── assets
│       │   ├── 6bd3092b
│       │   │   ├── css
│       │   │   └── js
│       │   ├── 961e3910
│       │   └── b41e195
│       └── css
├── common
│   ├── config
│   ├── fixtures
│   ├── mail
│   │   └── layouts
│   ├── models
│   ├── tests
│   │   ├── _data
│   │   ├── _output
│   │   ├── _support
│   │   └── unit
│   │       └── models
│   └── widgets
├── console
│   ├── config
│   ├── controllers
│   ├── migrations
│   ├── models
│   └── runtime
│       ├── cache
│       └── logs
├── environments
│   ├── dev
│   │   ├── backend
│   │   │   ├── config
│   │   │   └── web
│   │   ├── common
│   │   │   └── config
│   │   ├── console
│   │   │   └── config
│   │   └── frontend
│   │       ├── config
│   │       └── web
│   └── prod
│       ├── backend
│       │   ├── config
│       │   └── web
│       ├── common
│       │   └── config
│       ├── console
│       │   └── config
│       └── frontend
│           ├── config
│           └── web
├── frontend
│   ├── assets
│   ├── config
│   ├── controllers
│   ├── models
│   ├── runtime
│   │   ├── cache
│   │   ├── debug
│   │   └── logs
│   ├── tests
│   │   ├── _data
│   │   ├── _output
│   │   ├── _support
│   │   ├── acceptance
│   │   ├── functional
│   │   └── unit
│   │       └── models
│   ├── views
│   │   ├── layouts
│   │   └── site
│   └── web
│       ├── assets
│       │   ├── 6bd3092b
│       │   │   ├── css
│       │   │   └── js
│       │   ├── 961e3910
│       │   └── b41e195
│       └── css
├── vagrant
│   ├── config
│   ├── nginx
│   │   └── log
│   └── provision
```
