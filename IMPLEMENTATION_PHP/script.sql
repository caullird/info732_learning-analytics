DROP TABLE IF EXISTS role;
DROP TABLE IF EXISTS internaluser;
DROP TABLE IF EXISTS student;
DROP TABLE IF EXISTS building;
DROP TABLE IF EXISTS classroom;
DROP TABLE IF EXISTS belonggroup;
DROP TABLE IF EXISTS peoplegroup;
DROP TABLE IF EXISTS formation;
DROP TABLE IF EXISTS educationalunit;
DROP TABLE IF EXISTS module;
DROP TABLE IF EXISTS course;
DROP TABLE IF EXISTS evaluation;
DROP TABLE IF EXISTS homework;


CREATE TABLE IF NOT EXISTS role (
    idrole int(11) NOT NULL AUTO_INCREMENT,
    designation_role varchar(100) NOT NULL,
    PRIMARY KEY (idrole)
    );

INSERT INTO role (idrole,designation_role) VALUES
(1,"Etudiant"),
(2,"Professeur"),
(3,"Administrateur");


CREATE TABLE IF NOT EXISTS internaluser (
    idinternaluser int(11) NOT NULL AUTO_INCREMENT,
    name_user varchar(100) NOT NULL,
    forname_user varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    username varchar(100) NULL,
    picture varchar(255) NULL,
    idrole int(11) NULL,
    deleted boolean NOT NULL default FALSE,
    PRIMARY KEY (idinternaluser),
    FOREIGN KEY (idrole) REFERENCES role(idrole)
    );

INSERT INTO internaluser (idinternaluser,name_user,forname_user,email,password,username,picture,idrole) VALUES
(1,"CAULLIREAU","Dorian","dorian.caullireau@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","caullird",'url not exists',1),
(2,"PERROLLAZ","Maverick","maverick.perrollaz@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","perrollm",'url not exists',1),
(3,"KOEBERLE ","Celien","celien.koeberle@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","koeberlec",'url not exists',1),
(4,"MASSIT","Clement","clement.massit@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","massitc",'url not exists',1),
(5,"GOBJI","Zied","zied.gobji@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","gobjiz",'url not exists',1),
(6,"COCHARD","Antoine","antoine.cochard@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","cocharda",'url not exists',1),
(7,"SOUCHON","Romain","romain.souchon@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","souchonr",'url not exists',1),
(8,"FORRAY","Gabriel","gabriel.forray@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","forrayg",'url not exists',1),
(9,"ALLOUI","Ilham","ilham.alloui@univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","allouii",'url not exists',2),
(10,"VALET","Lionel","lionel.valet@univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","valetl",'url not exists',2),
(11,"Administrateur","","admin@admin.admin","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","admin",'url not exists',3);

CREATE TABLE IF NOT EXISTS student (
    idstudent int(11) NOT NULL AUTO_INCREMENT,
    num_INE varchar(100) NULL,
    num_student varchar(100) NULL,
    idinternaluser int(11) NOT NULL,
    PRIMARY KEY (idstudent),
    FOREIGN KEY (idinternaluser) REFERENCES internaluser(idinternaluser)
    );

INSERT INTO student (idstudent,num_INE,num_student,idinternaluser) VALUES
(1,"1445D8854","8985444447",1),
(2,"1445D8855","8985444448",2),
(3,"1445D8856","8985444449",3),
(4,"1445D8857","8985444441",4),
(5,"1445D8858","8985444442",5),
(6,"1445D8859","8985444443",6),
(7,"1445D8860","8985444444",7),
(8,"14E5D8861","8944589444",8);

CREATE TABLE IF NOT EXISTS building(
    idbuilding int(11) NOT NULL AUTO_INCREMENT,
    name_building varchar(100) NULL,
    description_building varchar(500) NULL,
    PRIMARY KEY (idbuilding)
    );

INSERT INTO building(idbuilding,name_building,description_building) VALUES
(1,"Batiment B", "Description empty for this building"),
(2,"Batiment R", "Description empty for this building"),
(3,"Batiment Z", "Description empty for this building"),
(4,"Batiment T", "Description empty for this building"),
(5,"Batiment U", "Description empty for this building");


