# FlexySiteSkeleton
Скелет сайта

1. Установить Symfony
composer create-project symfony/website-skeleton .

2. Установить скелет сайта
composer require flexycms/flexysiteskeleton-bundle

3. Скопировать всё из папки www в корень сайта, устанавливаем настройки базы (TODO - добавить рецепт)

4. Сделать миграцию
	php bin/console doctrine:migrations:diff 
	php bin/console doctrine:migrations:migrate

5. Выполнить на пустой базе запрос

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'admin@admin.ru', '[\"ROLE_ADMIN\"]', '$2y$11$aKtPlqFIHngklZp3AiD9TuhXzahEbrYM3JRJm/oz/5ChDEq61sE5W');

(это добавляет в админку пользователя admin@admin.ru с паролем 12345)

6. yarn install

7. Добавить:

yarn add jquery @fortawesome/fontawesome-free slick-carousel moment jquery-datetimepicker popper.js copy-webpack-plugin
yarn add @popperjs/core --dev
yarn add sass-loader@^11.0.0 sass --dev

8. В assets/app.js прописать:

const $ = require('jquery');
global.$ = global.jQuery = $;

9. Сделать yarn encore dev

10. При необходимости перезагружаем сервер

11. Если всё получилось, заходим в админку 
admin@admin.ru 
12345
