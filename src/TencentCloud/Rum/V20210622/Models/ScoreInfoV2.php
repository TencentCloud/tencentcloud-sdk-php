<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method integer getProjectID() 获取<p>项目id</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>项目id</p>
 * @method float getScore() 获取<p>项目总分</p>
 * @method void setScore(float $Score) 设置<p>项目总分</p>
 * @method float getApiPerformanceScore() 获取<p>API性能评分</p>
 * @method void setApiPerformanceScore(float $ApiPerformanceScore) 设置<p>API性能评分</p>
 * @method float getApiAvailableScore() 获取<p>API可用性评分</p>
 * @method void setApiAvailableScore(float $ApiAvailableScore) 设置<p>API可用性评分</p>
 * @method integer getApiNum() 获取<p>API调用总数</p>
 * @method void setApiNum(integer $ApiNum) 设置<p>API调用总数</p>
 * @method integer getApiFail() 获取<p>API失败次数</p>
 * @method void setApiFail(integer $ApiFail) 设置<p>API失败次数</p>
 * @method float getApiDuration() 获取<p>API平均持续时间</p>
 * @method void setApiDuration(float $ApiDuration) 设置<p>API平均持续时间</p>
 * @method float getPagePerformanceScore() 获取<p>页面性能评分</p>
 * @method void setPagePerformanceScore(float $PagePerformanceScore) 设置<p>页面性能评分</p>
 * @method integer getPagePv() 获取<p>页面浏览量</p>
 * @method void setPagePv(integer $PagePv) 设置<p>页面浏览量</p>
 * @method integer getPageUv() 获取<p>独立访客数</p>
 * @method void setPageUv(integer $PageUv) 设置<p>独立访客数</p>
 * @method integer getPageError() 获取<p>页面错误数</p>
 * @method void setPageError(integer $PageError) 设置<p>页面错误数</p>
 * @method float getPageDuration() 获取<p>首屏时间</p>
 * @method void setPageDuration(float $PageDuration) 设置<p>首屏时间</p>
 * @method float getPageLCP() 获取<p>平均 LCP</p>
 * @method void setPageLCP(float $PageLCP) 设置<p>平均 LCP</p>
 * @method float getPageFID() 获取<p>平均 FID</p>
 * @method void setPageFID(float $PageFID) 设置<p>平均 FID</p>
 * @method float getPageCLS() 获取<p>平均 CLS</p>
 * @method void setPageCLS(float $PageCLS) 设置<p>平均 CLS</p>
 * @method float getPageFCP() 获取<p>平均 FCP</p>
 * @method void setPageFCP(float $PageFCP) 设置<p>平均 FCP</p>
 * @method float getPageINP() 获取<p>平均 INP</p>
 * @method void setPageINP(float $PageINP) 设置<p>平均 INP</p>
 * @method float getJsErrorScore() 获取<p>JavaScript错误评分</p>
 * @method void setJsErrorScore(float $JsErrorScore) 设置<p>JavaScript错误评分</p>
 * @method float getStaticAvailableScore() 获取<p>静态资源可用性评分</p>
 * @method void setStaticAvailableScore(float $StaticAvailableScore) 设置<p>静态资源可用性评分</p>
 * @method float getStaticPerformanceScore() 获取<p>静态资源性能评分</p>
 * @method void setStaticPerformanceScore(float $StaticPerformanceScore) 设置<p>静态资源性能评分</p>
 * @method integer getStaticNum() 获取<p>静态资源请求总数</p>
 * @method void setStaticNum(integer $StaticNum) 设置<p>静态资源请求总数</p>
 * @method integer getStaticFail() 获取<p>静态资源加载失败数</p>
 * @method void setStaticFail(integer $StaticFail) 设置<p>静态资源加载失败数</p>
 * @method float getStaticDuration() 获取<p>静态资源加载时间</p>
 * @method void setStaticDuration(float $StaticDuration) 设置<p>静态资源加载时间</p>
 * @method string getExclusion() 获取<p>忽略的配置项</p>
 * @method void setExclusion(string $Exclusion) 设置<p>忽略的配置项</p>
 */
class ScoreInfoV2 extends AbstractModel
{
    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectID;

    /**
     * @var float <p>项目总分</p>
     */
    public $Score;

    /**
     * @var float <p>API性能评分</p>
     */
    public $ApiPerformanceScore;

    /**
     * @var float <p>API可用性评分</p>
     */
    public $ApiAvailableScore;

    /**
     * @var integer <p>API调用总数</p>
     */
    public $ApiNum;

    /**
     * @var integer <p>API失败次数</p>
     */
    public $ApiFail;

    /**
     * @var float <p>API平均持续时间</p>
     */
    public $ApiDuration;

    /**
     * @var float <p>页面性能评分</p>
     */
    public $PagePerformanceScore;

    /**
     * @var integer <p>页面浏览量</p>
     */
    public $PagePv;

    /**
     * @var integer <p>独立访客数</p>
     */
    public $PageUv;

    /**
     * @var integer <p>页面错误数</p>
     */
    public $PageError;

    /**
     * @var float <p>首屏时间</p>
     */
    public $PageDuration;

    /**
     * @var float <p>平均 LCP</p>
     */
    public $PageLCP;

    /**
     * @var float <p>平均 FID</p>
     */
    public $PageFID;

    /**
     * @var float <p>平均 CLS</p>
     */
    public $PageCLS;

    /**
     * @var float <p>平均 FCP</p>
     */
    public $PageFCP;

    /**
     * @var float <p>平均 INP</p>
     */
    public $PageINP;

    /**
     * @var float <p>JavaScript错误评分</p>
     */
    public $JsErrorScore;

