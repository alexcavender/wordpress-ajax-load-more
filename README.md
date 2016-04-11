# What is this?
This snippet lets you load more blog posts with AJAX in WordPress. 

## Setup
### 1.) Add the function inside functions.php to the bottom of your theme's functions.php file
### 2.) Add the code from index.php to your theme's index.php , directly before  <?php get_footer(); ?> 

###How to Edit the number of posts loaded
Let's say your main blog loads 5 of the latest posts.
Within functions.php, change 'posts_per_page' from 10 to 5
In your index.php change offset from 10 to 5
