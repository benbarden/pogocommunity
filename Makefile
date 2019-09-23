SHELL:=/bin/bash

unit-test:
	./vendor/bin/phpunit

unit-test-models:
	./vendor/bin/phpunit --filter Models

vagrant-refresh:
	vagrant reload --provision
