select * from listings;
update listings set Title = 'Toyota Noah', Company='KAD 008Q' where id=1;
update listings set Title = 'Volkswagen Toureg', Company='KBJ 014M', tags='recent engine overhaul, noticeable respray, poorly driven' where id=2;
insert into listings (title,tags,company,location,email,website,description,created_at) values ('Range Rover Vogue','SQL,python,','KAJ 984k','Mombasa','gitau@cdms.co.ke','cdms.co.ke','',now());
insert into listings (title,tags,company,location,email,website,description,created_at) values ('Land Rover discovery','SQL,python,','KVZ 749','Machakos','gitau@cdms.co.ke','cdms.co.ke','',now());
insert into listings (title,tags,company,location,email,website,description,created_at) values ('Volkswagen beetle','SQL,python,','KRC 959','Emali','gitau@cdms.co.ke','cdms.co.ke','',now());
insert into listings (title,tags,company,location,email,website,description,created_at) values ('Chevrolet','SQL,python,','KSL 939','Oloitoktok','gitau@cdms.co.ke','cdms.co.ke','',now())