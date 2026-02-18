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
Veran@yandex.ru
qwerty12345

6 Файл бд скачать в закрепе
7 Для демо используются заглушки отзывов фиксированная ссылка на Яндекс. Реальной интеграции реализовано не было. Полноценный макет из фигма был принят к рассмотрению, на его основе сделан свой пример:
- Открыть демо:https://yandex-maps-reviews-integration-8w9.vercel.app/
- Войти под пользователем:
test@test.com
1234567
-Страница с отзывами: рейтинг и отзывы отображаются.


