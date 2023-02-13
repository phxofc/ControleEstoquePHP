create database vendas;

create table produtos(
id int primary key auto_increment,
nomeP varchar(250) not null,
precoC varchar(100) not null,
precodeV varchar(100) not null,
quantidade varchar(100) not null,
dataInsevendasprodutosrido timestamp default current_timestamp
);

insert into produtos(nome,login,senha)
values('pedro','admin','admin');

select * from produtos;
select * from vendasProdutos;

alter table produtos add column produtosVendidos varchar(50);

create table vendasprodutos(
idVendas int primary key auto_increment,
precoVenda varchar(250) not null,
quantidade varchar(100) not null,
dataInserido timestamp default current_timestamp,
ProdutoVendido int,
foreign key (ProdutoVendido) references produtos (id)
ON DELETE CASCADE
);

insert into vendasprodutos(precoVenda,quantidade,ProdutoVendido)
values('10','2','4');

insert into vendasprodutos(precoVenda,quantidade,ProdutoVendido)
values('$precoVebda','$quantidade','$idProduto');

UPDATE produtos SET quantidade = quantidade-3 WHERE id=1; 

select id from produtos; 

select quantidade from produtos where id =6;

DELETE FROM produtos WHERE id = 1;

SELECT * FROM produtos WHERE dataInserido BETWEEN '2023-02-05' and '2023-02-10';
SELECT * FROM vendasprodutos WHERE dataInserido BETWEEN '2023-02-05' and '2023-02-10';

SELECT * FROM produtos ORDER BY id DESC;
