create table desenvolvedores(
    id int (4) not null auto_increment primary key,
    name varchar(50) not null,
    email varchar(50) not null default 'exemplo@exemplo.com',
    comentario varchar(150) null
);

