use shop_quanao;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE category (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY  ,
  name varchar(50) NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL
);


-- create table collection


CREATE TABLE collection (
  id int(11) NOT NULL auto_increment PRIMARY KEY,
  name varchar(100) NOT NULL
) ;


-- create table orders

CREATE TABLE orders (
  id int(11) NOT NULL,
  fullname varchar(100) NOT NULL,
  phone_number varchar(20) NOT NULL,
  email varchar(150) NOT NULL,
  address varchar(200) NOT NULL,
  note varchar(255) DEFAULT NULL,
  order_date datetime DEFAULT NULL
) ;

-- create table product

CREATE TABLE product (
  id int(11) NOT NULL,
  title varchar(200) NOT NULL,
  price float NOT NULL,
  number float NOT NULL,
  thumbnail varchar(500) NOT NULL,
  thumbnail_1 varchar(500) NOT NULL,
  thumbnail_2 varchar(500) NOT NULL,
  thumbnail_3 varchar(500) NOT NULL,
  thumbnail_4 varchar(500) NOT NULL,
  thumbnail_5 varchar(500) NOT NULL,
  content longtext NOT NULL,
  id_category int(11) NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  id_sanpham int(11) NOT NULL
) ;

CREATE TABLE tbl_admin (
  id_admin int(11) NOT NULL primary key,
  tenadmin varchar(100) NOT NULL,
  tendangnhap varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  diachi varchar(100) NOT NULL,
  matkhau varchar(100) NOT NULL,
  dienthoai varchar(100) NOT NULL
) ;

CREATE TABLE tbl_dangky (
  id_dangky int(11) NOT NULL primary key auto_increment,
  tenkhachhang varchar(200) NOT NULL,
  tendangnhap varchar(200) NOT NULL,
  email varchar(100) NOT NULL,
  diachi varchar(200) NOT NULL,
  matkhau varchar(100) NOT NULL,
  dienthoai varchar(20) NOT NULL
) ;

