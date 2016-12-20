-- File name: C:\Users\Hiep\Desktop\thht.sql
-- Created by DBConvert http://www.dbconvert.com


--
-- Table structure for table `user`
--

CREATE TABLE "user" (  "id" SERIAL NOT NULL ,
  "email" VARCHAR(255) NOT NULL ,
  "username" VARCHAR(255) NOT NULL ,
  "password" VARCHAR(255) NOT NULL ,
  "date" DATE NOT NULL ,
  "avatar" VARCHAR(255) NOT NULL ,
  "address" TEXT NOT NULL ,
  "description" TEXT NOT NULL ,
  "group" INTEGER NOT NULL ,
  "level" INTEGER NOT NULL ,
  PRIMARY KEY ("id")
); 


--
-- Dumping data for table `user`
--

INSERT INTO "user" ("id","email","username","password","date","avatar","address","description","group","level") VALUES (1,'vanduong0090@gmail.com','duong123','vanduong','1995-02-12 00:00:00','Untitled.png','Thanh Ấm - Vân Đình - Ứng Hòa - Hà Nội 2','Một chút đẹp trai, một chút lịch lãm , một chút phong cách , một chút suy tư 123',2,1),(3,'aa@gmail.com','hiepnqqqqqq','123456','0001-01-01','','','',0,0),(6,'aaa@gmail.com','','','2016-10-21 00:00:00','','','',0,0),(10,'','','','2016-10-21 00:00:00','','','',0,0),(11,'aa@gmail.com','hiepnq34','123456','2016-10-07 00:00:00','Untitled1.png','hN','hay hay',1,1),(14,'i@gmail.com','hihihihi','123456','2016-10-21 00:00:00','a.jpg','HN','hihi',1,1),(15,'i@gmail.com','hihihihi','123456','2016-10-21 00:00:00','a.jpg','HN','hihi',1,1),(19,'','','','2016-10-21 00:00:00','','','',0,0),(20,'i@gmail.com','aaaaa','123456','2016-10-21 00:00:00','a.jpg','HN','hihi',1,1),(22,'a@gmail.com','vanduong0090@gmail.com','vanduong','0001-01-01','','','',0,0);
SELECT setval('public."user_id_seq"', max("id") ) FROM "user"; 

