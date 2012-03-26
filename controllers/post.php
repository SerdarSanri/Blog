<?php

class Blog_Post_Controller extends Base_Controller {

    public $layout = 'layouts.front';

    public function __construct()
    {
        parent::__construct();
        Bundle::start('sparkdown');
    }

    public function action_index()
    {
        $blog = Post::all();

        return $this->layout->nest('content', 'blog::index', array('blog' => $blog));
    }

    public function action_view($slug = '')
    {
        $post = Post::where_slug($slug)->first();

        if(!$post)
        {
            return Response::error('404');
        }

        return $this->layout->nest('content', 'blog::post', array('post' => $post));
    }

}