-- Parse::SQL::Dia          version 0.23                              
-- Documentation            http://search.cpan.org/dist/Parse-Dia-SQL/
-- Environment              Perl 5.014002, /usr/bin/perl              
-- Architecture             i686-linux-gnu-thread-multi-64int         
-- Target Database          mysql-innodb                              
-- Input file               dil.dia                                   
-- Generated at             Fri Apr 26 09:51:59 2013                  
-- Typemap for mysql-innodb not found in input file                   

-- get_constraints_drop 

-- get_permissions_drop 

-- get_view_drop

-- get_schema_drop
drop table if exists shippers;
drop table if exists packagers;
drop table if exists movers;
drop table if exists users;
drop table if exists countries;
drop table if exists bookings;

-- get_smallpackage_pre_sql 

-- get_schema_create
create table shippers (
   id      INTEGER AUTO_INCREMENT not null,
   user_id INTEGER                        ,
   name    VARCHAR(50)                    ,
   constraint pk_shippers primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table packagers (
   id      INTEGER AUTO_INCREMENT not null,
   user_id INTEGER                        ,
   name    VARCHAR(50)                    ,
   constraint pk_packagers primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table movers (
   id      INTEGER AUTO_INCREMENT not null,
   user_id INTEGER                        ,
   name    VARCHAR(50)                    ,
   constraint pk_movers primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table users (
   id         INTEGER AUTO_INCREMENT not null,
   username   VARCHAR(50)                    ,
   password   VARCHAR(50)                    ,
   question1  VARCHAR(256)                   ,
   answer1    VARCHAR(256)                   ,
   question2  VARCHAR(256)                   ,
   answer2    VARCHAR(256)                   ,
   question3  VARCHAR(256)                   ,
   answer3    VARCHAR(256)                   ,
   name       VARCHAR(50)                    ,
   last_name  VARCHAR(50)                    ,
   email      VARCHAR(50)                    ,
   country_id INTEGER                NOT NULL,
   street     VARCHAR(255)                   ,
   city       VARCHAR(50)                    ,
   state      VARCHAR(50)                    ,
   zipcode    VARCHAR(50)                    ,
   country    VARCHAR(50)                    ,
   phone      VARCHAR(50)                    ,
   constraint pk_users primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table countries (
   id   INTEGER AUTO_INCREMENT not null,
   name VARCHAR(50)                    ,
   abbr VARCHAR(50)                    ,
   constraint pk_countries primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table bookings (
   id                     INTEGER AUTO_INCREMENT not null,
   user_id                INTEGER                        ,
   shipper_id             INTEGER                        ,
   packager_id            INTEGER                        ,
   mover_id               INTEGER                        ,
   send_date              DATE                           ,
   arrival_date           DATE                           ,
   cargo_type             VARCHAR(50)                    ,
   cargo_qty              VARCHAR(50)                    ,
   cargo_details          VARCHAR(255)                   ,
   container_quantity     INTEGER                        ,
   origin_street          VARCHAR(255)                   ,
   origin_city            VARCHAR(50)                    ,
   origin_state           VARCHAR(50)                    ,
   origin_zip             VARCHAR(50)                    ,
   origin_country_id      INTEGER                NOT NULL,
   origin_port            VARCHAR(255)                   ,
   destination_street     VARCHAR(255)                   ,
   destination_city       VARCHAR(50)                    ,
   destination_state      VARCHAR(50)                    ,
   destination_zip        VARCHAR(50)                    ,
   destination_country_id INTEGER                NOT NULL,
   destination_port       VARCHAR(255)                   ,
   payment_method         VARCHAR(255)                   ,
   insured                BOOLEAN                        ,
   constraint pk_bookings primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- get_view_create

-- get_permissions_create

-- get_inserts

-- get_smallpackage_post_sql

-- get_associations_create
