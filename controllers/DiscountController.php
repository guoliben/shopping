<?php 

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class DiscountController extends Controller
{
	//展示附件折扣列表
    public function actionNearest()
    {
    	return '{"nearest":[{
    	"id":"1313413244",
    	"title":"精品夹克七折",
    	"name":"海澜之家（聚丰园路）",
    	"time":"2016-06-31 12:00:02",
    	"category":"服装",
    	"brand":"海澜之家",
    	"address":"聚丰园路383号",
    	"location":"31.3210550000,121.3901450000"},
    	{
    	"id":"1313414144",
    	"title":"买一送一",
    	"name":"拉夏贝尔（长青路店）",
    	"time":"2016-05-31 12:00:02",
    	"category":"服装",
    	"brand":"拉夏贝尔",
    	"address":"长青路83号",
    	"location":"31.3156260000,121.3815210000"},
    	{
    	"id":"1313414176",
    	"title":"换季大清仓",
    	"name":"古北路七匹狼",
    	"time":"2016-05-31 12:00:02",
    	"category":"服装",
    	"brand":"七匹狼",
    	"address":"古北路路3号",
    	"location":"31.3156260000,121.3815210000"}]
    	}';
        //return $this->render('index');
    }
 } 
  ?>