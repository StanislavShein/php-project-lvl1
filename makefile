install: # установить зависимости
	composer install

brain-games: # запуск игры
	.bin/brain-games

validate: # публикация
	composer validate
