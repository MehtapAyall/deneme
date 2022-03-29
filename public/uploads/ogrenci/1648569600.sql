create database Odev3_Mehtap;
create table Odev3_Mehtap.ogrenci (numara int primary key, tc_no varchar(11), adi varchar(20), soyadi varchar(25), okula_baslama_tarihi varchar(20), dogum_tarihi varchar(8), dogum_yeri varchar(15));
Insert Into Odev3_Mehtap.ogrenci(numara,tc_no,adi,soyadi,okula_baslama_tarihi,dogum_tarihi,dogum_yeri) 
values (161307001,'12345678910','Berk','Bir','10.10.00','10.10.00','Kocaeli');
Insert Into Odev3_Mehtap.ogrenci(numara,tc_no,adi,soyadi,okula_baslama_tarihi,dogum_tarihi,dogum_yeri) 
values (161307002,'12345678911','Seda','İki','11.10.00','11.10.00','Kocaeli');
Insert Into Odev3_Mehtap.ogrenci(numara,tc_no,adi,soyadi,okula_baslama_tarihi,dogum_tarihi,dogum_yeri) 
values (161307003,'12345678912','Handan','Üc','12.05.05','12.05.05','Kocaeli');
Insert Into Odev3_Mehtap.ogrenci(numara,tc_no,adi,soyadi,okula_baslama_tarihi,dogum_tarihi,dogum_yeri) 
values (161307004,'12345678913','Emre','Dort','05.05.05','05.05.05','Kocaeli');
alter table Odev3_Mehtap.ogrenci add column ogr_boy_uzunlugu int;
alter table Odev3_Mehtap.ogrenci add column ogr_kilo int;
update Odev3_Mehtap.ogrenci set ogr_boy_uzunlugu=165, ogr_kilo=74 where numara=161307001;
update Odev3_Mehtap.ogrenci set ogr_boy_uzunlugu=180, ogr_kilo=52 where numara=161307002;
update Odev3_Mehtap.ogrenci set ogr_boy_uzunlugu=162, ogr_kilo=45 where numara=161307003;
update Odev3_Mehtap.ogrenci set ogr_boy_uzunlugu=187, ogr_kilo=80 where numara=161307004;