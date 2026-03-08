CREATE TABLE pedals 
( 
  id INT PRIMARY KEY AUTO_INCREMENT,  
  brand VARCHAR(100) NOT NULL,  
  model VARCHAR(100) NOT NULL,
  slug VARCHAR(150) NOT NULL UNIQUE,
  release_date DATE,
  settings_template JSON NOT NULL
); 

CREATE TABLE users
( 
  id INT PRIMARY KEY AUTO_INCREMENT,  
  username VARCHAR(50) NOT NULL UNIQUE, 
  display_name VARCHAR(100) NOT NULL,  
  about TEXT, 
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,  
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  last_login DATETIME
); 

CREATE TABLE patches 
( 
  id INT PRIMARY KEY AUTO_INCREMENT,  
  pedal_id INT NOT NULL,  
  user_id INT NOT NULL,  
  ir_id INT,  
  capture_id INT,
  name VARCHAR(100) NOT NULL,  
  description TEXT,  
  settings JSON,  
  file_path VARCHAR(100) UNIQUE,  
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
); 

CREATE TABLE user_pedals 
( 
  user_id INT NOT NULL,  
  pedal_id INT NOT NULL,
  PRIMARY KEY (user_id, pedal_id) -- Impede pedais duplicados para o mesmo usuário
); 

CREATE TABLE irs 
( 
  id INT PRIMARY KEY AUTO_INCREMENT,  
  user_id INT NOT NULL,  
  name VARCHAR(100) NOT NULL,  
  description TEXT,  
  file_path VARCHAR(100) NOT NULL UNIQUE,  
  uploaded_at DATETIME DEFAULT CURRENT_TIMESTAMP 
); 

CREATE TABLE amp_captures 
( 
  id INT PRIMARY KEY AUTO_INCREMENT,  
  user_id INT NOT NULL,  
  name VARCHAR(100) NOT NULL,  
  description TEXT,  
  file_path VARCHAR(100) NOT NULL UNIQUE,  
  uploaded_at DATETIME DEFAULT CURRENT_TIMESTAMP 
); 


ALTER TABLE patches ADD FOREIGN KEY (pedal_id) REFERENCES pedals (id) ON DELETE CASCADE;
ALTER TABLE patches ADD FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE;
ALTER TABLE patches ADD FOREIGN KEY (ir_id) REFERENCES irs (id) ON DELETE SET NULL;
ALTER TABLE patches ADD FOREIGN KEY (capture_id) REFERENCES amp_captures (id) ON DELETE SET NULL;

ALTER TABLE user_pedals ADD FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE;
ALTER TABLE user_pedals ADD FOREIGN KEY (pedal_id) REFERENCES pedals (id) ON DELETE CASCADE;

ALTER TABLE irs ADD FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE;
ALTER TABLE amp_captures ADD FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE;