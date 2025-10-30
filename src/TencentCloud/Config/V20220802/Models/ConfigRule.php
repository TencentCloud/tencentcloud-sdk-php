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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则详情
 *
 * @method string getIdentifier() 获取规则标识
 * @method void setIdentifier(string $Identifier) 设置规则标识
 * @method string getRuleName() 获取规则名
 * @method void setRuleName(string $RuleName) 设置规则名
 * @method array getInputParameter() 获取规则参数
 * @method void setInputParameter(array $InputParameter) 设置规则参数
 * @method array getSourceCondition() 获取规则触发条件
 * @method void setSourceCondition(array $SourceCondition) 设置规则触发条件
 * @method array getResourceType() 获取规则支持的资源类型，规则仅对指定资源类型的资源生效。
 * @method void setResourceType(array $ResourceType) 设置规则支持的资源类型，规则仅对指定资源类型的资源生效。
 * @method array getLabels() 获取规则所属标签
 * @method void setLabels(array $Labels) 设置规则所属标签
 * @method integer getRiskLevel() 获取规则风险等级
1:低风险
2:中风险
3:高风险
 * @method void setRiskLevel(integer $RiskLevel) 设置规则风险等级
1:低风险
2:中风险
3:高风险
 * @method string getServiceFunction() 获取规则对应的函数
 * @method void setServiceFunction(string $ServiceFunction) 设置规则对应的函数
 * @method string getCreateTime() 获取创建时间
格式：YYYY-MM-DD h:i:s
 * @method void setCreateTime(string $CreateTime) 设置创建时间
格式：YYYY-MM-DD h:i:s
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getStatus() 获取ACTIVE：启用
NO_ACTIVE：停止
 * @method void setStatus(string $Status) 设置ACTIVE：启用
NO_ACTIVE：停止
 * @method string getComplianceResult() 获取合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
无法应用规则： 'NOT_APPLICABLE'
 * @method void setComplianceResult(string $ComplianceResult) 设置合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
无法应用规则： 'NOT_APPLICABLE'
 * @method Annotation getAnnotation() 获取["",""]
 * @method void setAnnotation(Annotation $Annotation) 设置["",""]
 * @method string getConfigRuleInvokedTime() 获取规则评估时间
格式：YYYY-MM-DD h:i:s

 * @method void setConfigRuleInvokedTime(string $ConfigRuleInvokedTime) 设置规则评估时间
格式：YYYY-MM-DD h:i:s

 * @method string getConfigRuleId() 获取规则ID
 * @method void setConfigRuleId(string $ConfigRuleId) 设置规则ID
 * @method string getIdentifierType() 获取CUSTOMIZE：自定义规则、
SYSTEM：托管规则
 * @method void setIdentifierType(string $IdentifierType) 设置CUSTOMIZE：自定义规则、
SYSTEM：托管规则
 * @method string getCompliancePackId() 获取合规包ID
 * @method void setCompliancePackId(string $CompliancePackId) 设置合规包ID
 * @method array getTriggerType() 获取触发类型
ScheduledNotification：周期触发、
ConfigurationItemChangeNotification：变更触发
 * @method void setTriggerType(array $TriggerType) 设置触发类型
ScheduledNotification：周期触发、
ConfigurationItemChangeNotification：变更触发
 * @method array getManageInputParameter() 获取参数详情
 * @method void setManageInputParameter(array $ManageInputParameter) 设置参数详情
 * @method string getCompliancePackName() 获取合规包名称
 * @method void setCompliancePackName(string $CompliancePackName) 设置合规包名称
 * @method array getRegionsScope() 获取关联地域
 * @method void setRegionsScope(array $RegionsScope) 设置关联地域
 * @method array getTagsScope() 获取关联标签
 * @method void setTagsScope(array $TagsScope) 设置关联标签
 * @method array getExcludeResourceIdsScope() 获取 规则对指定资源ID无效，即不对该资源执行评估。
 * @method void setExcludeResourceIdsScope(array $ExcludeResourceIdsScope) 设置 规则对指定资源ID无效，即不对该资源执行评估。
 * @method string getAccountGroupId() 获取账号组ID
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID
 * @method string getAccountGroupName() 获取账号组名称
 * @method void setAccountGroupName(string $AccountGroupName) 设置账号组名称
 * @method integer getRuleOwnerId() 获取规则所属用户ID
 * @method void setRuleOwnerId(integer $RuleOwnerId) 设置规则所属用户ID
 * @method array getManageTriggerType() 获取预设规则支持的触发方式
