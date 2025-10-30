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
 * 代码泄露详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getName() 获取事件名称
 * @method void setName(string $Name) 设置事件名称
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 * @method string getSource() 获取数据源
 * @method void setSource(string $Source) 设置数据源
 * @method integer getRiskLevel() 获取风险等级：1-低危 2-中危 3-高危 4-严重 5-误报
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级：1-低危 2-中危 3-高危 4-严重 5-误报
 * @method string getHubName() 获取仓库名称
 * @method void setHubName(string $HubName) 设置仓库名称
 * @method string getUrl() 获取链接
 * @method void setUrl(string $Url) 设置链接
 * @method string getScreenshot() 获取截图
 * @method void setScreenshot(string $Screenshot) 设置截图
 * @method string getSuggestion() 获取建议
 * @method void setSuggestion(string $Suggestion) 设置建议
 * @method string getKeyword() 获取关键词
 * @method void setKeyword(string $Keyword) 设置关键词
 * @method integer getHandlingStatus() 获取处置状态：0-待处理 1-处理中 2-已处理
 * @method void setHandlingStatus(integer $HandlingStatus) 设置处置状态：0-待处理 1-处理中 2-已处理
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class DisplayLeakageCode extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string 事件名称
     */
    public $Name;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @var string 数据源
     */
    public $Source;

    /**
     * @var integer 风险等级：1-低危 2-中危 3-高危 4-严重 5-误报
     */
    public $RiskLevel;

    /**
     * @var string 仓库名称
     */
    public $HubName;

    /**
     * @var string 链接
     */
    public $Url;

    /**
     * @var string 截图
     */
    public $Screenshot;

    /**
     * @var string 建议
     */
    public $Suggestion;

    /**
     * @var string 关键词
     */
    public $Keyword;

    /**
     * @var integer 处置状态：0-待处理 1-处理中 2-已处理
     */
    public $HandlingStatus;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Name 事件名称
     * @param string $Description 事件描述
     * @param string $Source 数据源
     * @param integer $RiskLevel 风险等级：1-低危 2-中危 3-高危 4-严重 5-误报
     * @param string $HubName 仓库名称
     * @param string $Url 链接
     * @param string $Screenshot 截图
     * @param string $Suggestion 建议
     * @param string $Keyword 关键词
     * @param integer $HandlingStatus 处置状态：0-待处理 1-处理中 2-已处理
     * @param string $Remark 备注
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

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("HubName",$param) and $param["HubName"] !== null) {
            $this->HubName = $param["HubName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = $param["Screenshot"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("HandlingStatus",$param) and $param["HandlingStatus"] !== null) {
            $this->HandlingStatus = $param["HandlingStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
