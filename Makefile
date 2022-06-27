install: # установить зависимости
	composer install

validate: # публикация
	composer validate

lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
	
test-coverage: # запуск phpunit tests
	composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

brain-games: # запуск игры
	./bin/brain-games

brain-even: # запуск игры "Проверка на чётность"
	./bin/brain-even

brain-calc: # запуск игры "Калькулятор"
	./bin/brain-calc

brain-gcd: # запуск игры "Наибольший общий делитель"
	./bin/brain-gcd

brain-progression: # запуск игры "Арифметическая прогрессия"
	./bin/brain-progression

brain-prime: # запуск игры "Простое число"
	./bin/brain-prime
