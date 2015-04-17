# Work-Shop Projects Makefile
# 'Always Use a Trailing Slash...'

# RELEVANT SSH USER
SSH_USER = gregneme
SSH_HOST = workshopri.com

# RELEVANT GIT REPOSITORIES
# Edit these to point to the right location before doing anything else
GIT_REMOTE_ORIGIN = origin
GIT_REMOTE_ORIGIN_URL = https://github.com/work-shop/work-shop.git
GIT_REMOTE_LIVE = live
GIT_REMOTE_LIVE_URL = ssh://$(SSH_USER)@$(SSH_HOST)/~/git/workshopri.git
GIT_REMOTE_DEV = dev
GIT_REMOTE_DEV_URL = ssh://$(SSH_USER)@$(SSH_HOST)/~/git/workshopri-dev.git

# Wordpress-specific filesystem locations for this installation
WP_CONFIG = ../wp-config.php
WP_THEME = themes/work-shop/
WP_CONTENT = wp-content/
WP_UPLOADS = uploads/
WP_LOCAL_URL = http://localhost/ws

WP_REMOTE_DEV_ROOT=~/public_html/dev/
WP_REMOTE_LIVE_ROOT=~/public_html/workshopri.com/

# Local database specific names for this installation
DB_NAME = ws_wp_db
DB_DUMP_NAME = $(DB_NAME).sql
DB_STORE = .databases/
DB_UTILITIES = util/

# These variables are meant to be used by you, the user.
# they're notated in lower-case, so as to differentiate them
# from system variables, in UPPER-CASE. They're initialized to
# some reasonable defaults.

# $(branch), the branch to push to the remote repository
branch = master 
target = $(GIT_REMOTE_LIVE)

# running 'make' is the same as running 'make open' 
# followed by 'make sass-watch'
all: open sass-watch

# open
# this rule opens the local development url
#
open:
	open $(URL)

# deploy-live
# Push the current $(branch) to the live remote master
deploy-live:
	git push $(GIT_REMOTE_LIVE) +$(branch):refs/heads/master

# deploy-liv
# Push the current $(branch) to the live remote master
deploy-dev:
	git push $(GIT_REMOTE_DEV +$(branch):refs/heads/master

# remotes
# Add the specified remotes to the local repository
remotes:
	git remote add $(GIT_REMOTE_LIVE) $(GIT_REMOTE_LIVE_URL)
	git remote add $(GIT_REMOTE_DEV) $(GIT_REMOTE_DEV_URL)	

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
	sass --watch $(WP_THEME)assets/css/style.scss:$(WP_THEME)assets/css/style.css

# pull-db
# This rule takes a pulls a current snapshot
# of the project's database, and places it 
# in the databases archive. As of now, it
# rewrites the current snapshot, if one exists.
pull-db:
	$(DB_STORE)$(DB_UTILITIES)pull-db.sh $(DB_NAME) $(DB_STORE)$(DB_DUMP_NAME)

# push-db
# This rule looks for a current database in 
# the project's .databases directory and reads it
# into MAMP's mysql instance, updating the specificed database
# finally, it updates the wp-config file to point
push-db:
	$(DB_STORE)$(DB_UTILITIES)push-db.sh $(DB_NAME) $(DB_STORE)$(DB_DUMP_NAME)


# pull-uploads
# The pull uploads rule attempts to pull down the contents
# of the uploads directory via scp. Some directories may
# be too big to pull down -- a better uploads synching script is
# in order.
#
# pass target=dev to pull to the remote staging environment
pull-uploads:
ifeq ($(target), $(GIT_REMOTE_LIVE))
	scp -r $(SSH_USER)@$(SSH_HOST):$(WP_REMOTE_LIVE_ROOT)$(WP_CONTENT)$(WP_UPLOADS) ./
else
	scp -r $(SSH_USER)@$(SSH_HOST):$(WP_REMOTE_DEV_ROOT)$(WP_CONTENT)$(WP_UPLOADS) ./
endif

# push-uploads
# The push uploads rule attempts to push up the contents
# of the local uploads directory via scp. Some directories may
# be too big to pull down -- a better uploads synching script is
# in order.
#
# pass target=dev to push from the remote staging environment
push-uploads:
ifeq ($(target), $(GIT_REMOTE_LIVE))
	scp -r $(WP_UPLOADS)/* $(SSH_USER)@$(SSH_HOST):$(WP_REMOTE_LIVE_ROOT)$(WP_CONTENT)$(WP_UPLOADS) 
else
	scp -r $(WP_UPLOADS)/* $(SSH_USER)@$(SSH_HOST):$(WP_REMOTE_DEV_ROOT)$(WP_CONTENT)$(WP_UPLOADS)
endif





