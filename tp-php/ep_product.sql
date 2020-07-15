DROP TABLE IF EXISTS ep_product;

CREATE TABLE ep_product (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(50) NOT NULL,
    productCode CHAR(5) NOT NULL,
    productPrice DECIMAL(6,2) NOT NULL,
    productDescription VARCHAR(30) NOT NULL,
    discontinue BOOLEAN NOT NULL,
    inventoryCount INT NOT NULL,
    releaseDate TIMESTAMP NOT NULL
);

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product A','AA_11',12.56,'Product A description', false, 123, '2018-08-19 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product B','BB_12',12.00,'Product B description', true, 456, '2018-05-19 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product C','CC_31',34.56,'Product C description', false, 23, '2018-07-15 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product D','DD_41',1.50,'Product D description', false, 5, '2019-10-12 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product E','EE_15',1245.00,'Product E description', false, 666, '2019-03-19 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product F','FF_41',14.46,'Product F description', false, 65, '2017-04-19 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product G','GG_67',145.66,'Product G description', true, 5, '2019-08-23 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product H','HH_88',132.76,'Product H description', false, 0, '2016-08-14 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product I','II_01',45.96,'Product I description', false, 23, '2019-08-17 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product J','JJ_71',152.56,'Product J description', false, 12, '2019-08-17 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product K','KK_78',162.56,'Product K description', false, 5, '2019-08-17 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product L','LL_99',1762.57,'Product L description', false, 87, '2019-08-17 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product M','MM_00',142.59,'Product M description', false, 99, '2013-08-18 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product N','NN_61',32.66,'Product N description', false, 54, '2019-08-19 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product O','OO_18',342.55,'Product O description', false, 23, '2014-08-20 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product P','PP_14',142.58,'Product P description', true, 67, '2019-08-14 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product Q','QQ_12',1245.50,'Product Q description', false, 78, '2017-08-17 10:28:42');

INSERT INTO ep_product (`productName`,`productCode`,`productPrice`,`productDescription`,`discontinue`,`inventoryCount`,`releaseDate`)
VALUES ('Product R','RR_88',2342.55,'Product R description', false, 43, '2019-05-19 10:28:42');