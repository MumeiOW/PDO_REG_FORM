create table game_devs ( 
    dev_id int auto_increment primary key,
    first_name varchar(50),
    last_name varchar(50),
    home_address varchar(50),
    position varchar(50),
    team_name varchar(50),
    projects_handled varchar(50),
    date_of_hiring timestamp default current_timestamp
);