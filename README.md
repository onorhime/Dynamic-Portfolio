Symfony Portfolio Website
This is a portfolio website built using Symfony framework to showcase your projects, skills, and experience.

Table of Contents
Features
Installation
Usage
Development
Contributing
License
Features
Display your projects, skills, and experience in an organized and visually appealing manner.
Admin panel to easily manage the content of your portfolio.
Responsive design for optimal viewing on different devices.
Contact form for users to reach out to you.
Installation
Clone the repository: gh repo clone onorhime/Dynamic-Portfolio
Navigate to the project directory: cd portfolio
Install dependencies: composer install
Create the database and update schema: php bin/console doctrine:database:create && php bin/console doctrine:schema:update --force
Start the local development server: symfony server:start
Usage
Visit http://localhost:8000 in your browser or configure a virtal host to access the website.
Customize the portfolio content by logging into the admin panel (http://localhost:8000/admin) using the provided credentials.
Add, edit, or remove projects, skills, and experience entries from the admin panel.
Development
To contribute to this project, follow these steps:

Fork the repository on GitHub.
Clone your forked repository to your development machine.
Create a new branch: git checkout -b feature/your-feature-name
Make your changes and commit them: git commit -m 
Push your changes to the branch: git push origin feature/your-feature-name
Submit a pull request to the original repository.
Contributing
Contributions are welcome! If you encounter any bugs or have suggestions for improvements, please open an issue or submit a pull request.

License
This project is licensed under the MIT License.