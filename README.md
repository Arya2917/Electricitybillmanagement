
# Electricity Bill Management System  

This **Electricity Bill Management System** is a web application developed in PHP that focuses on managing electricity bills for customers and administrators. The system facilitates bill generation, payments, and complaints, with distinct functionalities for both users and administrators.  

## Features  

### User Panel  
- View pending and due bills, including detailed information such as total units, paying date, due date, and extra due charges.  
- Process bill payments (without online payment integration).  
- File complaints with the system administration.  
- View transaction history, including pending and processed bills.  

### Admin Panel  
- Manage customer records, including generating and updating bills.  
- Generate monthly bills based on electricity consumption (units consumed).  
- Add and manage due fees for customers.  
- Monitor overall transaction details and statuses (pending vs. processed bills).  
- View and resolve customer complaints.  
- View system analytics, including:  
  - Total dues  
  - Pending amounts  
  - Complaints  
  - Earnings  
  - Total bills generated  

## Technologies Used  
- **Backend:** PHP  
- **Database:** MySQL (via phpMyAdmin)  
- **Frontend:** HTML, CSS, JavaScript  

## Installation Guide  

1. **Prerequisites:**  
   - Install [XAMPP](https://www.apachefriends.org/index.html).  

2. **Project Setup:**  
   - Download and extract the project folder.  
   - Place the extracted folder inside the `htdocs` directory of your XAMPP installation.  

3. **Database Configuration:**  
   - Open your browser and navigate to `http://localhost/phpmyadmin`.  
   - Create a new database using the name provided in `01 LOGIN DETAILS & PROJECT INFO.txt`.  
   - Import the database file (`.sql`) located in the `DATABASE FILE` folder.  

4. **Run the Project:**  
   - Open your browser and navigate to `http://localhost/[ PROJECT_FOLDER_NAME ]/`.  
   - Use the login credentials provided in `01 LOGIN DETAILS & PROJECT INFO.txt`.  

## Available Panels  
- **Admin Panel:** Manage customers, bills, complaints, and overall system operations.  
- **User Panel:** View and pay bills, file complaints, and track transaction history.  

## License  
This project is open-source and free to use.  
