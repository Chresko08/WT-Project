# 🚀 getgoing — WT Project

[![GitHub Pages](https://img.shields.io/badge/Hosted%20on-GitHub%20Pages-222222?logo=github&logoColor=white)](https://chresko08.github.io/WT-Project/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.5.2-7952B3?logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

> A modern, responsive web portal developed as a Web Technology (WT) project for **getgoing** — an entrepreneurship and business idea showcase & incubator platform.

🔗 **Live Deployment:** [https://chresko08.github.io/WT-Project/](https://chresko08.github.io/WT-Project/)

---

## 📑 Table of Contents

- [Overview](#-overview)
- [Live Demo & Deployment Link](#-live-demo--deployment-link)
- [Key Features](#-key-features)
- [Tech Stack](#-tech-stack)
- [Project Structure](#-project-structure)
- [Pages & UI Walkthrough](#-pages--ui-walkthrough)
- [Getting Started / Running Locally](#-getting-started--running-locally)
- [GitHub Pages Configuration](#-github-pages-configuration)
- [Author & Contact](#-author--contact)

---

## 🌟 Overview

**getgoing** (WT-Project) is a lightweight, responsive static web platform built using **HTML5**, **Bootstrap 4**, and **JavaScript**. Designed as a startup incubator landing page, it enables aspiring creators and founders to:
- Browse pitch decks and business concepts through an interactive automated visual carousel.
- Submit new startup proposals and business ideas directly to the platform team.
- Access a dedicated account authentication portal.
- Connect directly with the developer and platform creator.

---

## 🔗 Live Demo & Deployment Link

The website is live and hosted on GitHub Pages:

👉 **[https://chresko08.github.io/WT-Project/](https://chresko08.github.io/WT-Project/)**

---

## ✨ Key Features

- **📱 Fully Responsive Layout**: Built on the Bootstrap 4 grid system, ensuring a seamless experience across desktop monitors, laptops, tablets, and smartphones.
- **🖼️ Automated Presentation Carousel**: Dynamic 6-slide carousel with a 1.5-second automated transition cycle, manual slide indicators, and previous/next navigation controls.
- **💡 Business Idea Submission Form**: Integrated input area with user email capture for submitting startup pitches and concepts.
- **🔐 User Login Interface**: Dedicated sign-in portal with responsive form inputs and submission handling.
- **🌙 Modern Dark Theme**: Consistent `bg-dark text-white` color palette with high contrast and accessible typography.
- **⚡ Zero Build Dependencies**: Pure client-side static application running directly in any modern browser without requiring node packages or build tools.

---

## 🛠️ Tech Stack

| Layer | Technology | Description |
| :--- | :--- | :--- |
| **Markup** | HTML5 | Semantic structure for all pages |
| **Styling** | CSS3 & Bootstrap 4 | Responsive grid, components, and layout styling |
| **Scripting** | JavaScript (ES5/ES6) | Carousel controls & interaction handlers |
| **Libraries** | jQuery 3.2.1, Popper.js 1.12.9 | Bootstrap carousel & interactive component dependencies |
| **Hosting** | GitHub Pages | Continuous static hosting directly from the `master` branch |

---

## 📂 Project Structure

```plaintext
WT-Project/
├── about.html                # About page featuring developer bio & contact links
├── index.html                # Main landing page with hero carousel & idea pitch form
├── login.html                # User authentication & sign-in page
├── logo.png                  # Brand logo asset for getgoing
├── slide1.jpg                # Carousel presentation slide 1
├── slide2.jpg                # Carousel presentation slide 2
├── slide3.jpg                # Carousel presentation slide 3
├── slide4.jpg                # Carousel presentation slide 4
├── slide5.jpg                # Carousel presentation slide 5
├── slide6.jpg                # Carousel presentation slide 6
├── bootstrap-4.0.0-dist/     # Local Bootstrap 4 distribution files
│   ├── css/                  # Compiled CSS & minified stylesheets
│   └── js/                   # Compiled JS bundles & minified scripts
└── README.md                 # Project documentation & deployment details
```

---

## 📄 Pages & UI Walkthrough

### 1. Home Page (`index.html`)
- **Brand Navbar**: Clean navigation header featuring the `getgoing` logo and quick links (`Home`, `Login`, `About`).
- **Interactive Carousel**: 6 high-resolution slides (`slide1.jpg` – `slide6.jpg`) showcasing key startup themes with indicators and smooth fade/slide transitions.
- **Pitch Your Idea Form**: Dedicated section inviting users to share their business ideas alongside their email address.

### 2. Login Page (`login.html`)
- Centered, distraction-free authentication card with inputs for:
  - **Email ID** (with format validation)
  - **Password**
  - **Sign In** submission button

### 3. About Page (`about.html`)
- Developer and platform information including direct email and professional network links (LinkedIn).

---

## 🚀 Getting Started / Running Locally

Since this is a client-side static web project, no installation or compilation step is required.

### Method 1: Open Directly in Browser
Double-click `index.html` or run:
```bash
# macOS
open index.html

# Linux
xdg-open index.html

# Windows
start index.html
```

### Method 2: Serve via a Local Web Server
You can also run a local lightweight HTTP server for testing:

**Using Python 3:**
```bash
python3 -m http.server 8000
```
Then visit `http://localhost:8000` in your web browser.

**Using Node.js (`npx serve`):**
```bash
npx serve .
```

---

## 🌐 GitHub Pages Configuration

This project is deployed to GitHub Pages using the built-in static site provider:

1. **Source Branch**: `master`
2. **Directory**: `/` (Root directory)
3. **Custom Domain**: Not required (served via default GitHub Pages subdomain)
4. **URL**: [https://chresko08.github.io/WT-Project/](https://chresko08.github.io/WT-Project/)

---

## 👤 Author & Contact

**Shubham Srivastava**
- **GitHub**: [@Chresko08](https://github.com/Chresko08)
- **LinkedIn**: [shubham-srivastava](https://www.linkedin.com/in/chresko)
- **Email**: [shubhamsrivastava08@gmail.com](mailto:shubhamsrivastava08@gmail.com)

---

<div align="center">
  <sub>Built with ❤️ by Shubham Srivastava</sub>
</div>
