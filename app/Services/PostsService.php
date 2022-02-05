<?php
    namespace App\Services;

    use App\Repositories\PostsRepository;
    use Validator;
    use Image;

    class PostsService
    {
        protected $PostsRepository;

        public function __construct(PostsRepository $PostsRepository)
        {
            $this->PostsRepository = $PostsRepository;
        }

        //Create

        public function savePost($request)
        {
            $request->validate([
                'title' => 'required',
                'short' => 'required',
                'content' => 'required',
                'image' => 'required',
            ]);
            $result = $this->PostsRepository->save($request);
            return $result;
        }

        //Paginate

        public function getPaginate($paginate=5)
        {
            return $this->PostsRepository->getPaginate($paginate=5);
        }
    }