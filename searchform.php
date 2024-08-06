<div class="search_blog">
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/');?>">
<div>
<input type="text" class="search-field btn-block" name="s" placeholder="Search in Blogs.." value="<?php the_search_query(); ?>">
<button type="submit" class="searchbot" id="searchsubmit" value="go"/>
</div>
</form>
</div>