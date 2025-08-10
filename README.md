Blade Template Mastering

Overview
This project converts a static HTML blog template into a dynamic Laravel Blade-based structure. The goal was to practice Blade layouts, components, directives, and asset handling for better maintainability and scalability.

Approach
1. Project Structure

Created layouts/app.blade.php as the base layout.

Extracted header and footer into partials (_header.blade.php, _footer.blade.php) for reuse with @include.

Created individual Blade views inside resources/views/frontend for pages like Home, About, Categories, Single Blog, Profile, Contact, Login, and Register.

2. Blade Features Used

@extends — All pages extend the base layout (layouts.app).

@section & @yield — Used for defining and injecting page-specific content.

@include — Reused header and footer across all pages.

asset() helper — Linked CSS and JS from the public folder.

Named Routes — Used in web.php for easy URL management.

3. Styling & Assets

Tailwind CSS and FontAwesome loaded via CDN.

Custom style.css and script.js moved to public/css and public/js respectively.