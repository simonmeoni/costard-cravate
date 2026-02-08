# Costard Cravate

A minimalist WordPress block theme for a professional package design company. Built on Frost with full site editing support, warm earth tone pastels, and an extensive pattern library.

## Features

- Full Site Editing (FSE) support
- Light and dark theme variants
- 50+ block patterns included
- Responsive design (mobile-first)
- WCAG 2.1 AA accessibility compliant
- Contact Form 7 integration
- Custom typography (Outfit font)

## Requirements

- WordPress 6.9+
- PHP 8.2+
- Node.js 18+

## Quick Start

```bash
# Install dependencies
npm install

# Start local development
npm run dev

# Open in browser
open http://localhost:8888
```

## Project Structure

```
costard-cravate/
├── assets/
│   ├── fonts/                  # Outfit variable font
│   └── images/                 # Sample images and logos
│
├── parts/                      # Template parts
│   ├── header.html
│   └── footer.html
│
├── patterns/                   # Block patterns (50+)
│   ├── header-*.php            # Header variants
│   ├── footer-*.php            # Footer variants
│   ├── hero-*.php              # Hero sections
│   ├── cta-*.php               # Call-to-action blocks
│   ├── boxes-*.php             # Feature boxes
│   ├── pricing-*.php           # Pricing tables
│   ├── testimonials-*.php      # Testimonials
│   ├── page-*.php              # Full page layouts
│   └── *-dark.php              # Dark theme variants
│
├── styles/                     # Global style variations
│   ├── graphite.json
│   ├── green.json
│   ├── magenta.json
│   ├── orange.json
│   ├── purple.json
│   ├── red.json
│   └── teal.json
│
├── templates/                  # Page templates
│   ├── index.html              # Default template
│   ├── page.html               # Page template
│   ├── single.html             # Single post
│   ├── archive.html            # Archive pages
│   ├── home.html               # Blog home
│   ├── search.html             # Search results
│   ├── 404.html                # Not found
│   ├── blank.html              # Blank canvas
│   └── no-title.html           # Page without title
│
├── functions.php               # Theme functions
├── style.css                   # Theme stylesheet & metadata
├── theme.json                  # Design system configuration
├── plugins.txt                 # Required plugins list
├── package.json                # npm scripts & dependencies
├── .wp-env.json                # Local dev environment config
├── .env.example                # Environment variables template
├── CLAUDE.md                   # AI assistant instructions
└── README.md                   # This file
```

## Development Commands

### Local Environment

| Command | Description |
|---------|-------------|
| `npm run dev` | Start local WordPress environment |
| `npm run stop` | Stop environment |
| `npm run restart` | Restart and update environment |
| `npm run reset` | Clean all data |
| `npm run destroy` | Completely remove environment |
| `npm run logs` | View environment logs |
| `npm run wp` | Run WP-CLI commands (local) |
| `npm run wp:prod` | Run WP-CLI commands (production) |
| `npm run flush` | Flush cache and rewrite rules |

### Deployment (SSH)

| Command | Description |
|---------|-------------|
| `npm run deploy` | Deploy theme to production |
| `npm run deploy:dry` | Preview deployment (no changes) |
| `npm run deploy:force` | Deploy with --delete flag |
| `npm run ssh` | Connect to server via SSH |

### Database & Content

| Command | Description |
|---------|-------------|
| `npm run db:export` | Export local database |
| `npm run db:import` | Import database locally |
| `npm run db:pull` | Pull production database |
| `npm run uploads:pull` | Pull uploads from production |

### Plugin Management

| Command | Description |
|---------|-------------|
| `npm run plugins:list` | List active plugins |
| `npm run plugins:export` | Export to plugins.txt |
| `npm run plugins:install` | Install plugins locally |
| `npm run plugins:install:prod` | Install plugins on production |

## Deployment Setup

1. Copy `.env.example` to `.env`
2. Configure your SSH credentials:
   ```
   SSH_USER=your-username
   SSH_HOST=your-server.com
   SSH_PATH=/path/to/wp-content/themes/costard-cravate
   ```
3. Run `npm run deploy:dry` to preview
4. Run `npm run deploy` to push changes

## Design System

The theme uses WordPress design tokens defined in `theme.json`:

### Colors

- `--wp--preset--color--primary` - Primary accent
- `--wp--preset--color--secondary` - Secondary accent
- `--wp--preset--color--contrast` - Dark text/backgrounds
- `--wp--preset--color--base` - Light backgrounds
- `--wp--preset--color--neutral` - Muted backgrounds

### Typography

- Font family: Outfit (variable)
- Sizes: small, medium, large, x-large, max-48, max-60

### Spacing

- x-small, small, medium, large, x-large

## License

GPL-3.0 - See [LICENSE](LICENSE) for details.
