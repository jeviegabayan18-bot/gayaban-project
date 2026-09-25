# Personal Task Manager

Project Code: WST21-PM-2026-SF

Student Name: Jevie Gabayan

Course & Year: BSIT Second Year

Database Used: SQLite

Features:

- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status

This project also includes the classroom demo pages:

- `/students` → StudentController → `students/index.blade.php`
- `/subjects` → SubjectController → `subjects/index.blade.php`

The task manager follows the same flow: Route → Controller → Model → Database → Blade.

## How the teacher can check this in GitHub Codespaces

1. Open this public repository on GitHub.
2. Click **Code → Codespaces → Create codespace on main**.
3. Wait until the Codespace finishes setup. It installs Laravel dependencies, creates `.env`, generates the app key, creates the SQLite database, and runs migrations.
4. The app starts with `php artisan serve` on port **8000**. Open the forwarded port in the browser.
5. If the page does not open, run this in the Codespace terminal:

```bash
php artisan serve --host=0.0.0.0 --port=8000
```

Then open the forwarded URL.

## Pages to check

| URL | What it shows |
| --- | --- |
| `/` | Home page with links |
| `/students` | Student Page |
| `/subjects` | Subject Page |
| `/tasks` | All saved tasks |
| `/tasks/create` | Add a task |

On `/tasks` you can add a task, edit it, delete it, and switch its status between **Pending** and **Completed**.

## How a request works

1. The **route** in `routes/web.php` decides where the URL goes.
2. The **controller** in `app/Http/Controllers` handles the action.
3. The **model** `App\Models\Task` reads and writes the `tasks` table.
4. The **Blade view** in `resources/views` is the page the user sees.

## Run it locally (optional)

Requires PHP 8.2 or newer and Composer.

```bash
composer update
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```
