CREATE DATABASE dsvs;

USE dsvs;
 
CREATE TABLE admin(
	admin_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	fname VARCHAR(30),
	lname VARCHAR(30),
	username VARCHAR(30) NOT NULL,
	password VARCHAR(256) NOT NULL,
	account_status ENUM("Active", "Deleted") NOT NULL	
);

CREATE TABLE user(
	user_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	id_num VARCHAR(9) NOT NULL,
	password VARCHAR(256) NOT NULL,
	fname VARCHAR(30) NOT NULL,
	lname VARCHAR(30) NOT NULL,
	minitial CHAR(2),
	course ENUM("BSCS", "BSIT") NOT NULL,
	stud_year CHAR(2) NOT NULL,
	mobile VARCHAR(15),
	email VARCHAR(30),
	vote_status ENUM("Not Voted", "Voted") NOT NULL,
	application_status ENUM("Not Applied", "Applied") NOT NULL,
	account_status ENUM("Active", "Deleted") NOT NULL
);


CREATE TABLE application (
	application_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	user_id INT NOT NULL,
	position ENUM('President','Vice President for Internal Affairs','Asst. Vice President for Internal Affairs','Secretary','Vice President for External Affairs','Asst. Vice President for External Affairs','Liason','Vice President for Finance','Asst. Vice President for Finance','Treasurer','Vice President for Information','Asst. Vice President for Information','Public Relations Officer') NOT NULL,
	image VARCHAR(50),
	app_status ENUM("Pending", "Accepted", "Denied") NOT NULL,
	app_datetime DATETIME NOT NULL,	
	achievements VARCHAR(1000),
	isDelete ENUM('false', 'true') NOT NULL	
);

CREATE TABLE candidate(
	candidate_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	user_id INT NOT NULL,
	image VARCHAR(50),
	position ENUM('President','Vice President for Internal Affairs','Asst. Vice President for Internal Affairs','Secretary','Vice President for External Affairs','Asst. Vice President for External Affairs','Liason','Vice President for Finance','Asst. Vice President for Finance','Treasurer', 'Vice President for Information','Asst. Vice President for Information','Public Relations Officer') NOT NULL,
	vote_count INT,
	status ENUM('Not Winner', 'Winner'),
	term_start YEAR NOT NULL, 
	term_end YEAR NOT NULL,
	isDelete ENUM('false', 'true') NOT NULL	
);

CREATE TABLE officer(
	officer_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	user_id INT,
	position VARCHAR(50) NOT NULL,
	image varchar(50),
	year_start YEAR NOT NULL,
	year_end YEAR NOT NULL
);

CREATE TABLE announcement(
	announcement_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	admin_id INT NOT NULL,
	title VARCHAR(30) NOT NULL,
	content VARCHAR(2000) NOT NULL,
	ann_date DATETIME,
	isDelete ENUM("false", "true")
);


CREATE TABLE activation(
	activate_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	act_type ENUM("Application", "Results", "Votation") NOT NULL,
	act_status ENUM("Activated", "Deactivated") NOT NULL,
	act_date DATE NOT NULL,
	act_time TIME(6) NOT NULL		
);


CREATE TABLE logs(
	log_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	admin_id INT,
	user_id INT,
	action ENUM("Application was approved", "Application was declined", "Application process was activated", "Votation process was activated", "Result process was activated", "Application process was deactivated", "Votation process was deactivated", "Result process was deactivated", "sent an application") NOT NULL,
	log_datetime DATETIME NOT NULL
);

/*for FOREIGN KEY*/

ALTER TABLE application
ADD CONSTRAINT fk_app_u FOREIGN KEY (user_id) REFERENCES user(user_id);

ALTER TABLE candidate
ADD CONSTRAINT fk_c_u FOREIGN KEY (user_id) REFERENCES user(user_id);

ALTER TABLE officer
ADD CONSTRAINT fk_o_u FOREIGN KEY (user_id) REFERENCES user(user_id);

ALTER TABLE announcement
ADD CONSTRAINT fk_ann_ad FOREIGN KEY (admin_id) REFERENCES admin(admin_id);

ALTER TABLE logs
ADD CONSTRAINT fk_l_ad FOREIGN KEY (admin_id) REFERENCES admin(admin_id),
ADD CONSTRAINT fk_l_id FOREIGN KEY (user_id) REFERENCES user(user_id);


/* Inserting values*/
INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `username`, `password`) VALUES
(1, 'Administrator ', 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500');

INSERT INTO `user` (`user_id`, `id_num`, `password`, `fname`, `lname`, `minitial`, `course`, `stud_year`, `mobile`, `email`, `vote_status`, `application_status`, `account_status`) VALUES
(1, '12104631', '21caa621f15bc017db1bfa9b4eec3430', 'May Lanie', 'Abadiez', 'B', 'BSIT', '4', '09323536191', 'abadiezmay@gmail.com', 'Not Voted', 'Not Applied', 'Active'),
(2, '12103989', '0c3329c4811b90589f892ab5ab630548', 'Trishia Mae', 'Gumboc', 'G', 'BSIT', '4', '09321234567', 'trishiagumboc@yahoo.com', 'Not Voted', 'Not Applied', 'Active'),
(3, '12103690', 'e288f55c4a542a99bac246fe641a3d37', 'Jeremy', 'Solera', 'M', 'BSIT', '4', '09321234567', 'solera@gmail.com', 'Not Voted', 'Not Applied', 'Active'),
(4, '12100391', '84464cd39ae04a9ed969f8370760aa29', 'Jeremy', 'Yutiu', 'M', 'BSIT', '4', '09321234567', 'yutiu@yahoo.com', 'Not Voted', 'Not Applied', 'Active');


INSERT INTO `announcement` (`announcement_id`, `admin_id`, `title`, `content`, `ann_date`, `isDelete`) VALUES
(1, 1, 'Eyes Here!', 'Hello students! \r\n\r\nThe application for officers will start on January 4, 2016. and will end on January 29, 2016.\r\n\r\nStay tuned for more updates.', '2015-24-10 10:05:00 pm', 'false'),
(2, 1, 'Hello World', 'Hello World!', '2015-26-10 09:05:00 pm', 'false');

