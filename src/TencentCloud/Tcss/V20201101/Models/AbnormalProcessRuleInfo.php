<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 运行时安全，异常进程检测策略
 *
 * @method boolean getIsEnable() 获取true:策略启用，false:策略禁用
 * @method void setIsEnable(boolean $IsEnable) 设置true:策略启用，false:策略禁用
 * @method array getImageIds() 获取生效镜像id，空数组代表全部镜像
 * @method void setImageIds(array $ImageIds) 设置生效镜像id，空数组代表全部镜像
 * @method array getChildRules() 获取用户策略的子策略数组
 * @method void setChildRules(array $ChildRules) 设置用户策略的子策略数组
 * @method string getRuleName() 获取策略名字
 * @method void setRuleName(string $RuleName) 设置策略名字
 * @method string getRuleId() 获取策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSystemChildRules() 获取系统策略的子策略数组
 * @method void setSystemChildRules(array $SystemChildRules) 设置系统策略的子策略数组
 * @method boolean getIsDefault() 获取是否是系统默认策略
 * @method void setIsDefault(boolean $IsDefault) 设置是否是系统默认策略
 */
class AbnormalProcessRuleInfo extends AbstractModel
{
    /**
     * @var boolean true:策略启用，false:策略禁用
     */
    public $IsEnable;

    /**
     * @var array 生效镜像id，空数组代表全部镜像
     */
    public $ImageIds;

    /**
     * @var array 用户策略的子策略数组
     */
    public $ChildRules;

    /**
     * @var string 策略名字
     */
    public $RuleName;

    /**
     * @var string 策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var array 系统策略的子策略数组
     */
    public $SystemChildRules;

    /**
     * @var boolean 是否是系统默认策略
     */
    public $IsDefault;

    /**
     * @param boolean $IsEnable true:策略启用，false:策略禁用
     * @param array $ImageIds 生效镜像id，空数组代表全部镜像
     * @param array $ChildRules 用户策略的子策略数组
     * @param string $RuleName 策略名字
     * @param string $RuleId 策略id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SystemChildRules 系统策略的子策略数组
     * @param boolean $IsDefault 是否是系统默认策略
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
        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("ChildRules",$param) and $param["ChildRules"] !== null) {
            $this->ChildRules = [];
            foreach ($param["ChildRules"] as $key => $value){
                $obj = new AbnormalProcessChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->ChildRules, $obj);
            }
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SystemChildRules",$param) and $param["SystemChildRules"] !== null) {
            $this->SystemChildRules = [];
            foreach ($param["SystemChildRules"] as $key => $value){
                $obj = new AbnormalProcessSystemChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->SystemChildRules, $obj);
            }
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
