Yandex Maps Reviews Integration (Test project).

Тестовый проект реализует интеграцию с Яндекс Картами:
- Доступна авторизация пользователя(регистрация, логин, логаут);
- Есть возможность сохранения ссылки на организацию;
- Отображение рейтинга и отзывов об организации;

Отзывы реализованы через заглушку-ответ, так как публичного(открытого) API у Яндекса нет.

Данное ТЗ было выполнено на Стеке:
Backend: Laravel 8, MySQL
Frontend: Vue 3, Vite, Axios

Установка:
1 Клонируем репозиторий с гита
	git clone https://github.com/Veran519/yandex-maps-reviews-integration
	cd yandex-maps-reviews-integration
2 Зпускаем backend 
	cd backend
	composer install
	copy .env.example .env
	php artisan key:generate
3 Настраиваем Бд в .env
	php artisan migrate
	php artisan serve
4 Запуск frontend
	cd frontend
	npm install
	npm run dev
5 Тестовый пользователь:
Test@mail.com
123456

6. Тестовое задание готово.

Демо: https://yandex-maps-reviews-integration-8w9.vercel.app/
API: https://yandex-maps-reviews-integration-production.up.railway.app/
GitHub: https://github.com/Veran519/yandex-maps-reviews-integration/tree/main

Функционал:
— регистрация(postman, отдельной компоненты неь)/логин
— подключение Яндекс организации
— загрузка и отображение отзывов

Всё задеплоено и работает в production.


