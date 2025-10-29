# ERP_System
Develop a unified, modular ERP system to streamline all core business operations for a  small to medium-sized enterprise. The system will integrate key functions like Employee  Management, Accounting &amp; Finance, Inventory Control, and Sales &amp; Purchase  management into a single, cohesive platform with role-based access and centralized  reporting.# 🏢 Integrated ERP System for Small Business  
**Developed using SCRUM Methodology**

---

## 📘 Overview
This project is a **modular Enterprise Resource Planning (ERP)** system designed for **small to medium-sized enterprises (SMEs)** to manage all core business operations from a single, unified platform.  
The ERP integrates modules like **Employee Management**, **Inventory**, **Sales & Purchase**, **Accounting & Finance**, and **Dashboard & Reporting**, offering centralized data, automation, and role-based access.

The development process follows the **SCRUM methodology**, ensuring iterative progress through sprints with continuous testing and feedback.

---

## ⚙️ Technology Stack
| Layer | Technologies |
|--------|---------------|
| **Frontend** | HTML, CSS, Bootstrap, JavaScript, jQuery |
| **Backend** | PHP (Core Logic, Session Management, Business Rules) |
| **Database** | MySQL (Relational Schema, Foreign Keys, Transactions) |
| **Visualization** | Chart.js (for data reports and analytics) |

---

## 🚀 System Objectives
- Streamline daily business operations across HR, Sales, Inventory, and Accounting.  
- Centralize all enterprise data in one system.  
- Provide **role-based access control** (HR, Accountant, Sales, CEO).  
- Automate **inventory and financial transactions** through interconnected modules.  
- Deliver **real-time decision-making insights** via a dynamic dashboard.  

---

## 🧩 Core Modules & Sprint Goals

### 🧍‍♂️ Module 1: Employee Management & HR  
**Sprint 1 Goal:** Establish employee and leave management.

**Features:**
- Add and manage employee profiles with department, role, and salary.  
- Employees can view profiles and submit leave requests.  
- Secure data access using PHP session management.  

**Tech Stack:** Bootstrap forms, MySQL tables (`employees`, `leave_applications`), PHP CRUD operations, jQuery modals.

---

### 📦 Module 2: Inventory Management  
**Sprint 2 Goal:** Implement core inventory tracking.

**Features:**
- Add, edit, and deactivate stock items (SKU, name, category, reorder level).  
- Automatic stock level updates after sales or purchases.  
- Reorder alerts for low-stock items.  

**Tech Stack:** MySQL (`products` table), PHP functions for stock updates, jQuery validation and dynamic category loading.

---

### 💰 Module 3: Sales & Purchase Management  
**Sprint 3 Goal:** Create and manage sales invoices and purchase orders.

**Features:**
- Generate sales invoices with dynamic product selection and tax calculation.  
- Manage supplier purchase orders linked with accounts payable.  
- Automatic accounting and inventory updates on transactions.  

**Tech Stack:** jQuery (for dynamic invoice rows), AJAX (real-time calculations), PHP backend (multi-table inserts).

---

### 📊 Module 4: Accounting & Finance  
**Sprint 4 Goal:** Implement double-entry bookkeeping and financial reports.

**Features:**
- Auto-create journal entries for every sale or purchase (Debit/Credit logic).  
- Generate Profit & Loss statements and Balance Sheets.  
- Visualize data through interactive financial charts.  

**Tech Stack:** MySQL (`journal_entries`, `chart_of_accounts`), PHP accounting logic, Chart.js data visualization.

---

### 🖥️ Module 5: Dashboard & Reporting  
**Sprint 5 Goal:** Build a unified, data-driven dashboard.

**Features:**
- CEO view for total revenue, pending invoices, low-stock alerts, and monthly profit trends.  
- Real-time analytics with data fetched via AJAX.  
- Interactive charts and responsive Bootstrap grid design.  

**Tech Stack:** Bootstrap layout, Chart.js charts, PHP APIs for live data.

---

## 🧱 Database Overview
**Core Tables:**
- `employees`, `leave_applications`
- `products`, `categories`
- `sales_invoices`, `sales_invoice_items`
- `purchase_orders`
- `journal_entries`, `chart_of_accounts`
- `users`, `roles`

**Key Database Concepts:**
- **Foreign Keys:** Maintain referential integrity between tables.  
- **Transactions:** Ensure operations (like creating an invoice) are atomic and consistent.  
- **Normalization:** Reduce redundancy and improve scalability.

---

## 🔒 Role-Based Access
| Role | Access Area |
|------|--------------|
| HR Manager | Employee & Leave Management |
| Warehouse Manager | Inventory Management |
| Sales Manager | Customer Sales Orders |
| Purchase Manager | Supplier Purchase Orders |
| Accountant | Financial Reports & Journals |
| CEO | Global Dashboard & Analytics |

---

## 🧱 SCRUM Implementation

- **Product Backlog:** Organized around each ERP module.  
- **Sprint Duration:** Each sprint corresponds to one module.  
- **Daily Stand-ups:** Discuss progress, blockers, and upcoming tasks.  
- **Sprint Review:** Demonstration of each completed module.  
- **Sprint Retrospective:** Analyze challenges and improvements for next sprint.

---

## 💡 Key Highlights
✅ Modular ERP architecture  
✅ Fully integrated and automated workflows  
✅ Role-based authentication system  
✅ Real-time dashboard & analytics  
✅ Clean, responsive Bootstrap UI  
✅ Built using open-source technologies  

---

## 🧑‍💻 Developers
**Project Team:**  
- Abdullah *(Team Lead / Developer)*  
- [Add your teammates’ names if applicable]

---

## 🧾 License
This project is developed for academic purposes as part of **Assignment #4 (ERP System - SCRUM)**.  
All rights reserved © 2025.

---

