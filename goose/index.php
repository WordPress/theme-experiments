<?php get_header(); ?>

<p> If you are on a page that should be showing a post (such as <a href="/?page_id=2">this</a>) then below you should see the title:</p>

<?php the_title() ?>

<p>There?  Did you see it?</p>

<p>If this were a "FSE" theme then instead of using <code>the_title()</code> tag as the above is doing we could instead do the following to show the title:</p>

<pre>
&lt;!-- wp:post-title /--&gt;
</pre>

<p>But you can tell by the emptyness below that the block does not work for a classic theme in a PHP file:</p>

<!-- wp:post-title /-->

<p>There? Did you see it?  I didn't either...</p>

<?php get_footer(); ?>
