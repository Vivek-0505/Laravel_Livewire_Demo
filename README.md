Laravel-Livewire Invoice Dashboard (Inspired by Stripe)

A minimalistic invoice management dashboard modeled after Stripe’s UI, developed using Laravel, Livewire, and TailwindCSS.

🚀 Getting Started
Follow these steps to set up and run the project locally:

1. Clone the Repository
Clone the project repository to your local machine.

2. Install Required Dependencies
Execute the following commands to install all necessary dependencies:

bash
Copy
Edit
composer install
npm install

3. Configure Environment
Duplicate the example environment file and rename it to .env:

bash
Copy
Edit
cp .env.example .env
Create required directories within the storage folder:

bash
Copy
Edit
mkdir framework/cache
mkdir framework/sessions
mkdir framework/views
Ensure the correct permissions are granted.

Generate an application key:

bash
Copy
Edit
php artisan key:generate

4. Set Up the Database
If a database is being used, configure the connection settings inside the .env file, then run the migrations:

bash
Copy
Edit
php artisan migrate

5. Compile Frontend Assets
Build TailwindCSS and other frontend assets by running:

bash
Copy
Edit
npm run dev

6. Start the Development Server
Run the Laravel development server with:

bash
Copy
Edit
php artisan serve

7. Open the Application
Launch your browser and go to:

bash
Copy
Edit
http://localhost:8000

8. Fix Cache Path Errors (If Any)
If you encounter cache path issues during setup, create the following directories:

bash
Copy
Edit
cd storage
mkdir framework/cache
mkdir framework/sessions
mkdir framework/views

📂 Data Storage
Invoice data is stored in a data.json file within the public directory. You can modify this file directly, and the application will dynamically load the updated data.

🛠 Technology Stack

Backend
Laravel: 11.x
Livewire: 3.x

Frontend
TailwindCSS: 3.x

Build Tools
Vite: 6.x
Node.js: 18.x or newer
NPM: 9.x or newer

📦 Dependencies & Tools
Laravel Packages
Livewire – Enables interactive UI components.
Development Tools
Vite – Efficient frontend build tool.
TailwindCSS Intellisense (VS Code Extension) – Provides Tailwind class autocompletion.

🌟 Key Features
Livewire-Powered Dynamic Tabs – Filter invoices based on their status (All, Draft, Outstanding, Paid).
Invoice Table with Status Indicators – Displays invoice details with well-styled status labels.
Fully Responsive UI – Optimized for both desktop and mobile screens (optional).
Let me know if you’d like any further modifications! 🚀