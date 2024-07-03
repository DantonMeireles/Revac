create database bd_revac3 character set = utf8mb4 collate = utf8mb4_general_ci;

use bd_revac3;

create table if not exists tb_instituicao
(
	nm_instituicao varchar(70),
    ds_endereco varchar(70),
    nm_cidade varchar(30),
    sg_estado char(2),
    ds_telefone char(11),
    ds_email varchar(30),
    
		primary key(nm_instituicao)
);

create table if not exists tb_Area
(
	-- id_Area int not null auto_increment,
	nome_Area varchar(70) not null,
    
        unique key(nome_area),
		primary key(nome_Area)
);

create table if not exists tb_SubArea
(
	nome_SubArea varchar(100) not null,
	nome_Area varchar(70),
        unique key(nome_subarea),
        
		foreign key(nome_Area)
			references tb_Area(nome_Area)
				on delete cascade on update cascade,
		
        primary key(nome_subarea)
);


-- -------------------------------------------------------------------------------------------------------------------------------------------

create table if not exists tb_status_usuario
(
	id_status_usuario int not null auto_increment,
    ds_status_usuario varchar(30) not null,
		unique key(ds_status_usuario),
        
		primary key(id_status_usuario)
);

INSERT INTO TB_STATUS_USUARIO VALUES
(DEFAULT,'Disponìvel'),
(DEFAULT,'Indisponìvel');
-- -----------------------------------------------
create table if not exists tb_tipo_usuario
(
	id_tipo_usuario int not null auto_increment,
    ds_tipo_usuario varchar(30) not null,
		unique key(ds_tipo_usuario),

		primary key(id_tipo_usuario)
);

insert into tb_tipo_usuario values
(default,'Aluno'),
(default,'Avaliador'),
(default,'Adm');
select * from tb_tipo_usuario;
-- -----------------------------------------------
create table if not exists tb_sexo_usuario
(
	id_sexo_usuario int not null auto_increment,
    ds_sexo_usuario varchar(30) not null,
		unique key(ds_sexo_usuario),

		primary key(id_sexo_usuario)
);

insert into tb_sexo_usuario values
(default,'Masculino'),
(default,'Feminino'),
(default,'Outros');


create table if not exists tb_usuario
(
		id_usuario int not null auto_increment,
	Nome varchar(69) not null,
-- ------------------------------------
	Email varchar(69) not null,
	Senha varchar(15) not null,
-- ------------------------------------
	Data_de_nascimento date not null,
    Caminho_foto varchar(69),
	id_tipo_usuario int not null,
	id_status_usuario int not null,
    id_sexo_usuario int not null,
    
		foreign key(id_tipo_usuario)
			references tb_tipo_usuario(id_tipo_usuario)
				on delete cascade on update cascade,

		foreign key(id_status_usuario)
			references tb_status_usuario(id_status_usuario)
				on delete cascade on update cascade,
                
		foreign key(id_sexo_usuario)
			references tb_sexo_usuario(id_sexo_usuario)
				on delete cascade on update cascade,
                
		primary key (id_usuario)
);
select * from tb_usuario;

create table if not exists tb_profissional
(
		id_profissional int auto_increment not null,
	ds_porque text not null,
	curriculo varchar(50) not null,
	id_usuario int not null,
    status_profi enum("Análise","Confirmado","Recusado") not null,
		
        foreign key(id_usuario)
			references tb_usuario(id_usuario)
				on delete cascade on update cascade,
        
        primary key (id_profissional)
);

-- -------------------------------------------------------------------------------------------------------------------------------------------
create table if not exists ArtigosSubmetidos
(
		nm_revista varchar(70),
        data_inicio date not null,
        data_final date,
                

		primary key(nm_revista)
);

create table if not exists ArtigosSubmetidos
(
		id_Artigo int not null auto_increment,
	nm_Artigo varchar(70) not null,
    ds_artigo text not null,
    nm_autores varchar(150) not null,
    nm_orientadores varchar(150) not null,
    nm_colaboradores varchar(500),
    ds_status enum("Analise","Publicado","Rejeitado") not null,
    ds_caminho varchar(69) not null,
    nm_revista varchar(70),
    dt_submissão date not null,
    dt_publicacao date,
	nome_subarea varchar(100) not null,
	id_usuario int,
    
		foreign key(nome_subarea)
			references tb_subarea(nome_subarea)
				on delete cascade on update cascade,
                
		foreign key(id_usuario)
			references tb_usuario(id_usuario)
				on delete cascade on update cascade,
                

		primary key(id_Artigo)
);
select * from ArtigosSubmetidos;

-- --------------------------------------------------------------------------------------------------------------------------------------

create table if not exists ArtigosEmAnalise
(
		id_Analise int auto_increment not null,
	Situação enum("Em andamento","Terminado","correcao") not null,
	id_Artigo int not null,
	id_profissional int not null,
    
		foreign key(id_Artigo)
			references ArtigosSubmetidos(id_Artigo)
				on delete cascade on update cascade,
                
		foreign key(id_profissional)
			references tb_profissional(id_profissional)
				on delete cascade on update cascade,

		primary key(id_Analise)
);

-- -------------------------------------------------------------------------------------------------------------------------------------


create table if not exists tb_relatorio
(
		id_relatorio int auto_increment not null,
	id_analise int not null,
	relatorio text,
    
		foreign key(id_analise)
			references ArtigosEmAnalise(id_analise)
				on delete cascade on update cascade,

		primary key(id_relatorio)
);