/* LIVE LOGGING CREATE TABLES + INSERT DATA
DATE	: July 27 2014
AUTHOR	: J. van Marion
CONTACT	: jeroen@vanmarion.nl
VERSION	: 1.4 BETA

DESCRIPTION:
	live logging of Wowza Streaming Server applications and Vhost based on xml files converted to json into highcharts.
	SQL structure is needed to store customers, applications and status of the streams
	Additional tables will be added in future versions


*/

CREATE TABLE IF NOT EXISTS wlive_status (
 status_id INT NOT NULL,
 status_oms VARCHAR(100) NOT NUll,
PRIMARY KEY(status_id)
) ENGINE=InnoDB;

/* default data */
INSERT INTO wlive_status (status_id, status_oms) VALUES
(1, 'App Active'),
(2, 'App Inactive');

CREATE TABLE IF NOT EXISTS wlive_customers (
 customer_id int NOT NULL AUTO_INCREMENT,
 first_name varchar(100) not null,
 last_name varchar(100) not null,
 start_date datetime not null,
 PRIMARY KEY (customer_id)
) ENGINE=InnoDB;

INSERT INTO wlive_customers (first_name, last_name, start_date) VALUES
('john', 'Doe', '2014-07-24 00:31:00');

CREATE TABLE IF NOT EXISTS wlive_app (
  app_id int NOT NULL AUTO_INCREMENT,
  application varchar(100) NOT NULL,
  customer_id INT NOT NULL,
  description varchar(100) NOT NULL,
  status_id INT NOT NULL,
  PRIMARY KEY (app_id),
  FOREIGN KEY (customer_id) REFERENCES wlive_customers(customer_id),
  FOREIGN KEY (status_id) REFERENCES wlive_status(status_id)
) ENGINE=InnoDB;


INSERT INTO wlive_app (application, customer_id, description, status_id) VALUES
('live', '1', 'live stream', 1),
('vod', '1', 'vod stream', 1);