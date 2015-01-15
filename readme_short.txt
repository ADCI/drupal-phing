Short list of commands
  GIT commands  
    push (p) "-Dm=Commit mesasge"                        Add all files to index, commit, push
    pull                                                 The same as git pull origin branch_name
    commit (c)                                           Update index and commit changes
    pull-push (pp) "-Dm=Commit mesasge"                  Pull then add files to index, commit, push
    commit-pull-push (cpp, ppc) "-Dm=Commit mesasge"     Add files to index, commit, pull, push
    cherry-pick "-Dc=commit_id"                          Apply changes from another branch

  Database commands
    dump-production (dump)                               Save database dump to project dir and notify others through Slack
    dump-stage                                           Save database to project/dump.sql.gz and send message to slack channel
    dump-local                                           Save database to project/dump.sql.gz
    db-restore (dbr), db-restore-from-local (dbrl)       Restore database from backup/database/dump.sql.gz
                                                           Use command line argument -De=live to skip css/js aggregation change
    db-restore-from-stage (dbrs), db-restore-url (dbu),
    db-restore-from-production (dbrp)                    Get last dump from stage or production server and restore database
                                                           Use command line argument -De=live to skip css/js aggregation change
    db-drop                                              Drop database for current site
    db-create                                            Create database for current site
    db-optimize ["-Denv.db.name=table_name"]             Defragment database or single table

  Drupal commands
    cc                                                   Clear all Drupal cache
    restore-settings-file (settings)                     Restore file settings.php
    run-tests                                            Run standard Drupal test
    run-custom-tests -Dp=port                            Run custom tests specified in project.tests environment variable
    jmeter-tests                                         Run Jmeter tests from 'jmeter' directory
    restore-project-files                                Restore project files.
    project-environment                                  Enable some useful for development features

  Site commands
    build                                                Build/rebuild whole site
    project-up (pu) [-Dsource=<stage,production,local>]  Restore db and file settings.php. Gets database from local, stage or production server
    updatedb                                             Apply modules updates
    deploy-stage, deploy-local,
    deploy-production (deploy)                           Pull, apply features and update production, stage or local server

  Other commands
    sniff "-Ds=path/to/file_or_dir"                      Check code for errors (CodeSniffer)
    slack-message "-Dslack.text=Message"                 Send message to Slack channel
    pmd "-Ds=path/to/file_or_dir"                        Check code for errors (PHP Mess Detector)
    pcpd "-Ds=path/to/file_or_dir"                       Check *.module, *.inc files for duplicate code (PHP Copy/Past Detector)
