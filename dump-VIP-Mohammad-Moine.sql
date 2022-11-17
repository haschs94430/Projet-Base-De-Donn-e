-----------------------------creation des tables--------------------------------------------
---------------------------------23 au total------------------------------------------------


create table CONNEXION(
	identifiant varchar(20);
	password varchar(32));


create table VIP(
	id_vip integer primary key, 
	nom_vip varchar(20), 
	prenom_vip varchar(20), 
	sexe_vip varchar(1), 
	nationalite_vip varchar(20),
	dateDeces_vip date);


create table MANNEQUIN(
	id_mannequin integer primary key,
	nom_mannequin varchar(20),
	prenom_mannequin varchar(20),
	taille_mannequin integer,
	nom_agence_mannequin varchar(20),
	constraint mannequin_id_fk foreign key (id_mannequin) references VIP(id_vip));


create table MUSICIEN(
	id_musicien integer primary key,
	nom_musicien varchar(20),
	prenom_musicien varchar(20),
	nom_maison_disque_musicien varchar(20),
	constraint musicien_id_fk foreign key (id_musicien) references VIP(id_vip));


create table CHANTEUR(
	id_chanteur integer primary key,
	nom_chanteur varchar(20),
	prenom_chanteur varchar(20),
	nom_maison_disque_chanteur varchar(20),
	constraint chanteur_id_fk foreign key (id_chanteur) references VIP(id_vip));


create table ACTEUR(
	id_acteur integer primary key,
	nom_acteur varchar(20),
	prenom_acteur varchar(20),
	date_premier_tournage_acteur date,
	constraint acteur_id_fk foreign key (id_acteur) references VIP(id_vip));


create table DEFILE(
	nom_defile varchar(20) primary key,
	date_defile date,
	lieu_defile varchar(20),
	nom_couturier_defile varchar(20));


create table ALBUM(
	titre_album varchar(20) primary key,
	nom_maison_disque_album varchar(20),
	date_album date);


create table FILM(
	num_visa_film integer primary key,
	role_jouer_film varchar(20),
	titre_film varchar(20),
	date_film date,
	nom_realisateur_film varchar(20));


create table PHOTO(
	num_photo integer primary key,
	nom_photographe_photo varchar(20),
	nom_agence_photographe varchar(20),
	lieu_photo varchar(20),
	circonstance_photo varchar(20));


create table ARTICLE(
	titre_article varchar(20) primary key,
	resume_article varchar(100));


create table REVUE(
	num_revue integer primary key,
	date_parution_revue date);


create table SE_MARIER(
	id_vip integer primary key,
	date_mariage date,
	lieu_mariage varchar(20),
	nom_conjoint_mariage varchar(20),
	type_mariage varchar(20),
	constraint marier_id_fk foreign key (id_vip) references VIP(id_vip));


create table DIVORCER(
	id_vip integer primary key,
	loi_divorcement varchar(100),
	date_divorcement date,
	circonstance_divorcement varchar(100),
	constraint divorcer_id_fk foreign key (id_vip) references VIP(id_vip));


create table SE_LIER(
	id_vip integer primary key,
	date_annonce_liaison date,
	nom_conjoint_liaison varchar(20),
	constraint lier_id_fk foreign key (id_vip) references VIP(id_vip));


create table SE_SEPARER(
	id_vip integer primary key, 
	date_separation date,
	circonstance_separation varchar(20),
	constraint separer_id_fk foreign key (id_vip) references VIP(id_vip));


create table PARTICIPE(
	id_mannequin integer,
	nom_defile varchar(20),
	constraint participe_com primary key (id_mannequin, nom_defile),
 	constraint participe_fk foreign key (id_mannequin) references mannequin(id_mannequin),
	constraint participe_fk1 foreign key (nom_defile) references defile(nom_defile));


create table FAIRE(
	id_musicien integer,
	titre_album varchar(20),
	constraint faire_com primary key (id_musicien, titre_album),
 	constraint faire_fk foreign key (id_musicien) references musicien(id_musicien),
	constraint faire_fk1 foreign key (titre_album) references album(titre_album));


create table REALISER(
	id_chanteur integer,
	titre_album varchar(20),
	constraint realiser_com primary key (id_chanteur, titre_album),
 	constraint realiser_fk foreign key (id_chanteur) references chanteur(id_chanteur),
	constraint realiser_fk1 foreign key (titre_album) references album(titre_album));


create table JOUER(
	id_acteur integer,
	num_visa_film integer,
	constraint jouer_com primary key (id_acteur, num_visa_film),
 	constraint jouer_fk foreign key (id_acteur) references acteur(id_acteur),
	constraint jouer_fk1 foreign key (num_visa_film) references film(num_visa_film));


