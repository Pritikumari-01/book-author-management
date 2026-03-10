# Book & Author Management System

A Laravel application to manage **Authors** and their **Books** with full CRUD functionality.  
Each Author can have multiple Books. The project demonstrates Laravel relationships, validation, and error handling.

## Setup Instructions

Clone the repository and run the following commands:

```bash
git clone https://github.com/Pritikumari-01/book-author-management.git
cd book-author-management
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

Then open in browser:

```
http://127.0.0.1:8000/authors-ui
http://127.0.0.1:8000/books
```

---

## Database Configuration

Update the `.env` file:

```
DB_DATABASE=book_author
DB_USERNAME=root
DB_PASSWORD=
```

Create the database manually in MySQL.
table name = authors and books
---

## Author Routes

```
/authors-ui
/authors/create
/authors/edit/{id}
/authors/delete/{id}
/authors/view/{id}
```

---

## Book Routes

```
/books
/books/create
/books/edit/{id}
/books/delete/{id}
/books/view/{id}
```

---

## Database Relationship

```
Author (1) -------- (Many) Books
```

Each Book belongs to one Author.

## Sample Seeded Authors

The seeder inserts some famous authors for testing:

- J.K. Rowling
- George R.R. Martin
- Dan Brown
- Agatha Christie

These appear automatically in the **Book Author dropdown**.
