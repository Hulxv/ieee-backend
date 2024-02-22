CREATE TABLE member (
  member_id SERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  address TEXT,
  phone_number VARCHAR(20),
  email_address VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE subscriptions (
  subscription_id SERIAL PRIMARY KEY,
  member_id INTEGER REFERENCES members(member_id) NOT NULL,
  start_date DATE NOT NULL,
  end_date DATE,
  membership_type VARCHAR(255) NOT NULL
);

CREATE TABLE classes (
  class_id SERIAL PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  schedule TIME NOT NULL,
  max_capacity INTEGER NOT NULL
);

CREATE TABLE instructors (
  instructor_id SERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  address TEXT,
  phone_number VARCHAR(20),
  email_address VARCHAR(255) UNIQUE NOT NULL,
  expertise VARCHAR(255)
);


CREATE TABLE class_enroll (
  enrollment_id SERIAL PRIMARY KEY,
  class_id INTEGER REFERENCES classes(class_id) NOT NULL,
  member_id INTEGER REFERENCES members(member_id) NOT NULL,
  enrollment_date DATE NOT NULL
);

CREATE TABLE equipment (
  equipment_id SERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  availability BOOLEAN NOT NULL
);


CREATE TABLE class_equipment (
  class_id INTEGER REFERENCES classes(class_id) NOT NULL,
  equipment_id INTEGER REFERENCES equipment(equipment_id) NOT NULL,
  PRIMARY KEY (class_id, equipment_id)
);
