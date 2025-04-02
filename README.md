<div align="center">

<h3 align="center">TicketFlow</h3>

  <p align="center">
    A Laravel-based ticket management system for admins, agents, and users.
    <br />
     <a href="https://github.com/issam-mhj/ticketflow">github.com/issam-mhj/ticketflow</a>
  </p>
</div>

## Table of Contents

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#key-features">Key Features</a></li>
      </ul>
    </li>
    <li><a href="#architecture">Architecture</a></li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

## About The Project

TicketFlow is a web-based application built with Laravel, designed to streamline ticket management for various user roles: administrators, agents, and regular users. It provides a structured system for creating, categorizing, and managing support tickets.

### Key Features

- **User Roles:** Differentiated access and functionalities based on user roles (admin, agent, user).
- **Ticket Management:** Creation, modification, and deletion of tickets with different statuses (open, in progress, closed).
- **Category Management:** Admins can create, update, and delete ticket categories.
- **Authentication:** Secure user authentication and registration using Laravel's built-in features.
- **Dashboard:** Role-based dashboards providing an overview of relevant information.


TicketFlow is built using the following technologies:

- **Frontend:** HTML, CSS, JavaScript, Tailwind CSS, Alpine.js
- **Backend:** PHP, Laravel framework
- **Database:** MySQL (Configurable via `.env`)

## Getting Started

To get a local copy up and running, follow these steps.

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL
- Node.js and npm (for frontend assets)

### Installation

1. Clone the repository
   ```sh
   git clone https://github.com/issam-mhj/ticketflow.git
   cd ticketflow
   ```
2. Install PHP dependencies
   ```sh
   composer install
   ```
3. Copy the `.env.example` file to `.env` and configure your database settings
   ```sh
   cp .env.example .env
   ```
4. Generate an application key
   ```sh
   php artisan key:generate
   ```
5. Run database migrations
   ```sh
   php artisan migrate
   ```
6. Install Node.js dependencies
   ```sh
   npm install
   ```
7. Build frontend assets
   ```sh
   npm run build
   ```
8. Start the Laravel development server
   ```sh
   php artisan serve
   ```
