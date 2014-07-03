

Short list of commands
    push (p) "-Dm=Commit mesasge"                        Add all files to index, commit, push
    pull                                                 The same as git pull origin branch_name
    commit (c)                                           Update index and commit changes
    pull-push (pp) "-Dm=Commit mesasge"                  Pull then add files to index, commit, push
    commit-pull-push (cpp, ppc) "-Dm=Commit mesasge"     Add files to index, commit, pull, push
    cherry-pick "-Dc=commit_id"                          Apply changes from another branch
    deploy                                               Used to pull on production server
    dump                                                 Save database dump to project dir and notify others through Slack
    db-dump                                              Save database dump to project dir
    backup-database                                      Save database dump to backup/database dir
    db-restore                                           Restore database from backup/database/dump.sql.gz file.
                                                           Use -De=live to remain css/js aggregation.
    db-restore-url (dbu)                                 Get last dump from production site and restore database with it.
                                                           Use -De=live to remain css/js aggregation.
    db-optimize ["-Denv.db.name=table_name"]             Defragment database or single table
    cc                                                   Clear all cache
    settings-file-restore (settings)                     Restore file settings.php
    run-tests                                            Run standard Drupal test
    build                                                Build/rebuild whole site
    project-up (pu)                                      Restore db and file settings.php
    sniff "-Ds=path/to/file_or_dir"                      Check code for errors (CodeSniffer)
    slack-message "-Dslack.text=Message"                 Send message to Slack channel
    pmd "-Ds=path/to/file_or_dir"                        Check code for errors (PHP Mess Detector)
    pcpd "-Ds=path/to/file_or_dir"                       Check *.module, *.inc files for duplicate code (PHP Copy/Past Detector)
