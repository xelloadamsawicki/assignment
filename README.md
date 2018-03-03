# Adam Sawicki Xello Web Developer Test

Front-End: http://www.adamsawicki.com/xello

Admin: http://www.adamsawicki.com/xello/wp-admin

Theme and Template Files: https://github.com/xelloadamsawicki/assignment/tree/master/wp-content/themes/xello

*note:* not all files are on the live server (.sass files, package.json, gulpfile.js, etc), but are viewable here in thie GitHub repository.

## Objective:
 - Convert given design into a CMS template, using either a .NET, PHP, or NodeJS CMS of your choice

## Result:
  - I decided to go with WordPress
  - First, I created a very basic WordPress theme named Xello of course
  - Because this is a one page website, the page template is named `front-page.php`
  - I decided to use SASS for the CSS preprocessor
  - SASS and JS files are run through Gulp to concatenate, minify, and uglify
  - I'm using a few very popular tried and tested WordPress plugins to accomplish some tasks (they are listed below)

## Regarding the Editable Regions Requirement:
  - Pretty much the entire page template is editable
  - To edit the page
    - Log into http://www.adamsawicki.com/xello/wp-admin
      - Use credentials I provided via email
    - Click on **Pages** in the left menu
    - Click on **Home**
    - Feel free to edit any of the fields then click on **Update**

## Regarding the Form Input Capture Requirement:
  - To test form
    - Fill out the form on the front-end
    - Log into http://www.adamsawicki.com/xello/wp-admin
      - Use credentials I provided via email
    - Use credentials I proved via email
    - Hover over **Flamingo** in the left menu and click on **Inbound Messages**

## Regarding the Short Description of how SEO content could be updated
  - First and foremost: content is king. Researching topics and keywords before adding content is always encouraged.
  - The theme and the page template are already SEO friendly, making sure to check-off obvious requirements like having just one H1 tag with a good title and alt tags attached to all images.
  - Also added to the page template are **meta description**, **meta keywords**, and **custom page title** tag for when you want to have a different page title than the WordPress page title.
  - All of the above can be handled through the WordPress admin without ever needing to jump back into the code.
  - Additionally, when more content is added, a good WordPress SEO plugin can help to double-check and make sure the admin hasn't forgotten something.
    - One such good and popular plugin is Yoast SEO (https://wordpress.org/plugins/wordpress-seo/)
  - Additionally, I enabled the following WordPress option, because I don't think this site being indexed by Google is beneficial to anyone. On a live (non-assignment) site, this option would *not* be enabled:
    - Search Engine Visibility: `Discourage search engines from indexing this site`

## Tech Used:
- WordPress 4.9.4
  - Advanced Custom Fields 4.4.12
  - Contact Form 7 5.0.1
  - Flamingo 1.8
  - Safe SVG 1.6.0
- HTML
- SASS, CSS
- JavaScript, jQuery
- Bootstrap 4
- Gulp
  - gulp-sass
  - gulp-concat
  - gulp-uglify
- PHP
- MySQL

## If Time Was On My Side
  - I'm very happy with the results, however, time is not on my side this week. If I had more time, I would:
    - Test browser compatibility on many more browsers and operating systems
    - Work on getting the site as accessible as possible
    - Add more semantic custom field names to match the content of the site
    - Work on making the custom fields in the admin much cleaner and easier to understand
    - Add more pages to show functionality of website