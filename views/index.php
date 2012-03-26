<div class="row">
    <div class="twelvecol last">
        <?php foreach($blog as $post): ?>
        <h2 id="<?php echo $post->slug; ?>"><a href="<?php echo URL::to('blog/view/'.$post->slug); ?>"><?php echo $post->title; ?></a></h2>
        <?php echo Sparkdown\Markdown($post->content); ?>
        <hr />
        <?php endforeach; ?>
    </div>
</div>