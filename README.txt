GIT commands:
sudo phing pull = git pull
sudo phing push "-Dm=Commit with spances" = git add -a, git commit -m, git push

OTHER commands:
sudo phing db-restore = restore the database from /vagrant/project/backup/insurance.sql.gz dump file
sudo phing settings = restore the settings.php file
sudo phing project-up = db_restore + settings commands


Vagrant commands:
vagrant ssh - connect to virtual machine
vagrant up = create / start virtual machine
vagrant provision = install / update settings of virtual machine
vagrant reload = restart virtual machine
vagrant suspend = stop virtual machine
vagrant destroy = delete virtual machine

Structure files:
/vagrant - the shared folder
/vagrant/project/backup - the folder for stored db backup file insurance.sql.gz
/var/www/insurance - the folder with git repository files
/var/www/insurance/project - the site folder

