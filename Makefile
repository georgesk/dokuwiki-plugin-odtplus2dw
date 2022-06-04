DIR = $(shell basename $$(pwd))

all:

zip:
	cd .. ; zip -r /tmp/monextension.zip $(DIR) --exclude $(DIR)/.git/\*
	@echo  ZIP dans /tmp/monextension.zip
