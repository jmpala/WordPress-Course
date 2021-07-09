## Configuration
- We can set the **Theme** info on style.css like:
  - Theme Name: Fictional University
  - Author: JMPala
  - Version: 1.0'

- For development set the version of js and css to func microtime() to bypass catching

## Php:
- We can declare a variable like
  ```php
    $myName = 'Juan';
    echo "<h1>$myName</h1>";
  ```
- We can declare an array like
- ```php
    $myArray = array('John', 'Thomas', 'Jill');
    echo "<p>$myArray[0]</p>";
  ```

## WORDPRESS CONCEPTS
Template Files
- index.php -> 
- single.php -> used to show single posts
- page.php -> used to show pages
- header.php -> contains the header
  - get_header() -> returns the header
  - wp_head(); -> load css scripts added on functions.php
- footer.php -> contains the footer
  - get_footer() -> returns the footer
  - wp_footer() -> load js scripts added on functions.php

Other files
- functions.php -> configuration and resources loading
  - wp_enqueue_style() -> load the css files
  - wp_enqueue_script() -> load the js files

## WORDPRESS FUNCTIONS:
- have_posts() -> returns if there are any pending post
- the_post() -> iterate to the post
- the_title() -> returns the title of the current iterated post
- the_content() -> returns the content of the current iterated post
- the_permalink() -> returns the permanent link for the current iterated post

- bloginfo($param)
  - 'name' -> returs the **Site Title** of the website in **General Settings**
  - 'description' -> returs the **Tagline** of the website in **General Settings**

- get_theme_file_uri() -> used to build the complete url for the resourse