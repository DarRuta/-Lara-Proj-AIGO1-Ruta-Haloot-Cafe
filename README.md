# MERIDIAN FITNESS

A Laravel-based gym website developed as part of the IT 110 course.

## 1. Group Information

- **Group Name:** 3 Little Monkeys
- **Section:** IT 110-AIGO1
- **Project Name:** MERIDIAN FITNESS

### Group Members

| Member | Name | Assigned Module | Git Branch |
|---|---|---|---|
| Member 1 | Daryl Ruta | Homepage | `dev-member1-Ruta` |
| Member 2 | Bienly Andre HALOOT | About Page | `dev-member2-Haloot` |
| Member 3 | Princess Shayna Cafe | Contact Page | `dev-member3-Cafe` |

## 2. Application Theme and Design

**Theme: Modern, Welcoming, and Unisex Fitness Website**

MERIDIAN is designed as a modern and welcoming fitness website intended for all gym members. Its visual style combines clean layouts, balanced colors, and page-specific designs to give each section its own identity while maintaining a consistent overall appearance.

### Design Features

- **Homepage:** Uses a light-colored design to create a fresh, welcoming, and energetic first impression for visitors.
- **About Page:** Also uses a light-colored theme to maintain a clean and readable presentation of the gym's background and information.
- **Contact Page:** Uses a darker color scheme with teal, copper, and dark wood-inspired elements to create a more focused and professional atmosphere while making the contact information and form stand out.
- **Color Palette:** Combines light backgrounds, dark tones, teal accents, and warm copper details.
- **Responsive Layout:** Designed to adapt to different screen sizes.
- **Shared Dark Mode:** Includes dark mode functionality across the website.

**Gym Location:** Butuan City, Agusan del Norte, Philippines 8600

**Operating Hours:** Open 24/7

## 3. Members' Assigned Modules

### Member 1 – Daryl Ruta
- Develops the Homepage.
- Presents the gym's main content and information.
- Implements the homepage layout and styling.

**Branch:** `dev-member1-Ruta`

### Member 2 – Bienly Andre HALOOT
- Develops the About Page.
- Presents information about MERIDIAN and the gym.
- Implements the page layout and styling.

**Branch:** `dev-member2-Haloot`

### Member 3 – Princess Shayna Cafe
- Develops the Contact Page.
- Displays the gym's contact information.
- Creates a contact form with full name, email address, subject, and message fields.
- Implements client-side form validation and error messages.
- Implements Laravel server-side validation and a success message after submission.

**Branch:** `dev-member3-Cafe`

## 4. Technologies Used

- **Laravel / PHP** – Backend framework and application logic.
- **Blade** – Laravel templating engine.
- **HTML** – Page structure.
- **CSS** – Website styling and responsive design.
- **JavaScript** – Client-side interactions and form validation.
- **Node.js and NPM** – Frontend dependencies and asset building.
- **Composer** – PHP dependency management.
- **Git and GitHub** – Version control and collaboration.

## 5. Steps to Run the Project

### Prerequisites

Make sure the following are installed:
- PHP
- Composer
- Node.js and NPM
- Git
- Visual Studio Code (recommended)

### Step 1: Clone the Repository

```bash
git clone https://github.com/DarRuta/-Lara-Proj-AIGO1-Ruta-Haloot-Cafe.git
```

### Step 2: Open the Project Folder

```bash
cd -Lara-Proj-AIGO1-Ruta-Haloot-Cafe
```

### Step 3: Install PHP Dependencies

```bash
composer install
```

### Step 4: Set Up the Environment File

For Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

### Step 5: Generate the Application Key

```bash
php artisan key:generate
```

### Step 6: Set Up the SQLite Database

Create the SQLite database file if it does not already exist:

```powershell
New-Item database/database.sqlite -ItemType File -Force
```

Make sure the `.env` file uses SQLite:

```env
DB_CONNECTION=sqlite
```

Run the database migrations:

```bash
php artisan migrate
```

### Step 7: Install Frontend Dependencies

```bash
npm install
```

### Step 8: Build Frontend Assets

```bash
npm run build
```

### Step 9: Start the Laravel Development Server

```bash
php artisan serve
```

### Step 10: Open the Website

Open your browser and visit:

**http://127.0.0.1:8000**

Available pages:

- Homepage: `http://127.0.0.1:8000/`
- About Page: `http://127.0.0.1:8000/about`
- Contact Page: `http://127.0.0.1:8000/contact`

## 6. Project Notes

- Keep the Laravel development server running while accessing the website.
- Run `npm run build` again after making frontend asset changes.
- The Contact form uses client-side and server-side validation.
- The Contact form displays a success message after valid submission. It does not currently send emails or permanently store submitted messages.