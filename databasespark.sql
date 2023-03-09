SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE transaction (
  sno int(3) NOT NULL,
  sender text NOT NULL,
  receiver text NOT NULL,
  balance int(8) NOT NULL,
  datetime1 datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 
INSERT INTO transaction (sno, sender, receiver, balance, datetime1) VALUES
(1, 'srav', 'lucky', 2000, '2023-02-19 07:30:28'),

(2, 'krish', 'kallu', 700, '2023-02-14 09:10:14'),

(3, 'kallu', 'srav', 1000, '2023-02-12 05:31:18'),

(4, 'Ajay', 'Baswa', 1200, '2023-02-12 03:30:04'),

(5, 'srav', 'ranji', 1800, '2023-02-08 04:28:34'),

(6, 'srav', 'khanna', 1100, '2023-02-08 02:30:28'),

(7, 'kallu', 'srav', 1400, '2023-02-07 01:40:18'),

(8, 'bhima', 'srav', 1200, '2023-02-06 02:18:20'),

(9, 'krish', 'lucky', 2000, '2023-02-06 07:30:28'),

(10, 'srav', 'lucky', 2000, '2023-01-29 02:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE users (
  id int(3) NOT NULL,
  name1 text NOT NULL,
  email varchar(30) NOT NULL,
  current_balance int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 

INSERT INTO users (Account no., Account holder name, email, Account Balance(in Rs.)) VALUES
(6927, 'khanna', 'khanna@gmail.com', 46600),

(2654, 'laxmi', 'laxmi@gmail.com', 30620),

(3624, 'krish', 'krish@gmail.com', 40000),

(8465, 'Ajay', 'ajay@gmail.com', 46000),

(8456, 'kallu', 'kallu@gmail.com', 34000),

(8875, 'ranji', 'ranji@gmail.com', 9623),

(8987, 'lucky', 'lucky@gmail.com', 45468),

(9845, 'bhima', 'bhima@gmail.com', 56600),

(6345, 'baswa', 'baswa@gmail.com', 54000);


 
ALTER TABLE transaction
  ADD PRIMARY KEY (sno);

ALTER TABLE users
  ADD PRIMARY KEY (Account_no.);


