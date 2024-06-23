<h1 align="center">XSS Easy Start</h1>

![Docker Pulls](https://img.shields.io/docker/pulls/sourabhs4hu/xss-easy-start)

XSS-Easy-Start is a beginner-friendly vulnerable lab designed to help newcomers explore various types of Cross-Site Scripting (XSS) vulnerabilities. This environment allows you to practice exploiting the following XSS types:

- Reflected XSS
- Stored XSS
- Blind XSS
- DOM XSS



## Manual Installation

Clone the repository and navigate to the project directory:

```bash
git clone https://github.com/Sourabh-Sahu/XSS-Easy-Start.git
cd XSS-Easy-Start
```

Move the project files to your web server's root directory (e.g., `/var/www/html`).

**Setting up the Database:**

1. Import `xss_db.sql` into MySQL Database:

   ```bash
   mysql -u username -ppassword < xss_db.sql
   ```

2. Configure the database credentials in `db.php` and `adminprofile.php` files.

**Setting up the upload directory permissions:**

```bash
chmod 757 upload
```

## Installation with Docker

For a quick setup using Docker, follow these steps:

1. Pull the Docker image from Docker Hub:

   ```bash
   docker pull sourabhs4hu/xss-easy-start:v1
   ```

2. Run the Docker container, mapping port 80 of the container to your host's port 80:

   ```bash
   docker run -d -p 80:80 sourabhs4hu/xss-easy-start:v1
   ```
