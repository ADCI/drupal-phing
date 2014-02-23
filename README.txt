GIT commands:
phing pull = git pull origin branch_name
phing push "-Dm=Commit message with spaces" = git add -a, git commit -m "Commit message with spaces", git push origin branch_name:branch_name

OTHER commands:
phing db-restore = restore database from [current_project_dir]/backup/insurance.sql.gz file
phing settings = restore settings.php
phing cm-up = db-restore + settings


Vagrant commands:
vagrant ssh - connect to virtual machine using SSH
vagrant up = create / start virtual machine
vagrant provision = install / update virtual machine settings
vagrant reload = restart virtual machine
vagrant suspend = stop virtual machine
vagrant destroy = delete virtual machine

File structure:
/vagrant - shared folder beetwen virtual machine and host machine
[current_project_dir]/backup - folder to store db backup file insurance.sql.gz
/var/www/[site_name] - folder for git repository files
/var/www/[site_name]/project - site files goes there