CREATE TABLE user (
  id_user int(11) NOT NULL primary key,
  hoten varchar(255) CHARACTER SET utf8 NOT NULL,
  username varchar(255) CHARACTER SET utf8 NOT NULL,
  password varchar(255) CHARACTER SET utf8 NOT NULL,
  phone varchar(28) CHARACTER SET utf8 NOT NULL,
  email varchar(255) CHARACTER SET utf8 NOT NULL
) ;
alter table category 
add constraint fk_category_product foreign key (id) references product(id_category);
CREATE TABLE order_details (
  id int(11) NOT NULL,
  order_id int(11) NOT NULL,
  product_id int(11) NOT NULL,
  id_user int(11) NOT NULL,
  num int(11) NOT NULL,
  price float NOT NULL,
  status varchar(255) CHARACTER SET utf8 NOT NULL
);
INSERT INTO category (id, name, created_at, updated_at) VALUES
(1, 'Hoodie', '2021-07-07 11:50:15', '2022-11-06 15:07:28'),
(2, 'T-shirt', '2021-07-07 11:50:15', '2022-11-06 15:03:28'),
(3, 'Shorts', '2021-07-07 11:50:15', '2022-11-06 15:57:28'),
(4, 'Trousers', '2021-07-13 10:57:52', '2022-11-06 15:14:29');
INSERT INTO collection (id, name) VALUES
(1, 'One Piece'),
(2, 'The Spring'),
(3, 'Liliwyun');
INSERT INTO orders (id, fullname, phone_number, email, address, note, order_date) VALUES
(163, 'ninnin_1', '12345678', 'admin@gmail.com', 'Tphcm', 'DC x OP Luffy Raglan Hoodie - Multicolor', '2022-11-06 22:39:49'),
(164, 'ninnin_2', '12345678', 'admin@gmail.com', 'HaNoi', 'DC x OP Brook Hoodie - Blue', '2022-11-06 22:40:51'),
(165, 'ninnin_4', '12345678', 'admin@gmail.com', 'CanTho', 'DC x OP Chopper Hoodie - Black', '2022-11-06 22:44:20'),
(166, 'ninnin_3', '12345678', 'admin@gmail.com', 'NhaTrang', 'Hoodie - Black', '2022-11-06 22:47:24');
INSERT INTO order_details (id, order_id, product_id, id_user, num, price, status) VALUES
(172, 163, 1, 1, 1, 720000, 'Đang chuẩn bị'),
(173, 164, 2, 1, 1, 699000, 'Đang chuẩn bị'),
(176, 165, 5, 1, 1, 699000, 'Đang chuẩn bị'),
(177, 166, 4, 1, 1, 648000, 'Đang chuẩn bị');
INSERT INTO product (id, title, price, number, thumbnail, thumbnail_1, thumbnail_2, thumbnail_3, thumbnail_4, thumbnail_5, content, id_category, created_at, updated_at, id_sanpham) VALUES
(1, 'DC x OP Luffy Raglan Hoodie - Multicolor', 720000, 10, 'uploads/p1.png', 'uploads/p4.png', 'uploads/p2.png', 'uploads/p5.png', 'uploads/p6.png', 'uploads/p3.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 1, '2022-10-30 10:37:18', '2022-10-30 10:37:18', 0),
(2, 'DC x OP Brook Hoodie - Blue', 699000, 20, 'uploads/p7.png', 'uploads/p8.png', 'uploads/p9.png', 'uploads/p12.png', 'uploads/p11.png', 'uploads/p10.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 1, '2022-10-30 15:11:49', '2022-10-30 15:11:49', 1),
(3, 'DC x OP Luffy Attack T-shirt - White', 420000, 20, 'uploads/p13.png', 'uploads/p18.png', 'uploads/p15.png', 'uploads/p14.png', 'uploads/p17.png', 'uploads/p18.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 2, '2022-10-30 17:31:22', '2022-10-30 17:31:22', 1),
(4, 'DirtyCoins Don\'t Test Us Hoodie - Black', 648000, 20, 'uploads/p31.png', 'uploads/p32.png', 'uploads/p33.png', 'uploads/p36.png', 'uploads/p35.png', 'uploads/p34.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 1, '2022-10-30 21:59:06', '2022-10-30 21:59:06', 2),
(5, 'DC x OP Chopper Hoodie - Black', 699000, 10, 'uploads/p67.png', 'uploads/p71.png', 'uploads/p69.png', 'uploads/p68-1.png', 'uploads/p70.png', 'uploads/p72.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 1, '2022-10-30 22:10:40', '2022-10-30 22:10:40', 1),
(6, 'DirtyCoins x LilWuyn Logo Shorts - Black', 450000, 10, 'uploads/p25.png', 'uploads/p26.png', 'uploads/p27.png', 'uploads/p28.png', 'uploads/p29.png', 'uploads/p30.png', 'Chất liệu vải sợi tổng hợp. Hình mặt trước quần và logo DirtyCoins áp dụng kĩ thuật in lụa, lưng thun, có túi hai bên. Túi quần sau có nắp kèm nút bấm. Logo DirtyCoins thêu trên túi.', 3, '2022-10-31 12:37:46', '2022-10-31 12:37:46', 3),
(7, 'Dico Wavy Shorts - Black', 490000, 20, 'uploads/p55.png', 'uploads/p56.png', 'uploads/p57.png', 'uploads/p58.png', 'uploads/p59.png', 'uploads/p60.png', 'Chất liệu vải sợi tổng hợp. Hình mặt trước quần và logo DirtyCoins áp dụng kĩ thuật in lụa, lưng thun, có túi hai bên. Túi quần sau có nắp kèm nút bấm. Logo DirtyCoins thêu trên túi.', 3, '2022-10-31 12:40:58', '2022-10-31 12:40:58', 2),
(8, 'Shorts - Green', 450000, 20, 'uploads/p61.png', 'uploads/p62.png', 'uploads/p63.png', 'uploads/p64.png', 'uploads/p65.png', 'uploads/p66.png', 'Chất liệu vải sợi tổng hợp. Hình mặt trước quần và logo DirtyCoins áp dụng kĩ thuật in lụa, lưng thun, có túi hai bên. Túi quần sau có nắp kèm nút bấm. Logo DirtyCoins thêu trên túi.', 3, '2022-10-31 12:43:18', '2022-10-31 12:43:18', 2),
(9, 'Cargo Pants - Black', 620000, 15, 'uploads/p43.png', 'uploads/p44.png', 'uploads/p45.png', 'uploads/p46.png', 'uploads/p47.png', 'uploads/p48.png', 'Chất liệu vải sợi tổng hợp. Hình mặt trước quần và logo DirtyCoins áp dụng kĩ thuật in lụa, lưng thun, có túi hai bên. Túi quần sau có nắp kèm nút bấm. Logo DirtyCoins thêu trên túi.', 4, '2022-10-31 12:55:56', '2022-10-31 12:55:56', 2),
(10, 'DirtyCoins Dico Starry Jogger Pants - Red', 490000, 20, 'uploads/p49-1.png', 'uploads/p50.png', 'uploads/p51.png', 'uploads/p52.png', 'uploads/p53.png', 'uploads/p54.png', 'Chất liệu vải sợi tổng hợp. Hình mặt trước quần và logo DirtyCoins áp dụng kĩ thuật in lụa, lưng thun, có túi hai bên. Túi quần sau có nắp kèm nút bấm. Logo DirtyCoins thêu trên túi.', 4, '2022-10-31 12:59:42', '2022-10-31 12:59:42', 2),
(11, 'DC x OP Logo Print Khaki Pants - Black', 620000, 10, 'uploads/p73.png', 'uploads/p74.png', 'uploads/p75.png', 'uploads/p76.png', 'uploads/p77.png', 'uploads/p78.png', 'Chất liệu vải sợi tổng hợp. Hình mặt trước quần và logo DirtyCoins áp dụng kĩ thuật in lụa, lưng thun, có túi hai bên. Túi quần sau có nắp kèm nút bấm. Logo DirtyCoins thêu trên túi.', 4, '2022-10-31 13:06:27', '2022-10-31 13:06:27', 1),
(12, 'DirtyCoins Print Cardigan - Ivory/Green', 490000, 15, 'uploads/p37.png', 'uploads/p39.png', 'uploads/p40.png', 'uploads/p38.png', 'uploads/p41.png', 'uploads/p42.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 1, '2022-11-05 21:03:16', '2022-11-05 21:03:16', 2),
(13, 'DirtyCoins x LilWuyn Print L/S T-Shirt - Tan', 550000, 10, 'uploads/p19.png', 'uploads/p21.png', 'uploads/p22.png', 'uploads/p20.png', 'uploads/p23.png', 'uploads/p24.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 1, '2022-11-05 21:07:54', '2022-11-05 21:07:54', 3),
(14, 'DirtyCoins x LilWuyn Basic T-Shirt - Silver Lining', 699000, 10, 'uploads/1.png', 'uploads/3.png', 'uploads/4.png', 'uploads/2.png', 'uploads/5.png', 'uploads/6.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 2, '2022-11-07 08:44:17', '2022-11-07 08:44:17', 3),
(15, 'DirtyCoins Twin Flowers T-shirt - White', 420000, 20, 'uploads/7.png', 'uploads/9.png', 'uploads/10.png', 'uploads/8.png', 'uploads/11.png', 'uploads/12.png', 'Chất liệu nỉ cotton. Hình in thân trước và tay áo áp dụng công nghệ in kéo lụa thủ công. Bo cổ tay và bo thân trùng với màu vải tay áo và thân áo tương ứng. Tag vải riêng của BST được may trên túi phía trước.', 2, '2022-11-07 08:48:39', '2022-11-07 08:48:39', 0);
INSERT INTO tbl_admin (id_admin, tenadmin, tendangnhap, email, diachi, matkhau, dienthoai) VALUES
(1, 'chuchu', 'Admin_Chu', 'admin_chu@gmail.com', 'TPHCM', '9999', '012345678');

INSERT INTO tbl_dangky (id_dangky, tenkhachhang, tendangnhap, email, diachi, matkhau, dienthoai) VALUES
(104, 'chuchu', 'chuchudz', 'admin@gmail.com', 'tphcm', '123', '3232323'),
(105, 'chuchune', 'chuchune', 'admin@gmail.com', 'tphcm', '123', '3232323'),
(106, 'ducanh', 'ducanh', 'admin@gmail.com', 'tphcm', '123', '12345678'),
(107, 'test', 'test', 'admin@gmail.com', 'tphcm', '123', '12345678'),
(108, 'Nguyễn Thanh Hậu', 'Yakumo', 'thanhhau912003@gmail.com', '420A khu phố Nguyễn Trãi, phường Lái Thiêu, thành phố Thuận An, tỉnh Bình Dương', 'h19012003', '0396459031'),
(109, 'Nguyen Thanh Hau', 'yakumo', 'thanhhau912003@gmail.com', '420A khu phố Nguyễn Trãi, phường Lái Thiêu, thành phố Thuận An, tỉnh Bình Dương', 'h19012003', '0396459031'),
(110, '32', '323', '22@GG', '323', '323', '223');


INSERT INTO user (id_user, hoten, username, password, phone, email) VALUES
(7, 'Nguyễn Đăng Thành', 'AdminThanh', 'thanh1010', '+84387578520', 'bossryo68@gmail.com'),
(8, 'thanh dang', 'thanhthanh', 'thanhthanh', '0387578520', 'bossryo6811@gmail.com'),
(55, 'thanh dang', 'thanh0990909', 'thanh10', '0387578520', 'bossryoa68@gmail.com'),
(57, 'thanh dang', 'thanh', 'thanh', '0387578520', 'bossryo681@gmail.com'),
(58, 'thanh dang', 'LoginLogin', 'thanh', '0387578520', 'bossryo6Login8@gmail.com');

SET FOREIGN_KEY_CHECKS=0;
use shop_quanao;
ALTER TABLE order_details ADD CONSTRAINT fk_order_details_order_id FOREIGN KEY (order_id) REFERENCES orders(id);
ALTER TABLE order_details ADD CONSTRAINT fk_order_details_product_id FOREIGN KEY (product_id) REFERENCES product(id);
use shop_quanao;
ALTER TABLE order_details ADD CONSTRAINT fk_order_details_user_id FOREIGN KEY (id_user) REFERENCES user(id_user) ;
SET FOREIGN_KEY_CHECKS=1;
-- Add Foreign Key for product table
use shop_quanao;
ALTER TABLE product ADD CONSTRAINT fk_product_category_id FOREIGN KEY (id_category) REFERENCES category(id);
ALTER TABLE order_details
  MODIFY id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=183;
  ALTER TABLE orders
  MODIFY id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=172;
  ALTER TABLE product
  MODIFY id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=49;

use shop_quanao;
select * from orders;
select * from tbl_admin;
delete from tbl_dangky
delete from tbl_dangky;
alter table product add column type_clothes nvarchar(10)  not null default "áo";
select * from product;
insert into product (type_clothes)
values('áo'),
('áo'),
('áo'),
('áo'),
('áo'),
('quan'),
('quan'),
('quan'),
('quan'),
('quan'),
('quan'),
('áo'),
('áo'),
('áo'),
('áo');
alter table product drop column type_clothes;
update product
set type_clothes = "quan"
where id in (8 , 10);
use shop_quanao;
create table clothes (
id_clothes int not null primary key,
name_type nvarchar(20)
);
alter table clothes add constraint fk_clothes_protduct foreign key (id_clothes) references product(id);
select * from category;
insert into clothes
values (1,'hoodie'),
(2,'hoodie'),
(3,'t-shirt'),
(4,'hoodie'),
(5,'hoodie'),
(6,'short'),
(7,'short'),
(8,'short'),
(9,'long'),
(10,'long'),
(11,'long'),
(12,'hoodie'),
(13,'t-shirt'),
(14,'t-shirt'),
(15,'t-shirt');
select * from product;
insert into tbl_admin
values (2,'dien','badien','badien217@gmail.com','haiduong','12345678',021312312);
select * from orders;
drop table user;
alter table order_details drop constraint fk_order_details_user_id;
create table report
(
id_report int primary key not null,
star float,
comment int
);
select * from report;
alter table report add constraint fk_report_product foreign key (id_report) references product(id);
delete from report;
insert into report
values
(1,4.3,54),
(2,4.3,54),
(3,4.1,23),
(4,4.2,42),
(5,5.0,86),
(6,3.8,53),
(7,4.6,53),
(8,3.2,52),
(9,4.0,52),
(10,5.0,24),
(11,3.8,44),
(12,4.1,94),
(13,4.2,30),
(14,4.7,64),
(15,4.4,23)

;
-- alter table tbl_admin add constraint fK_dangky_admin foreign key (id_admin) references tbl_dangky(id_dangky)

ALTER TABLE orders  RENAME COLUMN fullname TO full_name;



SELECT * from orders, order_details, product
                                where order_details.order_id=orders.id and product.id=order_details.product_id ORDER BY order_date DESC
;
create table rating(
rating_id int not null primary key,
product_id int not null,
user_id int not null,
username varchar(100),
rating_number int,
comment text,
create_date datetime

);
alter table product modify thumbnail_1 varchar(100) not null;
alter table rating add constraint fk_rating_tbl_dangky foreign key (user_id) references tbl_dangky(register_id);
select * from rating;
alter table rating modify column rating_number float  null;
alter table report drop constraint fk_report_product
select * from report
DELIMITER $$
create trigger trg_report_product after insert on product
for each row 
begin
insert into report(id_report,star,comment)
values(new.id,5.0,1);
end$$
drop trigger trg_report_product
DELIMITER $$
create trigger trg_comment after insert on rating
FOR EACH ROW 
begin
update report join rating
set
report.comment = report.comment +1
where rating.product_id = rating.product_id;
end$$
DELIMITER ;
 SHOW TRIGGERS;
 
alter table product rename column id_order to type_clothes;
alter table product modify type_clothes varchar(200);
update product 
set type_clothes = 'ao'
where id in (12,13,14,15)

select id,title,type_clothes from product
delete from product where id= 57
 drop trigger trg_star
 alter table clothes drop constraint fk_clothes_protduct
 
 DELIMITER $$
create trigger trg_buy after insert on order_details
FOR EACH ROW 
begin
update product as t1 join (select num,product_id,order_id from order_details) as t2
join (select max(id) as max_id from orders) as t3 on t3.max_id = t2.order_id
set
t1.number = t1.number - t2.num
where 
t1.id = t2.product_id

;


end$$
drop trigger trg_buy
select * from product
select * from orders
select product_id,num from order_details,orders where order_details.order_id=orders.id
DELIMITER $$
create trigger trg_star after insert on rating
for each row
begin
update 

report as t1  join (select product_id,avg(rating_number) as avd  from rating group by product_id) as t2 on t2.product_id=t1.id_report
set t1.star = t2.avd;
end
;
DELIMITER $$
create trigger trg_add_id_rating after insert on product
for each row
begin
insert into rating(product_id,rating_number,comment) 
values(new.id,5,'1');
end$$;
delete from product where id = 61
alter table rating drop constraint fk_rating_product
drop trigger trg_add_id_rating
select rating.product_id from rating
select 
avg (rating_number)  as avg_sum
from rating
group by product_id
drop trigger trg_star
select * from report
select report.id_report,
 avg( rating.rating_number)  as avg_sum
from report join rating 
where report.id_report = rating.product_id
group by rating.product_id
select * from category
update category
set name = 'Trouser'
where id =3
ALTER TABLE report modify star decimal(2,1) not null
select * from collection
select
 product_id,report.id_report,
avg(rating_number)  as avg_sum
from rating,report
where rating.product_id = report.id_report
group by rating.product_id
 select * from rating
alter table rating add column avd_rating float 
update 
report as t1  cross join(select avg(rating_number) as avg_num from rating group by product_id) as t2 inner join rating as rat on t1.id_report = rat.product_id
set t1.star = t2.avg_num
update 
update 
rating as t1
 join(select product_id,avg(rating_number) as avg_num from rating group by product_id) as t2 on t2.product_id = t1.product_id
set t1.avd_rating = t2.avg_num


select  avg(rating_number) as avg_num from rating group by product_id



DELIMITER $$
create trigger change_avg after insert on rating
FOR EACH ROW 
begin

update 
rating 
set 
avd_rating = (select  avg(rating_number)  group by product_id);

end;
select * from category
alter table rating modify avd_rating float default 3
drop trigger change_avg
DELIMITER $$
create trigger insert_category after insert on product 
for each row
begin

 insert into clothes(id_clothes,name_type)
values(new.id,(select category.name from category,product where category.id = product.id_category and clothes.id_clothes = product.id));
end ;
drop trigger insert_category
select * from clothes
select * from order_details

select * from orders, order_details, product 
                    where order_details.order_id=orders.id and product.id=order_details.product_id 


delete from orders join order_details join product where id_order_details =207
                    ALTER TABLE order_details RENAME column id TO id_order_details