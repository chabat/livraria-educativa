CREATE TABLE customer(
  cpf numeric PRIMARY KEY,
  name varchar (50) NOT NULL,
  email varchar (50) NOT NULL,
  password varchar (50) NOT NULL,
  phone varchar (50) NOT NULL,
  state varchar (50) NOT NULL,
  city varchar (20) NOT NULL,
  neighborhood varchar (20) NOT NULL,
  street varchar (50) NOT NULL,
  housenumber numeric NOT NULL,
  complement varchar (50) NOT NULL
);