CREATE TABLE IF NOT EXISTS classroom (
    idclassroom int(11) NOT NULL AUTO_INCREMENT,
    name_classroom varchar(100) NULL,
    idbuilding int(11) NOT NULL,
    capacity_classroom int(11) NULL,
    description_classroom varchar(500) NULL,
    FOREIGN KEY (idbuilding) REFERENCES building(idbuilding),
    PRIMARY KEY (idclassroom)
    );

INSERT INTO classroom(idclassroom,name_classroom,idbuilding,capacity_classroom, description_classroom) VALUES
(1,"14",1,200, "Empty description for this classroom"),
(2,"120",2,200, "Empty description for this classroom"),
(3,"107",1,19, "Empty description for this classroom"),
(5,"206",3,30, "Empty description for this classroom"),
(6,"207",5,30, "Empty description for this classroom"),
(7,"208",5,30, "Empty description for this classroom"),
(8,"202",1,25, "Empty description for this classroom"),
(9,"203",4,25, "Empty description for this classroom"),
(10,"204",5,25, "Empty description for this classroom");

CREATE TABLE IF NOT EXISTS peoplegroup (
    idpeoplegroup int(11) NOT NULL AUTO_INCREMENT,
    title_peoplegroup varchar(500) NULL,
    description_peoplegroup varchar(500) NULL,
    PRIMARY KEY (idpeoplegroup)
    );

INSERT INTO peoplegroup (idpeoplegroup,title_peoplegroup,description_peoplegroup) VALUES
(1,"IDU3","Description empty for this group"),
(2,"IDU3-G1","Description empty for this group"),
(3,"IDU3-G2","Description empty for this group"),
(4,"Fi3","Description empty for this group"),
(5,"Fi4","Description empty for this group");

CREATE TABLE IF NOT EXISTS belonggroup (
    idbelonggroup int(11) NOT NULL AUTO_INCREMENT,
    idinternaluser int(11) NOT NULL,
    idpeoplegroup int(11) NOT NULL,
    PRIMARY KEY (idbelonggroup),
    FOREIGN KEY (idinternaluser) REFERENCES internaluser(idinternaluser),
    FOREIGN KEY (idpeoplegroup) REFERENCES peoplegroup(idpeoplegroup)
    );

INSERT INTO belonggroup (idbelonggroup, idinternaluser,idpeoplegroup) VALUES
(1,1,1),
(2,2,1),
(3,3,1),
(4,4,1),
(5,5,1),
(6,6,1),
(7,7,1),
(8,8,1),
(9,1,2),
(10,2,2),
(11,3,2),
(12,4,3),
(13,5,2),
(14,6,3),
(15,7,3),
(16,8,2);

CREATE TABLE IF NOT EXISTS formation (
    idformation int(11) NOT NULL AUTO_INCREMENT,
    name_formation varchar(100) NOT NULL,
    PRIMARY KEY (idformation)
    );


INSERT INTO formation(idformation,name_formation) VALUES
(1,"IDU"),
(2,"SNI"),
(3,"MM");

CREATE TABLE IF NOT EXISTS educationalunit (
    ideducationalunit int(11) NOT NULL AUTO_INCREMENT,
    title_educationalunit varchar(100) NOT NULL,
    description_educationalunit varchar(2000) NOT NULL,
    PRIMARY KEY (ideducationalunit)
    );


INSERT INTO educationaleunit (ideducationalunit,title_educationalunit,description_educationalunit) VALUES
(1,"UE701 - Mathématiques et données","Description empty for this educational unit"),
(2,"UE702 - Informatique et conception","Description empty for this educational unit"),
(3,"UE703 - Visualisation et gouvernance de la donnée","Description empty for this educational unit");

CREATE TABLE IF NOT EXISTS module (
    idmodule int(11) NOT NULL AUTO_INCREMENT,
    title_module varchar(100) NOT NULL,
    description_module varchar(2000) NOT NULL,
    gradecoefficient_module float NOT NULL,
    idprofessorreferent int(11) NOT NULL,
    FOREIGN KEY (idprofessorreferent) REFERENCES internaluser(idinternaluser),
    PRIMARY KEY (idmodule)
    );

