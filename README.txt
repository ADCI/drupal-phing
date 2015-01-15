NAME
       Druphing - Progress is made by lazy men looking for easier ways to do
       things.

SYNOPSIS
       All commands should look like this:
       phing <command> [args]

DESCRIPTION
       Druphing is Drupal site template and bunch of usefull phing commands for
       everyday use.
       Extensivly use Phing http://www.phing.info

COMMANDS
       We divide commands into GIT commands, Drupal commands, Database commands,
       Site commands, Codesniffer commands and Slack commands.

       Aliases for commands are in brackets.

       Other commands

         help
           Displays this help.

         h
           Display short help.


       GIT commands

         push (p) "-Dm=Commit mesasge"
           Usual workflow with git: add all files to commit, commit files, push
           files. This command do it all. Very simple!
           But don't ever forget to add commit message! And if you want spaces
           in commit message then quotes are required.
           Just compare:
           phing p "-Dm=Commit mesasge"
           and
           git add -A
           git commit -m "Commit mesasge"
           git push origin branch_name:branch_name

         pull
           "phing pull" is much shorter then "git pull origin branch_name",
           don't you agree?

         commit (c) "-Dm=Commit mesasge"
           Update index and commit changes.

         pull-push (pp) "-Dm=Commit mesasge"
           Combine power of both pull and push in one single command.

         commit-pull-push (cpp, ppc)  "-Dm=Commit mesasge"
           This simple command covers most everyday needs of a developer to push
           something to repo.
           Sometimes push returns with error because someone pushed something to
           repo before you and someone else changed some files you were working on.
           This command takes care of this. First it commits your changes. Then
           it pulls changes from repo and then pushes you changes to repo.

         cherry-pick "-Dc=commit_id"
           Made for easy branch intertwine without merging them. Usual workflow:
           You have two branches. Both have some identical code. You change code
           in one branch, commit it, push it. Then switch to another branch and
           run this command with id of commit with your changes.
           That's all. Both branches have your changes.


       Database commands

         dump-production (dump)
         dump-stage
           Save database to project/dump.sql.gz and send message to slack channel.

         dump-local
           Save database to project/dump.sql.gz

         backup-database
           Save database to backup/database/[date] - [time].sql.gz

         db-restore (dbr)
         db-restore-from-local (dbrl)
           Restore database from backup/database/dump.sql.gz.
           Use command line argument -De=live to skip css/js aggregation change.

         db-restore-from-stage (dbrs), db-restore-url (dbu)
         db-restore-from-production (dbrp)
           Get last dump from stage or production site and restore database.
           Use command line argument -De=live to skip css/js aggregation change.

         db-drop
           Drop database for current site.

         db-create
           Create database for current site.

         db-optimize ["-Denv.db.name=table_name"]
           Optimize whole database or single table. Think of it as database
           defragmentation.


       Drupal commands

         cc
           Clear all Drupal cache.

         restore-settings-file (settings)
           Restore file settings.php

         run-tests
           Run standard Drupal tests.

         run-custom-tests
           Run custom tests specified in project.tests. 

         jmeter-tests
           Run Jmeter tests from 'jmeter' directory.

         restore-project-files
           Restore project files.

         project-environment
           Enable some useful for development but unneded for production server
           features:
             - Enable devel debug output for all.
             - Disable CSS/Js aggregation.


       Site commands

         build
           Builds/rebuilds whole site. Download Drupal, modules, themes, install
           drupal, restore custom modules/themes if needed, restore nodes,
           settings if needed.

         project-up (pu) [-Dsource=<stage,production,local>]
           Download last db dump from production or stage to
           backup/database/dump.sql.gz and restore database from it. Also restore
           file settings.php. Do not download anything if source set to "local".
           Source set to "stage" by default.

         features-apply
           Apply features.

         updatedb
           Apply database updates.

         deploy-production (deploy)
         deploy-stage
         deploy-local
           These commands can be used to pull, apply features and updates to
           production, stage or local server. First two also notify other
           developers through slack about their actions.


       Codesniffer commands

         sniff "-Ds=path/to/file_or_dir"
           Ckeck code and output results to reports/codesniffer.xml file in
           project root directory.


       Slack commands

         slack-message "-Dslack.text=Message"
           Send message to Slack channel.


       PHP Mess Detector commands

         pmd "-Ds=path/to/file_or_dir"
           Check code and output results to reports/phpmd.xml file in
           project root directory.


       PHP Copy/Past Detector

         pcpd "-Ds=path/to/file_or_dir"
           Check code and output results to reports/phpcpd.xml file in
           project root directory (*.module, *.inc files will be checked).

DIRS AND FILES
       project
         Where all site's files are stored.

       backup/database/dump.sql.gz
         Just as file name implies: database dump file.

       build/properties
         Settings for server and site such as mysql settings, paths, etc.
         You can have different settings for each server. Just create file
         env.override.prop in build/properties and place there any
         environment settings you wish to override for single server.

       build.xml, build/submodules/*.xml
         Phing tasks.

       coder
         Codesniffer files.

       codesniffer.txt
         Codesniffer store any found errors in this file after sniffing.

       README.txt
         This help.
