<?php
    namespace App\Repositories;

    use App\Models\Post;
    use Storage;
    use Image;

    class PostsRepository
    {
        protected $post;

        public function __construct(Post $post)
        {
            $this->post = $post;
        }

        //Create
        public function save($request)
        {
            $data = $request->all();
            $post = new $this->post;

            $post->title = $data['title'];
            $post->short = $data['short'];
            $post->content = $data['content'];

            $img_name = $request->file('image')->store('posts', ['disk' => 'public']);
            $full_path = storage_path('app/public/'.$img_name);
            $full_thumb_path = storage_path('app/public/thumbs/'.$img_name);

            $thumb = Image::make($full_path);
            $thumb -> fit(350, 350, function($constraint){
                $constraint -> aspectRatio();
            })->save($full_thumb_path);
            $post -> image = $img_name;
            $post -> thumb = 'thumbs/'.$img_name;


            $post->save();
            return $post->fresh();

        }
        //Paginate
        public function getPaginate($paginate)
        {
            $results = Post::orderBy('created_at', 'DESC')->paginate($paginate);
            return $results;
        }

        
        
    }