INSERT INTO module (idmodule,title_module, description_module, gradecoefficient_module, idprofessorreferent) VALUES
(1,"DATA731 - Modélisation stochastique", "Description empty for this module",3.0, 9 ),
(2,"INFO731 - Sécurité et cryptographie", "Description empty for this module", 3.0, 10),
(3,"MATH741 - Probabilité et statistiques", "Description empty for this module", 2.0, 10);

CREATE TABLE IF NOT EXISTS course (
    idcourse int(11) NOT NULL AUTO_INCREMENT,
    title_course varchar(100) NOT NULL,
    description_course varchar(2000) NULL,
    day_course varchar(25) NOT NULL,
    timebegin_course TIME NOT NULL,
    timeend_course TIME NOT NULL,
    idprofessor int(11) NOT NULL,
    idclassroom int(11) NOT NULL,
    idpeoplegroup int(11) NOT NULL,
    idmodule int(11) NOT NULL,
    FOREIGN KEY (idprofessor) REFERENCES internaluser(idinternaluser),
    FOREIGN KEY (idclassroom) REFERENCES classroom(idclassroom),
    FOREIGN KEY (idpeoplegroup) REFERENCES peoplegroup(idpeoplegroup),
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    PRIMARY KEY (idcourse)
    );

INSERT INTO course (idcourse,title_course,description_course,day_course,timebegin_course,timeend_course,idprofessor,idclassroom,idpeoplegroup, idmodule) VALUES
(1,"TD 1/4","Description empty for this course", "12/01/2021","08:00:00", "10:00:00", 9, 1, 1, 1),
(2,"TD 2/4","Description empty for this course", "12/01/2021","14:00:00", "16:00:00", 9, 2, 1, 1),
(3,"TD 3/4","Description empty for this course", "12/01/2021","16:00:00", "18:00:00", 9, 3, 1, 1),
(4,"CM 1/4","Description empty for this course", "12/01/2021","14:00:00", "16:00:00", 9, 2, 1, 1),
(5,"CM 2/4","Description empty for this course", "12/01/2021","14:00:00", "16:00:00", 9, 2, 1, 1);

CREATE TABLE IF NOT EXISTS evaluation(
    idevaluation int(11) NOT NULL AUTO_INCREMENT,
    title_evaluation varchar(100) NOT NULL,
    mark_evaluation float(3) NOT NULL,
    comment_evaluation varchar(255) NULL,
    idcorrector int(11) NOT NULL,
    idstudent int(11) NOT NULL,
    idmodule int(11) NOT NULL,
    FOREIGN KEY (idcorrector) REFERENCES internaluser(idinternaluser),
    FOREIGN KEY (idstudent) REFERENCES internaluser(idinternaluser),
    FOREIGN KEY (idcorrector) REFERENCES internaluser(idinternaluser),
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    PRIMARY KEY (idevaluation)
    );

INSERT INTO evaluation(idevaluation, title_evaluation, mark_evaluation, comment_evaluation, idcorrector, idstudent, idmodule) VALUES
(1, "Probabilité Statistique", 20, "Bon travail !", 10, 1, 1),
(2, "Probabilité Statistique", 10, "Du mieux depuis la dernière fois !", 10, 2,1),
(3, "Probabilité Statistique", 20, "Bon travail !", 10, 3,1);

CREATE TABLE IF NOT EXISTS homework(
    idhomework int(11) NOT NULL AUTO_INCREMENT,
    title_homework varchar(100) NOT NULL,
    description_homework varchar(255) NULL,
    deadline DATETIME NOT NULL,
    checked boolean NOT NULL default FALSE,
    idmodule int(11) NOT NULL,
    idstudent int(11) NOT NULL,
    FOREIGN KEY (idstudent) REFERENCES internaluser(idinternaluser),
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    PRIMARY KEY (idhomework)
    );

INSERT INTO homework(idhomework, title_homework, description_homework, deadline, checked, idmodule, idstudent) VALUES
(1, "Devoir Maison 1", "Description empty for this homework", "12-01-2021", FALSE, 1, 1),
(2, "Devoir Maison 1", "Description empty for this homework", "12-01-2021", FALSE, 1, 2),
(3, "Devoir Maison 1", "Description empty for this homework", "12-01-2021", FALSE, 1, 3);