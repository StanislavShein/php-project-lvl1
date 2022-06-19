install: # установить зависимости
	composer install

brain-games: # запуск игры
	./bin/brain-games

brain-even: # запуск игры "Проверка на чётность"
	./bin/brain-even

brain-calc: # запуск игры "Калькулятор"
	./bin/brain-calc

brain-gcd: # запуск игры "Наибольший общий делитель"
	./bin/brain-gcd

validate: # публикация
	composer validate

lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
