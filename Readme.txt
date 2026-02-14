Yandex Maps Reviews Integration (Test project).

Тестовый проект реализует интеграцию с Яндекс Картами:
- Доступна авторизация пользователя;
- Есть возможность сохранения ссылки на организацию;
- Отображение рейтинга и отзывов об организации;

Отзывы реализованы через заглушку-ответ, так как публичного API у Яндекса нет.

Данное ТЗ было выполнено на Стеке:
Backend: Laravel 8, MySQL
Frintend: Vue 3, Vite, Axios

Установка:
1 Клонируем репозиторий с гита
	git clone https://github.com/USERNAME/yandex-maps-reviews-integration.git
	cd yandex-maps-reviews-integration
2 Зпускаем backend 
	cd backend
	composer install
	copy .env.example .env
	php artisan key:generate
3 Настраиваем Бд в .env
	php artisan migrate
	php artisan serve
4 Запуск frintend
	cd frontend
	npm install
	npm run dev
5 Тестовый пользователь:
Veran@yandex.ru
qwerty12345

6 Файл бд скачать в закрепе


