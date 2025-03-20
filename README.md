# 🌐 PHP - Server-Side Scripting Language  
**PHP** (Hypertext Preprocessor) is a powerful server-side scripting language primarily used for web development.  

## 🚀 Applications of PHP  
### ✅ 1. Handling Form Data  
- Collecting and processing user input from HTML forms  
- Validating and sanitizing form data  

### ✅ 2. File & Database Operations  
- Creating, updating, and deleting files on the server  
- Connecting with databases (MySQL, PostgreSQL, etc.)  
- Performing CRUD (Create, Read, Update, Delete) operations  

### ✅ 3. Dynamic Content & Client Response  
- Generating dynamic web pages  
- Implementing authentication (Login, Signup)  
- Handling sessions and cookies  
- Sending email notifications  

---
# Web Servers
**Webserver is a software/hardware that handles http requests and serve web pages or APIs for clients**

**How Does a Web Server Work?**
1. Client Request → A user enters a URL (e.g., https://example.com) in their browser.
2. DNS Resolution → The domain name is converted into an IP address.
3. Server Processing → The web server receives the request and processes it:
    For Static Content (HTML, CSS, images) → The files are sent directly.
    For Dynamic Content (PHP, Node.js) → The server runs scripts and generates responses.
4. Response Sent → The browser receives the response and renders the webpage.

# Comparison of Web Servers

| Server Type          | Example         | Static/Dynamic | Best For                           |
|----------------------|----------------|---------------|------------------------------------|
| **Static Web Server**  | Nginx          | Static        | Serving files (HTML, CSS, JS)     |
| **Dynamic Web Server** | Apache, Node.js | Dynamic      | Running apps (PHP, JS, Python)    |
| **Reverse Proxy**      | Nginx, HAProxy  | Both         | Security, load balancing          |
| **Load Balancer**      | HAProxy, AWS ELB | Both        | Traffic distribution              |
| **Application Server** | Tomcat, Node.js | Dynamic      | Backend APIs, databases           |
| **Cloud Server**       | AWS, Azure      | Both         | Scalable, managed hosting         |



# 🏢 Apache - Web Server  
**Apache HTTP Server** is an open-source web server used to serve PHP applications. It:  
- Handles HTTP requests and responses  
- Processes PHP scripts through modules like **mod_php**  
- Supports virtual hosting and URL rewriting  

## Apache Web Server Ports(used for php websites)
Apache is a widely used web server for hosting websites. It listens on:

Port 80 (HTTP) → Handles normal web traffic (insecure websites).
Port 443 (HTTPS) → Handles secure web traffic (SSL/TLS encrypted).
Port 8080 → Sometimes used as an alternative to port 80.
📌 Example: If Apache is running on port 80, you can access your website via:
http://yourwebsite.com (Port 80 is the default, so no need to specify it).

## Nginx Web Server Ports(used for nodejs,react,api)
Nginx is another popular web server known for its high performance and reverse proxy capabilities.

Port 80 (HTTP) → For serving websites without encryption.
Port 443 (HTTPS) → For encrypted connections using SSL/TLS.
Port 8080 → Sometimes used for testing or alternative web services.
Port 8443 → Alternative HTTPS port.
📌 Example: If Nginx is running on port 8080, you access the site via:
http://yourwebsite.com:8080

---

# 🗄️ MySQL - Database Server  
**MySQL** is a relational database management system (RDBMS) used for:  
- Storing and managing structured data  
- Performing complex queries using **SQL**  
- Ensuring data integrity and security  

---

# 📌 DBMS vs. File System  
## 🔹 What is a **File System**?  
- Stores data in files within directories  
- Provides basic operations like read, write, and delete  
- Lacks structured relationships between data  

## 🔹 **Key Differences**  
| Feature        | File System | DBMS |
|---------------|------------|------|
| Data Organization | Unstructured files | Structured tables |
| Relationships | No relationships | Supports relationships (keys) |
| Querying | Manual retrieval | SQL-based queries |
| Data Integrity | No constraints | Ensures integrity & consistency |
| Security | Limited access control | Role-based access & encryption |

---


## How to run a php program
**ONE WAY**
   1. cd /path/to/your/project

```bash
 php -S localhost:8000
 ```

 **Second Way**
 1. Open Xampp
 2. Run the Server / DB
 3. go to  browser to localhost:80
 

