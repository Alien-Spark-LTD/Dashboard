# Alien Spark CRM

## Project Information

Base Template:

* Larkon Laravel v1.1.0

Framework:

* Laravel 12

Development Environment:

* Laragon
* PHP 8.3
* Vite
* GitHub

Repository:
https://github.com/Alien-Spark-LTD/Dashboard

Branch:

* main = stable
* development = active development

---

# Sprint 0 - Project Setup

Status: Completed

Completed Tasks:

* Installed Composer dependencies
* Installed NPM dependencies
* Configured Laravel environment
* Successfully launched Laravel locally
* Successfully launched Vite locally
* Created GitHub repository
* Created development branch

---

# Sprint 1 - Rebranding

Status: Completed

Goal:

Convert Larkon branding into Alien Spark CRM branding.

Completed Tasks:

* Updated application name
* Updated page titles
* Updated footer branding
* Updated topbar branding
* Updated configuration references
* Replaced visible Larkon references

Modified Files:

* config/app.php
* resources/js/config.js
* resources/views/layouts/partials/title-meta.blade.php
* resources/views/layouts/partials/topbar.blade.php
* resources/views/layouts/partials/footer.blade.php

Additional branding updates applied in several view files.

---

# Sprint 2 - Sidebar Cleanup

Status: Completed

Goal:

Transform the Ecommerce sidebar into a CRM sidebar.

Removed:

* Products
* Categories
* Inventory
* Purchases
* Returns
* Coupons
* Sellers
* Reviews
* Attributes
* Import Products
* Customers
* Roles
* Permissions
* Chat App
* Email App
* Calendar App
* Todo App
* Support Section
* Components Section

Added:

* Orders
* Clients
* Projects
* Payments
* Team

Kept:

* Dashboard
* Settings

Modified File:

* resources/views/layouts/partials/main-nav.blade.php

---

# Sprint 2.5 - Dashboard Home Redesign

Status: Completed

Goal:

Convert the Ecommerce dashboard into an Alien Spark CRM dashboard.

Added:

KPI Cards:

* Monthly Revenue
* Monthly Clients
* Total Projects
* Average Delivery Time

Sections:

* Quick Actions
* Recent Orders
* Active Projects
* Pending Payments

Modified File:

* resources/views/dashboards/index.blade.php

---

# Sprint 2.7 - Currency Optimization

Status: Completed

Goal:

Support large Vietnamese currency values without breaking the layout.

Examples:

5,000,000 VND → 5M ₫

25,000,000 VND → 25M ₫

120,000,000 VND → 120M ₫

1,500,000,000 VND → 1.5B ₫

Result:

* KPI cards remain responsive
* Large values are displayed in compact format

---

# Current Modules

Available:

* Dashboard
* Orders (placeholder)
* Clients (placeholder)
* Projects (placeholder)
* Payments (placeholder)
* Team (placeholder)
* Settings

---

# Files Modified Since Initial Installation

1. config/app.php
2. database/seeders/DatabaseSeeder.php
3. resources/js/config.js
4. resources/views/apps/chat.blade.php
5. resources/views/custom/pages/timeline.blade.php
6. resources/views/custom/widgets.blade.php
7. resources/views/dashboards/index.blade.php
8. resources/views/general/invoice/details.blade.php
9. resources/views/general/products/edit.blade.php
10. resources/views/layouts/partials/footer.blade.php
11. resources/views/layouts/partials/main-nav.blade.php
12. resources/views/layouts/partials/title-meta.blade.php
13. resources/views/layouts/partials/topbar.blade.php
14. resources/views/support/help-center.blade.php
15. resources/views/users/pages-profile.blade.php
16. resources/views/users/seller/details.blade.php

---

# Next Sprint

Sprint 3 - Orders Module

Planned Pages:

* Orders List
* Create Order
* View Order
* Edit Order

Packages:

* Core
* Growth
* Business Plus
* Custom

Statuses:

* New Lead
* Waiting Deposit
* In Progress
* Review
* Completed
* Cancelled
