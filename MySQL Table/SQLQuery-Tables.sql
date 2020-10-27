If Object_ID('Customer', 'U') IS NOT NULL
	Drop Table Customer;

	Create Table Customer (
	
		name_user varchar (20)  Not Null, --Automatically generate surrogate key.
		create_date  date Not null,						--Uses delimiters spaces in name
		password_user Varchar(255) NOT NULL,			--Variable characters
		last_name varchar (50),
		first_name varchar(50),
		street varchar (50),
		city varchar (50),
		postcode varchar (50),
		emial varchar (50),
		phone varchar (50),
		primary key (name_user));
		Go

	If Object_ID('Product', 'U') IS NOT NULL
	Drop Table Product;

	Create Table Product (

		product_ID int identity (1,1) Not null,
		category varchar (50) Not Null,
		Product_description varchar (50) Not Null,
		price decimal (10,2) Not Null,
		Primary Key (product_ID));
		Go

		
	If Object_ID('OderItems', 'U') IS NOT NULL
	Drop Table OrderItems;

		Create Table OrderItems(
			Order_ID int identity (1,1) Not Null,
			name_user varchar (20) Not Null,
			Product_description varchar (100) Not Null,
			price decimal (10,2) Not Null, 
			Primary Key (Order_ID));
			Go
	
	Alter Table OrderItems
	add constraint FK_Cuser_name
	Foreign Key (name_user)
	References Customer (name_user)
	
		
	Insert Into Product (category,Product_description, price)
	values ('Chicken' , 'Pulled Chicken', 4.99);

			
	Insert Into Product (category,Product_description, price)
	values ('Chicken' , 'Chicken Strips', 3.99);

			
	Insert Into Product (ProductID, category,Product_description, price)
	values (2,'Chicken' , 'Roast Half Chicken', 4.50);

			
	Insert Into Product (ProductID, category,Product_description, price)
	values (3, 'Chicken' , 'Chicken Winds', 3.50);

			
	Insert Into Product (ProductID, category,Product_description, price)
	values (4, 'Sauce' , 'Chipotle', 0.99);


			
	Insert Into Product (ProductID, category,Product_description, price)
	values (5, 'Sauce' , 'Mild Chilli', 0.99);

		Insert Into Product (ProductID, category,Product_description, price)
	values (6, 'Sauce' , 'Sriracha', 0.99);

	

		Insert Into Product (ProductID, category,Product_description, price)
	values (7,'Extra' , 'Chips', 2.00);

			
	Insert Into Product (ProductID, category,Product_description, price)
	values (8, 'Extra' , 'Spicy Rice', 2.50);


			
	Insert Into Product (ProductID, category,Product_description, price)
	values (9, 'Extra' , 'Side Salad', 1.50);

	Delete From Product
	Where Product_ID = 8;










	select  *
	from Customer;



	select  *
	from Product;

	select *
	from OrderItems;


	drop table Customer;

	drop table Product;

	drop table Order_Items;