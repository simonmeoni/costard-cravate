# Costard Cravate - WordPress Block Theme

## Project Overview

This is a WordPress block theme based on Frost, featuring a clean, minimal design with full site editing support. The theme uses `theme.json` for design system configuration and includes extensive pattern library with light/dark variants.

## Development Environment

- **WordPress Version**: 6.9
- **PHP Version**: 8.2
- **Local Dev**: wp-env (port 8888)
- **Development Commands**:
  - `npm run dev` - Start local environment
  - `npm run stop` - Stop local environment
  - `npm run reset` - Clean all data
  - `npm run wp` - Run WP-CLI commands

## Code Standards for Frontend Development

### CSS/Styling
- Use WordPress design tokens: `var(--wp--preset--color--primary)`
- Follow BEM-like naming for custom classes
- Maintain 0.2s transition timing for interactions
- Support both light and dark color schemes
- Ensure mobile-first responsive design

### WordPress Block Patterns
- Store patterns in `/patterns/` directory
- Name files descriptively: `component-name.php` and `component-name-dark.php`
- Include proper WordPress pattern headers
- Use WordPress block markup (HTML comments syntax)
- Leverage `theme.json` settings for consistency

### Component Development Workflow
1. Design new components using WordPress blocks
2. Create pattern files with proper headers
3. Implement both light and dark variants
4. Test in wp-env local environment
5. Ensure accessibility standards (WCAG 2.1 AA minimum)

### Accessibility Requirements
- Maintain proper heading hierarchy
- Ensure sufficient color contrast (4.5:1 minimum)
- Include ARIA labels where needed
- Test keyboard navigation
- Support screen readers

### Performance Guidelines
- Minimize custom CSS (leverage theme.json)
- Use WordPress core blocks when possible
- Optimize images before committing
- Avoid inline styles where possible
- Leverage WordPress block caching

## File Structure

```
/
├── patterns/           # WordPress block patterns
├── templates/          # Template files
├── parts/             # Template parts
├── theme.json         # Design system configuration
├── style.css          # Theme stylesheet & metadata
├── functions.php      # Theme functions
└── .wp-env.json      # Local environment config
```

## When Working on Frontend Tasks

### For New Components
1. Check existing patterns in `/patterns/` for similar components
2. Review `theme.json` for available design tokens
3. Create pattern with WordPress block syntax
4. Test both light and dark variants
5. Verify responsive behavior

### For Styling Changes
1. Prefer `theme.json` updates over custom CSS
2. Use CSS custom properties for consistency
3. Update `style.css` only for block-specific styles
4. Maintain the existing design system

### For Layout Updates
1. Use WordPress block spacing controls
2. Leverage core layout blocks (Group, Row, Stack)
3. Test on multiple viewport sizes
4. Consider mobile-first approach

## Testing Checklist

Before considering frontend work complete:
- [ ] Component renders correctly in both light and dark themes
- [ ] Responsive behavior works on mobile, tablet, desktop
- [ ] Keyboard navigation functions properly
- [ ] Color contrast meets WCAG standards
- [ ] No console errors in browser
- [ ] Pattern appears in WordPress editor
- [ ] Tested in wp-env local environment

## Git Workflow

- Branch from: `trunk`
- PR target: `trunk`
- Commit style: Descriptive, present tense
- Test locally before committing

## Additional Context

This theme is designed for agencies and creative professionals. Prioritize:
- Clean, minimal aesthetics
- Professional typography
- Smooth interactions
- Accessibility
- Performance
