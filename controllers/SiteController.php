<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\SqlDataProvider;
use app\models\HaDocuments;
use app\models\HadocumentsSearch;
use app\models\Group;
use app\models\GroupSearch;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    public function actionIndex()
    {
        $searchModel = new GroupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 10;
        $dataProvider->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 1
        $ha = $searchModel->searchHa();
        $ha->pagination->pageSize = 50;
        $ha->sort->defaultOrder = ['id' => SORT_ASC];

        $had = $searchModel->searchHad();
        $had->pagination->pageSize = 29;
        $had->sort->defaultOrder = ['id' => SORT_ASC];

        $hadc = $searchModel->searchHadc();
        $hadc->pagination->pageSize = 20;
        $hadc->sort->defaultOrder = ['id' => SORT_ASC];

        $hadcc = $searchModel->searchHadcc();
        $hadcc->pagination->pageSize = 15;
        $hadcc->sort->defaultOrder = ['id' => SORT_ASC];

        $hade = $searchModel->searchHade();
        $hade->pagination->pageSize = 10;
        $hade->sort->defaultOrder = ['id' => SORT_ASC];

        $hadea = $searchModel->searchHadea();
        $hadea->pagination->pageSize = 10;
        $hadea->sort->defaultOrder = ['id' => SORT_ASC];

        $hadeb = $searchModel->searchHadeb();
        $hadeb->pagination->pageSize = 10;
        $hadeb->sort->defaultOrder = ['id' => SORT_ASC];

        $hadec = $searchModel->searchHadec();
        $hadec->pagination->pageSize = 10;
        $hadec->sort->defaultOrder = ['id' => SORT_ASC];

        $haded = $searchModel->searchHaded();
        $haded->pagination->pageSize = 10;
        $haded->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 2
        $indicators1 = $searchModel->searchIndicators1();
        $indicators1->pagination->pageSize = 10;
        $indicators1->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators2 = $searchModel->searchIndicators2();
        $indicators2->pagination->pageSize = 10;
        $indicators2->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3 = $searchModel->searchIndicators3();
        $indicators3->pagination->pageSize = 10;
        $indicators3->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4 = $searchModel->searchIndicators4();
        $indicators4->pagination->pageSize = 10;
        $indicators4->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators5 = $searchModel->searchIndicators5();
        $indicators5->pagination->pageSize = 10;
        $indicators5->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators6 = $searchModel->searchIndicators6();
        $indicators6->pagination->pageSize = 10;
        $indicators6->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators7 = $searchModel->searchIndicators7();
        $indicators7->pagination->pageSize = 10;
        $indicators7->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators8 = $searchModel->searchIndicators8();
        $indicators8->pagination->pageSize = 10;
        $indicators8->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators9 = $searchModel->searchIndicators9();
        $indicators9->pagination->pageSize = 10;
        $indicators9->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators10 = $searchModel->searchIndicators10();
        $indicators10->pagination->pageSize = 10;
        $indicators10->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators11 = $searchModel->searchIndicators11();
        $indicators11->pagination->pageSize = 10;
        $indicators11->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators12 = $searchModel->searchIndicators12();
        $indicators12->pagination->pageSize = 10;
        $indicators12->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators13 = $searchModel->searchIndicators13();
        $indicators13->pagination->pageSize = 10;
        $indicators13->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators14 = $searchModel->searchIndicators14();
        $indicators14->pagination->pageSize = 10;
        $indicators14->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators15 = $searchModel->searchIndicators15();
        $indicators15->pagination->pageSize = 10;
        $indicators15->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators16 = $searchModel->searchIndicators16();
        $indicators16->pagination->pageSize = 10;
        $indicators16->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators17 = $searchModel->searchIndicators17();
        $indicators17->pagination->pageSize = 10;
        $indicators17->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators18 = $searchModel->searchIndicators18();
        $indicators18->pagination->pageSize = 10;
        $indicators18->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators19 = $searchModel->searchIndicators19();
        $indicators19->pagination->pageSize = 10;
        $indicators19->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators20 = $searchModel->searchIndicators20();
        $indicators20->pagination->pageSize = 10;
        $indicators20->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators21 = $searchModel->searchIndicators21();
        $indicators21->pagination->pageSize = 10;
        $indicators21->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators22 = $searchModel->searchIndicators22();
        $indicators22->pagination->pageSize = 10;
        $indicators22->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators23 = $searchModel->searchIndicators23();
        $indicators23->pagination->pageSize = 10;
        $indicators23->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators24 = $searchModel->searchIndicators24();
        $indicators24->pagination->pageSize = 10;
        $indicators24->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators25 = $searchModel->searchIndicators25();
        $indicators25->pagination->pageSize = 10;
        $indicators25->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators26 = $searchModel->searchIndicators26();
        $indicators26->pagination->pageSize = 10;
        $indicators26->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators27 = $searchModel->searchIndicators27();
        $indicators27->pagination->pageSize = 10;
        $indicators27->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators28 = $searchModel->searchIndicators28();
        $indicators28->pagination->pageSize = 10;
        $indicators28->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators29 = $searchModel->searchIndicators29();
        $indicators29->pagination->pageSize = 10;
        $indicators29->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators30 = $searchModel->searchIndicators30();
        $indicators30->pagination->pageSize = 10;
        $indicators30->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators31 = $searchModel->searchIndicators31();
        $indicators31->pagination->pageSize = 10;
        $indicators31->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators32 = $searchModel->searchIndicators32();
        $indicators32->pagination->pageSize = 10;
        $indicators32->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators33 = $searchModel->searchIndicators33();
        $indicators33->pagination->pageSize = 10;
        $indicators33->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators34 = $searchModel->searchIndicators34();
        $indicators34->pagination->pageSize = 10;
        $indicators34->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators35 = $searchModel->searchIndicators35();
        $indicators35->pagination->pageSize = 10;
        $indicators35->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators36 = $searchModel->searchIndicators36();
        $indicators36->pagination->pageSize = 10;
        $indicators36->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators37 = $searchModel->searchIndicators37();
        $indicators37->pagination->pageSize = 10;
        $indicators37->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators38 = $searchModel->searchIndicators38();
        $indicators38->pagination->pageSize = 10;
        $indicators38->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators39 = $searchModel->searchIndicators39();
        $indicators39->pagination->pageSize = 10;
        $indicators39->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators40 = $searchModel->searchIndicators40();
        $indicators40->pagination->pageSize = 10;
        $indicators40->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators41 = $searchModel->searchIndicators41();
        $indicators41->pagination->pageSize = 10;
        $indicators41->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators42 = $searchModel->searchIndicators42();
        $indicators42->pagination->pageSize = 10;
        $indicators42->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators43 = $searchModel->searchIndicators43();
        $indicators43->pagination->pageSize = 10;
        $indicators43->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators44 = $searchModel->searchIndicators44();
        $indicators44->pagination->pageSize = 10;
        $indicators44->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators45 = $searchModel->searchIndicators45();
        $indicators45->pagination->pageSize = 10;
        $indicators45->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators46 = $searchModel->searchIndicators46();
        $indicators46->pagination->pageSize = 10;
        $indicators46->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators47 = $searchModel->searchIndicators47();
        $indicators47->pagination->pageSize = 10;
        $indicators47->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators48 = $searchModel->searchIndicators48();
        $indicators48->pagination->pageSize = 10;
        $indicators48->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators49 = $searchModel->searchIndicators49();
        $indicators49->pagination->pageSize = 10;
        $indicators49->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators50 = $searchModel->searchIndicators50();
        $indicators50->pagination->pageSize = 10;
        $indicators50->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators51 = $searchModel->searchIndicators51();
        $indicators51->pagination->pageSize = 10;
        $indicators51->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators52 = $searchModel->searchIndicators52();
        $indicators52->pagination->pageSize = 10;
        $indicators52->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators53 = $searchModel->searchIndicators53();
        $indicators53->pagination->pageSize = 10;
        $indicators53->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators54 = $searchModel->searchIndicators54();
        $indicators54->pagination->pageSize = 10;
        $indicators54->sort->defaultOrder = ['id' => SORT_ASC];


        // ไตรมาส 3

        $indicators3_1 = $searchModel->searchIndicators3_1();
        $indicators3_1->pagination->pageSize = 10;
        $indicators3_1->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators55 = $searchModel->searchIndicators55();
        $indicators55->pagination->pageSize = 10;
        $indicators55->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators56 = $searchModel->searchIndicators56();
        $indicators56->pagination->pageSize = 10;
        $indicators56->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_2 = $searchModel->searchIndicators3_2();
        $indicators3_2->pagination->pageSize = 10;
        $indicators3_2->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_3 = $searchModel->searchIndicators3_3();
        $indicators3_3->pagination->pageSize = 10;
        $indicators3_3->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_4 = $searchModel->searchIndicators3_4();
        $indicators3_4->pagination->pageSize = 10;
        $indicators3_4->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_5 = $searchModel->searchIndicators3_5();
        $indicators3_5->pagination->pageSize = 10;
        $indicators3_5->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_6 = $searchModel->searchIndicators3_6();
        $indicators3_6->pagination->pageSize = 10;
        $indicators3_6->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_7 = $searchModel->searchIndicators3_7();
        $indicators3_7->pagination->pageSize = 10;
        $indicators3_7->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_8 = $searchModel->searchIndicators3_8();
        $indicators3_8->pagination->pageSize = 10;
        $indicators3_8->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators3_9 = $searchModel->searchIndicators3_9();
        $indicators3_9->pagination->pageSize = 10;
        $indicators3_9->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_1 = $searchModel->searchIndicators4_1();
        $indicators4_1->pagination->pageSize = 10;
        $indicators4_1->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_2 = $searchModel->searchIndicators4_2();
        $indicators4_2->pagination->pageSize = 10;
        $indicators4_2->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_3 = $searchModel->searchIndicators4_3();
        $indicators4_3->pagination->pageSize = 10;
        $indicators4_3->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_4 = $searchModel->searchIndicators4_4();
        $indicators4_4->pagination->pageSize = 10;
        $indicators4_4->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_5 = $searchModel->searchIndicators4_5();
        $indicators4_5->pagination->pageSize = 10;
        $indicators4_5->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_6 = $searchModel->searchIndicators4_6();
        $indicators4_6->pagination->pageSize = 10;
        $indicators4_6->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_7 = $searchModel->searchIndicators4_7();
        $indicators4_7->pagination->pageSize = 10;
        $indicators4_7->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_8 = $searchModel->searchIndicators4_8();
        $indicators4_8->pagination->pageSize = 10;
        $indicators4_8->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators4_9 = $searchModel->searchIndicators4_9();
        $indicators4_9->pagination->pageSize = 10;
        $indicators4_9->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 4
        $indicators57 = $searchModel->searchIndicators57();
        $indicators57->pagination->pageSize = 10;
        $indicators57->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators58 = $searchModel->searchIndicators58();
        $indicators58->pagination->pageSize = 10;
        $indicators58->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators59 = $searchModel->searchIndicators59();
        $indicators59->pagination->pageSize = 10;
        $indicators59->sort->defaultOrder = ['id' => SORT_ASC];

        // 2566 ไตรมาสที่ 1
        $indicators60 = $searchModel->searchIndicators60();
        $indicators60->pagination->pageSize = 40;
        $indicators60->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators61 = $searchModel->searchIndicators61();
        $indicators61->pagination->pageSize = 40;
        $indicators61->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators62 = $searchModel->searchIndicators62();
        $indicators62->pagination->pageSize = 40;
        $indicators62->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators63 = $searchModel->searchIndicators63();
        $indicators63->pagination->pageSize = 40;
        $indicators63->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators64 = $searchModel->searchIndicators64();
        $indicators64->pagination->pageSize = 40;
        $indicators64->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators65 = $searchModel->searchIndicators65();
        $indicators65->pagination->pageSize = 40;
        $indicators65->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators66 = $searchModel->searchIndicators66();
        $indicators66->pagination->pageSize = 40;
        $indicators66->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators67 = $searchModel->searchIndicators67();
        $indicators67->pagination->pageSize = 40;
        $indicators67->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators68 = $searchModel->searchIndicators68();
        $indicators68->pagination->pageSize = 40;
        $indicators68->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators69 = $searchModel->searchIndicators69();
        $indicators69->pagination->pageSize = 40;
        $indicators69->sort->defaultOrder = ['id' => SORT_ASC];

        // 2566 ไตรมาสที่ 2
        $indicators70 = $searchModel->searchIndicators70();
        $indicators70->pagination->pageSize = 40;
        $indicators70->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators71 = $searchModel->searchIndicators71();
        $indicators71->pagination->pageSize = 40;
        $indicators71->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators72 = $searchModel->searchIndicators72();
        $indicators72->pagination->pageSize = 40;
        $indicators72->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators73 = $searchModel->searchIndicators73();
        $indicators73->pagination->pageSize = 40;
        $indicators73->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators74 = $searchModel->searchIndicators74();
        $indicators74->pagination->pageSize = 40;
        $indicators74->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators75 = $searchModel->searchIndicators75();
        $indicators75->pagination->pageSize = 40;
        $indicators75->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators76 = $searchModel->searchIndicators76();
        $indicators76->pagination->pageSize = 40;
        $indicators76->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators77 = $searchModel->searchIndicators77();
        $indicators77->pagination->pageSize = 40;
        $indicators77->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators78 = $searchModel->searchIndicators78();
        $indicators78->pagination->pageSize = 40;
        $indicators78->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators79 = $searchModel->searchIndicators79();
        $indicators79->pagination->pageSize = 40;
        $indicators79->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators80 = $searchModel->searchIndicators80();
        $indicators80->pagination->pageSize = 40;
        $indicators80->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators81 = $searchModel->searchIndicators81();
        $indicators81->pagination->pageSize = 40;
        $indicators81->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators82 = $searchModel->searchIndicators82();
        $indicators82->pagination->pageSize = 40;
        $indicators82->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators83 = $searchModel->searchIndicators83();
        $indicators83->pagination->pageSize = 40;
        $indicators83->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators84 = $searchModel->searchIndicators84();
        $indicators84->pagination->pageSize = 40;
        $indicators84->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators85 = $searchModel->searchIndicators85();
        $indicators85->pagination->pageSize = 40;
        $indicators85->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators86 = $searchModel->searchIndicators86();
        $indicators86->pagination->pageSize = 40;
        $indicators86->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators87 = $searchModel->searchIndicators87();
        $indicators87->pagination->pageSize = 40;
        $indicators87->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators88 = $searchModel->searchIndicators88();
        $indicators88->pagination->pageSize = 40;
        $indicators88->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators89 = $searchModel->searchIndicators89();
        $indicators89->pagination->pageSize = 40;
        $indicators89->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators90 = $searchModel->searchIndicators90();
        $indicators90->pagination->pageSize = 40;
        $indicators90->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators91 = $searchModel->searchIndicators91();
        $indicators91->pagination->pageSize = 40;
        $indicators91->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators92 = $searchModel->searchIndicators92();
        $indicators92->pagination->pageSize = 40;
        $indicators92->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators93 = $searchModel->searchIndicators93();
        $indicators93->pagination->pageSize = 40;
        $indicators93->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators94 = $searchModel->searchIndicators94();
        $indicators94->pagination->pageSize = 40;
        $indicators94->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators95 = $searchModel->searchIndicators95();
        $indicators95->pagination->pageSize = 40;
        $indicators95->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators96 = $searchModel->searchIndicators96();
        $indicators96->pagination->pageSize = 40;
        $indicators96->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators97 = $searchModel->searchIndicators97();
        $indicators97->pagination->pageSize = 40;
        $indicators97->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators98 = $searchModel->searchIndicators98();
        $indicators98->pagination->pageSize = 40;
        $indicators98->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators99 = $searchModel->searchIndicators99();
        $indicators99->pagination->pageSize = 40;
        $indicators99->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators100 = $searchModel->searchIndicators100();
        $indicators100->pagination->pageSize = 40;
        $indicators100->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators101 = $searchModel->searchIndicators101();
        $indicators101->pagination->pageSize = 40;
        $indicators101->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators102 = $searchModel->searchIndicators102();
        $indicators102->pagination->pageSize = 40;
        $indicators102->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators103 = $searchModel->searchIndicators103();
        $indicators103->pagination->pageSize = 40;
        $indicators103->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators104 = $searchModel->searchIndicators104();
        $indicators104->pagination->pageSize = 40;
        $indicators104->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators105 = $searchModel->searchIndicators105();
        $indicators105->pagination->pageSize = 40;
        $indicators105->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators106 = $searchModel->searchIndicators106();
        $indicators106->pagination->pageSize = 40;
        $indicators106->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators107 = $searchModel->searchIndicators107();
        $indicators107->pagination->pageSize = 40;
        $indicators107->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators108 = $searchModel->searchIndicators108();
        $indicators108->pagination->pageSize = 40;
        $indicators108->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators109 = $searchModel->searchIndicators109();
        $indicators109->pagination->pageSize = 40;
        $indicators109->sort->defaultOrder = ['id' => SORT_ASC];
                
        $indicators110 = $searchModel->searchIndicators110();
        $indicators110->pagination->pageSize = 40;
        $indicators110->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 1 2567

        $indicators111 = $searchModel->searchIndicators111();
        $indicators111->pagination->pageSize = 40;
        $indicators111->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators112 = $searchModel->searchIndicators112();
        $indicators112->pagination->pageSize = 40;
        $indicators112->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators113 = $searchModel->searchIndicators113();
        $indicators113->pagination->pageSize = 40;
        $indicators113->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators114 = $searchModel->searchIndicators114();
        $indicators114->pagination->pageSize = 40;
        $indicators114->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators115 = $searchModel->searchIndicators115();
        $indicators115->pagination->pageSize = 40;
        $indicators115->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators116 = $searchModel->searchIndicators116();
        $indicators116->pagination->pageSize = 40;
        $indicators116->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators117 = $searchModel->searchIndicators117();
        $indicators117->pagination->pageSize = 40;
        $indicators117->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators118 = $searchModel->searchIndicators118();
        $indicators118->pagination->pageSize = 40;
        $indicators118->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators119 = $searchModel->searchIndicators119();
        $indicators119->pagination->pageSize = 40;
        $indicators119->sort->defaultOrder = ['id' => SORT_ASC];
        
        $indicators120 = $searchModel->searchIndicators120();
        $indicators120->pagination->pageSize = 40;
        $indicators120->sort->defaultOrder = ['id' => SORT_ASC];

        // ไตรมาส 2 2567
                
        $indicators121 = $searchModel->searchIndicators121();
        $indicators121->pagination->pageSize = 40;
        $indicators121->sort->defaultOrder = ['id' => SORT_ASC];
            
        $indicators122 = $searchModel->searchIndicators122();
        $indicators122->pagination->pageSize = 40;
        $indicators122->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators123 = $searchModel->searchIndicators123();
        $indicators123->pagination->pageSize = 40;
        $indicators123->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators124 = $searchModel->searchIndicators124();
        $indicators124->pagination->pageSize = 40;
        $indicators124->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators125 = $searchModel->searchIndicators125();
        $indicators125->pagination->pageSize = 40;
        $indicators125->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators126 = $searchModel->searchIndicators126();
        $indicators126->pagination->pageSize = 40;
        $indicators126->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators127 = $searchModel->searchIndicators127();
        $indicators127->pagination->pageSize = 40;
        $indicators127->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators128 = $searchModel->searchIndicators128();
        $indicators128->pagination->pageSize = 40;
        $indicators128->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators129 = $searchModel->searchIndicators129();
        $indicators129->pagination->pageSize = 40;
        $indicators129->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators130 = $searchModel->searchIndicators130();
        $indicators130->pagination->pageSize = 40;
        $indicators130->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators131 = $searchModel->searchIndicators131();
        $indicators131->pagination->pageSize = 40;
        $indicators131->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators132 = $searchModel->searchIndicators132();
        $indicators132->pagination->pageSize = 40;
        $indicators132->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators133 = $searchModel->searchIndicators133();
        $indicators133->pagination->pageSize = 40;
        $indicators133->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators134 = $searchModel->searchIndicators134();
        $indicators134->pagination->pageSize = 40;
        $indicators134->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators135 = $searchModel->searchIndicators135();
        $indicators135->pagination->pageSize = 40;
        $indicators135->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators136 = $searchModel->searchIndicators136();
        $indicators136->pagination->pageSize = 40;
        $indicators136->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators137 = $searchModel->searchIndicators137();
        $indicators137->pagination->pageSize = 40;
        $indicators137->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators138 = $searchModel->searchIndicators138();
        $indicators138->pagination->pageSize = 40;
        $indicators138->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators139 = $searchModel->searchIndicators139();
        $indicators139->pagination->pageSize = 40;
        $indicators139->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators140 = $searchModel->searchIndicators140();
        $indicators140->pagination->pageSize = 40;
        $indicators140->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators141 = $searchModel->searchIndicators141();
        $indicators141->pagination->pageSize = 40;
        $indicators141->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators142 = $searchModel->searchIndicators142();
        $indicators142->pagination->pageSize = 40;
        $indicators142->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators143 = $searchModel->searchIndicators143();
        $indicators143->pagination->pageSize = 40;
        $indicators143->sort->defaultOrder = ['id' => SORT_ASC];

        $indicators144 = $searchModel->searchIndicators144();
        $indicators144->pagination->pageSize = 40;
        $indicators144->sort->defaultOrder = ['id' => SORT_ASC];

        //test send mail
        //$this->sendMail('ikkdev@gmail.com','Your Fullname');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'ha' => $ha,
            'had' => $had,
            'hadc' => $hadc,
            'hadcc' => $hadcc,
            'hade' => $hade,
            'hadea' => $hadea,
            'hadeb' => $hadeb,
            'hadec' => $hadec,
            'haded' => $haded,
            // ไตรมาส 2
            'indicators1' => $indicators1,
            'indicators2' => $indicators2,
            'indicators3' => $indicators3,
            'indicators4' => $indicators4,
            'indicators5' => $indicators5,
            'indicators6' => $indicators6,
            'indicators7' => $indicators7,
            'indicators8' => $indicators8,
            'indicators9' => $indicators9,
            'indicators10' => $indicators10,
            'indicators11' => $indicators11,
            'indicators12' => $indicators12,
            'indicators13' => $indicators13,
            'indicators14' => $indicators14,
            'indicators15' => $indicators15,
            'indicators16' => $indicators16,
            'indicators17' => $indicators17,
            'indicators18' => $indicators18,
            'indicators19' => $indicators19,
            'indicators20' => $indicators20,
            'indicators21' => $indicators21,
            'indicators22' => $indicators22,
            'indicators23' => $indicators23,
            'indicators24' => $indicators24,
            'indicators25' => $indicators25,
            'indicators26' => $indicators26,
            'indicators27' => $indicators27,
            'indicators28' => $indicators28,
            'indicators29' => $indicators29,
            'indicators30' => $indicators30,
            'indicators31' => $indicators31,
            'indicators32' => $indicators32,
            'indicators33' => $indicators33,
            'indicators34' => $indicators34,
            'indicators35' => $indicators35,
            'indicators36' => $indicators36,
            'indicators37' => $indicators37,
            'indicators38' => $indicators38,
            'indicators39' => $indicators39,
            'indicators40' => $indicators40,
            'indicators41' => $indicators41,
            'indicators42' => $indicators42,
            'indicators43' => $indicators43,
            'indicators44' => $indicators44,
            'indicators45' => $indicators45,
            'indicators46' => $indicators46,
            'indicators47' => $indicators47,
            'indicators48' => $indicators48,
            'indicators49' => $indicators49,
            'indicators50' => $indicators50,
            'indicators51' => $indicators51,
            'indicators52' => $indicators52,
            'indicators53' => $indicators53,
            'indicators54' => $indicators54,

            // ไตรมาส 3
            'indicators55' => $indicators55,
            'indicators56' => $indicators56,
            'indicators3_1' => $indicators3_1,
            'indicators3_2' => $indicators3_2,
            'indicators3_3' => $indicators3_3,
            'indicators3_4' => $indicators3_4,
            'indicators3_5' => $indicators3_5,
            'indicators3_6' => $indicators3_6,
            'indicators3_7' => $indicators3_7,
            'indicators3_8' => $indicators3_8,
            'indicators3_9' => $indicators3_9,
            'indicators4_1' => $indicators4_1,
            'indicators4_2' => $indicators4_2,
            'indicators4_3' => $indicators4_3,
            'indicators4_4' => $indicators4_4,
            'indicators4_5' => $indicators4_5,
            'indicators4_6' => $indicators4_6,
            'indicators4_7' => $indicators4_7,
            'indicators4_8' => $indicators4_8,
            'indicators4_9' => $indicators4_9,

            // ไตรมาส 4
            'indicators57' => $indicators57,
            'indicators58' => $indicators58,
            'indicators59' => $indicators59,

            // 2566 ไตรมาส 1
            'indicators60' => $indicators60,
            'indicators61' => $indicators61,
            'indicators62' => $indicators62,
            'indicators63' => $indicators63,
            'indicators64' => $indicators64,
            'indicators65' => $indicators65,
            'indicators66' => $indicators66,
            'indicators67' => $indicators67,
            'indicators68' => $indicators68,
            'indicators69' => $indicators69,

            // 2566 ไตรมาส 2
            'indicators70' => $indicators70,
            'indicators71' => $indicators71,
            'indicators72' => $indicators72,
            'indicators73' => $indicators73,
            'indicators74' => $indicators74,
            'indicators75' => $indicators75,
            'indicators76' => $indicators76,
            'indicators77' => $indicators77,
            'indicators78' => $indicators78,
            'indicators79' => $indicators79,
            'indicators80' => $indicators80,
            'indicators81' => $indicators81,
            'indicators82' => $indicators82,
            'indicators83' => $indicators83,
            'indicators84' => $indicators84,
            'indicators85' => $indicators85,
            'indicators86' => $indicators86,
            'indicators87' => $indicators87,
            'indicators88' => $indicators88,
            'indicators89' => $indicators89,
            'indicators90' => $indicators90,
            'indicators91' => $indicators91,
            'indicators92' => $indicators92,
            'indicators93' => $indicators93,
            'indicators94' => $indicators94,
            'indicators95' => $indicators95,
            'indicators96' => $indicators96,
            'indicators97' => $indicators97,
            'indicators98' => $indicators98,
            'indicators99' => $indicators99,
            'indicators100' => $indicators100,
            'indicators101' => $indicators101,
            'indicators102' => $indicators102,
            'indicators103' => $indicators103,
            'indicators104' => $indicators104,
            'indicators105' => $indicators105,
            'indicators106' => $indicators106,
            'indicators107' => $indicators107,
            'indicators108' => $indicators108,
            'indicators109' => $indicators109,
            'indicators110' => $indicators110,

            // ไตรมาส 1 2567
            'indicators111' => $indicators111,
            'indicators112' => $indicators112,
            'indicators113' => $indicators113,
            'indicators114' => $indicators114,
            'indicators115' => $indicators115,
            'indicators116' => $indicators116,
            'indicators117' => $indicators117,
            'indicators118' => $indicators118,
            'indicators119' => $indicators119,
            'indicators120' => $indicators120,

            // ไตรมาส 2 2567
            'indicators121' => $indicators121,
            'indicators122' => $indicators122,
            'indicators123' => $indicators123,
            'indicators124' => $indicators124,
            'indicators125' => $indicators125,
            'indicators126' => $indicators126,
            'indicators127' => $indicators127,
            'indicators128' => $indicators128,
            'indicators129' => $indicators129,
            'indicators130' => $indicators130,
            'indicators131' => $indicators131,
            'indicators132' => $indicators132,
            'indicators133' => $indicators133,
            'indicators134' => $indicators134,
            'indicators135' => $indicators135,
            'indicators136' => $indicators136,
            'indicators137' => $indicators137,
            'indicators138' => $indicators138,
            'indicators139' => $indicators139,
            'indicators140' => $indicators140,
            'indicators141' => $indicators141,
            'indicators142' => $indicators142,
            'indicators143' => $indicators143,
            'indicators144' => $indicators144,


            

        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
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

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function sendMail($email, $fullname)
    {
        Yii::$app->mailer
            ->compose('@app/mail/layouts/register', [
                'fullname' => $fullname
            ])
            ->setFrom(['chulatatnarin@gmail.com' => 'Namyuen Hospital'])
            ->setTo($email)
            ->setSubject('ยินดีต้อนรับสู่โรงพยาบาลน้ำยืน 2562')
            ->attach(Yii::getAlias('@webroot') . '/attach/' . 'brochure.pdf')
            //->attach(Yii::getAlias('@webroot').'/attach/'.'Poster.pdf')
            ->send();
    }
}
