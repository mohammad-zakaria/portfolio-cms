# Mohammad Zakaria — Executive Portfolio & CMS

Official source repository for **[mohammadzakaria.com](https://mohammadzakaria.com)** — a custom-engineered portfolio, ventures showcase, research index, and headless-ready content management system built with **Laravel 13**, **Tailwind CSS**, **Alpine.js**, and **Filament**.

---

## Overview

Designed to unify executive leadership, commercial ventures, engineering case studies, and peer-reviewed IEEE research under a fast, security-hardened web platform.

* **Ventures & Leadership:** Highlights active roles across **Multazim**, **Multazim Solutions**, **Avelvet LLC**, and **Edumax Consultancy**.
* **Engineering & Case Studies:** Structured project dossiers covering problem spaces, architectural solutions, and measurable outcomes.
* **Academic Research:** Indexed IEEE conference publications on power systems, fault current limiters, and solar PV grid integration.
* **Insights & Publishing:** Minimalist technical and entrepreneurial writing platform with reading-progress tracking and dynamic SEO metadata.

---

## Technology Stack

| Layer | Technologies |
| :--- | :--- |
| **Backend** | PHP 8.5, Laravel 13, SQLite / MySQL |
| **Admin & CMS** | Filament Admin Panel |
| **Frontend** | Blade, Tailwind CSS, Alpine.js |
| **Security & SEO** | Custom HTTP Security Headers, Rate Limiting, Dynamic XML Sitemap |

---

## Local Setup

```bash
git clone [https://github.com/mohammad-zakaria/portfolio-cms.git](https://github.com/mohammad-zakaria/portfolio-cms.git)
cd portfolio-cms
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

---

## Contact & Profiles

* **Website:** [mohammadzakaria.com](https://mohammadzakaria.com)
* **LinkedIn:** [linkedin.com/in/zakariamohammad](https://www.linkedin.com/in/zakariamohammad/)
* **GitHub:** [@mohammad-zakaria](https://github.com/mohammad-zakaria)
