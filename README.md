# Todo List App

A simple todo list web app built with PHP and MySQL. I made it to practice CRUD (Create, Read, Update, Delete).

## Features

- Add a new item
- See all items in boxes
- Edit an item
- Delete an item
- Each item saves the date it was added

## Built with

- PHP
- MySQL (using PDO)
- HTML and CSS
- XAMPP

## Files

- `todo.php`: the main page (add items and show the list)
- `edit_item.php`: edit an item
- `delete_item.php`: delete an item
- `db.php`: connects to the database
- `index.php`: home page

## Database

Database name: `todolist`

Table: `items`

| Column | Type |
|---|---|
| id | INT, AUTO_INCREMENT, primary key |
| item | VARCHAR(255) |
| created_at | DATETIME, default CURRENT_TIMESTAMP |

## How to run it

1. Install XAMPP and start Apache and MySQL.
2. Copy the project folder into `C:\xampp\htdocs`.
3. Open phpMyAdmin and create a database called `todolist`.
4. Create the `items` table with the columns above.
5. Open `http://localhost/your-folder/todo.php` in your browser.

## What I learned

- Connecting PHP to a database with PDO
- Using `INSERT`, `SELECT`, `UPDATE` and `DELETE`
- Sending an id through a link (`?id=3`)
- Making a simple page layout with CSS flexbox