ScheduledNotification：周期触发
ConfigurationItemChangeNotification：变更触发
 * @method void setManageTriggerType(array $ManageTriggerType) 设置预设规则支持的触发方式
ScheduledNotification：周期触发
ConfigurationItemChangeNotification：变更触发
 */
class ConfigRule extends AbstractModel
{
    /**
     * @var string 规则标识
     */
    public $Identifier;

    /**
     * @var string 规则名
     */
    public $RuleName;

    /**
     * @var array 规则参数
     */
    public $InputParameter;

    /**
     * @var array 规则触发条件
     */
    public $SourceCondition;

    /**
     * @var array 规则支持的资源类型，规则仅对指定资源类型的资源生效。
     */
    public $ResourceType;

    /**
     * @var array 规则所属标签
     */
    public $Labels;

    /**
     * @var integer 规则风险等级
1:低风险
2:中风险
3:高风险
     */
    public $RiskLevel;

    /**
     * @var string 规则对应的函数
     */
    public $ServiceFunction;

    /**
     * @var string 创建时间
格式：YYYY-MM-DD h:i:s
     */
    public $CreateTime;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string ACTIVE：启用
NO_ACTIVE：停止
     */
    public $Status;

    /**
     * @var string 合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
无法应用规则： 'NOT_APPLICABLE'
     */
    public $ComplianceResult;

    /**
     * @var Annotation ["",""]
     */
    public $Annotation;

    /**
     * @var string 规则评估时间
格式：YYYY-MM-DD h:i:s

     */
    public $ConfigRuleInvokedTime;

    /**
     * @var string 规则ID
     */
    public $ConfigRuleId;

    /**
     * @var string CUSTOMIZE：自定义规则、
SYSTEM：托管规则
     */
    public $IdentifierType;

    /**
     * @var string 合规包ID
     */
    public $CompliancePackId;

    /**
     * @var array 触发类型
ScheduledNotification：周期触发、
ConfigurationItemChangeNotification：变更触发
     */
    public $TriggerType;

    /**
     * @var array 参数详情
     */
    public $ManageInputParameter;

    /**
     * @var string 合规包名称
     */
    public $CompliancePackName;

    /**
     * @var array 关联地域
     */
    public $RegionsScope;

    /**
     * @var array 关联标签
     */
    public $TagsScope;

    /**
     * @var array  规则对指定资源ID无效，即不对该资源执行评估。
     */
    public $ExcludeResourceIdsScope;

    /**
     * @var string 账号组ID
     */
    public $AccountGroupId;

    /**
     * @var string 账号组名称
     */
    public $AccountGroupName;

    /**
     * @var integer 规则所属用户ID
     */
    public $RuleOwnerId;

    /**
     * @var array 预设规则支持的触发方式
ScheduledNotification：周期触发
ConfigurationItemChangeNotification：变更触发
     */
    public $ManageTriggerType;

