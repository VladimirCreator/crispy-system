# crispy-system

[![CI: Crispy System](https://github.com/VladimirCreator/crispy-system/actions/workflows/ci-crispy-system.yaml/badge.svg)](https://github.com/VladimirCreator/crispy-system/actions/workflows/ci-crispy-system.yaml)
[![GitHub Pages](https://github.com/VladimirCreator/crispy-system/actions/workflows/github-pages.yaml/badge.svg)](https://github.com/VladimirCreator/crispy-system/actions/workflows/github-pages.yaml)
[![code style: prettier](https://img.shields.io/badge/code_style-prettier-ff69b4.svg?style=flat-square)](https://github.com/prettier/prettier/)

## Table of Contents

- [Description](#description)
- [Discussion](#discussion)

## Description

### Topics

composer laravel php phpunit swagger

## Discussion

Этот репозиторий включает в себя единственный пакет.

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
