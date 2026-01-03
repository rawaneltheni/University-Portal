# 🎓 University Portal — Full CRUD System

A Laravel-based portal built to manage key university data *without the chaos*.

This project focuses on building reusable layouts, solid MVC structure, and full CRUD workflows across multiple modules.

The project was created as part of the Introduction to Web Development course.

---

## 🌐 Overview

The **University Portal** centralizes management for departments, students, courses, professors, and enrollments.

Each module follows a full **Create / Read / Update / Delete** flow, while sharing one consistent UI built with Blade layouts and components. It’s clean, modular, and built like a real-world app — not just a class exercise.

---

## ⚙️ Features

* 🧱 **Shared Core UI** — Reusable layout + Blade components across the whole app
* 🏫 **Department Management** — Add, list, edit, and delete departments
* 🎓 **Student Management** — Handle student records with full CRUD
* 📘 **Course Management** — Manage course data (titles, codes, etc.)
* 👩‍🏫 **Professor Management** — Create and organize professor profiles
* 🔗 **Enrollment Management** — Link students to courses, update grades, and drop enrollments
* 🧠 **OOP + Services Layer** — Controllers, DTOs, and Services handling logic the right way
* 🚀 **Built on Laravel MVC** — Structured, scalable, and organized

---

## 🗂️ Project Structure (Modules & Responsibilities)

### 👤 Student 1 — Core UI + Department CRUD

* Global Blade layout (`layouts/app.blade.php`)
* Reusable components (`<x-button>`, `<x-form-input>`, `<x-card>`)
* Department module (full CRUD)

### 👥 Students 2–5 — Individual CRUD Modules

Each student builds an entire module start-to-finish using the shared layout & components:

* **Students** — Full CRUD
* **Courses** — Full CRUD
* **Professors** — Full CRUD
* **Enrollments** — Full CRUD (links students + courses)

All modules use:

* Controllers (via Artisan)
* Service classes (business logic)
* DTOs (structured data)
* Blade views extending the main layout

---

## 📚 Learning Outcomes (What This Project Proves)

* **W10:** Forms, arrays, and dynamic lists with `@foreach`
* **W11:** Real OOP — classes, properties, encapsulation, services, DTOs
* **W12:** Full Laravel MVC flow with Artisan commands
* **W13–W14:** Blade layouts + reusable components across the app

Basically: it’s not just working — it’s built properly. 🔥

---

## 🧑‍💻 Contributors

- **Malak Awrith** — 4693
- **Rawan Eltheni** — 4753
- **Mayar Buzgheba** — 4784
- **Kalthoum Alatrash** — 4853

---

## 📚 Course Info

**Course:** Introduction to Web Development

**Instructor:** @ehabElfallah 

**Tutor:** @AliBozakok

**Semester:** Fall 2025/2026

---

## 🌍 Live Demo

Check the link in (About) section. 

