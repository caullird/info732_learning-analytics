DROP TABLE IF EXISTS internaluser;
DROP TABLE IF EXISTS teacher;
DROP TABLE IF EXISTS student;
DROP TABLE IF EXISTS building;
DROP TABLE IF EXISTS classroom;
DROP TABLE IF EXISTS belonggroup;
DROP TABLE IF EXISTS peoplegroup;
DROP TABLE IF EXISTS formation;
DROP TABLE IF EXISTS educationalunit;
DROP TABLE IF EXISTS module;
DROP TABLE IF EXISTS typecourse;
DROP TABLE IF EXISTS course;
DROP TABLE IF EXISTS evaluation;
DROP TABLE IF EXISTS homework;

CREATE TABLE IF NOT EXISTS internaluser (
    idinternaluser int(11) NOT NULL AUTO_INCREMENT,
    name_user varchar(100) NOT NULL,
    forname_user varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    username varchar(100) NULL,
    picture varchar(255) NULL,
    admin boolean NOT NULL default FALSE,
    deleted boolean NOT NULL default FALSE,
    PRIMARY KEY (idinternaluser)
    );

INSERT INTO internaluser (idinternaluser,name_user,forname_user,email,password,username,picture,admin) VALUES
(1,"CAULLIREAU","Dorian","dorian.caullireau@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","caullird",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(2,"PERROLLAZ","Maverick","maverick.perrollaz@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","perrollm",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(3,"KOEBERLE ","Celien","celien.koeberle@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","koeberlc",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(4,"MASSIT","Clement","clement.massit@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","massitc",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(5,"GOBJI","Zied","zied.gobji@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","gobjiz",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(6,"COCHARD","Antoine","antoine.cochard@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","cocharda",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(7,"SOUCHON","Romain","romain.souchon@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","souchonr",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(8,"FORRAY","Gabriel","gabriel.forray@etu.univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","forrayg",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(9,"ALLOUI","Ilham","ilham.alloui@univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","allouii",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(10,"VALET","Lionel","lionel.valet@univ-smb.fr","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","valetl",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',FALSE),
(11,"Administrateur","","admin@admin.admin","$2y$10$8.V7eL2.V02RR7gbut/QIeyS0KHl0f6HvCDZQASqpjfC4OQMKPASS","admin",'https://cdn.dribbble.com/users/6142/screenshots/5679189/media/1b96ad1f07feee81fa83c877a1e350ce.png?compress=1&resize=400x300',TRUE);

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

CREATE TABLE IF NOT EXISTS teacher (
    idteacher int(11) NOT NULL AUTO_INCREMENT,
    num_box int(11) NULL,
    PRIMARY KEY (idteacher)
    );

INSERT INTO teacher (idteacher, num_box) VALUES
(1, 201),
(2, 202),
(3, 203),
(4, 204),
(5, 205);

CREATE TABLE IF NOT EXISTS building(
    idbuilding int(11) NOT NULL AUTO_INCREMENT,
    name_building varchar(100) NULL,
    description_building varchar(500) NULL,
    PRIMARY KEY (idbuilding)
    );

INSERT INTO building(idbuilding,name_building,description_building) VALUES
(1,"Batiment B", "Description vide pour ce building"),
(2,"Batiment R", "Description vide pour ce building"),
(3,"Batiment Z", "Description vide pour ce building"),
(4,"Batiment T", "Description vide pour ce building"),
(5,"Batiment U", "Description vide pour ce building");


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
(1,"14",1,200, "Description vide pour cette classroom"),
(2,"120",2,200, "Description vide pour cette classroom"),
(3,"107",1,19, "Description vide pour cette classroom"),
(5,"206",3,30, "Description vide pour cette classroom"),
(6,"207",5,30, "Description vide pour cette classroom"),
(7,"208",5,30, "Description vide pour cette classroom"),
(8,"202",1,25, "Description vide pour cette classroom"),
(9,"203",4,25, "Description vide pour cette classroom"),
(10,"204",5,25, "Description vide pour cette classroom");

CREATE TABLE IF NOT EXISTS peoplegroup (
    idpeoplegroup int(11) NOT NULL AUTO_INCREMENT,
    title_peoplegroup varchar(500) NULL,
    description_peoplegroup varchar(500) NULL,
    PRIMARY KEY (idpeoplegroup)
    );

INSERT INTO peoplegroup (idpeoplegroup,title_peoplegroup,description_peoplegroup) VALUES
(1,"IDU3","Description vide pour ce group"),
(2,"IDU3-G1","Description vide pour ce group"),
(3,"IDU3-G2","Description vide pour ce group"),
(4,"Fi3","Description vide pour ce group"),
(5,"Fi4","Description vide pour ce group");

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


INSERT INTO educationalunit (ideducationalunit,title_educationalunit,description_educationalunit) VALUES
(1,"UE701 - Mathématiques et données","Description vide pour ce educational unit"),
(2,"UE702 - Informatique et conception","Description vide pour ce educational unit"),
(3,"UE703 - Visualisation et gouvernance de la donnée","Description vide pour ce educational unit");

CREATE TABLE IF NOT EXISTS module (
    idmodule int(11) NOT NULL AUTO_INCREMENT,
    title_module varchar(100) NOT NULL,
    description_module varchar(2000) NOT NULL,
    gradecoefficient_module float NOT NULL,
    idteacher int(11) NOT NULL,
    FOREIGN KEY (idteacher) REFERENCES teacher(idteacher),
    PRIMARY KEY (idmodule)
    );

INSERT INTO module (idmodule,title_module, description_module, gradecoefficient_module, idteacher) VALUES
(1,"DATA731 - Modélisation stochastique", "Description vide pour ce module",3.0, 1 ),
(2,"INFO731 - Sécurité et cryptographie", "Description vide pour ce module", 3.0, 1),
(3,"MATH741 - Probabilité et statistiques", "Description vide pour ce module", 2.0, 1),
(4,"PROJ731 - Flux de données et accès concurrents", "Description vide pour ce module", 2.0, 1);

CREATE TABLE IF NOT EXISTS typecourse (
    idtypecourse int(11) NOT NULL AUTO_INCREMENT,
    type_course varchar(100) NOT NULL,
    PRIMARY KEY (idtypecourse)
);

INSERT INTO typecourse (idtypecourse,type_course) VALUES
(1,"CM"),
(2,"TD"),
(3,"TP");

CREATE TABLE IF NOT EXISTS course (
    idcourse int(11) NOT NULL AUTO_INCREMENT,
    title_course varchar(100) NOT NULL,
    description_course varchar(2000) NULL,
    day_course varchar(25) NOT NULL,
    timebegin_course TIME NOT NULL,
    timeend_course TIME NOT NULL,
    idteacher int(11) NOT NULL,
    idclassroom int(11) NOT NULL,
    idpeoplegroup int(11) NOT NULL,
    idmodule int(11) NOT NULL,
    idtypecourse int(11) NOT NULL,
    FOREIGN KEY (idteacher) REFERENCES teacher(idteacher),
    FOREIGN KEY (idclassroom) REFERENCES classroom(idclassroom),
    FOREIGN KEY (idpeoplegroup) REFERENCES peoplegroup(idpeoplegroup),
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    FOREIGN KEY (idtypecourse) REFERENCES typecourse(idtypecourse),
    PRIMARY KEY (idcourse)
    );


INSERT INTO course (idcourse,title_course,description_course,day_course,timebegin_course,timeend_course,idteacher,idclassroom,idpeoplegroup, idmodule,idtypecourse) VALUES
(1,"TD 1/4","Description vide pour ce course", "12/01/2021","08:00:00", "10:00:00", 9, 1, 1, 1, 2),
(2,"TD 2/4","Description vide pour ce course", "12/01/2021","14:00:00", "16:00:00", 9, 2, 1, 1, 2),
(3,"TD 3/4","Description vide pour ce course", "12/01/2021","16:00:00", "18:00:00", 9, 3, 1, 1, 2),
(4,"CM 1/4","Description vide pour ce course", "12/01/2021","14:00:00", "16:00:00", 9, 2, 1, 1, 1),
(5,"CM 2/4","Description vide pour ce course", "12/01/2021","14:00:00", "16:00:00", 9, 2, 1, 1, 1);

CREATE TABLE IF NOT EXISTS evaluation(
    idevaluation int(11) NOT NULL AUTO_INCREMENT,
    title_evaluation varchar(100) NOT NULL,
    mark_evaluation float(3) NOT NULL,
    comment_evaluation varchar(255) NULL,
    idteacher int(11) NOT NULL,
    idstudent int(11) NOT NULL,
    idmodule int(11) NOT NULL,
    FOREIGN KEY (idteacher) REFERENCES teacher(idteacher),
    FOREIGN KEY (idstudent) REFERENCES student(idstudent),
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    PRIMARY KEY (idevaluation)
    );

INSERT INTO evaluation(idevaluation, title_evaluation, mark_evaluation, comment_evaluation, idteacher, idstudent, idmodule) VALUES
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
    FOREIGN KEY (idstudent) REFERENCES student(idstudent),
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    PRIMARY KEY (idhomework)
    );

INSERT INTO homework(idhomework, title_homework, description_homework, deadline, checked, idmodule, idstudent) VALUES
(1, "Devoir Maison 1", "Description vide pour ce homework", "2021-01-01 00:00:00", FALSE, 1, 1),
(2, "Devoir Maison 1", "Description vide pour ce homework", "2021-01-01 00:00:00", FALSE, 1, 2),
(3, "Devoir Maison 1", "Description vide pour ce homework", "2021-01-01 00:00:00", FALSE, 1, 3);

CREATE TABLE IF NOT EXISTS moduleunit (
    idmoduleunit int(11) NOT NULL AUTO_INCREMENT,
    idmodule int(11) NOT NULL,
    ideducationalunit int(11) NOT NULL,
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    FOREIGN KEY (ideducationalunit) REFERENCES educationalunit(ideducationalunit),
    PRIMARY KEY (idmoduleunit)
    );

INSERT INTO moduleunit (idmoduleunit,idmodule,ideducationalunit) VALUES
(1,1,1),
(2,2,1),
(3,3,1);

CREATE TABLE IF NOT EXISTS modulestudent (
    idmodulepeople int(11) NOT NULL AUTO_INCREMENT,
    idstudent int(11) NOT NULL,
    idmodule int(11) NOT NULL,
    FOREIGN KEY (idmodule) REFERENCES module(idmodule),
    FOREIGN KEY (idstudent) REFERENCES student(idstudent),
    PRIMARY KEY (idmodulepeople)
    );

INSERT INTO modulestudent (idmodulepeople,idstudent,idmodule) VALUES
(1,1,1),
(2,1,2),
(3,1,3),
(4,2,1),
(5,2,2),
(6,2,3);
