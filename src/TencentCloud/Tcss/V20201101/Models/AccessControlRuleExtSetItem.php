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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件篡改策略列表扩展项（扁平独立结构体，含子规则内容和执行动作）
 *
 * @method array getChildRules() 获取用户自定义策略子规则列表。IsDefault=false时有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildRules(array $ChildRules) 设置用户自定义策略子规则列表。IsDefault=false时有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEditUserName() 获取编辑用户名称
 * @method void setEditUserName(string $EditUserName) 设置编辑用户名称
 * @method integer getEffectImageCount() 获取策略生效镜像数量
 * @method void setEffectImageCount(integer $EffectImageCount) 设置策略生效镜像数量
 * @method boolean getIsDefault() 获取true: 默认策略，false:自定义策略
 * @method void setIsDefault(boolean $IsDefault) 设置true: 默认策略，false:自定义策略
 * @method boolean getIsGlobal() 获取是否为全部镜像规则。true表示对所有镜像生效
 * @method void setIsGlobal(boolean $IsGlobal) 设置是否为全部镜像规则。true表示对所有镜像生效
 * @method boolean getIsEnable() 获取true: 策略启用，false：策略禁用
 * @method void setIsEnable(boolean $IsEnable) 设置true: 策略启用，false：策略禁用
 * @method array getRuleActions() 获取规则组中所有执行动作的去重列表。RULE_MODE_ALERT:告警 RULE_MODE_HOLDUP:拦截
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleActions(array $RuleActions) 设置规则组中所有执行动作的去重列表。RULE_MODE_ALERT:告警 RULE_MODE_HOLDUP:拦截
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleId() 获取策略Id
 * @method void setRuleId(string $RuleId) 设置策略Id
 * @method string getRuleName() 获取策略名字
 * @method void setRuleName(string $RuleName) 设置策略名字
 * @method array getSystemChildRules() 获取系统策略子规则列表。IsDefault=true时有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemChildRules(array $SystemChildRules) 设置系统策略子规则列表。IsDefault=true时有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取策略更新时间, 存在为空的情况
 * @method void setUpdateTime(string $UpdateTime) 设置策略更新时间, 存在为空的情况
 */
class AccessControlRuleExtSetItem extends AbstractModel
{
    /**
     * @var array 用户自定义策略子规则列表。IsDefault=false时有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildRules;

    /**
     * @var string 编辑用户名称
     */
    public $EditUserName;

    /**
     * @var integer 策略生效镜像数量
     */
    public $EffectImageCount;

    /**
     * @var boolean true: 默认策略，false:自定义策略
     */
    public $IsDefault;

    /**
     * @var boolean 是否为全部镜像规则。true表示对所有镜像生效
     */
    public $IsGlobal;

    /**
     * @var boolean true: 策略启用，false：策略禁用
     */
    public $IsEnable;

    /**
     * @var array 规则组中所有执行动作的去重列表。RULE_MODE_ALERT:告警 RULE_MODE_HOLDUP:拦截
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleActions;

    /**
     * @var string 策略Id
     */
    public $RuleId;

    /**
     * @var string 策略名字
     */
    public $RuleName;

    /**
     * @var array 系统策略子规则列表。IsDefault=true时有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemChildRules;

    /**
     * @var string 策略更新时间, 存在为空的情况
     */
    public $UpdateTime;

    /**
     * @param array $ChildRules 用户自定义策略子规则列表。IsDefault=false时有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EditUserName 编辑用户名称
     * @param integer $EffectImageCount 策略生效镜像数量
     * @param boolean $IsDefault true: 默认策略，false:自定义策略
     * @param boolean $IsGlobal 是否为全部镜像规则。true表示对所有镜像生效
     * @param boolean $IsEnable true: 策略启用，false：策略禁用
     * @param array $RuleActions 规则组中所有执行动作的去重列表。RULE_MODE_ALERT:告警 RULE_MODE_HOLDUP:拦截
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleId 策略Id
     * @param string $RuleName 策略名字
     * @param array $SystemChildRules 系统策略子规则列表。IsDefault=true时有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 策略更新时间, 存在为空的情况
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
        if (array_key_exists("ChildRules",$param) and $param["ChildRules"] !== null) {
            $this->ChildRules = [];
            foreach ($param["ChildRules"] as $key => $value){
                $obj = new AccessControlChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->ChildRules, $obj);
            }
        }

        if (array_key_exists("EditUserName",$param) and $param["EditUserName"] !== null) {
            $this->EditUserName = $param["EditUserName"];
        }

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = $param["RuleActions"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("SystemChildRules",$param) and $param["SystemChildRules"] !== null) {
            $this->SystemChildRules = [];
            foreach ($param["SystemChildRules"] as $key => $value){
                $obj = new AccessControlSystemChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->SystemChildRules, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
