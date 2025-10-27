# 🎫 Ticket Platform Frontend

## Overview
A dynamic and responsive ticket management system built with **Twig**, **Vite**, and **Php router**. This client-side application demonstrates core CRUD operations for tickets and user authentication, leveraging `localStorage` for data persistence.

## Features
*   **User Authentication**: Seamless user registration, login, and logout functionalities.
*   **Ticket Creation**: Create new support tickets with a title, description, and initial status.
*   **Ticket Listing**: View all created tickets in an organized list format.
*   **Ticket Management**: Edit and delete existing tickets directly from the dashboard.
*   **Status Tracking**: Monitor ticket progress with status indicators (Open, In Progress, Closed).
*   **Dashboard Overview**: A summary of total, open, and resolved tickets for quick insights.
*   **Client-Side Persistence**: All user and ticket data are stored and managed locally using `localStorage`.
*   **Responsive Design**: A user interface that adapts to various screen sizes, from desktop to mobile.
*   **Interactive Notifications**: User feedback provided through toast notifications for actions like successful logins, ticket updates, and error handling.

## Getting Started

Follow these steps to set up and run the project locally on your machine.

### Installation
🚀 Clone the repository and install dependencies:

```bash
git clone https://github.com/raveroses/Phpticket.git
cd ticket
npm install
```

### Environment Variables
This project does not require any explicit environment variables as it primarily relies on client-side `localStorage` for data persistence and authentication.

## Usage

Once the project is installed and running, you can interact with the application through your web browser.

1.  🌐 **Navigate to the Application**:
    Open your browser and go to the address displayed by Vite (typically `& "C:\Users\MY LAPTOP\Desktop\php\php.exe" -S localhost:8000`).

2.  📝 **Register for an Account**:
    *   Click on "Get Started" or navigate to the `/signup` page.
    *   Fill in your Full Name, Email, and a secure Password.
    *   Click "Sign Up" to create your account. Your credentials will be stored in your browser's `localStorage`.

3.  🔑 **Log In**:
    *   Navigate to the `/login` page.
    *   Enter the Email and Password you used during registration.
    *   Click "Login". Upon successful authentication, your login session will be stored locally, and you will be redirected to the Dashboard.

4.  📊 **Access the Dashboard**:
    *   After logging in, you'll be on the `/dashboard` page.
    *   Here you will find a sidebar on the left and a content area.

5.  ➕ **Create a New Ticket**:
    *   In the sidebar, click on "Create Ticket".
    *   Fill in the `Title` and `Description` for your new ticket.
    *   Select a `Status` (e.g., "Open", "In progress", "Closed") from the dropdown.
    *   Click the "Create" button. The new ticket will be added to your local storage.

6.  📋 **View and Manage Tickets**:
    *   In the sidebar, click on "Ticket List".
    *   You will see a list of all tickets you've created.
    *   To **Edit** a ticket: Click the "Edit" button next to the desired ticket. The ticket's details will populate the "Create Ticket" form, allowing you to modify them. Click "Create" (which now acts as "Update") to save changes.
    *   To **Delete** a ticket: Click the "Delete" button next to the ticket you wish to remove.

7.  🚪 **Log Out**:
    *   From the sidebar, click on "Log out".
    *   Your local login session will be cleared, and you will be redirected to the login page.

## Technologies Used
*   **Twig** ⚛️: A Frontend library for building user interfaces.
*   **Vite**: A fast and modern build tool that provides an extremely quick development experience for web projects.
*   **JavaScript**: The primary programming language used for client-side logic.
*   **HTML5**: Standard markup language for structuring web content.
*   **CSS3**: Styling language used for the application's visual presentation and responsive design.

## Contributing
Contributions are always welcome! If you have suggestions for improving this project, please follow these guidelines:

*   🍴 **Fork** this repository.
*   🌿 Create a new branch for your feature or bugfix: `git checkout -b feature/your-feature-name`.
*   ✨ Make your changes and ensure your code adheres to the project's style.
*   💬 Commit your changes with a clear and concise message: `git commit -m 'feat: Add new awesome feature'`.
*   🚀 Push your branch to your forked repository: `git push origin feature/your-feature-name`.
*   ⬆️ Open a **Pull Request** to the `main` branch of this repository, providing a detailed description of your changes.

## License
This project is licensed under the MIT License.

## Author Info
*   **LinkedIn**: [Your LinkedIn Profile](https://linkedin.com/in/yourprofile)
*   **Twitter**: [@yourtwitter](https://twitter.com/yourtwitter)
*   **Portfolio**: [Your Portfolio](https://yourportfolio.com)

---

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

[![Readme was generated by Dokugen](https://img.shields.io/badge/Readme%20was%20generated%20by-Dokugen-brightgreen)](https://www.npmjs.com/package/dokugen)