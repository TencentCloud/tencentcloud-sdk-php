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
 * 运行时安全，策略基本信息
 *
 * @method boolean getIsDefault() 获取true: 默认策略，false:自定义策略
 * @method void setIsDefault(boolean $IsDefault) 设置true: 默认策略，false:自定义策略
 * @method integer getEffectImageCount() 获取策略生效镜像数量
 * @method void setEffectImageCount(integer $EffectImageCount) 设置策略生效镜像数量
 * @method string getRuleId() 获取策略Id
 * @method void setRuleId(string $RuleId) 设置策略Id
 * @method string getUpdateTime() 获取策略更新时间, 存在为空的情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置策略更新时间, 存在为空的情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取策略名字
 * @method void setRuleName(string $RuleName) 设置策略名字
 * @method string getEditUserName() 获取编辑用户名称
 * @method void setEditUserName(string $EditUserName) 设置编辑用户名称
 * @method boolean getIsEnable() 获取true: 策略启用，false：策略禁用
 * @method void setIsEnable(boolean $IsEnable) 设置true: 策略启用，false：策略禁用
 */
class RuleBaseInfo extends AbstractModel
{
    /**
     * @var boolean true: 默认策略，false:自定义策略
     */
    public $IsDefault;

    /**
     * @var integer 策略生效镜像数量
     */
    public $EffectImageCount;

    /**
     * @var string 策略Id
     */
    public $RuleId;

    /**
     * @var string 策略更新时间, 存在为空的情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 策略名字
     */
    public $RuleName;

    /**
     * @var string 编辑用户名称
     */
    public $EditUserName;

    /**
     * @var boolean true: 策略启用，false：策略禁用
     */
    public $IsEnable;

    /**
     * @param boolean $IsDefault true: 默认策略，false:自定义策略
     * @param integer $EffectImageCount 策略生效镜像数量
     * @param string $RuleId 策略Id
     * @param string $UpdateTime 策略更新时间, 存在为空的情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 策略名字
     * @param string $EditUserName 编辑用户名称
     * @param boolean $IsEnable true: 策略启用，false：策略禁用
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
        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("EditUserName",$param) and $param["EditUserName"] !== null) {
            $this->EditUserName = $param["EditUserName"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }
    }
}
