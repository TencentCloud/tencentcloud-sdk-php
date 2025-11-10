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
 * @method integer getId() 获取主键Id
 * @method void setId(integer $Id) 设置主键Id
 * @method string getUrl() 获取地址
 * @method void setUrl(string $Url) 设置地址
 * @method string getTitle() 获取站点标题
 * @method void setTitle(string $Title) 设置站点标题
 * @method integer getCode() 获取状态码
 * @method void setCode(integer $Code) 设置状态码
 * @method integer getContentLength() 获取响应长度
 * @method void setContentLength(integer $ContentLength) 设置响应长度
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getIp() 获取Ip数据
 * @method void setIp(string $Ip) 设置Ip数据
 * @method integer getAIRating() 获取AI评分
 * @method void setAIRating(integer $AIRating) 设置AI评分
 * @method string getAIAnalysis() 获取AI分析
 * @method void setAIAnalysis(string $AIAnalysis) 设置AI分析
 * @method integer getRiskLevel() 获取风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报
 * @method string getSuggestion() 获取建议
 * @method void setSuggestion(string $Suggestion) 设置建议
 * @method integer getIsCloudAsset() 获取是否为云资产
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置是否为云资产
 * @method integer getCloudAssetStatus() 获取云资产状态，-1为下线
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置云资产状态，-1为下线
 */
class DisplayConfig extends AbstractModel
{
    /**
     * @var integer 主键Id
     */
    public $Id;

    /**
     * @var string 地址
     */
    public $Url;

    /**
     * @var string 站点标题
     */
    public $Title;

    /**
     * @var integer 状态码
     */
    public $Code;

    /**
     * @var integer 响应长度
     */
    public $ContentLength;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string Ip数据
     */
    public $Ip;

    /**
     * @var integer AI评分
     */
    public $AIRating;

    /**
     * @var string AI分析
     */
    public $AIAnalysis;

    /**
     * @var integer 风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报
     */
    public $RiskLevel;

    /**
     * @var string 建议
     */
    public $Suggestion;

    /**
     * @var integer 是否为云资产
     */
    public $IsCloudAsset;

    /**
     * @var integer 云资产状态，-1为下线
     */
    public $CloudAssetStatus;

    /**
     * @param integer $Id 主键Id
     * @param string $Url 地址
     * @param string $Title 站点标题
     * @param integer $Code 状态码
     * @param integer $ContentLength 响应长度
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Ip Ip数据
     * @param integer $AIRating AI评分
     * @param string $AIAnalysis AI分析
     * @param integer $RiskLevel 风险等级: 1-低危, 2-中危, 3-高危, 4-危级, 5-误报
     * @param string $Suggestion 建议
     * @param integer $IsCloudAsset 是否为云资产
     * @param integer $CloudAssetStatus 云资产状态，-1为下线
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
    }
}
