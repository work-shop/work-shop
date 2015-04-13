# Makefile for command-line+browser-based wordpress development

# MYSQL local development information
MYSQL_USER	= root				
MYSQL_PASS 	= root				
MYSQL_DB	= ws_wp_db

# Workspace Configuration
WORKSPACE 	= /Applications/MAMP/htdocs/work-shop
THEME 		= $(WORKSPACE)/wp-content/themes/work-shop
SQL 		= /Applications/MAMP/Library/bin/mysql
SQL_ARGS 	= --user=$(MYSQL_USER) --host=localhost --password=$(MYSQL_PASS)

# Build Configuration
PORT 		= 8888
TARGET 		= work-shop
SQL 		= /Applications/MAMP/Library/bin


# default targets
all: open-frontend

# just run a git push
push:
	git push origin master

# just run a git pull
pull:
	git pull origin master

# prepare to push a new database version. Don't call this directly.
push-db-prep:
	cd $(THEME)
	git checkout master
	rm -f _databases/dump.sql
	git add -A $(WORKSPACE)
	git commit -m "removed previous database"
	git push origin master

# prepare to pull a new database version. Don't call this directly.
pull-db-prep: 
	cd $(THEME)
	rm -f _databases/dump.sql

# import a dump.sql file
imp-db:
	cd $(THEME)
	/Applications/MAMP/Library/bin/mysql $(SQL_ARGS) $(MYSQL_DB) < _databases/dump.sql

# export the dump.sql file
exp-db:
	cd $(WORKSPACE)
	/Applications/MAMP/Library/bin/mysqldump $(SQL_ARGS) $(MYSQL_DB) > _databases/dump.sql

# export and push the database
push-db: push-db-prep exp-db
	git add .
	git commit -m "added new database version"
	git push origin master

# pull and import the database
pull-db: pull-db-prep pull imp-db

# open the front-end in the browser
open-frontend:
	open http://localhost:$(PORT)/$(TARGET)

#open the backend in the browser
open-backend:
	open http://localhost:$(PORT)/$(TARGET)/wp-admin

#open the MAMP panel in the browser
server-config:
	open http://localhost:$(PORT)/MAMP/?language=English
