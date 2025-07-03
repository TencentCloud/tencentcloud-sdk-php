<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * project Score分数实体
 *
 * @method string getStaticDuration() 获取duration
 * @method void setStaticDuration(string $StaticDuration) 设置duration
 * @method string getPagePv() 获取pv
 * @method void setPagePv(string $PagePv) 设置pv
 * @method string getApiFail() 获取失败
 * @method void setApiFail(string $ApiFail) 设置失败
 * @method string getApiNum() 获取请求
 * @method void setApiNum(string $ApiNum) 设置请求
 * @method string getStaticFail() 获取fail
 * @method void setStaticFail(string $StaticFail) 设置fail
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method string getPageUv() 获取uv
 * @method void setPageUv(string $PageUv) 设置uv
 * @method string getApiDuration() 获取请求次数
 * @method void setApiDuration(string $ApiDuration) 设置请求次数
 * @method string getScore() 获取项目总分
 * @method void setScore(string $Score) 设置项目总分
 * @method string getPageError() 获取error
 * @method void setPageError(string $PageError) 设置error
 * @method string getStaticNum() 获取num
 * @method void setStaticNum(string $StaticNum) 设置num
 * @method integer getRecordNum() 获取num
 * @method void setRecordNum(integer $RecordNum) 设置num
 * @method string getPageDuration() 获取Duration
 * @method void setPageDuration(string $PageDuration) 设置Duration
 * @method string getCreateTime() 获取时间
 * @method void setCreateTime(string $CreateTime) 设置时间
 * @method string getPagePerformanceScore() 获取页面性能评分
 * @method void setPagePerformanceScore(string $PagePerformanceScore) 设置页面性能评分
 * @method string getJsErrorScore() 获取js错误评分
 * @method void setJsErrorScore(string $JsErrorScore) 设置js错误评分
 * @method string getApiPerformanceScore() 获取API性能评分
 * @method void setApiPerformanceScore(string $ApiPerformanceScore) 设置API性能评分
 * @method string getApiAvaliableScore() 获取API可用性评分
 * @method void setApiAvaliableScore(string $ApiAvaliableScore) 设置API可用性评分
 * @method string getStaticPerformanceScore() 获取静态资源性能评分
 * @method void setStaticPerformanceScore(string $StaticPerformanceScore) 设置静态资源性能评分
 * @method string getStaticAvaliableScore() 获取静态资源可用性评分
 * @method void setStaticAvaliableScore(string $StaticAvaliableScore) 设置静态资源可用性评分
 */
class ScoreInfo extends AbstractModel
{
    /**
     * @var string duration
     */
    public $StaticDuration;

    /**
     * @var string pv
     */
    public $PagePv;

    /**
     * @var string 失败
     */
    public $ApiFail;

    /**
     * @var string 请求
     */
    public $ApiNum;

    /**
     * @var string fail
     */
    public $StaticFail;

    /**
     * @var integer 项目id
     */
    public $ProjectID;

    /**
     * @var string uv
     */
    public $PageUv;

    /**
     * @var string 请求次数
     */
    public $ApiDuration;

    /**
     * @var string 项目总分
     */
    public $Score;

    /**
     * @var string error
     */
    public $PageError;

    /**
     * @var string num
     */
    public $StaticNum;

    /**
     * @var integer num
     */
    public $RecordNum;

    /**
     * @var string Duration
     */
    public $PageDuration;

    /**
     * @var string 时间
     */
    public $CreateTime;

    /**
     * @var string 页面性能评分
     */
    public $PagePerformanceScore;

    /**
     * @var string js错误评分
     */
    public $JsErrorScore;

    /**
     * @var string API性能评分
     */
    public $ApiPerformanceScore;

    /**
     * @var string API可用性评分
     */
    public $ApiAvaliableScore;

    /**
     * @var string 静态资源性能评分
     */
    public $StaticPerformanceScore;

    /**
     * @var string 静态资源可用性评分
     */
    public $StaticAvaliableScore;

    /**
     * @param string $StaticDuration duration
     * @param string $PagePv pv
     * @param string $ApiFail 失败
     * @param string $ApiNum 请求
     * @param string $StaticFail fail
     * @param integer $ProjectID 项目id
     * @param string $PageUv uv
     * @param string $ApiDuration 请求次数
     * @param string $Score 项目总分
     * @param string $PageError error
     * @param string $StaticNum num
     * @param integer $RecordNum num
     * @param string $PageDuration Duration
     * @param string $CreateTime 时间
     * @param string $PagePerformanceScore 页面性能评分
     * @param string $JsErrorScore js错误评分
     * @param string $ApiPerformanceScore API性能评分
     * @param string $ApiAvaliableScore API可用性评分
     * @param string $StaticPerformanceScore 静态资源性能评分
     * @param string $StaticAvaliableScore 静态资源可用性评分
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StaticDuration",$param) and $param["StaticDuration"] !== null) {
            $this->StaticDuration = $param["StaticDuration"];
        }

        if (array_key_exists("PagePv",$param) and $param["PagePv"] !== null) {
            $this->PagePv = $param["PagePv"];
        }

        if (array_key_exists("ApiFail",$param) and $param["ApiFail"] !== null) {
            $this->ApiFail = $param["ApiFail"];
        }

        if (array_key_exists("ApiNum",$param) and $param["ApiNum"] !== null) {
            $this->ApiNum = $param["ApiNum"];
        }

        if (array_key_exists("StaticFail",$param) and $param["StaticFail"] !== null) {
            $this->StaticFail = $param["StaticFail"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("PageUv",$param) and $param["PageUv"] !== null) {
            $this->PageUv = $param["PageUv"];
        }

        if (array_key_exists("ApiDuration",$param) and $param["ApiDuration"] !== null) {
            $this->ApiDuration = $param["ApiDuration"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("PageError",$param) and $param["PageError"] !== null) {
            $this->PageError = $param["PageError"];
        }

        if (array_key_exists("StaticNum",$param) and $param["StaticNum"] !== null) {
            $this->StaticNum = $param["StaticNum"];
        }

        if (array_key_exists("RecordNum",$param) and $param["RecordNum"] !== null) {
            $this->RecordNum = $param["RecordNum"];
        }

        if (array_key_exists("PageDuration",$param) and $param["PageDuration"] !== null) {
            $this->PageDuration = $param["PageDuration"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PagePerformanceScore",$param) and $param["PagePerformanceScore"] !== null) {
            $this->PagePerformanceScore = $param["PagePerformanceScore"];
        }

        if (array_key_exists("JsErrorScore",$param) and $param["JsErrorScore"] !== null) {
            $this->JsErrorScore = $param["JsErrorScore"];
        }

        if (array_key_exists("ApiPerformanceScore",$param) and $param["ApiPerformanceScore"] !== null) {
            $this->ApiPerformanceScore = $param["ApiPerformanceScore"];
        }

        if (array_key_exists("ApiAvaliableScore",$param) and $param["ApiAvaliableScore"] !== null) {
            $this->ApiAvaliableScore = $param["ApiAvaliableScore"];
        }

        if (array_key_exists("StaticPerformanceScore",$param) and $param["StaticPerformanceScore"] !== null) {
            $this->StaticPerformanceScore = $param["StaticPerformanceScore"];
        }

        if (array_key_exists("StaticAvaliableScore",$param) and $param["StaticAvaliableScore"] !== null) {
            $this->StaticAvaliableScore = $param["StaticAvaliableScore"];
        }
    }
}
