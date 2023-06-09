# PDO

-   Pawan Pandeya
-   Jerome Fernandez

## Database Tables

The project requires the following database tables to be created:

## Users Table

This table stores the user information, including their login credentials and role.

## Fields

ID (PK)
Last name
First Name
Username
Password
Photo
Role (FK)

## Sample Data

To populate the table, use the following sample data:

ID Last Name First Name Username Password Photo Role
1 Smith John jsmith password NULL 2
2 Johnson Jane jjohnson password NULL 3
Roles Table
This table stores the different user roles.

## Fields

ID (PK)
Name
Description
Sample Data
To populate the table, use the following sample data:

ID Name Description
1 Guest Unregistered user
2 Admin Administrator
3 User Registered user
Project Requirements
MVC-Oriented CRUD for Users Table
Build out an MVC-oriented CRUD for the users table using the in-class build as a guide. The CRUD should include create, read, update, and delete functionality.

Queries for users need to include information from the linked Roles table via an inner join.

Customized UI Views and Styling
Customize the UI views and styling. Add a form view to add a new user. Re-adjust the code in views and change the number of view files as needed.

## PDO Implementation

Use PDO implementation for all database querying. This includes connection and prepared statements.

## User Role Property

Create a role property for users, which can be one of the following: unregistered (the default for new users), admin, or guest. Create users with different auth roles.

## Restricted Access

Restrict access to at least 1 route by user level. Only admin-level users should be able to set the role property for other users.

## Setter-Getter Methods

Create setter-getter methods for the level property. Create UI to allow setting of the level safely, which can only be done by an Admin.

## JSON-only Route

Create at least 1 route that returns content as JSON only. No other views/markup should be generated in this case.

Bonus Requirements
CRUD for Roles Table
Create CRUD functionality for the roles table, with appropriate UI to allow adding, editing, and deleting roles.

Password Encryption
Encrypt the password and store the encrypted version only.

User Update Form View
Add a form view for updating users.
