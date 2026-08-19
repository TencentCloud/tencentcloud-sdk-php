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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线检测项。
 *
 * @method integer getID() 获取<p>基线检测项 ID。</p>
 * @method void setID(integer $ID) 设置<p>基线检测项 ID。</p>
 * @method integer getRuleID() 获取<p>内置规则 ID。</p>
 * @method void setRuleID(integer $RuleID) 设置<p>内置规则 ID。</p>
 * @method array getCheckObject() 获取<p>检测对象描述，例如配置文件路径、内核参数、Kubernetes 资源等。</p>
 * @method void setCheckObject(array $CheckObject) 设置<p>检测对象描述，例如配置文件路径、内核参数、Kubernetes 资源等。</p>
 * @method string getRiskLevel() 获取<p>风险等级。取值：</p><ul><li>LOW：低危</li><li>MEDIUM：中危</li><li>HIGH：高危</li><li>CRITICAL：严重</li></ul>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级。取值：</p><ul><li>LOW：低危</li><li>MEDIUM：中危</li><li>HIGH：高危</li><li>CRITICAL：严重</li></ul>
 * @method string getName() 获取<p>检测项名称（中文）。</p>
 * @method void setName(string $Name) 设置<p>检测项名称（中文）。</p>
 * @method string getDescription() 获取<p>检测项描述（中文，说明检测背景与判定逻辑）。</p>
 * @method void setDescription(string $Description) 设置<p>检测项描述（中文，说明检测背景与判定逻辑）。</p>
 * @method string getFixSuggestion() 获取<p>检测项修复建议（中文，含建议的配置参考值或加固命令）。</p>
 * @method void setFixSuggestion(string $FixSuggestion) 设置<p>检测项修复建议（中文，含建议的配置参考值或加固命令）。</p>
 * @method string getReferenceLink() 获取<p>检测项的参考链接列表。</p>
 * @method void setReferenceLink(string $ReferenceLink) 设置<p>检测项的参考链接列表。</p>
 * @method BaselineCategory getSystemCategory() 获取<p>所属系统父分类信息。</p>
 * @method void setSystemCategory(BaselineCategory $SystemCategory) 设置<p>所属系统父分类信息。</p>
 * @method BaselineCategory getCategory() 获取<p>所属子分类信息。</p>
 * @method void setCategory(BaselineCategory $Category) 设置<p>所属子分类信息。</p>
 * @method boolean getSupportFix() 获取<p>是否支持一键修复。true 支持，false 不支持。</p>
 * @method void setSupportFix(boolean $SupportFix) 设置<p>是否支持一键修复。true 支持，false 不支持。</p>
 * @method boolean getSupportCustomValue() 获取<p>是否支持用户自定义判定值。true 支持，false 不支持。</p>
 * @method void setSupportCustomValue(boolean $SupportCustomValue) 设置<p>是否支持用户自定义判定值。true 支持，false 不支持。</p>
 * @method array getAffectedVersionList() 获取<p>该检测项适用的操作系统/组件版本列表。</p>
 * @method void setAffectedVersionList(array $AffectedVersionList) 设置<p>该检测项适用的操作系统/组件版本列表。</p>
 * @method string getWebEditParam() 获取<p>编辑自定义判定值时的参数定义（如取值范围、控件类型等）。</p>
 * @method void setWebEditParam(string $WebEditParam) 设置<p>编辑自定义判定值时的参数定义（如取值范围、控件类型等）。</p>
 * @method array getDefaultValueList() 获取<p>检测项默认判定值列表。</p>
 * @method void setDefaultValueList(array $DefaultValueList) 设置<p>检测项默认判定值列表。</p>
 * @method boolean getIsCustomConf() 获取<p>是否已被用户自定义。true 已自定义，false 仍使用默认值。</p>
 * @method void setIsCustomConf(boolean $IsCustomConf) 设置<p>是否已被用户自定义。true 已自定义，false 仍使用默认值。</p>
 * @method integer getCustomItemID() 获取<p>用户自定义配置记录 ID，未自定义时为 0。</p>
 * @method void setCustomItemID(integer $CustomItemID) 设置<p>用户自定义配置记录 ID，未自定义时为 0。</p>
 */
class BaselineItem extends AbstractModel
{
    /**
     * @var integer <p>基线检测项 ID。</p>
     */
    public $ID;

    /**
     * @var integer <p>内置规则 ID。</p>
     */
    public $RuleID;

    /**
     * @var array <p>检测对象描述，例如配置文件路径、内核参数、Kubernetes 资源等。</p>
     */
    public $CheckObject;

    /**
     * @var string <p>风险等级。取值：</p><ul><li>LOW：低危</li><li>MEDIUM：中危</li><li>HIGH：高危</li><li>CRITICAL：严重</li></ul>
     */
    public $RiskLevel;

    /**
     * @var string <p>检测项名称（中文）。</p>
     */
    public $Name;

