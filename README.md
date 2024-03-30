# crispy-system

[![CI: Crispy System](https://github.com/VladimirCreator/crispy-system/actions/workflows/ci-crispy-system.yaml/badge.svg)](https://github.com/VladimirCreator/crispy-system/actions/workflows/ci-crispy-system.yaml)
[![GitHub Pages](https://github.com/VladimirCreator/crispy-system/actions/workflows/github-pages.yaml/badge.svg)](https://github.com/VladimirCreator/crispy-system/actions/workflows/github-pages.yaml)
[![code style: prettier](https://img.shields.io/badge/code_style-prettier-ff69b4.svg?style=flat-square)](https://github.com/prettier/prettier/)

## Table of Contents

- [Description](#description)
- [Discussion](#discussion)

## Description
RESTful API для организации записной книжки.

### Topics

composer
docker
laravel
php
phpunit
postgresql
swagger

## Discussion

> [!NOTE]
> Этот репозиторий включает в себя единственный пакет.

Сервер предоставляет несколько конечных точек с помощью которых можно взаимодействовать со структурой записной книжки.

### 1. GET `/api/v1/notebook/`
Возвращает список контактов из базы данных, где каждый контакт содержит

1. Имя, фамилия и отчество;
2. Идентификатор организации к которой принадлежит контакт;
3. Номер телефона;
4. Электронная почта;
5. Дата рождения;
5. Фотография.

### 2. GET `/api/v1/notebook/:identifier/`
Возвращает информацию о контакте с указанными идентификатором из базы данных.

### 3. POST `/api/v1/notebook/`
Принимает в теле запроса JSON объект, который содержит информацию о контакте, создаёт контакт в базе данных и возвращает его.

### 4. POST `/api/v1/notebook/:identifier/`
Принимает в теле запроса JSON объект, который содержит информацию о контакте, обновляет контакт в базе данных и возвращает его.

### 5. DELETE `/api/v1/notebook/:identifier/`
Удаляет контакт по идентификатору из базы данных и возвращает его.

### Getting Started

```bash
$ ./vendor/bin/sail up -d
$ ./vendor/bin/sail artisan migrate
$ ./vendor/bin/sail artisan db:seed
$ curl http://localhost/api/v1/notebook
$ # 😎
```

## Reference

1. [REQUEST.md](./REQUEST.md).
