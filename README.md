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
Возвращает список контактов, где каждый контакт содержит

1. Имя, фамилия и отчество;
2. Идентификатор организации к которой принадлежит контакт;
3. Номер телефона;
4. Электронная почта;
5. Дата рождения;
5. Фотография.

### 2. GET `/api/v1/notebook/:identifier/`
Возвращает информацию о контакте с указанными идентификатором.

### 3. POST `/api/v1/notebook/`
Принимает в теле запроса JSON объект, который содержит информацию о контакте.

Возвращает созданный контакт.

### 4. POST `/api/v1/notebook/:identifier/`
Принимает в теле запроса JSON объект, который содержит информацию о контакте.

Возвращает обновлённый контакт.

### 5. DELETE `/api/v1/notebook/:identifier/`
Возвращает удалённый контакт.

### Getting Started

#### Локальная разработка

```bash
cd ~
git clone https://github.com/VladimirCreator/crispy-system.git
cd crispy-system
cp .env.interface .env
# Изменить требуемые значения конфигурации в файле `.env`.
php artisan storage:link
php artisan key:generate
php artisan migrate
php artisan db:seed # Опционально
```

#### Альтернативный вариант

Можно воспользоваться Sail.

## Reference

1. [REQUEST.md](./REQUEST.md).