create table ETRE_PRESENT(
	num_photo integer,
	id_vip integer,
	constraint etre_present_com primary key (num_photo, id_vip),
 	constraint etre_present_fk foreign key (num_photo) references photo(num_photo),
	constraint etre_present_fk1 foreign key (id_vip) references vip(id_vip));


create table UTILISER(
	num_photo integer,
	titre_article varchar(20),
	num_page_photo integer,
	constraint utiliser_com primary key (num_photo, titre_article),
 	constraint utiliser_fk foreign key (num_photo) references photo(num_photo),
	constraint utiliser_fk1 foreign key (titre_article) references article(titre_article));


create table COMPORTE(
	num_photo integer,
	num_revue integer,
	num_page_photo integer,
	constraint comporte_com primary key (num_photo, num_revue),
 	constraint comporte_fk foreign key (num_photo) references photo(num_photo),
	constraint comporte_fk1 foreign key (num_revue) references revue(num_revue));


create table COMPOSER(
	titre_article varchar(20),
	num_revue integer,
	num_page_revue integer,
	constraint composer_com primary key (titre_article, num_revue),
 	constraint composer_fk foreign key (titre_article) references article(titre_article),
	constraint composer_fk1 foreign key (num_revue) references revue(num_revue));


----------------------------Insertion d'elements dans les tables----------------------------
--------------------------------------------------------------------------------------------


insert into connexion values('user', md5('321'));


insert into vip values ('1', 'COTILLARD', 'Marion', 'F', 'Francaise');
insert into vip values ('2', 'FOX', 'Megan', 'F', 'Americaine');
insert into vip values ('3', 'JOHANSSON', 'Scarlett', 'F', 'Amercaine');
insert into vip values ('4', 'ELIZABETH HUDSON', 'Katheryn', 'F', 'Americaine');
insert into vip values ('5', 'ARMANI', 'Giorgio', 'M', 'Italien');
insert into vip values ('6', 'KURZEL', 'Justin', 'M', 'Australien');
insert into vip values ('7', 'CANET', 'Guillaume', 'M', 'Francais');
insert into vip values ('8', 'AUSTIN GREEN', 'Brian', 'M', 'Americain');
insert into vip values ('9', 'HADID', 'Bella', 'F', 'Americaine');
insert into vip values ('10', 'GRAHAM', 'Ashley', 'F', 'Americaine');
insert into vip values ('11', 'CLAUDE', 'Mc Solaar', 'M', 'Francais');
insert into vip values ('12', 'SAID', 'Soprano', 'M', 'Francais');
insert into vip values ('13', 'OKOU', 'Kaaris', 'M', 'Francais');
insert into vip values ('14', 'KARIM', 'Lacrim', 'M', 'Francais');
insert into vip values ('15', 'DEPP', 'Johnny', 'M', 'Americain');
insert into vip values ('16', 'DICAPRIO', 'Leonardo', 'M', 'Americain');
insert into vip values ('17', 'JEAN', 'Samuel', 'M', 'Anglais');
insert into vip values ('18', 'KORS', 'Michael', 'M', 'Americain');
insert into vip values ('19', 'ROENNING', 'Joachim', 'M', 'Norvegien');
insert into vip values ('20', 'GONZALES', 'Alejandro', 'M', 'Norvegien');
insert into vip values ('21', 'ERVIN', 'Justine', 'M', 'Americain');
insert into vip values ('22', 'ROUMBABA', 'Alexia', 'F', 'Francaise');
insert into vip values ('23', 'MAHER', 'Zain', 'M', 'Americain');
insert into vip values ('24', 'THERON', 'Charlize', 'F', 'Americaine');


insert into mannequin values ('2', 'FOX', 'Megan', '163', 'Armani');
insert into mannequin values ('9', 'HADID', 'Bella', '175', 'Img Models');
insert into mannequin values ('10', 'GRAHAM', 'Ashley', '175', 'Beauty');


insert into musicien values ('4', 'ELIZABETH', 'Katheryn', 'Capitol Records');
insert into musicien values ('11', 'CLAUDE', 'Mc Solaar', 'Nrj Music');
insert into musicien values ('12', 'SAID', 'Soprano', 'Tune Records');


insert into chanteur values ('3', 'JOHANSSON', 'Scarlett', 'Pete Yorn');
insert into chanteur values ('13', 'OKOU', 'Kaaris', 'Escobars');
insert into chanteur values ('14', 'KARIM', 'Lacrim', 'Escobars');


insert into acteur values ('1', 'COTILLARD', 'Marion', '30-09-1975');
insert into acteur values ('15', 'DEPP', 'Johnny', '30-07-1997');
insert into acteur values ('16', 'DICAPRIO', 'Leonardo', '11-12-1991');


