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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定的安全规则列表
 *
 * @method string getID() 获取规则ID
 * @method void setID(string $ID) 设置规则ID
 * @method string getType() 获取规则类型
 * @method void setType(string $Type) 设置规则类型
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getRiskLevel() 获取风险等级
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
 * @method string getVersionNumber() 获取版本号
 * @method void setVersionNumber(string $VersionNumber) 设置版本号
 * @method string getStatus() 获取状态开关
 * @method void setStatus(string $Status) 设置状态开关
 * @method string getAct() 获取当前选择的处置动作
 * @method void setAct(string $Act) 设置当前选择的处置动作
 * @method array getSupportActs() 获取支持的处置动作
 * @method void setSupportActs(array $SupportActs) 设置支持的处置动作
 * @method string getBodyType() 获取内容类型
 * @method void setBodyType(string $BodyType) 设置内容类型
 * @method string getIconType() 获取icon类型
 * @method void setIconType(string $IconType) 设置icon类型
 */
class McpSecurityRulesVO extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $ID;

    /**
     * @var string 规则类型
     */
    public $Type;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 版本号
     */
    public $VersionNumber;

    /**
     * @var string 状态开关
     */
    public $Status;

    /**
     * @var string 当前选择的处置动作
     */
    public $Act;

    /**
     * @var array 支持的处置动作
     */
    public $SupportActs;

    /**
     * @var string 内容类型
     */
    public $BodyType;

    /**
     * @var string icon类型
     */
    public $IconType;

    /**
     * @param string $ID 规则ID
     * @param string $Type 规则类型
     * @param string $Name 规则名称
     * @param string $Description 规则描述
     * @param string $RiskLevel 风险等级
     * @param string $VersionNumber 版本号
     * @param string $Status 状态开关
     * @param string $Act 当前选择的处置动作
     * @param array $SupportActs 支持的处置动作
     * @param string $BodyType 内容类型
     * @param string $IconType icon类型
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Act",$param) and $param["Act"] !== null) {
            $this->Act = $param["Act"];
        }

        if (array_key_exists("SupportActs",$param) and $param["SupportActs"] !== null) {
            $this->SupportActs = $param["SupportActs"];
        }

        if (array_key_exists("BodyType",$param) and $param["BodyType"] !== null) {
            $this->BodyType = $param["BodyType"];
        }

        if (array_key_exists("IconType",$param) and $param["IconType"] !== null) {
            $this->IconType = $param["IconType"];
        }
    }
}
