CREATE TABLE pedals 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 brand VARCHAR NOT NULL,  
 model INT NOT NULL,  
 release_date DATE NOT NULL,  
 settings_template JSON NOT NULL,  
 CHECK (id = 'undefined')
); 

CREATE TABLE patches 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 pedal_id INT NOT NULL,  
 name VARCHAR,  
 description VARCHAR NOT NULL,  
 created_at DATETIME NOT NULL,  
 user_id INT NOT NULL,  
 settings JSON,  
 file_path VARCHAR,  
 ir_id INT,  
 capture_id INT,  
 UNIQUE (file_path)
); 

CREATE TABLE user 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 username VARCHAR NOT NULL,  
 display_name VARCHAR NOT NULL,  
 about VARCHAR,  
 created_at DATETIME NOT NULL,  
 last_login DATETIME NOT NULL,  
 UNIQUE (username)
); 

CREATE TABLE user_pedals 
( 
 user_id INT NOT NULL,  
 pedal_id INT NOT NULL,  
); 

CREATE TABLE irs 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 name VARCHAR,  
 description VARCHAR,  
 uploaded_at DATETIME NOT NULL,  
 file_path VARCHAR NOT NULL,  
 user_id INT NOT NULL,  
 UNIQUE (file_path)
); 

CREATE TABLE amp_captures 
( 
 id INT PRIMARY KEY AUTO_INCREMENT,  
 name VARCHAR NOT NULL,  
 description VARCHAR,  
 uploaded_at DATETIME NOT NULL,  
 file_path INT NOT NULL,  
 user_id INT NOT NULL,  
 UNIQUE (file_path)
); 

ALTER TABLE patches ADD FOREIGN KEY(pedal_id) REFERENCES pedals (pedal_id)
ALTER TABLE patches ADD FOREIGN KEY(user_id) REFERENCES user (user_id)
ALTER TABLE patches ADD FOREIGN KEY(ir_id) REFERENCES irs (ir_id)
ALTER TABLE patches ADD FOREIGN KEY(capture_id) REFERENCES amp_captures (capture_id)
ALTER TABLE user_pedals ADD FOREIGN KEY(user_id) REFERENCES user (user_id)
ALTER TABLE user_pedals ADD FOREIGN KEY(pedal_id) REFERENCES pedals (pedal_id)
ALTER TABLE irs ADD FOREIGN KEY(user_id) REFERENCES user (user_id)
ALTER TABLE amp_captures ADD FOREIGN KEY(user_id) REFERENCES user (user_id)
