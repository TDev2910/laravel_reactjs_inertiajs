📘 Laravel + ReactJS + InertiaJS Integration
This project demonstrates how to integrate ReactJS into a Laravel application using InertiaJS, allowing for a modern single-page application (SPA) experience without building a separate REST API.

✅ Features
🔁 ReactJS Integration via InertiaJS
Using InertiaJS to connect Laravel (backend) with React (frontend) in a seamless monolith.

🧩 Layout System (Default Layout)
Shared layout component using Main.jsx, rendering consistent UI across all pages.

📦 Props Passing Mechanism
Pass server-side data from Laravel to React components using Inertia::render() and usePage().props.

🧑‍💻 Users CRUD
Create, Read, Update, and Delete users using Inertia-powered forms.

✅ Form Validation
Backend Laravel validation with automatic error sharing to the frontend.

🔀 Redirects & Navigation
Use Laravel route redirects and <Link> components from Inertia React for smooth SPA navigation.

🔔 Flash Messages
Flash messages (e.g., "User created successfully!") shared from Laravel to React and displayed in the UI.

📄 Pagination
Server-side pagination using Laravel's paginate() and React rendering of pagination links.

🚫 No Need for API
All interactions happen through standard Laravel routes and controllers — no separate REST API is required.

📚 Documentation
Laravel + Vite + React: https://laravel.com/docs/11.x/vite#react

InertiaJS Docs: https://inertiajs.com/pages

🛠 Stack
Laravel 11.x

ReactJS (with Vite)

InertiaJS

TailwindCSS (optional for styling)