    /**
     * @param string $Identifier 规则标识
     * @param string $RuleName 规则名
     * @param array $InputParameter 规则参数
     * @param array $SourceCondition 规则触发条件
     * @param array $ResourceType 规则支持的资源类型，规则仅对指定资源类型的资源生效。
     * @param array $Labels 规则所属标签
     * @param integer $RiskLevel 规则风险等级
1:低风险
2:中风险
3:高风险
     * @param string $ServiceFunction 规则对应的函数
     * @param string $CreateTime 创建时间
格式：YYYY-MM-DD h:i:s
     * @param string $Description 规则描述
     * @param string $Status ACTIVE：启用
NO_ACTIVE：停止
     * @param string $ComplianceResult 合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
无法应用规则： 'NOT_APPLICABLE'
     * @param Annotation $Annotation ["",""]
     * @param string $ConfigRuleInvokedTime 规则评估时间
格式：YYYY-MM-DD h:i:s

     * @param string $ConfigRuleId 规则ID
     * @param string $IdentifierType CUSTOMIZE：自定义规则、
SYSTEM：托管规则
     * @param string $CompliancePackId 合规包ID
     * @param array $TriggerType 触发类型
ScheduledNotification：周期触发、
ConfigurationItemChangeNotification：变更触发
     * @param array $ManageInputParameter 参数详情
     * @param string $CompliancePackName 合规包名称
     * @param array $RegionsScope 关联地域
     * @param array $TagsScope 关联标签
     * @param array $ExcludeResourceIdsScope  规则对指定资源ID无效，即不对该资源执行评估。
     * @param string $AccountGroupId 账号组ID
     * @param string $AccountGroupName 账号组名称
     * @param integer $RuleOwnerId 规则所属用户ID
     * @param array $ManageTriggerType 预设规则支持的触发方式
ScheduledNotification：周期触发
ConfigurationItemChangeNotification：变更触发
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("SourceCondition",$param) and $param["SourceCondition"] !== null) {
            $this->SourceCondition = [];
            foreach ($param["SourceCondition"] as $key => $value){
                $obj = new SourceConditionForManage();
                $obj->deserialize($value);
                array_push($this->SourceCondition, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ServiceFunction",$param) and $param["ServiceFunction"] !== null) {
            $this->ServiceFunction = $param["ServiceFunction"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }

        if (array_key_exists("ConfigRuleInvokedTime",$param) and $param["ConfigRuleInvokedTime"] !== null) {
            $this->ConfigRuleInvokedTime = $param["ConfigRuleInvokedTime"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("IdentifierType",$param) and $param["IdentifierType"] !== null) {
            $this->IdentifierType = $param["IdentifierType"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = [];
            foreach ($param["TriggerType"] as $key => $value){
                $obj = new TriggerType();
                $obj->deserialize($value);
                array_push($this->TriggerType, $obj);
            }
        }

        if (array_key_exists("ManageInputParameter",$param) and $param["ManageInputParameter"] !== null) {
            $this->ManageInputParameter = [];
            foreach ($param["ManageInputParameter"] as $key => $value){
                $obj = new InputParameterForManage();
                $obj->deserialize($value);
                array_push($this->ManageInputParameter, $obj);
            }
        }

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RegionsScope",$param) and $param["RegionsScope"] !== null) {
            $this->RegionsScope = $param["RegionsScope"];
        }

        if (array_key_exists("TagsScope",$param) and $param["TagsScope"] !== null) {
            $this->TagsScope = [];
            foreach ($param["TagsScope"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagsScope, $obj);
            }
        }

        if (array_key_exists("ExcludeResourceIdsScope",$param) and $param["ExcludeResourceIdsScope"] !== null) {
            $this->ExcludeResourceIdsScope = $param["ExcludeResourceIdsScope"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("AccountGroupName",$param) and $param["AccountGroupName"] !== null) {
            $this->AccountGroupName = $param["AccountGroupName"];
        }

        if (array_key_exists("RuleOwnerId",$param) and $param["RuleOwnerId"] !== null) {
            $this->RuleOwnerId = $param["RuleOwnerId"];
        }

        if (array_key_exists("ManageTriggerType",$param) and $param["ManageTriggerType"] !== null) {
            $this->ManageTriggerType = $param["ManageTriggerType"];
        }
    }
}
