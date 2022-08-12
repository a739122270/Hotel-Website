CREATE TABLE Guest1(
         Username TEXT NOT NULL,
         Password TEXT NOT NULL,
         FirstName TEXT NOT NULL,
         LastName TEXT NOT NULL,
         Email TEXT NOT NULL,
         Telephone INT NOT NULL,
         PassportNumber TEXT NOT NULL
);

CREATE TABLE AllRoomType(
      RoomNumber INT UNIQUE NOT NULL,
      RoomType INT NOT NULL
);


CREATE TABLE Staff(
         staffname TEXT NOT NULL,
         staffpassword TEXT NOT NULL,
         staffid TEXT NOT NULL,
         staffphone INT NOT NULL
);
CREATE TABLE Room(
      Username TEXT NOT NULL,
      RoomNumber INT UNIQUE NOT NULL,
      RoomType INT NOT NULL,
      Startdate DATE NOT NULL,
      Enddate DATE NOT NULL
);

INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','101','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','102','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','103','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','104','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','105','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','106','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','107','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','108','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','109','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','110','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','111','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','112','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('1','113','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','201','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','202','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','203','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','204','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','205','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','206','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','207','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','208','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','209','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','210','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','211','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','212','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('2','213','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','301','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','302','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','303','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','304','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','305','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','306','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','307','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','308','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','309','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','310','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','311','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','312','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('3','313','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','401','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','402','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','403','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','404','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','405','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','406','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','407','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','408','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','409','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','410','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','411','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','412','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('4','413','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','501','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','502','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','503','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','504','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','505','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','506','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','507','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','508','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','509','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','510','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','511','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','512','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('5','513','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','601','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','602','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','603','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','604','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','605','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','606','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','607','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','608','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','609','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','610','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','611','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','612','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('6','613','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','701','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','702','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','703','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','704','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','705','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','706','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','707','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','708','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','709','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','710','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','711','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','712','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('7','713','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','801','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','802','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','803','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','804','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','805','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','806','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','807','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','808','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','809','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','810','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','811','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','812','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('8','813','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','901','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','902','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','903','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','904','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','905','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','906','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','907','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','908','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','909','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','910','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','911','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','912','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('9','913','VIP Room');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1001','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1002','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1003','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1004','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1005','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1006','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1007','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1008','Small Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1009','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1010','Large Single Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1011','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1012','Large Double Bed');
INSERT INTO AllRoomType (Floor,RoomNumber,RoomType) 
    VALUES('10','1013','VIP Room');
