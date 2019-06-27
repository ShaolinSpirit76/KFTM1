#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        ID           Int  Auto_increment  NOT NULL ,
        lastName     Varchar (50) NOT NULL ,
        firstName    Varchar (50) NOT NULL ,
        birthDate    Date ,
        phoneNumber  Varchar (50) ,
        mail         Varchar (50) NOT NULL ,
        picture      Blob ,
        login        Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        verification TinyINT NOT NULL ,
        status       Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Role
#------------------------------------------------------------

CREATE TABLE Role(
        ID      Int  Auto_increment  NOT NULL ,
        role    Varchar (50) NOT NULL ,
        ID_User Int NOT NULL
	,CONSTRAINT Role_PK PRIMARY KEY (ID)

	,CONSTRAINT Role_User_FK FOREIGN KEY (ID_User) REFERENCES User(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Events
#------------------------------------------------------------

CREATE TABLE Events(
        ID               Int  Auto_increment  NOT NULL ,
        eventType        Varchar (50) NOT NULL ,
        eventDate        Datetime NOT NULL ,
        eventMaxUser     Int NOT NULL ,
        eventDescription Varchar (255) NOT NULL
	,CONSTRAINT Events_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Courses
#------------------------------------------------------------

CREATE TABLE Courses(
        ID          Int  Auto_increment  NOT NULL ,
        courseType  Varchar (50) NOT NULL ,
        courseHours Varchar (50) NOT NULL ,
        ID_Events   Int NOT NULL
	,CONSTRAINT Courses_PK PRIMARY KEY (ID)

	,CONSTRAINT Courses_Events_FK FOREIGN KEY (ID_Events) REFERENCES Events(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UserStatus
#------------------------------------------------------------

CREATE TABLE UserStatus(
        ID            Int  Auto_increment  NOT NULL ,
        studentCourse Varchar (50) ,
        studentYear   Int ,
        studentBelt   Varchar (50) ,
        teacherCourse Varchar (50) ,
        teacherRank   Varchar (50) ,
        ID_User       Int NOT NULL
	,CONSTRAINT UserStatus_PK PRIMARY KEY (ID)

	,CONSTRAINT UserStatus_User_FK FOREIGN KEY (ID_User) REFERENCES User(ID)
	,CONSTRAINT UserStatus_User_AK UNIQUE (ID_User)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        id                 Int  Auto_increment  NOT NULL ,
        articleName        Varchar (50) NOT NULL ,
        articlePicture     Blob NOT NULL ,
        articleQuantity    Int NOT NULL ,
        articleDescription Varchar (255) NOT NULL ,
        articlePrice       Int NOT NULL
	,CONSTRAINT Article_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ShopCart
#------------------------------------------------------------

CREATE TABLE ShopCart(
        ID         Int  Auto_increment  NOT NULL ,
        id_Article Int NOT NULL
	,CONSTRAINT ShopCart_PK PRIMARY KEY (ID)

	,CONSTRAINT ShopCart_Article_FK FOREIGN KEY (id_Article) REFERENCES Article(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participating
#------------------------------------------------------------

CREATE TABLE Participating(
        ID      Int NOT NULL ,
        ID_User Int NOT NULL
	,CONSTRAINT Participating_PK PRIMARY KEY (ID,ID_User)

	,CONSTRAINT Participating_Events_FK FOREIGN KEY (ID) REFERENCES Events(ID)
	,CONSTRAINT Participating_User0_FK FOREIGN KEY (ID_User) REFERENCES User(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Checking
#------------------------------------------------------------

CREATE TABLE Checking(
        ID      Int NOT NULL ,
        ID_User Int NOT NULL
	,CONSTRAINT Checking_PK PRIMARY KEY (ID,ID_User)

	,CONSTRAINT Checking_Courses_FK FOREIGN KEY (ID) REFERENCES Courses(ID)
	,CONSTRAINT Checking_User0_FK FOREIGN KEY (ID_User) REFERENCES User(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Booking
#------------------------------------------------------------

CREATE TABLE Booking(
        ID      Int NOT NULL ,
        ID_User Int NOT NULL
	,CONSTRAINT Booking_PK PRIMARY KEY (ID,ID_User)

	,CONSTRAINT Booking_ShopCart_FK FOREIGN KEY (ID) REFERENCES ShopCart(ID)
	,CONSTRAINT Booking_User0_FK FOREIGN KEY (ID_User) REFERENCES User(ID)
)ENGINE=InnoDB;

