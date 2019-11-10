CREATE TABLE customer(
cus_no varchar(4) PRIMARY KEY NOT NULL,
cus_fname varchar(150) NOT NULL,
cus_lname varchar(150) NOT NULL,
cus_email varchar(150) NOT NULL,
cus_password varchar(100) NOT NULL,
cus_bday date NOT NULL,
cus_nic varchar(15) NOT NULL,
cus_address1 varchar(200) NOT NULL,
cus_address2 varchar(200) NULL,
cus_city varchar(50) NULL,
cus_state varchar(50) NULL,
cus_zip varchar(10) NULL
)

CREATE TABLE contact_email(
eId int AUTO_INCREMENT PRIMARY KEY,
con_email varchar(100) NOT NULL,
req_date date NOT NULL
);

CREATE TABLE reservation(
    res_no varchar(4) PRIMARY KEY NOT NULL,
    res_name varchar(150) NOT NULL,
    res_email varchar(150) NOT NULL,
    res_date date NOT NULL,
    res_hall varchar(50) NOT NULL,
    res_how_many int(10) NOT NULL,
    res_type varchar(100) NULL,
    res_tot varchar(20) NOT NULL,
    res_comments varchar(250) NULL
);

INSERT INTO reservation(res_no, res_name, res_email, res_date, res_hall,
 res_how_many, res_type, res_tot, res_comments) VALUES
('R1', 'kamal perera', 'kamalperera@gmail.com', '2019-03-29', 'Hall 01', '100', 'Birthday Party', '200000', '');

CREATE TABLE additional_services(
    as_no int(20) AUTO_INCREMENT NOT NULL,
    res_no varchar(4) NOT NULL,
    PRIMARY KEY(as_no,res_no),
    res_date date NOT NULL,
    liquor TINYINT(1) NULL,
    DJ_Music TINYINT(1) NULL,
    Decorations TINYINT(1) NULL,
    Pro_Services TINYINT(1) NULL,
    Photography TINYINT(1) NULL,
    addi_tot varchar(20) NOT NULL
);

INSERT INTO additional_services
(res_no, res_date, liquor, DJ_Music, Decorations, Pro_Services, Photography, addi_tot) VALUES
 ('R1', '2019-03-29', true, true, false, true, true, '30000')

CREATE TABLE time_of_reservation(
    tor_no int(20) AUTO_INCREMENT NOT NULL,
    res_no varchar(4) NOT NULL,
    PRIMARY KEY(tor_no,res_no),
    res_date date NOT NULL,
    res_hall varchar(50) NOT NULL,
    Night_Party TINYINT(1) NULL,
    Mornign_Party TINYINT(1) NULL,
    Afternoon_Party TINYINT(1) NULL,
    Evening_Party TINYINT(1) NULL
);

INSERT INTO time_of_reservation
(res_no, res_date, res_hall, Night_Party, Mornign_Party, Afternoon_Party, Evening_Party) VALUES
 ('R1', '2019-03-29', 'Hall 01', 1, 1, 0, 0)



SELECT * FROM time_of_reservation WHERE res_date = '2019-03-29' AND res_hall = 'Hall 01'
