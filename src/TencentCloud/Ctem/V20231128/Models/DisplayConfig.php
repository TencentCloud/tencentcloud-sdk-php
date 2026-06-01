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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目录爆破详情
 *
 * @method integer getId() 获取<p>主键Id</p>
 * @method void setId(integer $Id) 设置<p>主键Id</p>
 * @method string getUrl() 获取<p>地址</p>
 * @method void setUrl(string $Url) 设置<p>地址</p>
 * @method string getTitle() 获取<p>站点标题</p>
 * @method void setTitle(string $Title) 设置<p>站点标题</p>
 * @method integer getCode() 获取<p>状态码</p>
 * @method void setCode(integer $Code) 设置<p>状态码</p>
 * @method integer getContentLength() 获取<p>响应长度</p>
 * @method void setContentLength(integer $ContentLength) 设置<p>响应长度</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method string getIp() 获取<p>Ip数据</p>
 * @method void setIp(string $Ip) 设置<p>Ip数据</p>
 * @method integer getAIRating() 获取<p>AI评分</p>
 * @method void setAIRating(integer $AIRating) 设置<p>AI评分</p>
 * @method string getAIAnalysis() 获取<p>AI分析</p>
 * @method void setAIAnalysis(string $AIAnalysis) 设置<p>AI分析</p>
 * @method integer getRiskLevel() 获取<p>风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报</p>
 * @method string getSuggestion() 获取<p>建议</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>建议</p>
 * @method integer getIsCloudAsset() 获取<p>是否为云资产</p>
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置<p>是否为云资产</p>
 * @method integer getCloudAssetStatus() 获取<p>云资产状态，-1为下线</p>
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置<p>云资产状态，-1为下线</p>
 * @method integer getAggregationCount() 获取<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 * @method void setAggregationCount(integer $AggregationCount) 设置<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 */
class DisplayConfig extends AbstractModel
{
    /**
     * @var integer <p>主键Id</p>
     */
    public $Id;

    /**
     * @var string <p>地址</p>
     */
    public $Url;

    /**
     * @var string <p>站点标题</p>
     */
    public $Title;

    /**
     * @var integer <p>状态码</p>
     */
    public $Code;

    /**
     * @var integer <p>响应长度</p>
     */
    public $ContentLength;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var string <p>Ip数据</p>
     */
    public $Ip;

    /**
     * @var integer <p>AI评分</p>
     */
    public $AIRating;

    /**
     * @var string <p>AI分析</p>
     */
    public $AIAnalysis;

    /**
     * @var integer <p>风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>建议</p>
     */
    public $Suggestion;

    /**
     * @var integer <p>是否为云资产</p>
     */
    public $IsCloudAsset;

    /**
     * @var integer <p>云资产状态，-1为下线</p>
     */
    public $CloudAssetStatus;

    /**
     * @var integer <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
     */
    public $AggregationCount;

    /**
     * @param integer $Id <p>主键Id</p>
     * @param string $Url <p>地址</p>
     * @param string $Title <p>站点标题</p>
     * @param integer $Code <p>状态码</p>
     * @param integer $ContentLength <p>响应长度</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param string $Ip <p>Ip数据</p>
     * @param integer $AIRating <p>AI评分</p>
     * @param string $AIAnalysis <p>AI分析</p>
     * @param integer $RiskLevel <p>风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报</p>
     * @param string $Suggestion <p>建议</p>
     * @param integer $IsCloudAsset <p>是否为云资产</p>
     * @param integer $CloudAssetStatus <p>云资产状态，-1为下线</p>
     * @param integer $AggregationCount <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("ContentLength",$param) and $param["ContentLength"] !== null) {
            $this->ContentLength = $param["ContentLength"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("AIRating",$param) and $param["AIRating"] !== null) {
            $this->AIRating = $param["AIRating"];
        }

        if (array_key_exists("AIAnalysis",$param) and $param["AIAnalysis"] !== null) {
            $this->AIAnalysis = $param["AIAnalysis"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("IsCloudAsset",$param) and $param["IsCloudAsset"] !== null) {
            $this->IsCloudAsset = $param["IsCloudAsset"];
        }

        if (array_key_exists("CloudAssetStatus",$param) and $param["CloudAssetStatus"] !== null) {
            $this->CloudAssetStatus = $param["CloudAssetStatus"];
        }

        if (array_key_exists("AggregationCount",$param) and $param["AggregationCount"] !== null) {
            $this->AggregationCount = $param["AggregationCount"];
        }
    }
}
