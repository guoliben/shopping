<?php 

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class BrandController extends Controller
{
	//展示附件折扣列表
    public function actionBrand()
    {
    	return '{"brand":[{
    	"id":"1313413244",
    	"category":"服装",
    	"brand":"海澜之家",
    	"count":"5"},
    	{
    	"id":"1313413244",
    	"category":"服装",
    	"brand":"拉夏贝尔",
    	"count":"35"},
    	{
    	"id":"1313413244",
    	"category":"服装",
    	"brand":"七匹狼",
    	"count":"15"},
    	{
    	"id":"1313413244",
    	"category":"服装",
    	"brand":"保罗",
    	"count":"1"},
    	{
    	"id":"1313413244",
    	"category":"服装",
    	"brand":"路易斯.威登",
    	"count":"5"},
    	{
    	"id":"1313413244",
    	"category":"服装",
    	"brand":"普拉达",
    	"count":"3"}]
    	}';
        //return $this->render('index');
    }
 } 
  ?>