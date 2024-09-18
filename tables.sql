CREATE TABLE organisations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    orgname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    emailverification VARCHAR(55) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    passwd VARCHAR(300),
    state VARCHAR(250),
    lga VARCHAR(250),
    registrationStatus VARCHAR(10) NOT NULL,
    imageStatus VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE artists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    dname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    emailverification VARCHAR(55) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    passwd VARCHAR(300),
    state VARCHAR(250),
    lga VARCHAR(250),
    registrationStatus VARCHAR(10) NOT NULL,
    imageStatus VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);





CREATE TABLE traffic_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    uidentifier VARCHAR (255) NOT NULL,
    timestamper VARCHAR (255) NOT NULL,
    ref VARCHAR (255) NOT NULL,
    userType VARCHAR (100) NOT NULL,
    uniqueness VARCHAR (5) NOT NULL,
    visits INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE qrcode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    qrcodeid VARCHAR (255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE `products` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    productid varchar (300) NOT NULL,
    category varchar(200) NOT NULL,
    categoryType varchar(200) NOT NULL,
    dname varchar(250) NOT NULL,
    ddescription text,
    price bigint(100) NOT NULL,
    featured varchar(100),
    dprice bigint(100),
    statuss varchar(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cname VARCHAR(255) NOT NULL,
    ctype VARCHAR(255) NOT NULL
);

INSERT INTO categories (cname, ctype) VALUES 
('African Kitchen', 'Food'),
('Bakery & Pastry', 'Food'),
('Breakfast', 'Food'),
('Chinese', 'Food'),
('Continental Dishes', 'Food'),
('Desserts', 'Food'),
('Fries', 'Food'),
('Grill', 'Food'),
('Noodles', 'Food'),
('Pepper Soups', 'Food'),
('Peppered Proteins', 'Food'),
('Pizza', 'Food'),
('Protein', 'Food'),
('Rice', 'Food'),
('Salad', 'Food'),
('Seafood', 'Food'),
('Shawarma', 'Food'),
('Sides', 'Food'),
('Soups', 'Food'),
('Special', 'Food'),
('Spaghetti', 'Food'),
('Swallows', 'Food'),
('Vegetarian', 'Food'),
('Apertifs', 'Drinks'),
('Beer', 'Drinks'),
('Bitters', 'Drinks'),
('Brandy', 'Drinks'),
('Champagne', 'Drinks'),
('Cocktails', 'Drinks'),
('Cream', 'Drinks'),
('Energy Drink', 'Drinks'),
('Gin', 'Drinks'),
('Ice Cream', 'Drinks'),
('Milk Shakes', 'Drinks'),
('Mocktails', 'Drinks'),
('Non-alcoholic Wines', 'Drinks'),
('Smoothies', 'Drinks'),
('Soft Drinks', 'Drinks'),
('Vodka', 'Drinks'),
('Whisky', 'Drinks'),
('Wines - Red', 'Drinks'),
('Wines - White', 'Drinks');

CREATE TABLE themes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR(255) NOT NULL,
    themeinuse VARCHAR(255) NOT NULL,
    premium VARCHAR(50) NOT NULL,
    statuss varchar(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE premiumsubscription (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR(255) NOT NULL,
    analytics VARCHAR(20) NOT NULL,
    onlineorder VARCHAR(20) NOT NULL,
    superadmin VARCHAR(20) NOT NULL,
    paymentgateway VARCHAR(20) NOT NULL,
    statuss varchar(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE themedeposits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    transactionid INT NOT NULL,
    usercode VARCHAR(255) NOT NULL,
    themeid VARCHAR(20) NOT NULL,
    statuss varchar(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE partneraccounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    partnername VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    emailverification VARCHAR(55) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    passwd VARCHAR(300),
    country VARCHAR(250) NOT NULL,
    daddress VARCHAR(550),
    city VARCHAR(250),
    mystate VARCHAR(250),
    province VARCHAR(250),
    registrationStatus VARCHAR(10) NOT NULL,
    imageStatus VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE partnerbank (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    amount DECIMAL(10,2),
    totalearned DECIMAL(10,2),
    totalwithdrawn DECIMAL(10,2),
    registeredvendors BIGINT,
    themessold BIGINT,
    visitors BIGINT,
    beneficiaryid INT,
    accountname VARCHAR (250),
    accountnumber BIGINT,
    bankname VARCHAR(25),
    bankcode INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE linkmessages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    dmessage TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE promoters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (250) NOT NULL,
    userType VARCHAR (250) NOT NULL,
    asset VARCHAR (250) NOT NULL,
    assetstatus VARCHAR (10) NOT NULL,
    paymentstatus VARCHAR (10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE partnerqrcode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usercode VARCHAR (255) NOT NULL,
    qrcodeid VARCHAR (255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);








--
CREATE TABLE `accounts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nameofdiner` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `passwd` varchar(100),
  `gender` varchar(20) NOT NULL,
  `staffid` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `userstatus` varchar(100) NOT NULL,
  `createdon` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='record of accounts.'
AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
--
-- Table structure for table `staffmonitor`
--
CREATE TABLE `staffmonitor` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='record of staff monitor.'
AUTO_INCREMENT=1 ;
--
-- ------------------------------------------------------
--
-- Table structure for table `products`
--


-- ------------------------------------------------------
--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `orderid` bigint(100) NOT NULL,
  `tableno` varchar(20) NOT NULL,
  `productid` bigint(100) NOT NULL,
  `orderstatus` varchar(20) NOT NULL,
  `amount` bigint(100) NOT NULL,
  `quantity` int(10),
  `totalamount` bigint(100),
  `timeaccepted` bigint(100),
  `timeserved` bigint(100),
  `timepaid` bigint(100),
  `customerid` bigint(100) NOT NULL,
  `staffid` bigint(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='record of orders.'
AUTO_INCREMENT=1 ;
-- ------------------------------------------------------
--
-- Table structure for table `orders`
--

CREATE TABLE `finalorders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `orderid` bigint(100) NOT NULL,
  `tableid` varchar(20) NOT NULL,
  `total` bigint(100) NOT NULL,
  `customerid` bigint(100) NOT NULL,
  `staffid` bigint(100) NOT NULL,
  `orderstatus` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='record of orders.'
AUTO_INCREMENT=1 ;
-- ------------------------------------------------------
--
-- Table structure for table `assignedtables`
--

CREATE TABLE `assignedtables` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tableid` varchar(100)  NOT NULL,
  `staffid` bigint(100),
  `email` varchar(200),
  `phone` varchar(20),
  `dateassigned` varchar(90),
  `datedeactivated` varchar(90),
  `statuss` varchar(10),
  `tabletype` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='record of assigned tables.'
AUTO_INCREMENT=1 ;
-- ------------------------------------------------------
--
-- Table structure for table `assignedphones`
--

CREATE TABLE `assignedphones` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `phoneid` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `tableid` varchar(100)  NOT NULL,
  `staffid` bigint(100),
  `email` varchar(200),
  `dateassigned` varchar(90),
  `statuss` varchar(10),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='record of assigned phones.'
AUTO_INCREMENT=1 ;