    /**
     * @var string <p>检测项描述（中文，说明检测背景与判定逻辑）。</p>
     */
    public $Description;

    /**
     * @var string <p>检测项修复建议（中文，含建议的配置参考值或加固命令）。</p>
     */
    public $FixSuggestion;

    /**
     * @var string <p>检测项的参考链接列表。</p>
     */
    public $ReferenceLink;

    /**
     * @var BaselineCategory <p>所属系统父分类信息。</p>
     */
    public $SystemCategory;

    /**
     * @var BaselineCategory <p>所属子分类信息。</p>
     */
    public $Category;

    /**
     * @var boolean <p>是否支持一键修复。true 支持，false 不支持。</p>
     */
    public $SupportFix;

    /**
     * @var boolean <p>是否支持用户自定义判定值。true 支持，false 不支持。</p>
     */
    public $SupportCustomValue;

    /**
     * @var array <p>该检测项适用的操作系统/组件版本列表。</p>
     */
    public $AffectedVersionList;

    /**
     * @var string <p>编辑自定义判定值时的参数定义（如取值范围、控件类型等）。</p>
     */
    public $WebEditParam;

    /**
     * @var array <p>检测项默认判定值列表。</p>
     */
    public $DefaultValueList;

    /**
     * @var boolean <p>是否已被用户自定义。true 已自定义，false 仍使用默认值。</p>
     */
    public $IsCustomConf;

    /**
     * @var integer <p>用户自定义配置记录 ID，未自定义时为 0。</p>
     */
    public $CustomItemID;

    /**
     * @param integer $ID <p>基线检测项 ID。</p>
     * @param integer $RuleID <p>内置规则 ID。</p>
     * @param array $CheckObject <p>检测对象描述，例如配置文件路径、内核参数、Kubernetes 资源等。</p>
     * @param string $RiskLevel <p>风险等级。取值：</p><ul><li>LOW：低危</li><li>MEDIUM：中危</li><li>HIGH：高危</li><li>CRITICAL：严重</li></ul>
     * @param string $Name <p>检测项名称（中文）。</p>
     * @param string $Description <p>检测项描述（中文，说明检测背景与判定逻辑）。</p>
     * @param string $FixSuggestion <p>检测项修复建议（中文，含建议的配置参考值或加固命令）。</p>
     * @param string $ReferenceLink <p>检测项的参考链接列表。</p>
     * @param BaselineCategory $SystemCategory <p>所属系统父分类信息。</p>
     * @param BaselineCategory $Category <p>所属子分类信息。</p>
     * @param boolean $SupportFix <p>是否支持一键修复。true 支持，false 不支持。</p>
     * @param boolean $SupportCustomValue <p>是否支持用户自定义判定值。true 支持，false 不支持。</p>
     * @param array $AffectedVersionList <p>该检测项适用的操作系统/组件版本列表。</p>
     * @param string $WebEditParam <p>编辑自定义判定值时的参数定义（如取值范围、控件类型等）。</p>
     * @param array $DefaultValueList <p>检测项默认判定值列表。</p>
     * @param boolean $IsCustomConf <p>是否已被用户自定义。true 已自定义，false 仍使用默认值。</p>
     * @param integer $CustomItemID <p>用户自定义配置记录 ID，未自定义时为 0。</p>
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

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("CheckObject",$param) and $param["CheckObject"] !== null) {
            $this->CheckObject = $param["CheckObject"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }

        if (array_key_exists("ReferenceLink",$param) and $param["ReferenceLink"] !== null) {
            $this->ReferenceLink = $param["ReferenceLink"];
        }

        if (array_key_exists("SystemCategory",$param) and $param["SystemCategory"] !== null) {
            $this->SystemCategory = new BaselineCategory();
            $this->SystemCategory->deserialize($param["SystemCategory"]);
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = new BaselineCategory();
            $this->Category->deserialize($param["Category"]);
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("SupportCustomValue",$param) and $param["SupportCustomValue"] !== null) {
            $this->SupportCustomValue = $param["SupportCustomValue"];
        }

        if (array_key_exists("AffectedVersionList",$param) and $param["AffectedVersionList"] !== null) {
            $this->AffectedVersionList = $param["AffectedVersionList"];
        }

        if (array_key_exists("WebEditParam",$param) and $param["WebEditParam"] !== null) {
            $this->WebEditParam = $param["WebEditParam"];
        }

        if (array_key_exists("DefaultValueList",$param) and $param["DefaultValueList"] !== null) {
            $this->DefaultValueList = $param["DefaultValueList"];
        }

        if (array_key_exists("IsCustomConf",$param) and $param["IsCustomConf"] !== null) {
            $this->IsCustomConf = $param["IsCustomConf"];
        }

        if (array_key_exists("CustomItemID",$param) and $param["CustomItemID"] !== null) {
            $this->CustomItemID = $param["CustomItemID"];
        }
    }
}