    /**
     * @var float <p>静态资源可用性评分</p>
     */
    public $StaticAvailableScore;

    /**
     * @var float <p>静态资源性能评分</p>
     */
    public $StaticPerformanceScore;

    /**
     * @var integer <p>静态资源请求总数</p>
     */
    public $StaticNum;

    /**
     * @var integer <p>静态资源加载失败数</p>
     */
    public $StaticFail;

    /**
     * @var float <p>静态资源加载时间</p>
     */
    public $StaticDuration;

    /**
     * @var string <p>忽略的配置项</p>
     */
    public $Exclusion;

    /**
     * @param integer $ProjectID <p>项目id</p>
     * @param float $Score <p>项目总分</p>
     * @param float $ApiPerformanceScore <p>API性能评分</p>
     * @param float $ApiAvailableScore <p>API可用性评分</p>
     * @param integer $ApiNum <p>API调用总数</p>
     * @param integer $ApiFail <p>API失败次数</p>
     * @param float $ApiDuration <p>API平均持续时间</p>
     * @param float $PagePerformanceScore <p>页面性能评分</p>
     * @param integer $PagePv <p>页面浏览量</p>
     * @param integer $PageUv <p>独立访客数</p>
     * @param integer $PageError <p>页面错误数</p>
     * @param float $PageDuration <p>首屏时间</p>
     * @param float $PageLCP <p>平均 LCP</p>
     * @param float $PageFID <p>平均 FID</p>
     * @param float $PageCLS <p>平均 CLS</p>
     * @param float $PageFCP <p>平均 FCP</p>
     * @param float $PageINP <p>平均 INP</p>
     * @param float $JsErrorScore <p>JavaScript错误评分</p>
     * @param float $StaticAvailableScore <p>静态资源可用性评分</p>
     * @param float $StaticPerformanceScore <p>静态资源性能评分</p>
     * @param integer $StaticNum <p>静态资源请求总数</p>
     * @param integer $StaticFail <p>静态资源加载失败数</p>
     * @param float $StaticDuration <p>静态资源加载时间</p>
     * @param string $Exclusion <p>忽略的配置项</p>
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
        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("ApiPerformanceScore",$param) and $param["ApiPerformanceScore"] !== null) {
            $this->ApiPerformanceScore = $param["ApiPerformanceScore"];
        }

        if (array_key_exists("ApiAvailableScore",$param) and $param["ApiAvailableScore"] !== null) {
            $this->ApiAvailableScore = $param["ApiAvailableScore"];
        }

        if (array_key_exists("ApiNum",$param) and $param["ApiNum"] !== null) {
            $this->ApiNum = $param["ApiNum"];
        }

        if (array_key_exists("ApiFail",$param) and $param["ApiFail"] !== null) {
            $this->ApiFail = $param["ApiFail"];
        }

        if (array_key_exists("ApiDuration",$param) and $param["ApiDuration"] !== null) {
            $this->ApiDuration = $param["ApiDuration"];
        }

        if (array_key_exists("PagePerformanceScore",$param) and $param["PagePerformanceScore"] !== null) {
            $this->PagePerformanceScore = $param["PagePerformanceScore"];
        }

        if (array_key_exists("PagePv",$param) and $param["PagePv"] !== null) {
            $this->PagePv = $param["PagePv"];
        }

        if (array_key_exists("PageUv",$param) and $param["PageUv"] !== null) {
            $this->PageUv = $param["PageUv"];
        }

        if (array_key_exists("PageError",$param) and $param["PageError"] !== null) {
            $this->PageError = $param["PageError"];
        }

        if (array_key_exists("PageDuration",$param) and $param["PageDuration"] !== null) {
            $this->PageDuration = $param["PageDuration"];
        }

        if (array_key_exists("PageLCP",$param) and $param["PageLCP"] !== null) {
            $this->PageLCP = $param["PageLCP"];
        }

        if (array_key_exists("PageFID",$param) and $param["PageFID"] !== null) {
            $this->PageFID = $param["PageFID"];
        }

        if (array_key_exists("PageCLS",$param) and $param["PageCLS"] !== null) {
            $this->PageCLS = $param["PageCLS"];
        }

        if (array_key_exists("PageFCP",$param) and $param["PageFCP"] !== null) {
            $this->PageFCP = $param["PageFCP"];
        }

        if (array_key_exists("PageINP",$param) and $param["PageINP"] !== null) {
            $this->PageINP = $param["PageINP"];
        }

        if (array_key_exists("JsErrorScore",$param) and $param["JsErrorScore"] !== null) {
            $this->JsErrorScore = $param["JsErrorScore"];
        }

        if (array_key_exists("StaticAvailableScore",$param) and $param["StaticAvailableScore"] !== null) {
            $this->StaticAvailableScore = $param["StaticAvailableScore"];
        }

        if (array_key_exists("StaticPerformanceScore",$param) and $param["StaticPerformanceScore"] !== null) {
            $this->StaticPerformanceScore = $param["StaticPerformanceScore"];
        }

        if (array_key_exists("StaticNum",$param) and $param["StaticNum"] !== null) {
            $this->StaticNum = $param["StaticNum"];
        }

        if (array_key_exists("StaticFail",$param) and $param["StaticFail"] !== null) {
            $this->StaticFail = $param["StaticFail"];
        }

        if (array_key_exists("StaticDuration",$param) and $param["StaticDuration"] !== null) {
            $this->StaticDuration = $param["StaticDuration"];
        }

        if (array_key_exists("Exclusion",$param) and $param["Exclusion"] !== null) {
            $this->Exclusion = $param["Exclusion"];
        }
    }
}
