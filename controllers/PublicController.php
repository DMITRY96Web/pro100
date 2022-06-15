<?php

namespace app\controllers;

use app\models\Comment;
use app\models\Request;
use app\models\Service;
use Yii;

class PublicController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'public';

        $services = Service::find()->all();
        $comments = Comment::find()->all();
        $servicesPopular = Service::find()->orderBy('id')->limit(4)->all();

        return $this->render('index', compact('services', 'comments', 'servicesPopular'));
    }

    public function actionContact()
    {
        $this->layout = 'public';

        return $this->render('contact');
    }

    public function actionServices()
    {
        $this->layout = 'public';

        $services = Service::find()->all();

        return $this->render('services', compact('services'));
    }

    public function actionServiceView($id)
    {
        $this->layout = 'public';

        $services = Service::findOne($id);

        return $this->render('service-view', [
            'model' => $services,
        ]);
    }

    public function actionNewRequest()
    {
        $model = new Request();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/public']);
        }

        return $this->redirect(['/public']);
    }

    public function actionNewComment()
    {
        $model = new Comment();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/public']);
        }

        return $this->redirect(['/public']);
    }
}
