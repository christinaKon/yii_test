<?php
namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\News;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays my requests page.
     *
     * @return mixed
     */
    public function actionMyRequests()
    {
        return $this->render('myRequests');
    }

    /**
     * Displays to journalists page.
     *
     * @return mixed
     */
    public function actionToJournalists()
    {
        return $this->render('toJournalists');
    }

    /**
     * Displays to Experts page.
     *
     * @return mixed
     */
    public function actionToExperts()
    {
        return $this->render('toExperts');
    }

    /**
     * Displays to expert requests page.
     *
     * @return mixed
     */
    public function actionExpertRequests()
    {
        return $this->render('expertRequests');
    }

     /**
     * Displays to journalist requests page.
     *
     * @return mixed
     */
    public function actionJournalistRequests()
    {
        return $this->render('journalistRequests');
    }

    /**
     * Displays to press releases page.
     *
     * @return mixed
     */
    public function actionPressReleases()
    {
        return $this->render('pressReleases');
    }

    /**
     * Displays to questions and answers page.
     *
     * @return mixed
     */
    public function actionQuestionsAnswers()
    {
        return $this->render('questionsAnswers');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    public function actionNews(){
        $model = new News();
        $news = $model->getNews();
        $pages = new Pagination(['totalCount' => $news->totalCount, 'pageSize' =>$news->pagination->pageSize]);
        return $this->render('news', [
            'news' => $news,
            'pages' => $pages
        ]);
    }

    /**
     * Displays my answers page.
     *
     * @return mixed
     */
    public function actionMyAnswers()
    {
        return $this->render('myAnswers');
    }

    /**
     * Displays Blacklist page.
     *
     * @return mixed
     */
    public function actionBlacklist()
    {
        return $this->render('blacklist');
    }

    /**
     * Displays My contacts page.
     *
     * @return mixed
     */
    public function actionMyContacts()
    {
        return $this->render('myContacts');
    }

        /**
     * Displays All contacts page.
     *
     * @return mixed
     */
    public function actionAllContacts()
    {
        return $this->render('allContacts');
    }

        /**
     * Displays Me in contacts page.
     *
     * @return mixed
     */
    public function actionMeInContacts()
    {
        return $this->render('meInContacts');
    }

        /**
     * Displays Profile My Press Releases page.
     *
     * @return mixed
     */
    public function actionProfileMyPressReleases()
    {
        return $this->render('profileMyPressReleases');
    }

        /**
     * Displays Profile Companies page.
     *
     * @return mixed
     */
    public function actionProfileCompanies()
    {
        return $this->render('profileCompanies');
    }

        /**
     * Displays Profile Media page.
     *
     * @return mixed
     */
    public function actionProfileMedia()
    {
        return $this->render('profileMedia');
    }

        /**
     * Displays Profile Portfolio page.
     *
     * @return mixed
     */
    public function actionProfilePortfolio()
    {
        return $this->render('profilePortfolio');
    }
}
