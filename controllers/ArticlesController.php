<?php

namespace app\controllers;
use app\models\Articles;
use yii;

class ArticlesController extends \yii\web\Controller
{
    public function actionCreate()
{
    $article = new Articles();

    if ($article->load(Yii::$app->request->post())) {

        if ($article->save()) {
            return $this->redirect(['view']);
        }
    }

    return $this->render('create', [
        'article' => $article
    ]);
}
    public function actionView()
{
    $query = Articles::find()->all();

    return $this->render('view', [
        'query' => $query
    ]);
}

        public function actionUpdate($id)
{
    $article = Articles::findOne($id);

    if ($article->load(Yii::$app->request->post())) {

        $article->save(false);

        return $this->redirect(['view']);
    }

    return $this->render('create', [
        'article' => $article
    ]);
}

        public function actionDelete($id)
    {
        $article = Articles::findOne($id);

        if ($article !== null) {
            $article->delete();
        }

        return $this->redirect(['view']);
    }

    public function actionIntern()
{
    if (Yii::$app->user->isGuest) {
        return $this->redirect(['/site/login']);
    }

    $intern = Yii::$app->user->identity;

    $query = Articles::find()
        ->where(['interns_id' => $intern->id])
        ->all();

    return $this->render('intern', [
        'query' => $query,
    ]);
}
}


