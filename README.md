# What is this?
This snippet lets you load more blog posts with AJAX in WordPress. 

## Setup
1. Add the function inside functions.php to the bottom of your theme's functions.php file
2. Add the code from index.php to your theme's index.php , directly before  <?php get_footer(); ?> 

###How to Edit the number of posts loaded
By default , the snippet gets the next 10 posts
#####What if your blog is set up to load 5 of your latest posts?

1. In the function load_more_posts, change 'posts_per_page' from 10 to 5
2. In your index.php, inside <script>  change offset from 10 to 5
