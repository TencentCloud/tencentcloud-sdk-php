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
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method float getScore() 获取项目总分
 * @method void setScore(float $Score) 设置项目总分
 * @method float getApiPerformanceScore() 获取API性能评分
 * @method void setApiPerformanceScore(float $ApiPerformanceScore) 设置API性能评分
 * @method float getApiAvailableScore() 获取API可用性评分
 * @method void setApiAvailableScore(float $ApiAvailableScore) 设置API可用性评分
 * @method integer getApiNum() 获取API调用总数
 * @method void setApiNum(integer $ApiNum) 设置API调用总数
 * @method integer getApiFail() 获取API失败次数
 * @method void setApiFail(integer $ApiFail) 设置API失败次数
 * @method float getApiDuration() 获取API平均持续时间
 * @method void setApiDuration(float $ApiDuration) 设置API平均持续时间
 * @method float getPagePerformanceScore() 获取页面性能评分
 * @method void setPagePerformanceScore(float $PagePerformanceScore) 设置页面性能评分
 * @method integer getPagePv() 获取页面浏览量
 * @method void setPagePv(integer $PagePv) 设置页面浏览量
 * @method integer getPageUv() 获取独立访客数
 * @method void setPageUv(integer $PageUv) 设置独立访客数
 * @method integer getPageError() 获取页面错误数
 * @method void setPageError(integer $PageError) 设置页面错误数
 * @method float getPageDuration() 获取首屏时间
 * @method void setPageDuration(float $PageDuration) 设置首屏时间
 * @method float getPageLCP() 获取平均 LCP
 * @method void setPageLCP(float $PageLCP) 设置平均 LCP
 * @method float getPageFID() 获取平均 FID
 * @method void setPageFID(float $PageFID) 设置平均 FID
 * @method float getPageCLS() 获取平均 CLS
 * @method void setPageCLS(float $PageCLS) 设置平均 CLS
 * @method float getPageFCP() 获取平均 FCP
 * @method void setPageFCP(float $PageFCP) 设置平均 FCP
 * @method float getPageINP() 获取平均 INP
 * @method void setPageINP(float $PageINP) 设置平均 INP
 * @method float getJsErrorScore() 获取JavaScript错误评分
 * @method void setJsErrorScore(float $JsErrorScore) 设置JavaScript错误评分
 * @method float getStaticAvailableScore() 获取静态资源可用性评分
 * @method void setStaticAvailableScore(float $StaticAvailableScore) 设置静态资源可用性评分
 * @method float getStaticPerformanceScore() 获取静态资源性能评分
 * @method void setStaticPerformanceScore(float $StaticPerformanceScore) 设置静态资源性能评分
 * @method integer getStaticNum() 获取静态资源请求总数
 * @method void setStaticNum(integer $StaticNum) 设置静态资源请求总数
 * @method integer getStaticFail() 获取静态资源加载失败数
 * @method void setStaticFail(integer $StaticFail) 设置静态资源加载失败数
 * @method float getStaticDuration() 获取静态资源加载时间
 * @method void setStaticDuration(float $StaticDuration) 设置静态资源加载时间
 */
class ScoreInfoV2 extends AbstractModel
{
    /**
     * @var integer 项目id
     */
    public $ProjectID;

    /**
     * @var float 项目总分
     */
    public $Score;

    /**
     * @var float API性能评分
     */
    public $ApiPerformanceScore;

    /**
     * @var float API可用性评分
     */
    public $ApiAvailableScore;

    /**
     * @var integer API调用总数
     */
    public $ApiNum;

    /**
     * @var integer API失败次数
     */
    public $ApiFail;

    /**
     * @var float API平均持续时间
     */
    public $ApiDuration;

    /**
     * @var float 页面性能评分
     */
    public $PagePerformanceScore;

    /**
     * @var integer 页面浏览量
     */
    public $PagePv;

    /**
     * @var integer 独立访客数
     */
    public $PageUv;

    /**
     * @var integer 页面错误数
     */
    public $PageError;

    /**
     * @var float 首屏时间
     */
    public $PageDuration;

    /**
     * @var float 平均 LCP
     */
    public $PageLCP;

    /**
     * @var float 平均 FID
     */
    public $PageFID;

    /**
     * @var float 平均 CLS
     */
    public $PageCLS;

    /**
     * @var float 平均 FCP
     */
    public $PageFCP;

    /**
     * @var float 平均 INP
     */
    public $PageINP;

    /**
     * @var float JavaScript错误评分
     */
    public $JsErrorScore;

    /**
     * @var float 静态资源可用性评分
     */
    public $StaticAvailableScore;

    /**
     * @var float 静态资源性能评分
     */
    public $StaticPerformanceScore;

    /**
     * @var integer 静态资源请求总数
     */
    public $StaticNum;

    /**
     * @var integer 静态资源加载失败数
     */
    public $StaticFail;

    /**
     * @var float 静态资源加载时间
     */
    public $StaticDuration;

    /**
     * @param integer $ProjectID 项目id
     * @param float $Score 项目总分
     * @param float $ApiPerformanceScore API性能评分
     * @param float $ApiAvailableScore API可用性评分
     * @param integer $ApiNum API调用总数
     * @param integer $ApiFail API失败次数
     * @param float $ApiDuration API平均持续时间
     * @param float $PagePerformanceScore 页面性能评分
     * @param integer $PagePv 页面浏览量
     * @param integer $PageUv 独立访客数
     * @param integer $PageError 页面错误数
     * @param float $PageDuration 首屏时间
     * @param float $PageLCP 平均 LCP
     * @param float $PageFID 平均 FID
     * @param float $PageCLS 平均 CLS
     * @param float $PageFCP 平均 FCP
     * @param float $PageINP 平均 INP
     * @param float $JsErrorScore JavaScript错误评分
     * @param float $StaticAvailableScore 静态资源可用性评分
     * @param float $StaticPerformanceScore 静态资源性能评分
     * @param integer $StaticNum 静态资源请求总数
     * @param integer $StaticFail 静态资源加载失败数
     * @param float $StaticDuration 静态资源加载时间
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
    }
}
