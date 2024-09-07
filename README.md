# Team Tasker

**Team Tasker** is a Laravel-based Todo application designed to help teams manage tasks effectively. This app provides a simple and intuitive interface for task management, making it ideal for team collaboration and productivity.

## Features

- Create, update, and delete tasks.
- Assign tasks to team members.
- Set due dates and priorities.
- Track task progress.
- Responsive and user-friendly interface.

## Installation

To get started with Team Tasker, follow these steps:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/iamrohitpal/team-tasker.git
   cd team-tasker
   ```

2. **Install Dependencies:**

   Ensure you have Composer installed. Then run:

   ```bash
   composer install
   ```

   This command will automatically:
   - Copy the `.env.example` to `.env` if `.env` does not already exist.
   - Generate the application key.

3. **Run Database Migrations:**

   After installing dependencies, run the database migrations to set up the necessary database tables:

   ```bash
   php artisan migrate
   ```

4. **Serve the Application:**

   Start the Laravel development server:

   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` in your web browser to see the application in action.

## Usage

After setting up, you can use the application to:

- **Create Tasks:** Add new tasks with titles, descriptions, and due dates.
- **Assign Tasks:** Assign tasks to team members and set priorities.
- **Track Progress:** Monitor the status and completion of tasks.

## Configuration

The `.env` file is automatically created during the installation process. Customize your application by editing this file to configure database settings, mail settings, and other environment-specific configurations.

## Contributing

We welcome contributions to improve Team Tasker. To contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a pull request on GitHub.

## License

Team Tasker is licensed under the [MIT License](LICENSE).

## Contact

For any questions or issues, please contact:

- **Name:** Rohit Pal
- **Email:** [iamrohitpalg@gmail.com](mailto:iamrohitpalg@gmail.com)
