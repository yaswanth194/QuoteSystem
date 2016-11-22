TABLE #1

mysql> create table salesassociate(sa_id INT NOT NULL AUTO_INCREMENT,
    -> name VARCHAR(16) NOT NULL,
    -> dob VARCHAR(10) NOT NULL,
    -> addr1 VARCHAR(30) NOT NULL,
    -> addr2 VARCHAR(30),
    -> phone INT(10) NOT NULL,
    -> email VARCHAR(25) NOT NULL,
    -> password VARCHAR(8) NOT NULL,
    -> PRIMARY KEY(sa_id));
Query OK, 0 rows affected (0.13 sec)

mysql> explain salesassociate;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| sa_id    | int(11)     | NO   | PRI | NULL    | auto_increment |
| name     | varchar(16) | NO   |     | NULL    |                |
| dob      | varchar(10) | NO   |     | NULL    |                |
| addr1    | varchar(30) | NO   |     | NULL    |                |
| addr2    | varchar(30) | YES  |     | NULL    |                |
| phone    | int(10)     | NO   |     | NULL    |                |
| email    | varchar(25) | NO   |     | NULL    |                |
| password | varchar(8)  | NO   |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
8 rows in set (0.00 sec)

==========================================================================================================

TABLE #2

mysql> create table quotes(quote_id INT(6) NOT NULL AUTO_INCREMENT,
    -> saoc_id INT,
    -> comm_rate FLOAT, 
    -> status CHAR(10) NOT NULL, 
    -> postatus INT(1) NOT NULL,
    -> PRIMARY KEY(quote_id, saoc_id, c_id),
    -> FOREIGN KEY(saoc_id) REFERENCES salesassociate(sa_id));
Query OK, 0 rows affected (0.17 sec)

mysql> explain quotes;
+-----------+----------+------+-----+---------+----------------+
| Field     | Type     | Null | Key | Default | Extra          |
+-----------+----------+------+-----+---------+----------------+
| quote_id  | int(6)   | NO   | PRI | NULL    | auto_increment |
| saoc_id   | int(11)  | NO   | PRI | 0       |                |
| c_id      | int(11)  | NO   | PRI | NULL    |                |
| comm_rate | float    | YES  |     | NULL    |                |
| status    | char(10) | NO   |     | NULL    |                |
| postatus  | int(1)   | NO   |     | NULL    |                |
+-----------+----------+------+-----+---------+----------------+

==========================================================================================================

TABLE #3:

mysql> create table quotesItems(l_id INT(10) NOT NULL,
    -> q_id INT(6) NOT NULL,
    -> descrptn VARCHAR(50) NOT NULL,
    -> price INT(6) NOT NULL,
    -> PRIMARY KEY(q_id),
    -> FOREIGN KEY(q_id) REFERENCES quotes(quote_id));
Query OK, 0 rows affected (0.06 sec)

mysql> explain quotesItems;
+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| l_id     | int(10)     | NO   |     | NULL    |       |
| q_id     | int(6)      | NO   | PRI | NULL    |       |
| descrptn | varchar(50) | NO   |     | NULL    |       |
| price    | int(6)      | NO   |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+
4 rows in set (0.00 sec)

=====================                         END OF QUERIES                   =======================