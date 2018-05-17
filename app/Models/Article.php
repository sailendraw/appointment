<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Entities\ArticleEntities;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{
    /**
     * @var ArticleEntities
     */
    public $articleModel;

    public function __construct(ArticleEntities $articleModel){

        $this->articleModel = $articleModel;

    }

    public function saveArticle($formDetails)
    {
        try {
            $articleModel = $this->articleModel->fill($formDetails);

            if (!$this->articleModel->save()) {
                throw new ModelNotSavedException(get_class($articleModel));
            }

            return $articleModel;

        } catch (Exception $exception) {

        }
    }

    /**
     * {@inheritdoc}
     */
    public function findWithDetail($id)
    {
        return $this->articleModel->findOrFail($id);
    }
    public function updateArticle($id, array $articleModelDetails)
    {
        $articleModel = $this->articleModel->findOrFail($id);

        if (!$articleModel->update($articleModelDetails)) {
            throw new ModelNotUpdatedException(get_class($articleModel));
        }

        return $articleModel;
    }

    public function deleteArticle($id)
    {
        $articleModel = $this->articleModel->findOrFail($id);
        $articleModel['delete_flag']=1;
        if (!$articleModel->update()) {
            throw new ModelNotUpdatedException(get_class($articleModel));
        }

        return $articleModel;
    }
    public function getAll()
    {
        return $this->articleModel->where('delete_flag', '=', 0)->get();
    }
}
