https://codex.wordpress.org/
https://developer.wordpress.org/git

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
  Associative array
  ```php
    $myAssArray = array('John'    => 12,
                        'Thomas'  => 13,
                        'Jill'    => 14);
    echo "<p>$myAssArray['John']</p>";
  ```

## WORDPRESS CONCEPTS
Template Files
- index.php -> powers the generic blog listing
- single.php -> used to show single posts
- single-[posttype] -> for custom post types
- page.php -> used to show pages
- header.php -> contains the header
  - get_header() -> returns the header
  - wp_head(); -> load css scripts added on functions.php
- footer.php -> contains the footer
  - get_footer() -> returns the footer
  - wp_footer() -> load js scripts added on functions.php
- front-page.php -> home page
- archive.php -> archive page

Other files
- functions.php -> configuration and resources loading
  - wp_enqueue_style() -> load the css files on hook wp_enqueue_scripts
  - wp_enqueue_script() -> load the js files on hook wp_enqueue_scripts
  - add_theme_support() -> on hook after_setup_theme
    - title-tag -> sets the title for each page

We can add classes into the Body tag
```html
<body <?php body_class(); ?>>
```

We can create diferent post types
We can unse the "mu-plugins" folder for this
```php
function university_post_types() {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add new Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',
        ),
        'menu_icon' => 'dashicons-calendar',
    ));
}
add_action('init', 'university_post_types');
```

## WORDPRESS FUNCTIONS:
- have_posts() -> returns if there are any pending post
- get_post_type() -> returns the type of the post returned
- get_the_ID() -> returns the ID of the current post
- wp_get_post_parent_id() -> returns the ID of the parent of the parameter
- the_post() -> iterate to the post
- the_title() -> returns the title of the current iterated post
- get_the_title() -> returns the title of param
- get_the_title -> returns the title of the parameter ID
- the_content() -> returns the content of the current iterated post
- the_permalink() -> returns the permanent link for the current iterated post
- get_permalink() -> returns the permalink of param
- get_post_type_archive_link() -> returns the link for a param post type
- site_url() -> returns the root path
- paginate_links() -> gives the pagination for the blogs

- single_cat_title() -> returns the category title for archive page

- bloginfo($param)
  - 'name' -> returs the **Site Title** of the website in **General Settings**
  - 'description' -> returs the **Tagline** of the website in **General Settings**

- get_theme_file_uri() -> used to build the complete url for the resourse

- wp_list_pages() -> use to return list of pages acording an Associative array

- the_author_posts_link() -> returns the name of author with link to its archive
- the_time() -> parameter to set the time format
  - https://wordpress.org/support/article/formatting-date-and-time/
- get_the_category_list() -> on param set chat to divide categoriesgit 

## WORDPRESS Utils:
See if page has children
```php
  $testArray = get_pages(array(
        'child_of' => get_the_ID()
  ));
```

## Custom queries
```php
  $homePagePosts = new WP_Query(array(
    'posts_per_page' => '2',
  ));

  while($homePagePosts->have_posts()) {
    $homePagePosts->the_post();
    /** code to iterate */    
  }
  wp_reset_postdata();  // Important to reset the query object
```

Advanced Custom Fields is a usefull plugin to add custom-fields to the "posts"