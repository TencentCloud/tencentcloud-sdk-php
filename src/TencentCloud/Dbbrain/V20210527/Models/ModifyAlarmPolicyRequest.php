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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicy请求参数结构体
 *
 * @method string getApplyType() 获取策略类型，固定值：instance， instance-代表实例类型策略
 * @method void setApplyType(string $ApplyType) 设置策略类型，固定值：instance， instance-代表实例类型策略
 * @method integer getEnable() 获取策略是否开启，0-代表开启，1-代表关闭
 * @method void setEnable(integer $Enable) 设置策略是否开启，0-代表开启，1-代表关闭
 * @method array getInstanceIds() 获取实例id列表，可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceIds(array $InstanceIds) 设置实例id列表，可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getNewProfileLevel() 获取User-动态关联该用户所有实例
Instance-关联实例列表的实例
 * @method void setNewProfileLevel(string $NewProfileLevel) 设置User-动态关联该用户所有实例
Instance-关联实例列表的实例
 * @method string getNewProfileName() 获取新策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
 * @method void setNewProfileName(string $NewProfileName) 设置新策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
 * @method string getProfileName() 获取旧策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
 * @method void setProfileName(string $ProfileName) 设置旧策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
 * @method string getProfileType() 获取策略类型，固定值：alarm_policy
 * @method void setProfileType(string $ProfileType) 设置策略类型，固定值：alarm_policy
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getRuleType() 获取规则类型 0-快速，1-自定义 若值为0，则QuickRule不能为空，若值为1，则Rules 不能为空
 * @method void setRuleType(integer $RuleType) 设置规则类型 0-快速，1-自定义 若值为0，则QuickRule不能为空，若值为1，则Rules 不能为空
 * @method array getTemplateInfo() 获取接受模板
 * @method void setTemplateInfo(array $TemplateInfo) 设置接受模板
 * @method string getQuickRule() 获取快速规则  支持包括fatal-致命, critical-严重,
warning-告警,
information-通知，与Rules互斥
 * @method void setQuickRule(string $QuickRule) 设置快速规则  支持包括fatal-致命, critical-严重,
warning-告警,
information-通知，与Rules互斥
 * @method array getRules() 获取自定义规则，与QuickRule互斥。
 * @method void setRules(array $Rules) 设置自定义规则，与QuickRule互斥。
 */
class ModifyAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var string 策略类型，固定值：instance， instance-代表实例类型策略
     */
    public $ApplyType;

    /**
     * @var integer 策略是否开启，0-代表开启，1-代表关闭
     */
    public $Enable;

    /**
     * @var array 实例id列表，可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceIds;

    /**
     * @var string User-动态关联该用户所有实例
Instance-关联实例列表的实例
     */
    public $NewProfileLevel;

    /**
     * @var string 新策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
     */
    public $NewProfileName;

    /**
     * @var string 旧策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
     */
    public $ProfileName;

    /**
     * @var string 策略类型，固定值：alarm_policy
     */
    public $ProfileType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 规则类型 0-快速，1-自定义 若值为0，则QuickRule不能为空，若值为1，则Rules 不能为空
     */
    public $RuleType;

    /**
     * @var array 接受模板
     */
    public $TemplateInfo;

    /**
     * @var string 快速规则  支持包括fatal-致命, critical-严重,
warning-告警,
information-通知，与Rules互斥
     */
    public $QuickRule;

    /**
     * @var array 自定义规则，与QuickRule互斥。
     */
    public $Rules;

    /**
     * @param string $ApplyType 策略类型，固定值：instance， instance-代表实例类型策略
     * @param integer $Enable 策略是否开启，0-代表开启，1-代表关闭
     * @param array $InstanceIds 实例id列表，可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $NewProfileLevel User-动态关联该用户所有实例
Instance-关联实例列表的实例
     * @param string $NewProfileName 新策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
     * @param string $ProfileName 旧策略名，包含中文英文数字，长度在60个字符以内，不能以“_”开头。
     * @param string $ProfileType 策略类型，固定值：alarm_policy
     * @param string $Remark 备注
     * @param integer $RuleType 规则类型 0-快速，1-自定义 若值为0，则QuickRule不能为空，若值为1，则Rules 不能为空
     * @param array $TemplateInfo 接受模板
     * @param string $QuickRule 快速规则  支持包括fatal-致命, critical-严重,
warning-告警,
information-通知，与Rules互斥
     * @param array $Rules 自定义规则，与QuickRule互斥。
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
        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = [];
            foreach ($param["InstanceIds"] as $key => $value){
                $obj = new InstanceID();
                $obj->deserialize($value);
                array_push($this->InstanceIds, $obj);
            }
        }

        if (array_key_exists("NewProfileLevel",$param) and $param["NewProfileLevel"] !== null) {
            $this->NewProfileLevel = $param["NewProfileLevel"];
        }

        if (array_key_exists("NewProfileName",$param) and $param["NewProfileName"] !== null) {
            $this->NewProfileName = $param["NewProfileName"];
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }

        if (array_key_exists("ProfileType",$param) and $param["ProfileType"] !== null) {
            $this->ProfileType = $param["ProfileType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("TemplateInfo",$param) and $param["TemplateInfo"] !== null) {
            $this->TemplateInfo = [];
            foreach ($param["TemplateInfo"] as $key => $value){
                $obj = new TemplateInfo();
                $obj->deserialize($value);
                array_push($this->TemplateInfo, $obj);
            }
        }

        if (array_key_exists("QuickRule",$param) and $param["QuickRule"] !== null) {
            $this->QuickRule = $param["QuickRule"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new AlarmsRules();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
