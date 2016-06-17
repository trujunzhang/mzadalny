# Create mysql database

create database mzadalny;

grant all on mzadalny.* to 'mzada' identified by 'mzada720';

mysql -u mzada -p 'mzada720' mzadalny