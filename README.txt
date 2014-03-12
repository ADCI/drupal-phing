NAME
       Druphing - Progress is made by lazy men looking for easier ways to do things.

SYNOPSIS
       All commands should look like this:
       phing <command> [args]

DESCRIPTION
       Druphing is Drupal site template and bunch of usefull phing commands for everyday use.
       Extensivly use Phing http://www.phing.info

DIRS AND FILES
       project
         Where all site's files are stored.

       backup/database/dump.sql.gz
         Just as file name implies: database dump file.

       build, build.xml
         Phing tasks.

       coder
         Codesniffer files.

       codesniffer.txt
         Codesniffer store any found errors in this file after sniffing.

       README.txt
         This help.

COMMANDS
       We divide commands into GIT commands, Drupal commands, Database commands, Site commands and Codesniffer commands.
       Aliases for commands are in brackets.

       Other commands

         help (h)
           Displays this help.


       GIT commands

         push (p)  "-Dm=Commit mesasge"
           Usual workflow with git: add all files to commit, commit files, push files. This command do it all. Very simple!
           But don't ever forget to add commit message! And if you want spaces in commit message then quotes are required.
           Just compare:
           phing p "-Dm=Commit mesasge"
           git add -A && git commit -m "Commit mesasge" && git push origin branch_name:branch_name

         pull
           "phing pull" is much shorter then "git pull origin branch_name", don't you agree?

         pull-push (pp) "-Dm=Commit mesasge"
           Combine power of both pull and push in one single command.

         commit-pull-push (cpp, ppc)  "-Dm=Commit mesasge"
           This simple command covers most everyday needs of a developer to push something to repo.
           Sometimes push returns with error because someone pushed something to repo before you and also changed some files you were
           working on. This command takes care of this. First it commits your changes. Then it pulls changes from repo and then
           pushes you changes to repo.

         cherry-pick "-Dc=commit_id"
           Made for easy branch intertwine without merging them. Usual workflow: You have two branches. Both have some identical code.
           You change code in one branch, commit it, push it. Then switch to another branch and run this command with id of commit with your changes.
           That's all. Both branches have your changes.

         deploy
           This command can be used to pull changes to production server. But besides pulling it notifies other developers through slack about it's actions.


       Database commands

         db-restore
           Restore database from backup/database/dump.sql.gz

         db-drop
           Drop database for the current site.

         db-create
           Create database for the current site.

         db-optimize ["-Denv.db.name=table_name"]
           Optimize whole database or single table. Think of it as database defragmentation.

       Drupal commands

         cc
           Clear all Drupal cache.

         settings-file-restore (settings)
           Restore file settings.php

       Site commands

         build
           Builds/rebuilds whole site. Download Drupal, modules, themes, install drupal, restore custom modules/themes if needed, restore nodes, settings if needed.

         project-up (pup)
           Restore database from backup/database/dump.sql.gz and restore file settings.php.

       Codesniffer commands

         sniff "-Dc=path/to/file"
           Sniff single file and output results to codesniffer.txt file in project root directory.