insert into defile values ('Giorgio Armani', '7-07-2009', 'Paris', 'Giorgio');
insert into defile values ('Victorias Secret', '20-11-2017', 'Shanghai', 'Samuel');
insert into defile values ('Addition Elle', '14-11-2017', 'New-York', 'Michael');


insert into album values ('Witness', 'Capitol Records', '9-06-2017');
insert into album values ('Break Up', 'Pete Yorn', '15-09-2009');
insert into album values ('Geopoatique', 'Nrj Music', '3-11-2017');
insert into album values ('Dozo', 'Escobars', '3-11-2017');
insert into album values ('Everest', 'Tune Records', '14-10-2016');
insert into album values ('Ripro 3', 'Escobars', '17-11-2017');


insert into film values ('123456789', 'Dr Sophia Rikkin', 'Assassins Creed', '14-12-2016', 'Justin');
insert into film values ('526987413', 'Jack Sparrow', 'Pirates Caraibes', '24-05-2017', 'Joachim');
insert into film values ('485126957', 'Hugh Glass', 'The Revenant', '24-02-2016', 'Alejandro');


insert into photo values ('159263487', 'Deidhra Fahey', 'Deidhra Photography', 'Italie', 'Defile de mode');
insert into photo values ('951623847', 'Deidhra Fahey', 'Deidhra Photography', 'USA', 'Au studio');
insert into photo values ('753421869', 'Deidhra Fahey', 'Deidhra Photography', 'USA', 'Tournage dun clip');
insert into photo values ('654123987', 'Deidhra Fahey', 'Deidhra Photography', 'USA', 'Tournage dun film');


insert into revue values ('852369741', '25-11-2017');
insert into revue values ('812657895', '25-01-2017');
insert into revue values ('625987563', '15-06-2017');


insert into article values ('Stars 2017', 'Cette article parle des stars den ce moment qui sont entrain de faire le buzz');
insert into article values ('Talents 2017', 'Cette article parle des talents den ce moment');
insert into article values ('Beauty 2017', 'Cette article parle des grands defile den ce moment');


insert into se_marier values ('1', '31-12-2007', 'France', 'Canet', 'Hetero');
insert into se_marier values ('10', '15-02-2010', 'Amerique', 'Hervin', 'Hetero');
insert into se_marier values ('12', '26-07-2006', 'France', 'Roumbaba', 'Hetero');


insert into se_lier values ('2', '15-11-2010', 'Austin Green');
insert into se_lier values ('9', '15-03-2016', 'Zain');
insert into se_lier values ('5', '15-12-2014', 'Charliz');


insert into se_separer values ('4', '13-08-2010', 'Dispute');
insert into se_separer values ('15', '28-02-1986', 'Dispute');
insert into se_separer values ('17', '13-05-2010', 'Dispute');


insert into divorcer values ('3', 'Loi no-fault', '12-04-2011', 'Dispute');
insert into divorcer values ('13', 'Loi no-fault', '15-09-2008', 'Dispute');
insert into divorcer values ('14', 'Loi du 20 sepetembre 1992', '17-08-2010', 'Dispute');


insert into participe values ('2', 'Giorgio Armani');
insert into participe values ('9', 'Victorias Secret');
insert into participe values ('10', 'Addition Elle');


insert into faire values ('4', 'Witness');
insert into faire values ('11', 'Geopolitique');
insert into faire values ('12', 'Everest');


insert into realiser values ('3', 'Break Up');
insert into realiser values ('13', 'Dozo');
insert into realiser values ('14', 'Ripro 3');


insert into jouer values ('1', '123456789');
insert into jouer values ('15', '526987413');
insert into jouer values ('16', '485126957');


insert into etre_present values ('654123987', '1');
insert into etre_present values ('753421869', '3');
insert into etre_present values ('951623847', '4');
insert into etre_present values ('159263487', '2');


insert into utiliser values ('159263487', 'Stars 2017', '3');
insert into utiliser values ('951623847', 'Stars 2017', '4');
insert into utiliser values ('753421869', 'Talents 2017', '5');
insert into utiliser values ('654123987', 'Beauty 2017', '6');


insert into comporte values ('654123987', '852369741', '7');
insert into comporte values ('753421869', '852369741', '8');
insert into comporte values ('951623847', '812657895', '9');
insert into comporte values ('159263487', '625987563', '10');


insert into composer values ('Stars 2017', '852369741', '11');
insert into composer values ('Talents 2017', '812657895', '12');
insert into composer values ('Beauty 2017', '625987563', '13');
