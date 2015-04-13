# Work-Shop Projects Makefile
# 'Always Use a Trailing Slash...'

# RELEVANT GIT REPOSITORIES
# Edit these to point to the right location before doing anything else
GIT_REMOTE_ORIGIN = origin
GIT_REMOTE_ORIGIN_URL = https://github.com/work-shop/work-shop.git
GIT_REMOTE_LIVE = live
GIT_REMOTE_LIVE_URL = ssh://gregneme@workshopri.com/~/git/workshopri.git
GIT_REMOTE_STAGE = stage
GIT_REMOTE_STAGE_URL = ssh://gregneme@workshopri.com/~/git/workshopri-stage.git

# Wordpress-specific filesystem locations for this installation
CONFIG = ../wp-config.php
THEME = themes/work-shop/
URL = http://localhost/ws

# Local database specific names for this installation
DB_NAME = ws_wp_db
DUMP_NAME = $(DB_NAME).sql
DB_STORE = .databases/
DB_UTILITIES = util/

# running 'make' is the same as running make open 
# followed by 'make sass-watch'
all: open sass-watch

# open
# this rule opens 
#
open:
	open $(URL)

# remotes
# Add the specified remotes to the local repository
remotes:
	git remote add $(GIT_REMOTE_ORIGIN) $(GIT_REMOTE_ORIGIN_URL)
	git remote add $(GIT_REMOTE_LIVE) $(GIT_REMOTE_LIVE_URL)
	git remote add $(GIT_REMOTE_STAGE) $(GIT_REMOTE_STAGE_URL)	

# install
# this installs the dependencies for this workflow
# it assumes that it's in the root of the working tree 
# for this repository.
install: $(DB_STORE) remotes
	git clone https://github.com/work-shop/db-utilities.git $(DB_STORE)$(DB_UTILITIES);
	touch .gitignore; echo '$(DB_STORE)$(DB_UTILITIES)' >> .gitignore


# sass-watch
# This rule runs sass' watch command on the core style.scss
# file, writing css to the core style.css file
sass-watch:
	sass --watch $(THEME)assets/css/style.scss:$(THEME)assets/css/style.css

# pull-db
# This rule takes a pulls a current snapshot
# of the project's database, and places it 
# in the databases archive. As of now, it
# rewrites the current snapshot, if one exists.
pull-db:
	$(DB_STORE)$(DB_UTILITIES)pull-db.sh $(DB_NAME) $(DB_STORE)$(DUMP_NAME)

# push-db
# This rule looks for a current database in 
# the project's .databases directory and reads it
# into MAMP's mysql instance, updating the specificed database
# finally, it updates the wp-config file to point
push-db:
	$(DB_STORE)$(DB_UTILITIES)push-db.sh $(DB_NAME) $(DB_STORE)$(DUMP_NAME)



