<h2 id="<?php echo $post->slug; ?>"><a href="#<?php echo $post->slug; ?>"><?php echo $post->title; ?></a></h2>
<?php echo Sparkdown\Markdown($post->content); ?>