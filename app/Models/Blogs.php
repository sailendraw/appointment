<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Entities\BlogsEntities;

class Blogs extends Model
{
    /**
     * @var BlogsEntities
     */
    public $blogModel;

    public function __construct(BlogsEntities $blogModel){

        $this->blogModel = $blogModel;

    }

    public function saveBlog($formDetails)
    {
        try {
            $blogModel = $this->blogModel->fill($formDetails);

            if (!$this->blogModel->save()) {
                throw new ModelNotSavedException(get_class($blogModel));
            }

            return $blogModel;

        } catch (Exception $exception) {

        }
    }

    /**
     * {@inheritdoc}
     */
    public function findWithDetail($id)
    {
        return $this->blogModel->findOrFail($id);
    }

    public function updateBlog($id, array $blogModelDetails)
    {
        $blogModel = $this->blogModel->findOrFail($id);

        if (!$blogModel->update($blogModelDetails)) {
            throw new ModelNotUpdatedException(get_class($blogModel));
        }

        return $blogModel;
    }

    public function deleteBlog($id)
    {
        $blogModel = $this->blogModel->findOrFail($id);
        $blogModel['delete_flag']=1;
        if (!$blogModel->update()) {
            throw new ModelNotUpdatedException(get_class($blogModel));
        }

        return $blogModel;
    }
    public function getAll()
    {
        return $this->blogModel->where('delete_flag', '=', 0)->get();
    }
}
