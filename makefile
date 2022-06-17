install: # установить зависимости
	composer install

brain-games: # запуск игры
	./bin/brain-games

brain-even: # запуск игры "Проверка на чётность"
	./bin/brain-even

validate: # публикация
	composer validate

lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
